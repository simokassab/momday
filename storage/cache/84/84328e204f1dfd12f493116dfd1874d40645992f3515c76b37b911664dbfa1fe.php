<?php

/* journal2/template/journal2/assets/css.twig */
class __TwigTemplate_0ffc69a8f0beabec71c41c380425acf0d631c7f071c7c7f987da45923b913596 extends Twig_Template
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
        echo "/* Control Panel Settings */";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectors"]) ? $context["selectors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["selector"]) {
            // line 3
            if ($this->getAttribute($context["selector"], "properties", array())) {
                // line 4
                echo $this->getAttribute($context["selector"], "selector", array());
                echo " {";
                echo twig_join_filter($this->getAttribute($context["selector"], "properties", array()), ";");
                echo " }";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
/* Swipebox Loader */";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method")) {
            // line 10
            echo "  #swipebox-slider .slide {
  background-image: url('image/";
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  }
  .mfp-iframe-scaler iframe {
  background-image: url('image/";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  background-repeat: no-repeat;
  background-position: center;
  }
  .social {
  background-image: url('image/";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  }";
        }
        // line 22
        echo "
@media only screen and (min-width: 760px){
.ui-pnotify{
width:";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_width", 1 => 350), "method");
        echo "px !important;
}
}";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "leading_element"), "method")) {
            // line 30
            echo "  .home-page #container:before{
  content: url('image/";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "leading_element"), "method");
            echo "');
  }";
        }
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position"), "method") == "right")) {
            // line 36
            echo "  .quickview .product-info .heading-title{
  display:none;
  }";
        }
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_qty_status", 1 => "on"), "method") == "off")) {
            // line 43
            echo "  .product-info .right .cart div .qty{
  display:none;
  }
  .product-info .right .cart div .button{
  width:100%;
  }
  .quickview #button-cart {
  width: calc(98% - 40px);
  }";
        }
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_cart", 1 => "off"), "method") == "on")) {
            // line 55
            echo "  .journal-cart{
  display:none;
  }";
        }
        // line 59
        echo "
/* Site width */
#container, #header, #footer, .bottom-footer > div, .bottom-footer.boxed-bar {
max-width:";
        // line 62
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}";
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_status", 1 => "block"), "method") == "none")) {
            // line 67
            echo "  ul.breadcrumb,
  .extended-container::before{
  display:none !important;
  }";
        }
        // line 74
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_caption", 1 => "on"), "method") == "off")) {
            // line 75
            echo "  div.lg-sub-html{
  top:0;
  bottom:auto;
  background-color:";
            // line 78
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_bars_bg"), "method");
            echo ";
  }
  .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
  bottom:auto;
  }
  .lg-toolbar{
  background-color:transparent;
  }";
        }
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_bottom_caption", 1 => "on"), "method") == "off")) {
            // line 89
            echo "  .product-page div.lg-sub-html{
  top:0;
  bottom:auto;
  padding: 13px 95px 13px 70px;
  background-color:";
            // line 93
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_bars_bg"), "method");
            echo ";
  }
  .product-page .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
  bottom:auto;
  }
  .product-page .lg-toolbar{
  background-color:transparent;
  }";
        }
        // line 103
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_bottom_caption", 1 => "on"), "method") == "on")) {
            // line 104
            echo "  .product-page div.lg-sub-html{
  top:auto;
  bottom:0;
  padding: 13px 70px;
  background-color:";
            // line 108
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_caption_bar_bg"), "method");
            echo ";
  }
  .product-page .lg-toolbar{
  background-color:";
            // line 111
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_bars_bg"), "method");
            echo ";
  }";
        }
        // line 115
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_sold_count_position", 1 => "none"), "method") == "inline-block")) {
            // line 116
            echo "  .product-sold-count.ps-left{
  display:none;
  }";
        }
        // line 121
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_overflow", 1 => "on"), "method") == "off")) {
            // line 122
            echo "  .product-page .heading-title{
  white-space:normal;
  height:auto;
  min-height:40px;
  line-height:1.2;
  padding-bottom:10px;
  padding-top:10px;
  }";
        }
        // line 132
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_page_title_overflow", 1 => "on"), "method") == "off")) {
            // line 133
            echo "  .category-page .heading-title{
  white-space:normal;
  height:auto;
  min-height:40px;
  line-height:1.2;
  padding-bottom:10px;
  padding-top:10px;
  }";
        }
        // line 144
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_category_image", 1 => "1"), "method") == "0")) {
            // line 145
            echo "  .category-info .image{
  display:none;
  }";
        }
        // line 149
        echo "

/*Notification Position*/";
        // line 153
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-left")) {
            // line 154
            echo "  .ui-pnotify{
  left:20px;
  }
  html[dir=\"rtl\"] .ui-pnotify{
  right:20px;
  left:auto;
  }";
        }
        // line 163
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-center")) {
            // line 164
            echo "  .ui-pnotify{
  left:50%;
  transform: translateX(-50%);
  }";
        }
        // line 170
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-right")) {
            // line 171
            echo "  .ui-pnotify{
  right:20px;
  }
  html[dir=\"rtl\"] .ui-pnotify{
  left:20px;
  right:auto;
  }";
        }
        // line 180
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "center")) {
            // line 181
            echo "  .ui-pnotify{
  left:50%;
  top:50% !important;
  transform: translate(-50%, -50%);
  }
  html[dir=\"rtl\"] .ui-pnotify{
  right:auto !important;
  }";
        }
        // line 191
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_shadow", 1 => "0"), "method") == "1")) {
            // line 192
            echo "  .ui-pnotify{
  box-shadow:0px 1px 12px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 199
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "hover")) {
            // line 200
            echo "  .ui-pnotify:hover .ui-pnotify-closer{
  opacity:1;
  }";
        }
        // line 204
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "always")) {
            // line 205
            echo "  .ui-pnotify-closer{
  opacity:1;
  }";
        }
        // line 209
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "never")) {
            // line 210
            echo "  .ui-pnotify-closer:hover{
  display:none;
  }";
        }
        // line 216
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "left")) {
            // line 217
            echo "  .breadcrumb{
  text-align:left;
  }";
        }
        // line 222
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "center")) {
            // line 223
            echo "  .breadcrumb{
  text-align:center
  }
  html[dir=\"rtl\"] .breadcrumb{
  text-align:center;
  }";
        }
        // line 231
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "right")) {
            // line 232
            echo "  .breadcrumb{
  text-align:right;
  }
  html[dir=\"rtl\"] .breadcrumb{
  text-align:left;
  }";
        }
        // line 239
        echo "

/* Product Grid Shadow */";
        // line 243
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 244
            echo "  .product-grid-item:hover .product-wrapper{
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);
  }";
        }
        // line 249
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 250
            echo "  .product-grid-item  .product-wrapper{
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);
  }";
        }
        // line 256
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 257
            echo "  .product-grid-item  .product-wrapper{
  box-shadow:";
            // line 258
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 262
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 263
            echo "  .product-grid-item:hover .product-wrapper{
  box-shadow:";
            // line 264
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 269
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 270
            echo "  .journal-carousel .product-grid-item:hover .product-wrapper{
  box-shadow:";
            // line 271
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 275
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 276
            echo "  .journal-carousel .product-grid-item .product-wrapper{
  box-shadow:";
            // line 277
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 281
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "none")) {
            // line 282
            echo "  .journal-carousel .product-grid-item .product-wrapper{
  box-shadow: none !important;
  }";
        }
        // line 289
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 290
            echo "  .custom-sections .product-grid-item .product-wrapper:hover{
  box-shadow:";
            // line 291
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 295
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 296
            echo "  .custom-sections .product-grid-item .product-wrapper{
  box-shadow:";
            // line 297
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 301
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "none")) {
            // line 302
            echo "    .custom-sections .product-grid-item .product-wrapper{
    box-shadow: none !important;
    }";
        }
        // line 310
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_latest_label_status", 1 => "block"), "method") == "none")) {
            // line 311
            echo "    .product-grid-item .image .label-latest + .label-sale{
    top: 5px;
    margin-top: 0;
    }";
        }
        // line 317
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_on_tablet", 1 => "on"), "method") == "off")) {
            // line 318
            echo "    @media only screen and (min-width : 760px) and (max-width: 1024px) {
    #column-left{
    display: none;
    }
    #column-left + #content,
    #column-left + #column-right + #content {
    margin-left:0 !important;
    }
    }";
        }
        // line 329
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_on_tablet", 1 => "on"), "method") == "off")) {
            // line 330
            echo "    @media only screen and (min-width : 760px) and (max-width: 1024px) {
    #column-right{
    display: none;
    }
    #column-right + #content,
    #column-left + #column-right + #content {
    margin-right:0 !important;
    }
    }";
        }
        // line 342
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 343
            echo "    .product-grid-item .cart .button-left-icon:before{
    display:none;
    }";
        }
        // line 347
        echo "
.product-grid-item .enquiry-button .button i{
color:";
        // line 349
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon:color"), "method");
        echo ";
}
.product-list-item .enquiry-button .button i{
color:";
        // line 352
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon:color"), "method");
        echo ";
}

footer .contacts > div > span .contact-icon:hover{
background-color:";
        // line 356
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "contacts_icon_bg_hover"), "method");
        echo ";
}";
        // line 360
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 361
            echo "  .product-grid-item .cart .button-left-icon:before{
  float:none;
  }
  .product-grid-item .cart .button-right-icon:before{
  margin-left:0;
  }
  .product-grid-item .cart .button-cart-text{
  display:none;
  }
  .product-grid-item .cart .button[data-hint]:after,
  .product-grid-item .cart .hint--top:before{
  display:block;
  }
  .product-grid-item .cart .hint--top:before{
  border-top-color:";
            // line 375
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .cart .hint--right:before{
  border-right-color:";
            // line 378
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .cart .hint--left:before{
  border-left-color:";
            // line 381
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }";
        }
        // line 385
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 386
            echo "  .product-grid-item .cart .button-left-icon::before,
  .product-grid-item .enquiry-button i::before{
  margin-right: 6px;
  }";
        }
        // line 392
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 393
            echo "  .product-grid-item .cart .button-right-icon{
  display:none !important;
  }";
        }
        // line 398
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 399
            echo "  .product-grid-item .cart .button-left-icon{
  display:none !important;
  }
  .button-right-icon:before{
  margin-left: 6px;
  }";
        }
        // line 406
        echo "

/* BLOG */";
        // line 410
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_icon_position", 1 => "left"), "method") == "right") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_button_icon_position", 1 => "left"), "method") == "right"))) {
            // line 411
            echo "  .post-button-left-icon{
  display:none;
  }
  .post-button-right-icon{
  display:inline;
  }";
        }
        // line 419
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_title_status", 1 => "on"), "method") == "off")) {
            // line 420
            echo "  .one-page-checkout h1.heading-title{
  display:none;
  }";
        }
        // line 425
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "none")) {
            // line 426
            echo "  .post-wrapper{
  box-shadow: none;
  }";
        }
        // line 431
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 432
            echo "  .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 437
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 438
            echo "  .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 443
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 444
            echo "  .post-wrapper:hover{
  box-shadow:";
            // line 445
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 449
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 450
            echo "  .post-wrapper{
  box-shadow:";
            // line 451
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 456
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "none")) {
            // line 457
            echo "  .post-item .post-wrapper{
  box-shadow: none !important;
  }";
        }
        // line 462
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 463
            echo "  .post-item .post-wrapper{
  box-shadow: none;
  }
  .post-item .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 471
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 472
            echo "  .post-item .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 477
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 478
            echo "  .post-item .post-wrapper{
  box-shadow: none;
  }
  .post-item .post-wrapper:hover{
  box-shadow:";
            // line 482
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 486
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 487
            echo "  .post-item .post-wrapper{
  box-shadow:";
            // line 488
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 494
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "none")) {
            // line 495
            echo "  .blog-list-view .post-wrapper{
  box-shadow: none !important;
  }";
        }
        // line 500
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 501
            echo "  .blog-list-view .post-wrapper{
  box-shadow:none;
  }
  .blog-list-view .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 509
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 510
            echo "  .blog-list-view .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }";
        }
        // line 515
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 516
            echo "  .blog-list-view .post-wrapper{
  box-shadow:none;
  }
  .blog-list-view .post-wrapper:hover{
  box-shadow:";
            // line 520
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 524
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 525
            echo "  .blog-list-view .post-wrapper{
  box-shadow:";
            // line 526
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_custom"), "method");
            echo ";
  }";
        }
        // line 531
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_details_tip", 1 => "always"), "method") == "hover")) {
            // line 532
            echo "  .product-details:before {
  visibility:hidden;
  opacity:0;
  transition: all 0.2s;
  }
  .product-grid-item:hover .product-details:before {
  visibility:visible;
  opacity:1;
  }";
        }
        // line 543
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_details_tip", 1 => "always"), "method") == "never")) {
            // line 544
            echo "  .product-details:before {
  display:none;
  }";
        }
        // line 548
        echo "

/* Product Grid Quickview*/";
        // line 552
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "hover")) {
            // line 553
            echo "  .product-grid-item:hover .quickview-button {
  opacity: 1;
  visibility: visible;
  }";
        }
        // line 559
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "always")) {
            // line 560
            echo "  .product-grid-item .quickview-button {
  opacity: 1;
  visibility: visible;
  }";
        }
        // line 566
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "never")) {
            // line 567
            echo "  .product-grid-item .quickview-button {
  display:none;
  }";
        }
        // line 573
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "hover"))) {
            // line 574
            echo "  .product-grid-item:hover .rating{
  margin-top:-28px;
  transition: all 0.1s ease-out;
  }";
        }
        // line 580
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "always"))) {
            // line 581
            echo "  .product-grid-item .rating{
  margin-top:-28px;
  }";
        }
        // line 586
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 587
            echo "  .product-grid-item .quickview-button .button-right-icon{
  display:none;
  }";
        }
        // line 592
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 593
            echo "  .product-grid-item .quickview-button .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 6px;
  }";
        }
        // line 601
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 602
            echo "  .product-grid-item .quickview-button .button-left-icon:before,
  .product-grid-item .quickview-button .button-right-icon:before{
  display:none;
  }";
        }
        // line 608
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 609
            echo "  .product-grid-item .quickview-button .button-left-icon:before{
  float:none;
  }
  .product-grid-item .quickview-button .button-right-icon:before{
  margin-left:0;
  }
  .product-grid-item .quickview-button .button-cart-text{
  display:none;
  }
  .product-grid-item .quickview-button [data-hint]:after,
  .product-grid-item .quickview-button .hint--top:before{
  display:block;
  }
  .product-grid-item .quickview-button .hint--top:before{
  border-top-color:";
            // line 623
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .quickview-button .hint--right:before{
  border-right-color:";
            // line 626
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .quickview-button .hint--left:before{
  border-left-color:";
            // line 629
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }";
        }
        // line 633
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 634
            echo "  .product-grid-item .quickview-button .button-left-icon:before{
  margin-right: 6px;
  }";
        }
        // line 638
        echo "

/* Product Grid Wishlist/Compare */";
        // line 642
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "text")) {
            // line 643
            echo "  .product-grid-item .wishlist a i,
  .product-grid-item .compare a i{
  display:none;
  }";
        }
        // line 649
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "icon")) {
            // line 650
            echo "  .product-grid-item .button-wishlist-text,
  .product-grid-item .button-compare-text{
  display: none;
  }
  .product-grid-item .wishlist [data-hint]:after,
  .product-grid-item .wishlist .hint--top:before,
  .product-grid-item .compare [data-hint]:after,
  .product-grid-item .compare .hint--top:before{
  display:block;
  }

  .product-grid-item .wishlist .hint--top:before,
  .product-grid-item .compare .hint--top:before{
  border-top-color:";
            // line 663
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
  .product-grid-item .wishlist .hint--right:before,
  .product-grid-item .compare .hint--right:before{
  border-right-color:";
            // line 667
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
  .product-grid-item .wishlist .hint--left:before,
  .product-grid-item .compare .hint--left:before{
  border-left-color:";
            // line 671
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }";
        }
        // line 675
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "both")) {
            // line 676
            echo "  .product-grid-item .wishlist a i,
  .product-grid-item .compare a i{
  border:0;
  background-color:transparent !important;
  padding:0 5px;
  }
  .product-grid-item .wishlist a i:before,
  .product-grid-item .compare a i:before{
  line-height:100%;
  }";
        }
        // line 689
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "icon"), "method") == "icon"))) {
            // line 690
            echo "  .product-grid-item .product-details .wishlist,
  .product-grid-item .product-details .compare,
  .product-list-item .image .wishlist,
  .product-list-item .image .compare,
  .product-grid-item .image .button-wishlist-text,
  .product-grid-item .image .button-compare-text{
  display:none !important;
  }";
        }
        // line 702
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_on_hover", 1 => "on"), "method") == "on") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "image")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => ""), "method") == "icon"))) {
            // line 703
            echo "  .product-grid-item .image .wishlist,
  .product-grid-item .image .compare{
  visibility:hidden;
  opacity:0;
  }
  .product-grid-item:hover .image .wishlist,
  .product-grid-item:hover .image .compare{
  visibility:visible;
  opacity:1;
  }";
        }
        // line 716
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 717
            echo "  .product-list-item .cart .button{
  width:";
            // line 718
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_width_px"), "method");
            echo "px;
  height:";
            // line 719
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 720
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_height_px"), "method");
            echo "px;
  padding:0;
  }";
        }
        // line 725
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 726
            echo "  .product-list-item .quickview-button .button{
  width:";
            // line 727
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_width_px"), "method");
            echo "px;
  height:";
            // line 728
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 729
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_height_px"), "method");
            echo "px;
  padding:0;
  }";
        }
        // line 736
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 737
            echo "  .product-grid-item .cart .button{
  width:";
            // line 738
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_width_px"), "method");
            echo "px;
  height:";
            // line 739
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 740
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  padding:0;
  }
  .product-grid-item .cart{
  height:";
            // line 744
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  }";
        }
        // line 748
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 749
            echo "  .product-grid-item .quickview-button .button{
  width:";
            // line 750
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_width_px"), "method");
            echo "px;
  height:";
            // line 751
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 752
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_height_px"), "method");
            echo "px;
  padding:0;
  }";
        }
        // line 756
        echo "

/* Product List */";
        // line 760
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "hover")) {
            // line 761
            echo "  .product-list-item:hover{
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  }";
        }
        // line 766
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "always")) {
            // line 767
            echo "  .product-list-item{
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  }";
        }
        // line 772
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "never")) {
            // line 773
            echo "  .product-list-item{
  box-shadow: none;
  }";
        }
        // line 780
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 781
            echo "  .product-list-item .cart .button-left-icon:before{
  display:none;
  }";
        }
        // line 786
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 787
            echo "  .product-list-item .cart .button-left-icon:before{
  float:none;
  }
  .product-list-item .cart .button-right-icon:before{
  margin-left:0;
  }
  .product-list-item .cart .button-cart-text{
  display:none;
  }
  .product-list-item .cart .button[data-hint]:after,
  .product-list-item .cart .hint--top:before{
  display:block;
  }
  .product-list-item .cart .hint--top:before{
  border-top-color:";
            // line 801
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .cart .hint--right:before{
  border-right-color:";
            // line 804
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .cart .hint--left:before{
  border-left-color:";
            // line 807
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }";
        }
        // line 811
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 812
            echo "  .product-list-item .cart .button-left-icon:before,
  .product-list-item .enquiry-button i:before{
  margin-right: 8px;
  }";
        }
        // line 818
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 819
            echo "  .product-list-item .cart .button-right-icon{
  display:none;
  }";
        }
        // line 824
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 825
            echo "  .product-list-item .cart .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 8px;
  }";
        }
        // line 832
        echo "

/* Product List Quickview*/";
        // line 835
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "hover")) {
            // line 836
            echo "  .product-list-item:hover .quickview-button {
  opacity: 1;
  visibility: visible;
  }";
        }
        // line 842
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "always")) {
            // line 843
            echo "  .product-list-item .quickview-button {
  opacity: 1;
  visibility: visible;
  }";
        }
        // line 849
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "never")) {
            // line 850
            echo "  .product-list-item .quickview-button {
  display:none;
  }";
        }
        // line 855
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 856
            echo "  .product-list-item .quickview-button .button-right-icon{
  display:none;
  }";
        }
        // line 861
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 862
            echo "  .product-list-item .quickview-button .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 8px;
  }";
        }
        // line 870
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 871
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  display:none;
  }";
        }
        // line 876
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 877
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  float:none;
  }
  .product-list-item .quickview-button .button-right-icon:before{
  margin-left:0;
  }
  .product-list-item .quickview-button .button-cart-text{
  display:none;
  }
  .product-list-item .quickview-button .button[data-hint]:after,
  .product-list-item .quickview-button .hint--top:before{
  display:block;
  }
  .product-list-item .quickview-button .hint--top:before{
  border-top-color:";
            // line 891
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .quickview-button .hint--right:before{
  border-right-color:";
            // line 894
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .quickview-button .hint--left:before{
  border-left-color:";
            // line 897
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }";
        }
        // line 901
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 902
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  margin-right: 8px;
  }";
        }
        // line 906
        echo "

/* Product Page */

#product-gallery.image-additional-grid a{
width:";
        // line 911
        echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
        echo "%;
}";
        // line 914
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel", 1 => "1"), "method") == "0")) {
            // line 915
            echo "  .product-info .left .image-additional{
  margin-right: -";
            // line 916
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing"), "method");
            echo "px;
  }";
        }
        // line 920
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 921
            echo "  #button-cart .button-cart-text:after{
  display:none;
  }";
        }
        // line 926
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 927
            echo "  #button-cart .button-cart-text:before{
  display:none;
  }";
        }
        // line 932
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows", 1 => "hover"), "method") == "hover")) {
            // line 933
            echo "  .product-info .left .image-additional .swiper-button-prev,
  .product-info .left .image-additional .swiper-button-next{
  display:none;
  }
  .product-info .left .image-additional:hover .swiper-button-prev,
  .product-info .left .image-additional:hover .swiper-button-next{
  display:block;
  }";
        }
        // line 943
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_header", 1 => "0"), "method") == "1") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_header_above", 1 => "on"), "method") == "off"))) {
            // line 944
            echo "  @media only screen and (min-width: 980px){
  #top-modules > div:first-of-type.journal2_slider{
  margin-top:-";
            // line 946
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_top_spacing"), "method") + 120);
            echo "px;
  position:relative;
  }
  }";
        }
        // line 951
        echo "
.compare-info td{
border-right-style:";
        // line 953
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
table.list{
border-bottom-style:";
        // line 956
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
border-left-style:";
        // line 957
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
table.list td{
border-right-style:";
        // line 960
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
border-top-style:";
        // line 961
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}


/* Product Labels*/

.label-latest + .label-sale{
top:";
        // line 968
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_height"), "method");
        echo "px;
}";
        // line 971
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_status", 1 => "always"), "method") == "hover")) {
            // line 972
            echo "  .label-latest{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-latest, .product-list-item:hover .label-latest, .product-info .image:hover .label-latest{
  visibility:visible;
  opacity:1;
  }";
        }
        // line 981
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_status", 1 => "always"), "method") == "never")) {
            // line 982
            echo "  .label-latest{
  display:none !important;
  }";
        }
        // line 986
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_special_status", 1 => "always"), "method") == "hover")) {
            // line 987
            echo "  .label-sale{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-sale, .product-list-item:hover .label-sale, .product-info .image:hover .label-sale{
  visibility:visible;
  opacity:1;
  }";
        }
        // line 998
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_status", 1 => "always"), "method") == "hover")) {
            // line 999
            echo "  .label-outofstock{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-outofstock, .product-list-item:hover .label-outofstock, .product-info .image:hover .label-outofstock{
  visibility:visible;
  opacity:1;
  }";
        }
        // line 1009
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_status", 1 => "always"), "method") == "never")) {
            // line 1010
            echo "  .label-outofstock{
  display:none !important;
  }";
        }
        // line 1015
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_style", 1 => "diagonal"), "method") == "normal")) {
            // line 1016
            echo "  span.label-outofstock {
  padding: .4em .55em .3em;
  transform: translate(5px, 5px) rotate(0deg);
  min-width:inherit;
  }
  html[dir=\"rtl\"] span.label-outofstock {
  padding: .4em .55em .3em;
  transform: translate(-5px, 5px) rotate(0deg);
  min-width:inherit;
  }";
        }
        // line 1029
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_latest_label_status", 1 => "block"), "method") == "none")) {
            // line 1030
            echo "  .product-list-item .image .label-latest + .label-sale{
  top: 5px;
  margin-top: 0;
  }";
        }
        // line 1035
        echo "
#more-details.hint--top:before{
border-top-color:";
        // line 1037
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_tip_bg"), "method");
        echo ";
}

.boxed-header header{
max-width:";
        // line 1041
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
}
.boxed-header .super-menu > li:first-of-type{
border-left-width:0;
}
.boxed-header .super-menu > li:last-of-type{
border-right-width:0;
}";
        // line 1050
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_menu_off", 1 => "1"), "method") == "0")) {
            // line 1051
            echo "  @media only screen and (min-width: 760px){
  .boxed-header .is-sticky header .header{
  max-width:";
            // line 1053
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
            echo "px;
  left: 50%;
  transform: translateX(-50%);
  }
  }
  .is-sticky .header {
  box-shadow: none;
  background: transparent;
  }
  .is-sticky .journal-menu-bg {
  background-color:transparent;
  background-image:none;
  }";
        }
        // line 1069
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_name_overflow", 1 => "on"), "method") == "off")) {
            // line 1070
            echo "  div.lg-sub-html > span{
  white-space:normal;
  }
  div.lg-sub-html {
  padding: 20px;
  }";
        }
        // line 1077
        echo "
@media only screen and (max-width: 760px){
.journal-language .dropdown-toggle,
.journal-currency .dropdown-toggle{
color:";
        // line 1081
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "full_text_font_phone"), "method");
        echo ";
}
.journal-header-center #language,
.journal-header-center #currency{
border-color:";
        // line 1085
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "lang_divider_phone"), "method");
        echo ";
}
}

.sticky-menu .is-sticky .journal-header-default .header{
background-color:";
        // line 1090
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_bg_color"), "method");
        echo ";
}";
        // line 1093
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "block"), "method") == "none")) {
            // line 1094
            echo "  .phone-input label::before{
  display:none;
  }";
        }
        // line 1099
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_show_phone", 1 => "block"), "method") == "none"))) {
            // line 1100
            echo "  #content.one-page-checkout div fieldset > div.phone-input{
  display:none !important;
  }";
        }
        // line 1104
        echo "
html[dir=\"rtl\"] .journal-carousel .htabs a:last-of-type{
border-left-color:";
        // line 1106
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_title_divider"), "method");
        echo ";
}

.boxed-header .journal-header-center .journal-links{
padding-left: 10px;
}
.boxed-header .journal-header-center .journal-search{
padding-left: 20px;
}
.boxed-header .journal-header-center .journal-secondary{
padding-right: 10px;
}";
        // line 1120
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_header_shadow", 1 => "none"), "method") == "none")) {
            // line 1121
            echo "  #cart{
  box-shadow:none;
  }";
        }
        // line 1125
        echo "
.journal-header-center .journal-center-bg{
top:";
        // line 1127
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}";
        // line 1130
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_header_shadow", 1 => "none"), "method") == "default")) {
            // line 1131
            echo "  #cart {
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
  }";
        }
        // line 1137
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_shadow", 1 => "none"), "method") == "none")) {
            // line 1138
            echo "  #cart .cart-wrapper{
  box-shadow:none;
  }";
        }
        // line 1143
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_shadow", 1 => "none"), "method") == "default")) {
            // line 1144
            echo "  #cart .cart-wrapper {
  box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);
  }";
        }
        // line 1150
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_shadow", 1 => "none"), "method") == "none")) {
            // line 1151
            echo "  #search input{
  box-shadow:none;
  }";
        }
        // line 1156
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_shadow", 1 => "none"), "method") == "default")) {
            // line 1157
            echo "  #search input{
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
  }";
        }
        // line 1162
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autosuggest_shadow", 1 => "none"), "method") == "none")) {
            // line 1163
            echo "  .autocomplete2-suggestions{
  box-shadow:none;
  }";
        }
        // line 1168
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autosuggest_shadow", 1 => "none"), "method") == "default")) {
            // line 1169
            echo "  .autocomplete2-suggestions{
  box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);
  }";
        }
        // line 1173
        echo "

@media only screen and (max-width: 760px) {
ul.super-menu > li > a,
ul.super-menu > li:hover > a{
color:";
        // line 1178
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_color_phone"), "method");
        echo ";
}
ul.super-menu > li,
ul.super-menu > li:hover{
background-color:";
        // line 1182
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_bg_phone"), "method");
        echo ";
}
.boxed-header .journal-header-center .journal-search,
.boxed-header .journal-header-center .journal-links{
padding-left: 0;
}
.boxed-header .journal-header-center .journal-cart,
.boxed-header .journal-header-center .journal-secondary{
padding-right: 0;
}
.button-search{
background-color:";
        // line 1193
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_button_bg_mobile"), "method");
        echo ";
}
.button-search i:before{
color:";
        // line 1196
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_icon_color_mobile"), "method");
        echo " !important;
}
}";
        // line 1201
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_compare", 1 => "inline-block"), "method") == "inline-block")) {
            // line 1202
            echo "  .product-filter .product-compare {
  display: flex;
  }";
        }
        // line 1207
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_compare_link_status", 1 => "on"), "method") == "off")) {
            // line 1208
            echo "  .product-filter .product-compare{
  display:none;
  }";
        }
        // line 1212
        echo "

@media only screen and (max-width: 980px) {
.mobile-menu-on-tablet ul.super-menu > li > a,
.mobile-menu-on-tablet ul.super-menu > li:hover > a{
color:";
        // line 1217
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_color_phone"), "method");
        echo ";
}
.mobile-menu-on-tablet ul.super-menu > li,
.mobile-menu-on-tablet ul.super-menu > li:hover{
background-color:";
        // line 1221
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_bg_phone"), "method");
        echo ";
}
}";
        // line 1225
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design"), "method") == "1")) {
            // line 1226
            echo "  @media only screen and (min-width:760px) and (max-width:";
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
            echo "px) {
  .journal-header-center .journal-search{
  padding-left: 15px;
  }
  .journal-header-center .journal-cart{
  padding-right: 15px;
  }
  .journal-header-center .journal-cart{
  width:calc(25% - 20px);
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-header-center .journal-search{
  padding-right: 15px;
  }
  }
  @media only screen and (max-width:760px) {
  .journal-header-center .journal-search,
  html[dir=\"rtl\"] .journal-header-center .journal-search{
  padding-left: 0;
  padding-right: 0;
  }
  .journal-header-center .journal-cart,
  html[dir=\"rtl\"] .journal-header-center .journal-cart{
  padding-right: 0;
  padding-left: 0;
  }
  }";
        }
        // line 1254
        echo "

@media only screen and (min-width: 760px){
.boxed-header .journal-header-center .journal-cart{
padding-right:15px;
}
html[dir=\"rtl\"] .boxed-header .journal-header-center .journal-cart{
padding-right:0;
padding-left:15px;
}
}

@media only screen and (min-width:";
        // line 1266
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px) {
.sticky-menu:not(.boxed-header) .is-sticky .journal-header-compact #header .journal-menu .super-menu > li:first-of-type > a {
margin-left: 0;
}
.skin-16 .journal-header-mega .journal-search {
padding-right: 0;
}
}

@media only screen and (max-width:";
        // line 1275
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.super-menu, .mega-menu, .html-menu{
border-radius:0;
}
.bottom-footer.fullwidth-bar .copyright{
padding-left: 15px;
}
.bottom-footer.fullwidth-bar .payments{
padding-right: 15px;
}

#top-modules > div:not(.gutter),
#bottom-modules > div:not(.gutter){
padding-left: 20px;
padding-right: 20px;
}

#top-modules .journal2_slider,
#bottom-modules .journal2_slider,
#top-modules .journal2_headline_rotator{
padding-left: 0 !important;
padding-right: 0 !important;
}

.no-secondary .journal-header-center #currency{
border-right-width:0;
}
.no-secondary .journal-header-center #language{
border-left-width:0;
}
html[dir=\"rtl\"].no-secondary .journal-header-center #currency{
border-left-width:0;
border-right-width:1px;
}
html[dir=\"rtl\"].no-secondary .journal-header-center #language{
border-right-width:0;
border-left-width:1px;
}
.journal-header-compact #header .journal-search {
padding-right:15px !important;
}
html[dir=\"rtl\"] .journal-header-compact #header .journal-search {
padding-right:0 !important;
padding-left:15px !important;
}
.sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:first-of-type{
border-left-width:0;
}
.sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:last-of-type{
border-right-width:0;
}
.boxed-header body{
padding:0;
}
.fullwidth-footer .columns{
padding-left: 15px;
}
.copyright{
padding-left: 15px;
}
.journal-header-mega .journal-logo{
padding-left:15px;
}
html[dir=\"rtl\"] .journal-header-mega .journal-logo{
padding-left:0;
padding-right:15px;
}
}

@media only screen and (max-width: 760px){
.journal-header-mega .journal-logo{
padding-left:0;
}
html[dir=\"rtl\"] .journal-header-mega .journal-logo{
padding-left:0;
padding-right:0;
}
}

.boxed-header .journal-header-mega .journal-logo{
padding-left:15px;
}
html[dir=\"rtl\"].boxed-header .journal-header-mega .journal-logo{
padding-left:0;
padding-right:15px;
}

@media only screen and (min-width : 760px) {
.side-blocks-active .journal-fullwidth-slider .tp-leftarrow,
.side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {
left: 60px !important;
}
.side-blocks-active .journal-fullwidth-slider .tp-rightarrow,
.side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {
right: 60px !important;
}
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow,
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {
right: 60px !important;
left: auto !important;
}
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow,
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {
left: 60px !important;
right: auto !important;
}
}";
        // line 1383
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details", 1 => "1"), "method") == "0")) {
            // line 1384
            echo "  .quickview #more-details{
  display:none;
  }
  .quickview #button-cart{
  width:63%;
  }";
        }
        // line 1393
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_header_align_2", 1 => "center"), "method") == "left")) {
            // line 1394
            echo "  @media only screen and (min-width: 760px){
  .journal-header-mega #logo a img{
  left: 0;
  transform: translate(0, -50%);
  }
  }";
        }
        // line 1402
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_header_align_2", 1 => "center"), "method") == "left")) {
            // line 1403
            echo "  @media only screen and (min-width: 760px){
  html[dir=\"rtl\"] .journal-header-mega #logo a img{
  left: auto;
  right:0;
  }
  }";
        }
        // line 1411
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_shadow", 1 => "none"), "method") == "none")) {
            // line 1412
            echo "  header .links a,
  header .links .no-link{
  border-bottom-color:#e4e4e4;
  }";
        }
        // line 1417
        echo "
.boxed-header.default-header .journal-top-header{
clip: rect(0px,";
        // line 1419
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px,45px,0px);
}

.journal-header-default .links .no-link{
border-color:";
        // line 1423
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo "
}

.journal-header-center #cart .content:before,
.oc2 #cart .content .cart-wrapper:before{
color:";
        // line 1428
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_bg"), "method");
        echo "
}

.journal-header-center .autocomplete2-suggestions:before{
color:";
        // line 1432
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "autosuggest_bg"), "method");
        echo "
}";
        // line 1435
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_icons_display", 1 => "inline"), "method") == "block")) {
            // line 1436
            echo "  header .links a i,
  .links .no-link i,
  .journal-header-default #header .journal-links .top-menu > li > a{
  display:block;
  }
  header .links a i,
  .links .no-link i{
  margin-top:3px;
  }
  header .links .top-menu-link{
  position:relative;
  top:-2px;
  }
  .has-dropdown::after {
  margin-left: 2px;
  top: -3px;
  }";
        }
        // line 1454
        echo "
.journal-language .dropdown-menu:before,
.journal-currency .dropdown-menu:before{
color:";
        // line 1457
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "lang_drop_bg"), "method");
        echo "
}

#header .top-menu .top-dropdown li:first-of-type {
border-top-left-radius:";
        // line 1461
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
border-top-right-radius:";
        // line 1462
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
}
#header .top-menu .top-dropdown li:last-of-type {
border-bottom-left-radius:";
        // line 1465
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
border-bottom-right-radius:";
        // line 1466
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
}
#header .top-menu .top-dropdown li:first-of-type::before{
color:";
        // line 1469
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo "
}

#search ::-webkit-input-placeholder {
color:";
        // line 1473
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search :-moz-placeholder {
color:";
        // line 1477
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search ::-moz-placeholder {
color:";
        // line 1481
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search :-ms-input-placeholder {
color:";
        // line 1485
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
.compare-info tbody td{
border-left-style:";
        // line 1489
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
@media only screen and (max-width: 760px){
#search ::-webkit-input-placeholder {
color:";
        // line 1493
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search :-moz-placeholder {
color:";
        // line 1497
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search ::-moz-placeholder {
color:";
        // line 1501
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search :-ms-input-placeholder {
color:";
        // line 1505
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
}

.button-search{
border-right-style:";
        // line 1511
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
        echo ";
border-right-color:";
        // line 1512
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}
html[dir=\"rtl\"] .button-search{
border-left-style:";
        // line 1515
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
        echo ";
border-left-color:";
        // line 1516
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-left{
border-left-style:";
        // line 1520
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}";
        // line 1523
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_divider_phone", 1 => "off"), "method") == "on")) {
            // line 1524
            echo "  @media only screen and (max-width: 760px){
  .center-header #search, .default-header #search{
  border-top-width:1px;
  border-top-style:";
            // line 1527
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-top-color:";
            // line 1528
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
  }";
        }
        // line 1533
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_button_pos", 1 => "left"), "method") == "right")) {
            // line 1534
            echo "  .button-search {
  right: 0;
  }
  html[dir=\"rtl\"] .button-search {
  right: auto;
  left:0;
  }
  #search input {
  padding-left: 12px;
  padding-right: 50px;
  }
  .button-search{
  border-right-width:0;
  border-left-width:1px;
  border-left-style:";
            // line 1548
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-left-color:";
            // line 1549
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
  html[dir=\"rtl\"] .button-search{
  border-left-width:0;
  border-right-width:1px;
  border-right-style:";
            // line 1554
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-right-color:";
            // line 1555
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }";
        }
        // line 1558
        echo "

header .journal-login{
border-bottom-color:";
        // line 1561
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}


.super-menu > li:last-of-type{
border-right-color:";
        // line 1566
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-right-style:";
        // line 1567
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

@media only screen and (max-width: 760px) {
.default-header .journal-login{
background-color:";
        // line 1572
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_menu_bg_color_mobile"), "method");
        echo "
}
.journal-header-center #search input,
.journal-header-center .button-search{
border-radius:0;
}
.center-header #search input, .default-header #search input{
background-color:";
        // line 1579
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_bg_mobile"), "method");
        echo ";
}
.center-header header #cart, .default-header header #cart{
background-color:";
        // line 1582
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg_mobile"), "method");
        echo ";
}
.journal-menu .mobile-menu > li{
border-color:";
        // line 1585
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-style:";
        // line 1586
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}
}

.inline-button .product-details{
padding-bottom:0;
}";
        // line 1594
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button", 1 => "block-button"), "method") == "inline-button") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "block"))) {
            // line 1595
            echo "  .product-grid-item .cart{
  display:inline-block !important;
  }";
        }
        // line 1600
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none")) {
            // line 1601
            echo "  .mega-menu .product-grid-item .cart{
  display:none !important;
  }";
        }
        // line 1606
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none")) {
            // line 1607
            echo "  .product-grid-item .cart{
  display:none !important;
  }";
        }
        // line 1612
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_cart", 1 => "block"), "method") == "none")) {
            // line 1613
            echo "  .quickview .product-info .right .cart{
  display:table;
  }
  .product-info .right .cart div .qty,
  .product-info .right .cart div #button-cart{
  display:none;
  }";
        }
        // line 1622
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none")) {
            // line 1623
            echo "  .custom-sections .product-grid-item .product-details .cart{
  display:none !important;
  }";
        }
        // line 1628
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none")) {
            // line 1629
            echo "  .side-column .product-grid-item .product-details .cart{
  display:none !important;
  }";
        }
        // line 1634
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none")) {
            // line 1635
            echo "  #content .journal-carousel .product-grid-item .product-details .cart,
  #top-modules .journal-carousel .product-grid-item .product-details .cart,
  #bottom-modules .journal-carousel .product-grid-item .product-details .cart{
  display:none !important;
  }";
        }
        // line 1642
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_status", 1 => "1"), "method") == "0")) {
            // line 1643
            echo "  .product-info .right .options h3{
  display:none;
  }
  .product-info .right .option-image:first-of-type{
  margin-top:0;
  }";
        }
        // line 1650
        echo "
.product-info .right .options.push-1 .option-image li.selected span img{
border-color:";
        // line 1652
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_image_border_hover"), "method");
        echo ";
}

.mega-menu-categories .mega-menu-item,
.mega-menu-brands .mega-menu-item,
.mega-menu-html .mega-menu-item,
#header .mega-menu .product-grid-item{
margin-bottom:";
        // line 1659
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-right:last-of-type{
border-right-style:";
        // line 1663
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-right:last-of-type{
border-color:";
        // line 1667
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
}

.mega-menu > div{
margin-bottom:-";
        // line 1671
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px !important;
margin-right:-";
        // line 1672
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

html[dir=\"rtl\"] .mega-menu-item > div,
html[dir=\"rtl\"] #header .mega-menu .product-wrapper{
margin-right:0;
margin-left:";
        // line 1678
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.mega-menu .mega-menu-column:last-of-type > div{
margin-right:-";
        // line 1682
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu .mega-menu-column.mega-menu-products > div{
margin-left:-";
        // line 1685
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.mega-menu-column > div > h3, .mega-menu .mega-menu-column .menu-cms-block{
margin-right:";
        // line 1689
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu-column > div > h3, html[dir=\"rtl\"] .mega-menu .mega-menu-column .menu-cms-block{
margin-right:0;
margin-left:";
        // line 1693
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
.mega-menu .mega-menu-column:last-of-type > h3,
.mega-menu .mega-menu-column:last-of-type > div > h3,
.mega-menu .mega-menu-column:last-of-type > .menu-cms-block,
.mega-menu .mega-menu-column.mega-menu-html-block > div{
margin-right:0;
}

@media only screen and (max-width: 760px) {
.super-menu{
border-width:0;
}
.mega-menu .mega-menu-column > div{
margin-right:-";
        // line 1707
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu .mega-menu-column > div{
margin-left:-";
        // line 1710
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
margin-right:0;
}
}

.journal-sf .sf-image .box-content ul{
margin-bottom:-";
        // line 1716
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_section_margin_bottom"), "method");
        echo "px;
margin-right:-";
        // line 1717
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_section_margin_right"), "method");
        echo "px;
}";
        // line 1720
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_author", 1 => "on"), "method") == "off")) {
            // line 1721
            echo "  .p-author, .p-posted{
  display:none !important;
  }";
        }
        // line 1726
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_date", 1 => "on"), "method") == "off")) {
            // line 1727
            echo "  .p-date{
  display:none !important;
  }";
        }
        // line 1732
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_comments", 1 => "on"), "method") == "off")) {
            // line 1733
            echo "  .p-comment{
  display:none !important;
  }";
        }
        // line 1738
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_author", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_date", 1 => "on"), "method") == "off")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_comments", 1 => "on"), "method") == "off"))) {
            // line 1739
            echo "  .comment-date{
  display:none !important;
  }";
        }
        // line 1748
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off")) {
            // line 1749
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-voucher{
  padding-right: 12px;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  margin-top:0;
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-checkout .coupon-voucher .cvr div.checkout-voucher{
  padding-right:0;
  padding-left: 12px;
  }";
        }
        // line 1765
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off")) {
            // line 1766
            echo "  .journal-checkout .coupon-voucher .cvr .checkout-voucher{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  margin-top:0;
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  padding-right:0;
  padding-left: 12px;
  }";
        }
        // line 1779
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off")) {
            // line 1780
            echo "  .journal-checkout .coupon-voucher .cvr .checkout-reward{
  display:none;
  }";
        }
        // line 1787
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off"))) {
            // line 1788
            echo "  .journal-checkout .coupon-voucher div.checkout-voucher,
  .journal-checkout .coupon-voucher div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }";
        }
        // line 1799
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1800
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-reward,
  .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-voucher {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }";
        }
        // line 1811
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1812
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-voucher,
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-coupon {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }";
        }
        // line 1823
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1824
            echo "  .journal-checkout .coupon-voucher{
  display:none;
  }";
        }
        // line 1832
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "dropdown_shadow", 1 => "none"), "method") == "none")) {
            // line 1833
            echo "  .drop-down ul{
  box-shadow:none !important;
  }";
        }
        // line 1838
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_wishlist", 1 => "inline-block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_compare", 1 => "inline-block"), "method") == "none"))) {
            // line 1839
            echo "  .product-info .right .wishlist-compare{
  display:none;
  }";
        }
        // line 1844
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_name", 1 => "table"), "method") == "none") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_name", 1 => "table"), "method") == "none"))) {
            // line 1845
            echo "  .product-details{
  padding-top:13px;
  }";
        }
        // line 1850
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none"))) {
            // line 1851
            echo "  .product-grid-item .price + hr,
  .product-grid-item .price + .rating + hr{
  display:block;
  }";
        }
        // line 1858
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_name", 1 => "table"), "method") == "none"))) {
            // line 1859
            echo "  .product-details{
  display:none;
  }";
        }
        // line 1864
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_name", 1 => "table"), "method") == "none"))) {
            // line 1865
            echo "  .product-details{
  display:none;
  }";
        }
        // line 1870
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_name", 1 => "table"), "method") == "none"))) {
            // line 1871
            echo "  .product-details{
  display:none;
  }";
        }
        // line 1876
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_name", 1 => "table"), "method") == "none"))) {
            // line 1877
            echo "  .product-details{
  display:none;
  }";
        }
        // line 1882
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_name", 1 => "table"), "method") == "none"))) {
            // line 1883
            echo "  .product-details{
  display:none;
  }";
        }
        // line 1889
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "contacts_display", 1 => "off"), "method") == "on")) {
            // line 1890
            echo "  footer .contacts{
  text-align:center;
  }
  footer .contacts-left,
  html[dir=\"rtl\"] footer .contacts-left{
  float: none;
  }
  footer .contacts-right{
  display: none;
  }";
        }
        // line 1901
        echo "
.has-cta .rotator-tex{
line-height:";
        // line 1903
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cta_button_height"), "method");
        echo "px;
}

footer .contacts .hint--top:before{
border-top-color:";
        // line 1907
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_tooltip_bg_color"), "method");
        echo ";
}


.side-column .box-category,
.side-column .box-content,
.side-column .box-content > div,
.side-column .box-content > ul > li:last-of-type,
.side-column .oc-module .product-grid-item:last-of-type{
border-bottom-left-radius: inherit;
border-bottom-right-radius: inherit;
border-radius:inherit;
}


.journal-sf ul li label:hover{
color:";
        // line 1923
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_active_text"), "method");
        echo ";
}
.sf-icon:before{
border-top-color:";
        // line 1926
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "reset_tip_bg"), "method");
        echo ";
}

/*
.journal-sf ul li label:hover img{
border-color:";
        // line 1931
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_active_border"), "method");
        echo ";
} */

.sf-price .value:after{
border-bottom-color:";
        // line 1935
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_price_tip"), "method");
        echo ";
}

.mobile-trigger{
background-color:";
        // line 1939
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_bg_color"), "method");
        echo ";
}


.journal-header-default .links > a{
border-bottom-color: transparent;
}

@media only screen and (max-width: 760px) {
.super-menu{
background-color:";
        // line 1949
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_bg"), "method");
        echo ";
}
.journal-header-default .links > a{
border-bottom-color:";
        // line 1952
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo ";
}
}
.nav-numbers a:hover,
.nav-numbers li.active a{
-webkit-backface-visibility: hidden;
-webkit-transform: scale(";
        // line 1958
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
-moz-transform: scale(";
        // line 1959
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
-ms-transform: scale(";
        // line 1960
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
transform: scale(";
        // line 1961
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
}
.headline-mode .nav-numbers a:hover,
.headline-mode .nav-numbers li.active a{
-webkit-backface-visibility: hidden;
-webkit-transform: scale(";
        // line 1966
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
-moz-transform: scale(";
        // line 1967
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
-ms-transform: scale(";
        // line 1968
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
transform: scale(";
        // line 1969
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
}
.tp-bullets.simplebullets.round .bullet.selected,
.tp-bullets.simplebullets.round .bullet:hover,
.journal-simple-slider .owl-controls .owl-page.active span,
.journal-simple-slider .owl-controls.clickable .owl-page:hover span{
transform: scale(";
        // line 1975
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "slider_bullet_scale"), "method");
        echo ");
}

.swiper-pagination-bullet:hover, .swiper-pagination-bullet-active{
transform: scale(";
        // line 1979
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_bullet_scale"), "method");
        echo ");
}

@media only screen and (max-width: 980px) {
.journal-header-default .mega-menu{
width: 100%;
}
}

@media only screen and (max-width: 760px) {
.journal-header-center .journal-secondary{
background-color:";
        // line 1990
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_bg_color"), "method");
        echo ";
}
}

.mega-menu{
max-width:";
        // line 1995
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
}

@media only screen and (max-width: 760px){
.bottom-menu-bar #header .top-menu > li{
border-color:";
        // line 2000
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo ";
}
.bottom-menu-bar #header .journal-links{
background-color:";
        // line 2003
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_bg_color"), "method");
        echo ";
}
.bottom-menu-bar .journal-header-center .journal-secondary {
border-top-width: 0;
}
.bottom-menu-bar #header .journal-links ul.top-menu > li{
border-color:";
        // line 2009
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_border_color"), "method");
        echo ";
}
.bottom-menu-bar #header div.journal-links, .bottom-menu-bar #header .journal-links a:hover{
background-color:";
        // line 2012
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_bg_color"), "method");
        echo ";
}
.bottom-menu-bar #header .journal-links ul.top-menu > li > a,
.bottom-menu-bar #header .journal-links ul.top-menu > li > a:hover,
.bottom-menu-bar #header .journal-links ul.top-menu > li > .no-link{
color:";
        // line 2017
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_color"), "method");
        echo ";
}
}

.boxed-header .is-sticky .header {
max-width:";
        // line 2022
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
left: 50%;
transform: translateX(-50%);
}";
        // line 2027
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_style", 1 => "default"), "method") == "menu")) {
            // line 2028
            echo "  .is-sticky .super-menu, .is-sticky .journal-menu-bg {
  box-shadow: none;
  }";
        }
        // line 2033
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_style", 1 => "default"), "method") == "menu") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_menu_off", 1 => "0"), "method") == "1"))) {
            // line 2034
            echo "  html.boxed-header .is-sticky .header {
  max-width:100%;
  left:0;
  transform: translateX(0);
  }";
        }
        // line 2040
        echo "

.bottom-menu-bar #header .journal-links .top-menu .top-dropdown li:last-of-type::after{
color:";
        // line 2043
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo ";
}

@media only screen and (min-width : 760px) and (max-width: 980px) {
.mobile-menu-on-tablet .mobile-menu > li > ul,
.mobile-menu-on-tablet .mobile-menu > li > .mega-menu{
border-style:";
        // line 2049
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_type"), "method");
        echo ";
border-color:";
        // line 2050
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_color"), "method");
        echo ";
}
.mobile-menu-on-tablet ul.menu-centered{
height:auto;
}
}

@media only screen and (max-width: 760px){
.mobile-menu > li > ul,
.mobile-menu > li > .mega-menu{
border-style:";
        // line 2060
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_type"), "method");
        echo ";
border-color:";
        // line 2061
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_color"), "method");
        echo ";
}
}

@media only screen and (min-width: 760px) {
.journal-header-mega #search {
max-width:";
        // line 2067
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_width", 1 => "100"), "method");
        echo "%;
left:";
        // line 2068
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_offset", 1 => "0"), "method");
        echo "px;
}
.journal-header-center .j-100{
height:";
        // line 2071
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method");
        echo "px;
}
.journal-header-center .journal-menu-bg{
top:";
        // line 2074
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method") + 40) + $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method")) - 40);
        echo "px;
}
.journal-header-center .top-bar > .j-min, .journal-header-center .top-menu > li > .m-item, .journal-header-center .journal-top-header{
height:";
        // line 2077
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .journal-menu,
.journal-header-center .journal-menu-bg,
.journal-header-center .mobile-trigger,
ul.menu-centered{
height:";
        // line 2083
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .mobile-trigger,
.journal-header-center .super-menu > li > a{
line-height:";
        // line 2087
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .journal-language form .dropdown-menu,
.journal-header-center .journal-currency form .dropdown-menu{
top:";
        // line 2091
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}

.sticky-default.center-header .is-sticky .journal-header-center .j-100{
height:";
        // line 2095
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_height_input", 1 => ""), "method");
        echo "px;
}
.sticky-default.center-header .is-sticky .journal-menu-bg{
top:";
        // line 2098
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_height_input", 1 => ""), "method");
        echo "px;
}

.is-sticky .journal-header-center .journal-menu,
.is-sticky .journal-header-center .journal-menu-bg,
.is-sticky .journal-header-center .mobile-trigger{
height:";
        // line 2104
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_main_menu_height", 1 => "40"), "method");
        echo "px;
}
.is-sticky .journal-header-center .mobile-trigger,
.is-sticky .journal-header-center .super-menu > li > a{
line-height:";
        // line 2108
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_main_menu_height", 1 => "40"), "method");
        echo "px;
}
}

@media only screen and (max-width: 760px){
#header .journal-logo{
height:";
        // line 2114
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input_phone", 1 => ""), "method");
        echo "px !important;
}
}

.center-header body.is-sticky .header-assets.top-bar{
background-color:";
        // line 2119
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_bg_color"), "method");
        echo ";
}";
        // line 2122
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "logo_on_phone", 1 => "on"), "method") == "off")) {
            // line 2123
            echo "  @media only screen and (max-width: 760px){
  #header .journal-logo {
  display: none;
  }
  .journal-header-center .journal-secondary {
  border-bottom-width: 0;
  }
  }";
        }
        // line 2134
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_animate", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_on", 1 => "phone"), "method") == "tablet"))) {
            // line 2135
            echo "  @media only screen and (min-width: 980px){
  .super-menu>li:hover .mega-menu,
  .super-menu>li:hover > ul{
  display:block !important;
  }
  }";
        }
        // line 2143
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_animate", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_on", 1 => "phone"), "method") == "phone"))) {
            // line 2144
            echo "  @media only screen and (min-width: 760px){
  .super-menu>li:hover .mega-menu,
  .super-menu>li:hover > ul{
  display:block !important;
  }
  }";
        }
        // line 2152
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_box_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2153
            echo "  .header{
  box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
  }";
        }
        // line 2157
        echo "
@media only screen and (min-width : 760px) and (max-width: 980px) {
.mobile-menu-on-tablet .journal-header-center .journal-menu{
height:auto;
}
.mobile-menu-on-tablet .journal-header-center .super-menu > li > a{
line-height:40px;
}
}";
        // line 2167
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_show_category_images", 1 => "on"), "method") == "off")) {
            // line 2168
            echo "  @media only screen and (max-width: 760px){
  .mega-menu-categories .mega-menu-item ul,
  .mega-menu-categories .mega-menu-item.menu-image-left ul{
  width:100%;
  }
  .mega-menu-categories .mega-menu-item img {
  display: none !important;
  }
  }";
        }
        // line 2179
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "remove_top_bar", 1 => "on"), "method") == "off")) {
            // line 2180
            echo "  @media only screen and (min-width: 760px){
  .header-assets.top-bar,
  .journal-top-header{
  display:none;
  }
  .journal-header-center .journal-menu-bg{
  top:";
            // line 2186
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method");
            echo "px;
  }
  }";
        }
        // line 2192
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_modules_margin", 1 => "on"), "method") == "off")) {
            // line 2193
            echo "  .side-column .box{
  margin-bottom:0;
  }";
        }
        // line 2199
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_price_full", 1 => "inline-block"), "method") == "block")) {
            // line 2200
            echo "  .product-grid-item .price{
  width:100%;
  }";
        }
        // line 2205
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_size", 1 => "medium"), "method") == "tiny")) {
            // line 2206
            echo "  .product-grid-item .price{
  width:100%;
  }";
        }
        // line 2211
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_two_per_row", 1 => "on"), "method") == "off")) {
            // line 2212
            echo "  @media only screen and (max-width: 760px){
  .box-sections ul li {
  width: 100%;
  border-right-width: 0;
  }
  .box-sections ul li:nth-last-child(2):nth-child(odd) {
  border-bottom-width: 1px;
  }
  html[dir=\"rtl\"] .box-sections ul li {
  border-right-width: 0 !important;
  }
  }";
        }
        // line 2225
        echo "

#tabs{
top:";
        // line 2228
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_tabs_content_border:border-width"), "method");
        echo ";
}

.product-grid-item.display-icon .wishlist-icon:before,
.product-grid-item.display-icon .compare-icon:before{
line-height:";
        // line 2233
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_bg_height"), "method");
        echo "px;
}

.journal-header-center #cart .heading i{
height:";
        // line 2237
        echo (40 - ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_border:border-width", 1 => 0), "method") * 2));
        echo "px;
}

.journal-desktop .menu-floated .float-left{
border-right-style:";
        // line 2241
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

.column.products > h3{
margin-bottom:";
        // line 2245
        echo (12 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_product_padding"), "method"));
        echo "px;
}
.column.products{
padding-bottom:";
        // line 2248
        echo (12 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_product_padding"), "method"));
        echo "px;
}

.side-column .journal-gallery .box-heading{
margin-bottom:";
        // line 2252
        echo (10 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_gallery_padding"), "method"));
        echo "px;
}

.side-column .box-category > ul li ul li a{
padding-left:";
        // line 2256
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method"));
        echo "px;
}
.side-column .box-category > ul li ul li ul li a{
padding-left:";
        // line 2259
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (2 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li a{
padding-left:";
        // line 2262
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (3 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li ul li a{
padding-left:";
        // line 2265
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (4 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li ul li ul li a{
padding-left:";
        // line 2268
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (5 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}

@media only screen and (max-width:";
        // line 2271
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.breadcrumb{
padding-left:10px;
}
.super-menu > li:first-of-type{
border-left-width:0;
}
.super-menu > li:last-of-type{
border-right-width:0;
}
html[dir=\"rtl\"] .super-menu > li:first-of-type{
border-left-width:1px;
border-right-width:0;
}
html[dir=\"rtl\"] .super-menu > li:last-of-type{
border-left-width:0;
}
html[dir=\"rtl\"] .super-menu.menu-floated > li:first-of-type
border-right-width:0;
}
}

.super-menu.menu-floated{
border-right-width:1px;
border-left-width:1px;
border-color:";
        // line 2296
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-style:";
        // line 2297
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type", 1 => "solid"), "method");
        echo ";
}";
        // line 2300
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_fullwidth_divider", 1 => "off"), "method") == "on")) {
            // line 2301
            echo "  .custom-sections .box-heading.box-sections{
  border-left-width:1px;
  border-right-width:1px;
  }";
        }
        // line 2307
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_unite", 1 => "1"), "method") == "0") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "icon"), "method") == "icon")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "button"))) {
            // line 2308
            echo "
  .product-grid-item .wishlist,
  .product-grid-item .compare{
  padding:0;
  }
  .product-grid-item .button-group{
  display: flex;
  justify-content: center;
  }";
        }
        // line 2318
        echo "

.custom-sections .box-heading.box-sections{
border-left-style:";
        // line 2321
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_title_divider_type"), "method");
        echo ";
}

.journal-carousel:not(.journal-gallery) .box-content .swiper-container{
padding:";
        // line 2325
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
margin: -";
        // line 2326
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
}

.journal-carousel.arrows-top .swiper-button-prev,
.journal-carousel.arrows-top .swiper-button-next{
margin-top:";
        // line 2331
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
}

.side-column .journal-carousel.arrows-top .swiper-button-prev,
.side-column .journal-carousel.arrows-top .swiper-button-next,
.related-products.journal-carousel.arrows-top .swiper-button-prev,
.related-products.journal-carousel.arrows-top .swiper-button-next{
margin-top:0;
}";
        // line 2341
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_top_margin", 1 => "0"), "method") == "20")) {
            // line 2342
            echo "  div#footer{
  margin-top:";
            // line 2343
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_top_margin", 1 => "20"), "method");
            echo "px;
  }";
        }
        // line 2347
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_bottom_margin", 1 => "0"), "method") == "20")) {
            // line 2348
            echo "  div#footer{
  margin-bottom:";
            // line 2349
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_bottom_margin", 1 => "20"), "method");
            echo "px;
  }";
        }
        // line 2352
        echo "
.extended-container + .boxed-footer #footer{
margin-top:";
        // line 2354
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_top_margin"), "method") - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "container_bottom_spacing"), "method"));
        echo "px;
}";
        // line 2358
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_title_side_margin", 1 => "on"), "method") == "off")) {
            // line 2359
            echo "  .side-column .journal-carousel .htabs {
  margin-bottom: 0;
  }
  .side-column .arrows-top:not(.journal-gallery) .swiper-button-prev,
  .side-column .arrows-top:not(.journal-gallery) .swiper-button-next {
  margin-top:20px;
  }";
        }
        // line 2369
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_brands_title_align", 1 => "left"), "method") == "center")) {
            // line 2370
            echo "  .mega-menu-brands div > h3 {
  justify-content: center;
  }";
        }
        // line 2375
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_brands_title_align", 1 => "left"), "method") == "right")) {
            // line 2376
            echo "  .mega-menu-brands div > h3 {
  justify-content: flex-end;
  }";
        }
        // line 2380
        echo "
.side-column .journal-carousel .box-content .swiper-container{
padding:0;
margin:0;
}
html[dir=\"rtl\"] .journal-carousel.arrows-top .swiper-button-next{
right:auto;
left:";
        // line 2387
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_icon_offset_left", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel.arrows-top .swiper-button-prev{
right:auto;
left:";
        // line 2392
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_icon_offset_right", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel:not(.arrows-top) .swiper-button-next{
right:auto;
left:";
        // line 2397
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_side_icon_offset_left", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel:not(.arrows-top) .swiper-button-prev{
left:auto;
right:";
        // line 2402
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_side_icon_offset_right", 1 => ""), "method");
        echo "px;
}";
        // line 2405
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_align", 1 => "left"), "method") == "center")) {
            // line 2406
            echo "  html[dir=\"rtl\"] .post-button{
  text-align:center;
  }";
        }
        // line 2410
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_align", 1 => "left"), "method") == "right")) {
            // line 2411
            echo "  html[dir=\"rtl\"] .post-button{
  text-align:left;
  }";
        }
        // line 2416
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_module_button_align", 1 => "left"), "method") == "center")) {
            // line 2417
            echo "  html[dir=\"rtl\"] .post-module .post-button{
  text-align:center;
  }";
        }
        // line 2421
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_module_button_align", 1 => "left"), "method") == "right")) {
            // line 2422
            echo "  html[dir=\"rtl\"] .post-module .post-button{
  text-align:left;
  }";
        }
        // line 2427
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_title_align", 1 => "left"), "method") == "center")) {
            // line 2428
            echo "  html[dir=\"rtl\"] .mega-menu-categories .mega-menu-item h3 a{
  text-align:center;
  justify-content: center;
  }
  .mega-menu-categories .mega-menu-item h3 a{
  justify-content: center;
  }";
        }
        // line 2437
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_title_align", 1 => "left"), "method") == "right")) {
            // line 2438
            echo "  html[dir=\"rtl\"] .mega-menu-categories .mega-menu-item h3 a{
  text-align:left;
  justify-content: flex-start;
  }
  .mega-menu-categories .mega-menu-item h3 a{
  justify-content: flex-end;
  }";
        }
        // line 2447
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "left")) {
            // line 2448
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:right;
  }";
        }
        // line 2453
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "right")) {
            // line 2454
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:left;
  }";
        }
        // line 2459
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "center")) {
            // line 2460
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:center;
  }";
        }
        // line 2465
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "left")) {
            // line 2466
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:right;
  }";
        }
        // line 2471
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "right")) {
            // line 2472
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:left;
  }";
        }
        // line 2477
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "center")) {
            // line 2478
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:center;
  }";
        }
        // line 2484
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_title_overflow", 1 => "on"), "method") == "off")) {
            // line 2485
            echo "  .blog-post .heading-title{
  white-space:normal;
  height:auto;
  line-height:1.2;
  padding:8px 0;
  }";
        }
        // line 2493
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "module_title_overflow", 1 => "on"), "method") == "off")) {
            // line 2494
            echo "  .post-module .box-heading{
  white-space:normal;
  height:auto;
  line-height:1.2;
  padding-top:8px;
  padding-bottom:8px;
  }";
        }
        // line 2502
        echo "
.posts.blog-list-view .post-item-details{
width:";
        // line 2504
        echo (100 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_image_width", 1 => "33.333333"), "method"));
        echo "%;
}

.side-column .box.cms-blocks .box-heading{
margin-bottom:";
        // line 2508
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_cms_margin"), "method");
        echo "px;
}

@media only screen and (min-width:";
        // line 2511
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.safari5 #footer,
.safari5.boxed-header header{
width:";
        // line 2514
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}
.tp-banner{
height:100% !important;
}
}";
        // line 2521
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "logo_ratio", 1 => "on"), "method") == "off")) {
            // line 2522
            echo "  #logo a img{
  height:auto;
  }";
        }
        // line 2526
        echo "
@media only screen and (max-width:";
        // line 2527
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {

.tp-banner-container{
height:auto !important;
}

.side-column .oc-module .product-details {
max-width: 130px;
}
.checkout-page #content {
padding-left: 20px;
padding-right: 20px;
}
}

@media only screen and (max-width: 760px){
.product-grid-item .has-countdown + .product-details .rating{
top:-50px;
}
.product-grid-item .image.has-countdown .wishlist,
.product-grid-item .image.has-countdown .compare{
margin-bottom:42px;
}
}";
        // line 2552
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "always")) {
            // line 2553
            echo "  .product-grid-item .countdown,
  .product-list-item .countdown {
  opacity: 1;
  visibility: visible;
  }
  .product-grid-item .has-countdown + .product-details .rating{
  top:-70px;
  }
  .product-grid-item .image.has-countdown .wishlist,
  .product-grid-item .image.has-countdown .compare{
  margin-bottom:42px;
  }";
        }
        // line 2566
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "hover")) {
            // line 2567
            echo "  .product-grid-item:hover .countdown,
  .product-list-item:hover .countdown {
  opacity: 1;
  visibility: visible;
  }
  .product-grid-item:hover .has-countdown + .product-details .rating{
  top:-70px;
  }
  .product-grid-item:hover .image.has-countdown .wishlist,
  .product-grid-item:hover .image.has-countdown .compare{
  margin-bottom:42px;
  }";
        }
        // line 2581
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "hidden")) {
            // line 2582
            echo "  .product-grid-item .countdown,
  .product-list-item .countdown {
  display:none;
  }";
        }
        // line 2589
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "hover"), "method") == "hover"))) {
            // line 2590
            echo "  .product-grid-item:hover .has-countdown .quickview-button{
  margin-top:-40px;
  }";
        }
        // line 2595
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "hover"), "method") == "always"))) {
            // line 2596
            echo "  .product-grid-item .has-countdown .quickview-button{
  margin-top:-40px;
  }";
        }
        // line 2603
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom_inner"), "method") == "0")) {
            // line 2604
            echo "  .zm-viewer{
  display:none;
  border-left:1px solid white;
  }";
        }
        // line 2609
        echo "
.option li.hint--top:before{
border-top-color:";
        // line 2611
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_push_tooltip_bg"), "method");
        echo ";
}";
        // line 2614
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "on")) {
            // line 2615
            echo "  @media only screen and (max-width: 470px) {
  .journal-cart{
  background-color:";
            // line 2617
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg"), "method");
            echo ";
  background-color:";
            // line 2618
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg_mobile"), "method");
            echo ";
  }
  }";
        }
        // line 2623
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_header_cart2", 1 => "visible"), "method") == "visible"))) {
            // line 2624
            echo "  @media only screen and (max-width: 470px) {
  .phone-sticky-cart.menu-cart-off .journal-menu .mobile-trigger{
  width:100%;
  }
  header .journal-menu .mobile-trigger {
  width: 50%;
  margin-top: -40px;
  z-index: 3;
  background-color:transparent;
  }
  .journal-cart{
  z-index:2;
  background-color:";
            // line 2636
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg"), "method");
            echo "
  }
  }";
        }
        // line 2640
        echo "
.phone-sticky-cart.phone-sticky-menu:not(.menu-cart-off) .journal-menu{
z-index:1;
}";
        // line 2645
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_header_search", 1 => "block"), "method") == "block"))) {
            // line 2646
            echo "  @media only screen and (max-width: 470px){
  div.mobile-trigger, .mobile-menu-on-tablet div.mobile-trigger{
  color:";
            // line 2648
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_trigger_text_color_cart_same_line"), "method");
            echo ";
  }
  div.mobile-trigger:before, .mobile-menu-on-tablet div.mobile-trigger:before{
  color:";
            // line 2651
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_trigger_icon_color_cart_same_line"), "method");
            echo ";
  }
  }";
        }
        // line 2655
        echo "
.journal-header-center #header .menu-dropdown::before{
border-bottom-color:";
        // line 2657
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo "
}

.header-notice > div{
max-width:";
        // line 2661
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}

@media only screen and (max-width:";
        // line 2664
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method") + 15);
        echo "px){
.header-notice > div{
padding-left:15px;
padding-right: 15px;
}
.header-notice.floated-icon > div{
padding-bottom:10px;
}
button.close-notice {
right: 8px;
}
html[dir=\"rtl\"] button.close-notice {
right: auto;
left: 8px;
}
}";
        // line 2681
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "top")) {
            // line 2682
            echo "  .product-grid-item .quickview-button{
  top:0;
  transform: translate(-50%, 0);
  }";
        }
        // line 2688
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_align", 1 => "left"), "method") == "center")) {
            // line 2689
            echo "  .post-item-details .comment-date{
  margin:0 auto;
  }
  .blog-grid-view .post-button{
  align-self:center;
  }";
        }
        // line 2697
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_align", 1 => "left"), "method") == "right")) {
            // line 2698
            echo "  .post-item-details .comment-date{
  width:100%;
  }
  .blog-grid-view .post-button{
  align-self:flex-end;
  }
  html[dir=\"rtl\"] .blog-grid-view .post-button{
  align-self:flex-start;
  }";
        }
        // line 2709
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom")) {
            // line 2710
            echo "  .product-grid-item .quickview-button{
  top:100%;
  transform: translate(-50%, -100%);
  }";
        }
        // line 2716
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_title_align", 1 => "left"), "method") == "center")) {
            // line 2717
            echo "  html[dir=\"rtl\"] .heading-title, html[dir=\"rtl\"] .box-heading:not(.box-sections), html[dir=\"rtl\"] #blogArticle
  .articleHeader h1, html[dir=\"rtl\"] .journal-carousel .htabs.single-tab a, html[dir=\"rtl\"] .oc-filter .panel-heading, html[dir=\"rtl\"] .post-module .box-heading, html[dir=\"rtl\"] #content h1.heading-title{
  text-align:center;
  }";
        }
        // line 2723
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_title_align", 1 => "left"), "method") == "right")) {
            // line 2724
            echo "  html[dir=\"rtl\"] .heading-title, html[dir=\"rtl\"] .box-heading:not(.box-sections), html[dir=\"rtl\"] #blogArticle
  .articleHeader h1, html[dir=\"rtl\"] .journal-carousel .htabs.single-tab a, html[dir=\"rtl\"] .oc-filter .panel-heading, html[dir=\"rtl\"] .post-module .box-heading, html[dir=\"rtl\"] #content h1.heading-title{
  text-align:left;
  }";
        }
        // line 2730
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_title_align", 1 => "left"), "method") == "center")) {
            // line 2731
            echo "  html[dir=\"rtl\"] .secondary-title, html[dir=\"rtl\"] #content #review-title{
  text-align:center;
  }";
        }
        // line 2736
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_title_align", 1 => "left"), "method") == "right")) {
            // line 2737
            echo "  html[dir=\"rtl\"] .secondary-title, html[dir=\"rtl\"] #content #review-title{
  text-align:left;
  }";
        }
        // line 2743
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_to_top_pos", 1 => "right"), "method") == "left")) {
            // line 2744
            echo "  .scroll-top{
  left:5px;
  right:auto;
  }";
        }
        // line 2750
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_side_margin", 1 => "15"), "method") == "0")) {
            // line 2751
            echo "  footer .columns {
  padding-left:0;
  }
  html[dir=\"rtl\"] footer .columns {
  padding-right:0;
  }";
        }
        // line 2759
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2760
            echo "  footer{
  box-shadow: 0 -2px 15px -3px rgba(0, 0, 0, 0.3);
  }";
        }
        // line 2765
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_shadow_type", 1 => "none"), "method") == "none")) {
            // line 2766
            echo "  footer{
  box-shadow: none;
  }";
        }
        // line 2771
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2772
            echo "  .journal-top-header{
  box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
  }";
        }
        // line 2777
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") == "none")) {
            // line 2778
            echo "  .journal-top-header{
  box-shadow:none;
  }";
        }
        // line 2783
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") != "none")) {
            // line 2784
            echo "  .journal-header-default .links a, .journal-header-default .links .no-link {
  border-bottom-width: 0;
  }";
        }
        // line 2788
        echo "
/* Content Margin */

@media only screen and (min-width: 760px){
#column-left + #content {
margin-left:";
        // line 2793
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
}
#column-right + #content {
margin-right:";
        // line 2796
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
        echo "px;
}

#column-left + #column-right + #content{
margin-left:";
        // line 2800
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
margin-right:";
        // line 2801
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
        echo "px;
}
}

/* Tablet Column Width + Content Margin */

@media only screen and (min-width:760px) and (max-width:980px) {
#column-left {
width:";
        // line 2809
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-right{
width:";
        // line 2812
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-left + #content {
margin-left:";
        // line 2815
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-right + #content {
margin-right:";
        // line 2818
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-left + #column-right + #content{
margin-left:";
        // line 2821
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
margin-right:";
        // line 2822
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
}

/* Extended Layout Margins */

@media only screen and (min-width:760px) and (max-width:";
        // line 2828
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.skin-16 .journal-header-center .journal-search {
padding-left: 30px;
}
.extended-layout #column-left{
padding-left:20px;
}
.extended-layout #column-right{
padding-right:20px;
}
.extended-layout #content,
.extended-layout #column-left + #content,
.extended-layout #column-right + #content{
padding-left:20px;
padding-right:20px;
}
html[dir=\"rtl\"].extended-layout #column-left{
padding-right:20px!important;
}
html[dir=\"rtl\"].extended-layout #column-right{
padding-left:20px !important;
}
html[dir=\"rtl\"].extended-layout #column-left + #content {
margin-right:";
        // line 2851
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
margin-left: 0;

}
html[dir=\"rtl\"].extended-layout #column-right + #content {
margin-right: 0;
}
}

.mega-menu .mega-menu-column .menu-cms-block{
margin-bottom:";
        // line 2861
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.fly-drop-down ul li{
min-height:";
        // line 2865
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "flyout_menu_item_height", 1 => 40), "method");
        echo "px;
}

@media only screen and (max-width: 760px){
.product-grid-item .rating{
margin-left:";
        // line 2870
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rating_offset_x_phone"), "method");
        echo "px;
}
.product-grid-item .rating{
top:";
        // line 2873
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rating_offset_y_phone"), "method");
        echo "px;
}
}

/* RTL Columns */";
        // line 2879
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl_columns", 1 => "1"), "method") == "1")) {
            // line 2880
            echo "
  html[dir=\"rtl\"] .flyout-left .fly-mega-menu,
  html[dir=\"rtl\"] .flyout-left .fly-drop-down > ul {
  left: auto;
  right: 100%;
  }
  html[dir=\"rtl\"] .flyout-right .fly-mega-menu,
  html[dir=\"rtl\"] .flyout-right .fly-drop-down > ul {
  left: 100% !important;
  right: auto;
  }
  html[dir=\"rtl\"] .flyout-menu .flyout > ul > li > a i.menu-plus {
  left: 5px;
  right: auto;
  transform: scale(-1);
  }
  html[dir=\"rtl\"] #column-right .flyout-menu .flyout > ul > li > a i.menu-plus {
  left: auto;
  right: 8px;
  transform: scale(1);
  }
  html[dir=\"rtl\"] .flyout-menu .flyout > ul > li > a {
  padding: 7px 12px 7px 25px;
  }
  html[dir=\"rtl\"] #column-right .flyout-menu .flyout > ul > li > a {
  padding: 7px 25px 7px 12px;
  text-align:left;
  }


  html[dir=\"rtl\"] #column-left {
  float: right;
  }
  html[dir=\"rtl\"] #column-right {
  float: left;
  }


  @media only screen and (min-width: 760px){

  html[dir=\"rtl\"] #column-left {
  padding: 20px 20px 20px 0;
  }
  html[dir=\"rtl\"] #column-right {
  padding: 20px 0 20px 20px;
  }

  html[dir=\"rtl\"] #column-left + #content {
  margin-right:";
            // line 2928
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
            echo "px;
  margin-left: 0;

  }
  html[dir=\"rtl\"] #column-right + #content {
  margin-left:";
            // line 2933
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
            echo "px;
  margin-right: 0;
  }

  html[dir=\"rtl\"] #column-left + #column-right + #content{
  margin-right:";
            // line 2938
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
            echo "px;
  margin-left:";
            // line 2939
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
            echo "px;
  }

  }

  @media only screen and (min-width : 760px) and (max-width: 980px) {

  html[dir=\"rtl\"] #column-left + #content {
  margin-right:";
            // line 2947
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left:0;
  }
  html[dir=\"rtl\"] #column-right + #content {
  margin-left:";
            // line 2951
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-right:0;
  }
  html[dir=\"rtl\"] #column-left + #column-right + #content{
  margin-right:";
            // line 2955
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left:";
            // line 2956
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
            echo "px;
  }

  html[dir=\"rtl\"].extended-layout #column-left + #content {
  margin-right:";
            // line 2960
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left: 0;

  }
  }

  @media only screen and (min-width:";
            // line 2966
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
            echo "px) {
  html[dir=\"rtl\"].extended-layout #column-left{
  padding-right:0;
  }
  html[dir=\"rtl\"].extended-layout #column-right{
  padding-left:0;
  }
  html[dir=\"rtl\"].extended-layout #column-right + #content {
  padding-left: 20px;
  padding-right: 0;
  }
  html[dir=\"rtl\"].extended-layout #column-left + #content {
  padding-right: 20px;
  padding-left: 0;
  }
  }";
        }
        // line 2984
        echo "

.refine-images::before,
#refine-images::before,
.category-list::before{
content:\"";
        // line 2989
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_text", 1 => ""), "method");
        echo "\";
margin-right:";
        // line 2990
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => ""), "method");
        echo "px;
}";
        // line 2992
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_text_status", 1 => "none"), "method") == "none")) {
            // line 2993
            echo "  .refine-images::before,
  #refine-images::before,
  .category-list::before{
  display:none;
  }";
        }
        // line 2999
        echo ".refine-image {
padding-right:";
        // line 3000
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
margin-bottom:";
        // line 3001
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
}
.refine-images {
margin-right: -";
        // line 3004
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
margin-bottom:";
        // line 3005
        echo (15 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method"));
        echo "px;;
}

.product-grid-item {
margin-bottom:";
        // line 3009
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}
.product-wrapper,
.ias-button,
.ias-loader,
.ias-noneleft{
margin-right:";
        // line 3015
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}
.ias-button,
.ias-loader,
.ias-noneleft{
margin-top:";
        // line 3020
        echo (20 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method"));
        echo "px;
}
.product-grid, #content .box-product{
margin-right: -";
        // line 3023
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}

/* Mobile Product Spacing */

@media only screen and (max-width: 760px){
#cart .heading i::before{
color:";
        // line 3030
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_icon_mobile"), "method");
        echo ";
}
#cart .heading i{
background-color:";
        // line 3033
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_icon_bg_mobile"), "method");
        echo ";
}
div#container,
.home-page div#container {
margin-top: 0;
margin-bottom: 0;
box-shadow:none;
}
.product-grid-item:not(.swiper-slide) {
margin-bottom:";
        // line 3042
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
.product-grid-item:not(.swiper-slide) .product-wrapper,
.ias-button,
.ias-loader,
.ias-noneleft{
margin-right:";
        // line 3048
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
.product-grid, #content .box-product{
margin-right: -";
        // line 3051
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
}

.button:active{
box-shadow:";
        // line 3056
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "button_shadow_active"), "method");
        echo ";
}

#column-left .oc-module .product-details{
max-width:";
        // line 3060
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => "220"), "method") - 220) + 145);
        echo "px;
}

#column-right .oc-module .product-details{
max-width:";
        // line 3064
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => "220"), "method") - 220) + 145);
        echo "px;
}";
        // line 3068
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-image"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-attachment"), "method") == "fixed"))) {
            // line 3069
            echo "  .mobile body,
  .tablet body{
  background-image:none;
  }
  .mobile body::before,
  .tablet body::before{
  content: \"\";
  top: 0;
  left: 0;
  right: 0;
  bottom:0;
  width: 100%;
  height: 100vh;
  position: fixed;
  background-image:";
            // line 3083
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-image"), "method");
            echo ";
  background-attachment: scroll;
  background-size: initial;
  background-repeat: inherit;
  background-position: center top;
  z-index:-1;
  }";
        }
        // line 3092
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-image"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-attachment"), "method") == "fixed"))) {
            // line 3093
            echo "  .mobile.home-page body,
  .tablet.home-page body{
  background-image:none;
  }
  .mobile.home-page body::before,
  .tablet.home-page body::before{
  content: \"\";
  top: 0;
  left: 0;
  right: 0;
  bottom:0;
  width: 100%;
  height: 100vh;
  position: fixed;
  background-image:";
            // line 3107
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-image"), "method");
            echo ";
  background-attachment: scroll;
  background-size: initial;
  background-repeat: inherit;
  background-position: center top;
  z-index:-1;
  }";
        }
        // line 3115
        echo "
/* Custom CSS */";
        // line 3117
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_css"), "method");
        echo "

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/assets/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4152 => 3117,  4149 => 3115,  4139 => 3107,  4123 => 3093,  4121 => 3092,  4111 => 3083,  4095 => 3069,  4093 => 3068,  4089 => 3064,  4082 => 3060,  4075 => 3056,  4067 => 3051,  4061 => 3048,  4052 => 3042,  4040 => 3033,  4034 => 3030,  4024 => 3023,  4018 => 3020,  4010 => 3015,  4001 => 3009,  3994 => 3005,  3990 => 3004,  3984 => 3001,  3980 => 3000,  3977 => 2999,  3970 => 2993,  3968 => 2992,  3964 => 2990,  3960 => 2989,  3953 => 2984,  3934 => 2966,  3925 => 2960,  3918 => 2956,  3914 => 2955,  3907 => 2951,  3900 => 2947,  3889 => 2939,  3885 => 2938,  3877 => 2933,  3869 => 2928,  3819 => 2880,  3817 => 2879,  3810 => 2873,  3804 => 2870,  3796 => 2865,  3789 => 2861,  3776 => 2851,  3750 => 2828,  3741 => 2822,  3737 => 2821,  3731 => 2818,  3725 => 2815,  3719 => 2812,  3713 => 2809,  3702 => 2801,  3698 => 2800,  3691 => 2796,  3685 => 2793,  3678 => 2788,  3673 => 2784,  3671 => 2783,  3666 => 2778,  3664 => 2777,  3659 => 2772,  3657 => 2771,  3652 => 2766,  3650 => 2765,  3645 => 2760,  3643 => 2759,  3635 => 2751,  3633 => 2750,  3627 => 2744,  3625 => 2743,  3620 => 2737,  3618 => 2736,  3613 => 2731,  3611 => 2730,  3605 => 2724,  3603 => 2723,  3597 => 2717,  3595 => 2716,  3589 => 2710,  3587 => 2709,  3576 => 2698,  3574 => 2697,  3566 => 2689,  3564 => 2688,  3558 => 2682,  3556 => 2681,  3538 => 2664,  3532 => 2661,  3525 => 2657,  3521 => 2655,  3515 => 2651,  3509 => 2648,  3505 => 2646,  3503 => 2645,  3498 => 2640,  3492 => 2636,  3478 => 2624,  3476 => 2623,  3470 => 2618,  3466 => 2617,  3462 => 2615,  3460 => 2614,  3456 => 2611,  3452 => 2609,  3446 => 2604,  3444 => 2603,  3439 => 2596,  3437 => 2595,  3432 => 2590,  3430 => 2589,  3424 => 2582,  3422 => 2581,  3408 => 2567,  3406 => 2566,  3392 => 2553,  3390 => 2552,  3364 => 2527,  3361 => 2526,  3356 => 2522,  3354 => 2521,  3346 => 2514,  3340 => 2511,  3334 => 2508,  3327 => 2504,  3323 => 2502,  3314 => 2494,  3312 => 2493,  3304 => 2485,  3302 => 2484,  3297 => 2478,  3295 => 2477,  3290 => 2472,  3288 => 2471,  3283 => 2466,  3281 => 2465,  3276 => 2460,  3274 => 2459,  3269 => 2454,  3267 => 2453,  3262 => 2448,  3260 => 2447,  3251 => 2438,  3249 => 2437,  3240 => 2428,  3238 => 2427,  3233 => 2422,  3231 => 2421,  3226 => 2417,  3224 => 2416,  3219 => 2411,  3217 => 2410,  3212 => 2406,  3210 => 2405,  3206 => 2402,  3198 => 2397,  3190 => 2392,  3182 => 2387,  3173 => 2380,  3168 => 2376,  3166 => 2375,  3161 => 2370,  3159 => 2369,  3150 => 2359,  3148 => 2358,  3144 => 2354,  3140 => 2352,  3135 => 2349,  3132 => 2348,  3130 => 2347,  3125 => 2343,  3122 => 2342,  3120 => 2341,  3109 => 2331,  3101 => 2326,  3097 => 2325,  3090 => 2321,  3085 => 2318,  3074 => 2308,  3072 => 2307,  3066 => 2301,  3064 => 2300,  3060 => 2297,  3056 => 2296,  3028 => 2271,  3022 => 2268,  3016 => 2265,  3010 => 2262,  3004 => 2259,  2998 => 2256,  2991 => 2252,  2984 => 2248,  2978 => 2245,  2971 => 2241,  2964 => 2237,  2957 => 2233,  2949 => 2228,  2944 => 2225,  2930 => 2212,  2928 => 2211,  2923 => 2206,  2921 => 2205,  2916 => 2200,  2914 => 2199,  2909 => 2193,  2907 => 2192,  2901 => 2186,  2893 => 2180,  2891 => 2179,  2880 => 2168,  2878 => 2167,  2868 => 2157,  2863 => 2153,  2861 => 2152,  2853 => 2144,  2851 => 2143,  2843 => 2135,  2841 => 2134,  2831 => 2123,  2829 => 2122,  2825 => 2119,  2817 => 2114,  2808 => 2108,  2801 => 2104,  2792 => 2098,  2786 => 2095,  2779 => 2091,  2772 => 2087,  2765 => 2083,  2756 => 2077,  2750 => 2074,  2744 => 2071,  2738 => 2068,  2734 => 2067,  2725 => 2061,  2721 => 2060,  2708 => 2050,  2704 => 2049,  2695 => 2043,  2690 => 2040,  2683 => 2034,  2681 => 2033,  2676 => 2028,  2674 => 2027,  2668 => 2022,  2660 => 2017,  2652 => 2012,  2646 => 2009,  2637 => 2003,  2631 => 2000,  2623 => 1995,  2615 => 1990,  2601 => 1979,  2594 => 1975,  2585 => 1969,  2581 => 1968,  2577 => 1967,  2573 => 1966,  2565 => 1961,  2561 => 1960,  2557 => 1959,  2553 => 1958,  2544 => 1952,  2538 => 1949,  2525 => 1939,  2518 => 1935,  2511 => 1931,  2503 => 1926,  2497 => 1923,  2478 => 1907,  2471 => 1903,  2467 => 1901,  2455 => 1890,  2453 => 1889,  2448 => 1883,  2446 => 1882,  2441 => 1877,  2439 => 1876,  2434 => 1871,  2432 => 1870,  2427 => 1865,  2425 => 1864,  2420 => 1859,  2418 => 1858,  2412 => 1851,  2410 => 1850,  2405 => 1845,  2403 => 1844,  2398 => 1839,  2396 => 1838,  2391 => 1833,  2389 => 1832,  2384 => 1824,  2382 => 1823,  2371 => 1812,  2369 => 1811,  2358 => 1800,  2356 => 1799,  2345 => 1788,  2343 => 1787,  2338 => 1780,  2336 => 1779,  2323 => 1766,  2321 => 1765,  2305 => 1749,  2303 => 1748,  2298 => 1739,  2296 => 1738,  2291 => 1733,  2289 => 1732,  2284 => 1727,  2282 => 1726,  2277 => 1721,  2275 => 1720,  2271 => 1717,  2267 => 1716,  2258 => 1710,  2252 => 1707,  2235 => 1693,  2228 => 1689,  2221 => 1685,  2215 => 1682,  2208 => 1678,  2199 => 1672,  2195 => 1671,  2188 => 1667,  2181 => 1663,  2174 => 1659,  2164 => 1652,  2160 => 1650,  2152 => 1643,  2150 => 1642,  2143 => 1635,  2141 => 1634,  2136 => 1629,  2134 => 1628,  2129 => 1623,  2127 => 1622,  2118 => 1613,  2116 => 1612,  2111 => 1607,  2109 => 1606,  2104 => 1601,  2102 => 1600,  2097 => 1595,  2095 => 1594,  2086 => 1586,  2082 => 1585,  2076 => 1582,  2070 => 1579,  2060 => 1572,  2052 => 1567,  2048 => 1566,  2040 => 1561,  2035 => 1558,  2030 => 1555,  2026 => 1554,  2018 => 1549,  2014 => 1548,  1998 => 1534,  1996 => 1533,  1990 => 1528,  1986 => 1527,  1981 => 1524,  1979 => 1523,  1975 => 1520,  1968 => 1516,  1964 => 1515,  1958 => 1512,  1954 => 1511,  1945 => 1505,  1938 => 1501,  1931 => 1497,  1924 => 1493,  1917 => 1489,  1910 => 1485,  1903 => 1481,  1896 => 1477,  1889 => 1473,  1882 => 1469,  1876 => 1466,  1872 => 1465,  1866 => 1462,  1862 => 1461,  1855 => 1457,  1850 => 1454,  1831 => 1436,  1829 => 1435,  1825 => 1432,  1818 => 1428,  1810 => 1423,  1803 => 1419,  1799 => 1417,  1793 => 1412,  1791 => 1411,  1783 => 1403,  1781 => 1402,  1773 => 1394,  1771 => 1393,  1763 => 1384,  1761 => 1383,  1652 => 1275,  1640 => 1266,  1626 => 1254,  1595 => 1226,  1593 => 1225,  1588 => 1221,  1581 => 1217,  1574 => 1212,  1569 => 1208,  1567 => 1207,  1562 => 1202,  1560 => 1201,  1555 => 1196,  1549 => 1193,  1535 => 1182,  1528 => 1178,  1521 => 1173,  1516 => 1169,  1514 => 1168,  1509 => 1163,  1507 => 1162,  1502 => 1157,  1500 => 1156,  1495 => 1151,  1493 => 1150,  1488 => 1144,  1486 => 1143,  1481 => 1138,  1479 => 1137,  1474 => 1131,  1472 => 1130,  1468 => 1127,  1464 => 1125,  1459 => 1121,  1457 => 1120,  1443 => 1106,  1439 => 1104,  1434 => 1100,  1432 => 1099,  1427 => 1094,  1425 => 1093,  1421 => 1090,  1413 => 1085,  1406 => 1081,  1400 => 1077,  1392 => 1070,  1390 => 1069,  1374 => 1053,  1370 => 1051,  1368 => 1050,  1358 => 1041,  1351 => 1037,  1347 => 1035,  1341 => 1030,  1339 => 1029,  1327 => 1016,  1325 => 1015,  1320 => 1010,  1318 => 1009,  1308 => 999,  1306 => 998,  1296 => 987,  1294 => 986,  1289 => 982,  1287 => 981,  1277 => 972,  1275 => 971,  1271 => 968,  1261 => 961,  1257 => 960,  1251 => 957,  1247 => 956,  1241 => 953,  1237 => 951,  1230 => 946,  1226 => 944,  1224 => 943,  1214 => 933,  1212 => 932,  1207 => 927,  1205 => 926,  1200 => 921,  1198 => 920,  1193 => 916,  1190 => 915,  1188 => 914,  1184 => 911,  1177 => 906,  1172 => 902,  1170 => 901,  1165 => 897,  1159 => 894,  1153 => 891,  1137 => 877,  1135 => 876,  1130 => 871,  1128 => 870,  1120 => 862,  1118 => 861,  1113 => 856,  1111 => 855,  1106 => 850,  1104 => 849,  1098 => 843,  1096 => 842,  1090 => 836,  1088 => 835,  1084 => 832,  1076 => 825,  1074 => 824,  1069 => 819,  1067 => 818,  1061 => 812,  1059 => 811,  1054 => 807,  1048 => 804,  1042 => 801,  1026 => 787,  1024 => 786,  1019 => 781,  1017 => 780,  1012 => 773,  1010 => 772,  1005 => 767,  1003 => 766,  998 => 761,  996 => 760,  992 => 756,  986 => 752,  982 => 751,  978 => 750,  975 => 749,  973 => 748,  968 => 744,  961 => 740,  957 => 739,  953 => 738,  950 => 737,  948 => 736,  942 => 729,  938 => 728,  934 => 727,  931 => 726,  929 => 725,  923 => 720,  919 => 719,  915 => 718,  912 => 717,  910 => 716,  898 => 703,  896 => 702,  886 => 690,  884 => 689,  872 => 676,  870 => 675,  865 => 671,  858 => 667,  851 => 663,  836 => 650,  834 => 649,  828 => 643,  826 => 642,  822 => 638,  817 => 634,  815 => 633,  810 => 629,  804 => 626,  798 => 623,  782 => 609,  780 => 608,  774 => 602,  772 => 601,  764 => 593,  762 => 592,  757 => 587,  755 => 586,  750 => 581,  748 => 580,  742 => 574,  740 => 573,  735 => 567,  733 => 566,  727 => 560,  725 => 559,  719 => 553,  717 => 552,  713 => 548,  708 => 544,  706 => 543,  695 => 532,  693 => 531,  688 => 526,  685 => 525,  683 => 524,  678 => 520,  672 => 516,  670 => 515,  665 => 510,  663 => 509,  655 => 501,  653 => 500,  648 => 495,  646 => 494,  641 => 488,  638 => 487,  636 => 486,  631 => 482,  625 => 478,  623 => 477,  618 => 472,  616 => 471,  608 => 463,  606 => 462,  601 => 457,  599 => 456,  594 => 451,  591 => 450,  589 => 449,  584 => 445,  581 => 444,  579 => 443,  574 => 438,  572 => 437,  567 => 432,  565 => 431,  560 => 426,  558 => 425,  553 => 420,  551 => 419,  543 => 411,  541 => 410,  537 => 406,  529 => 399,  527 => 398,  522 => 393,  520 => 392,  514 => 386,  512 => 385,  507 => 381,  501 => 378,  495 => 375,  479 => 361,  477 => 360,  473 => 356,  466 => 352,  460 => 349,  456 => 347,  451 => 343,  449 => 342,  438 => 330,  436 => 329,  425 => 318,  423 => 317,  417 => 311,  415 => 310,  410 => 302,  408 => 301,  403 => 297,  400 => 296,  398 => 295,  393 => 291,  390 => 290,  388 => 289,  383 => 282,  381 => 281,  376 => 277,  373 => 276,  371 => 275,  366 => 271,  363 => 270,  361 => 269,  356 => 264,  353 => 263,  351 => 262,  346 => 258,  343 => 257,  341 => 256,  336 => 250,  334 => 249,  329 => 244,  327 => 243,  323 => 239,  315 => 232,  313 => 231,  305 => 223,  303 => 222,  298 => 217,  296 => 216,  291 => 210,  289 => 209,  284 => 205,  282 => 204,  277 => 200,  275 => 199,  270 => 192,  268 => 191,  258 => 181,  256 => 180,  247 => 171,  245 => 170,  239 => 164,  237 => 163,  228 => 154,  226 => 153,  222 => 149,  217 => 145,  215 => 144,  205 => 133,  203 => 132,  193 => 122,  191 => 121,  186 => 116,  184 => 115,  179 => 111,  173 => 108,  167 => 104,  165 => 103,  154 => 93,  148 => 89,  146 => 88,  135 => 78,  130 => 75,  128 => 74,  122 => 67,  120 => 66,  116 => 62,  111 => 59,  106 => 55,  104 => 54,  93 => 43,  91 => 42,  86 => 36,  84 => 35,  79 => 31,  76 => 30,  74 => 29,  69 => 25,  64 => 22,  59 => 19,  51 => 14,  45 => 11,  42 => 10,  40 => 9,  37 => 7,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* /* Control Panel Settings *//* */
/* {% for selector in selectors %}*/
/*   {% if selector.properties %}*/
/*     {{ selector.selector }} { {{ selector.properties | join(';') }} }*/
/*   {% endif %}*/
/* {% endfor %}*/
/* */
/* /* Swipebox Loader *//* */
/* {% if journal2.settings.get('ajax-loader') %}*/
/*   #swipebox-slider .slide {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   }*/
/*   .mfp-iframe-scaler iframe {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   background-repeat: no-repeat;*/
/*   background-position: center;*/
/*   }*/
/*   .social {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (min-width: 760px){*/
/* .ui-pnotify{*/
/* width: {{ journal2.settings.get('notification_width', 350) }}px !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('leading_element') %}*/
/*   .home-page #container:before{*/
/*   content: url('image/{{ journal2.settings.get("leading_element") }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_position') == 'right' %}*/
/*   .quickview .product-info .heading-title{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_page_qty_status', 'on') == 'off' %}*/
/*   .product-info .right .cart div .qty{*/
/*   display:none;*/
/*   }*/
/*   .product-info .right .cart div .button{*/
/*   width:100%;*/
/*   }*/
/*   .quickview #button-cart {*/
/*   width: calc(98% - 40px);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('hide_cart', 'off') == 'on' %}*/
/*   .journal-cart{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Site width *//* */
/* #container, #header, #footer, .bottom-footer > div, .bottom-footer.boxed-bar {*/
/* max-width: {{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('breadcrumb_status', 'block') == 'none' %}*/
/*   ul.breadcrumb,*/
/*   .extended-container::before{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('bottom_caption', 'on') == 'off' %}*/
/*   div.lg-sub-html{*/
/*   top:0;*/
/*   bottom:auto;*/
/*   background-color:{{ journal2.settings.get('gallery_bars_bg') }};*/
/*   }*/
/*   .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{*/
/*   bottom:auto;*/
/*   }*/
/*   .lg-toolbar{*/
/*   background-color:transparent;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('pp_bottom_caption', 'on') == 'off' %}*/
/*   .product-page div.lg-sub-html{*/
/*   top:0;*/
/*   bottom:auto;*/
/*   padding: 13px 95px 13px 70px;*/
/*   background-color:{{ journal2.settings.get('pp_gallery_bars_bg') }};*/
/*   }*/
/*   .product-page .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{*/
/*   bottom:auto;*/
/*   }*/
/*   .product-page .lg-toolbar{*/
/*   background-color:transparent;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('pp_bottom_caption', 'on') == 'on' %}*/
/*   .product-page div.lg-sub-html{*/
/*   top:auto;*/
/*   bottom:0;*/
/*   padding: 13px 70px;*/
/*   background-color:{{ journal2.settings.get('pp_gallery_caption_bar_bg') }};*/
/*   }*/
/*   .product-page .lg-toolbar{*/
/*   background-color:{{ journal2.settings.get('pp_gallery_bars_bg') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_options_sold_count_position', 'none') == 'inline-block' %}*/
/*   .product-sold-count.ps-left{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_overflow', 'on') == 'off' %}*/
/*   .product-page .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   min-height:40px;*/
/*   line-height:1.2;*/
/*   padding-bottom:10px;*/
/*   padding-top:10px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('category_page_title_overflow', 'on') == 'off' %}*/
/*   .category-page .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   min-height:40px;*/
/*   line-height:1.2;*/
/*   padding-bottom:10px;*/
/*   padding-top:10px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('hide_category_image', '1') == '0' %}*/
/*   .category-info .image{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /*Notification Position*//* */
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-left' %}*/
/*   .ui-pnotify{*/
/*   left:20px;*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   right:20px;*/
/*   left:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-center' %}*/
/*   .ui-pnotify{*/
/*   left:50%;*/
/*   transform: translateX(-50%);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-right' %}*/
/*   .ui-pnotify{*/
/*   right:20px;*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   left:20px;*/
/*   right:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'center' %}*/
/*   .ui-pnotify{*/
/*   left:50%;*/
/*   top:50% !important;*/
/*   transform: translate(-50%, -50%);*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   right:auto !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_shadow', '0') == '1' %}*/
/*   .ui-pnotify{*/
/*   box-shadow:0px 1px 12px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'hover' %}*/
/*   .ui-pnotify:hover .ui-pnotify-closer{*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'always' %}*/
/*   .ui-pnotify-closer{*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'never' %}*/
/*   .ui-pnotify-closer:hover{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'left' %}*/
/*   .breadcrumb{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'center' %}*/
/*   .breadcrumb{*/
/*   text-align:center*/
/*   }*/
/*   html[dir="rtl"] .breadcrumb{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'right' %}*/
/*   .breadcrumb{*/
/*   text-align:right;*/
/*   }*/
/*   html[dir="rtl"] .breadcrumb{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Shadow *//* */
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'default' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'default' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .product-grid-item  .product-wrapper{*/
/*   box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .product-grid-item  .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('carousel_product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .journal-carousel .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('carousel_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('carousel_product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .journal-carousel .product-grid-item .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('carousel_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'none' %}*/
/*   .journal-carousel .product-grid-item .product-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('cs_product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .custom-sections .product-grid-item .product-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('cs_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('cs_product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .custom-sections .product-grid-item .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('cs_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/*   {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'none' %}*/
/*     .custom-sections .product-grid-item .product-wrapper{*/
/*     box-shadow: none !important;*/
/*     }*/
/*   {% endif %}*/
/* */
/* */
/* */
/* */
/*   {% if journal2.settings.get('product_grid_latest_label_status', 'block') == 'none' %}*/
/*     .product-grid-item .image .label-latest + .label-sale{*/
/*     top: 5px;*/
/*     margin-top: 0;*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if journal2.settings.get('left_column_on_tablet', 'on') == 'off' %}*/
/*     @media only screen and (min-width : 760px) and (max-width: 1024px) {*/
/*     #column-left{*/
/*     display: none;*/
/*     }*/
/*     #column-left + #content,*/
/*     #column-left + #column-right + #content {*/
/*     margin-left:0 !important;*/
/*     }*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if journal2.settings.get('right_column_on_tablet', 'on') == 'off' %}*/
/*     @media only screen and (min-width : 760px) and (max-width: 1024px) {*/
/*     #column-right{*/
/*     display: none;*/
/*     }*/
/*     #column-right + #content,*/
/*     #column-left + #column-right + #content {*/
/*     margin-right:0 !important;*/
/*     }*/
/*     }*/
/*   {% endif %}*/
/* */
/* */
/*   {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'text' %}*/
/*     .product-grid-item .cart .button-left-icon:before{*/
/*     display:none;*/
/*     }*/
/*   {% endif %}*/
/* */
/* .product-grid-item .enquiry-button .button i{*/
/* color:{{ journal2.settings.get('product_grid_button_icon:color') }};*/
/* }*/
/* .product-list-item .enquiry-button .button i{*/
/* color:{{ journal2.settings.get('product_list_button_icon:color') }};*/
/* }*/
/* */
/* footer .contacts > div > span .contact-icon:hover{*/
/* background-color:{{ journal2.settings.get('contacts_icon_bg_hover') }};*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .cart .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-grid-item .cart .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-grid-item .cart .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-grid-item .cart .button[data-hint]:after,*/
/*   .product-grid-item .cart .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-grid-item .cart .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .cart .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .cart .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .cart .button-left-icon::before,*/
/*   .product-grid-item .enquiry-button i::before{*/
/*   margin-right: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_position', 'left') == 'left' %}*/
/*   .product-grid-item .cart .button-right-icon{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_position', 'left') == 'right' %}*/
/*   .product-grid-item .cart .button-left-icon{*/
/*   display:none !important;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* BLOG *//* */
/* */
/* {% if journal2.settings.get('post_grid_button_icon_position', 'left') == 'right' or journal2.settings.get('posts_grid_button_icon_position', 'left') == 'right' %}*/
/*   .post-button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .post-button-right-icon{*/
/*   display:inline;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_title_status', 'on') == 'off' %}*/
/*   .one-page-checkout h1.heading-title{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'none' %}*/
/*   .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'default' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'default' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('post_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('post_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'none' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'default' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/*   .post-item .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'default' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/*   .post-item .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('posts_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('posts_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'none' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'default' and journal2.settings.get('post_list_shadow_2', 'hover') == 'hover' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/*   .blog-list-view .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'default' and journal2.settings.get('post_list_shadow_2', 'hover') == 'always' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'custom' and journal2.settings.get('post_list_shadow_2', 'hover') == 'hover' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/*   .blog-list-view .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('post_list_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'custom' and journal2.settings.get('post_list_shadow_2', 'hover') == 'always' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('post_list_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_details_tip', 'always') == 'hover' %}*/
/*   .product-details:before {*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   transition: all 0.2s;*/
/*   }*/
/*   .product-grid-item:hover .product-details:before {*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_details_tip', 'always') == 'never' %}*/
/*   .product-details:before {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Quickview*//* */
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'always' %}*/
/*   .product-grid-item .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'never' %}*/
/*   .product-grid-item .quickview-button {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('product_grid_quickview_status', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .rating{*/
/*   margin-top:-28px;*/
/*   transition: all 0.1s ease-out;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('product_grid_quickview_status', 'hover') == 'always' %}*/
/*   .product-grid-item .rating{*/
/*   margin-top:-28px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_position', 'left') == 'left' %}*/
/*   .product-grid-item .quickview-button .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_position', 'left') == 'right' %}*/
/*   .product-grid-item .quickview-button .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'text' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before,*/
/*   .product-grid-item .quickview-button .button-right-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-grid-item .quickview-button .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-grid-item .quickview-button .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-grid-item .quickview-button [data-hint]:after,*/
/*   .product-grid-item .quickview-button .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before{*/
/*   margin-right: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Wishlist/Compare *//* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'text' %}*/
/*   .product-grid-item .wishlist a i,*/
/*   .product-grid-item .compare a i{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .button-wishlist-text,*/
/*   .product-grid-item .button-compare-text{*/
/*   display: none;*/
/*   }*/
/*   .product-grid-item .wishlist [data-hint]:after,*/
/*   .product-grid-item .wishlist .hint--top:before,*/
/*   .product-grid-item .compare [data-hint]:after,*/
/*   .product-grid-item .compare .hint--top:before{*/
/*   display:block;*/
/*   }*/
/* */
/*   .product-grid-item .wishlist .hint--top:before,*/
/*   .product-grid-item .compare .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/*   .product-grid-item .wishlist .hint--right:before,*/
/*   .product-grid-item .compare .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/*   .product-grid-item .wishlist .hint--left:before,*/
/*   .product-grid-item .compare .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .wishlist a i,*/
/*   .product-grid-item .compare a i{*/
/*   border:0;*/
/*   background-color:transparent !important;*/
/*   padding:0 5px;*/
/*   }*/
/*   .product-grid-item .wishlist a i:before,*/
/*   .product-grid-item .compare a i:before{*/
/*   line-height:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .product-details .wishlist,*/
/*   .product-grid-item .product-details .compare,*/
/*   .product-list-item .image .wishlist,*/
/*   .product-list-item .image .compare,*/
/*   .product-grid-item .image .button-wishlist-text,*/
/*   .product-grid-item .image .button-compare-text{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_on_hover', 'on') == 'on' and journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display', '') == 'icon' %}*/
/*   .product-grid-item .image .wishlist,*/
/*   .product-grid-item .image .compare{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-grid-item:hover .image .wishlist,*/
/*   .product-grid-item:hover .image .compare{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-list-item .cart .button{*/
/*   width:{{ journal2.settings.get('product_list_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_list_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_list_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-list-item .quickview-button .button{*/
/*   width:{{ journal2.settings.get('product_list_quickview_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_list_quickview_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_list_quickview_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .cart .button{*/
/*   width:{{ journal2.settings.get('product_grid_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/*   .product-grid-item .cart{*/
/*   height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .quickview-button .button{*/
/*   width:{{ journal2.settings.get('product_grid_quickview_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_grid_quickview_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_grid_quickview_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product List *//* */
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'hover' %}*/
/*   .product-list-item:hover{*/
/*   box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'always' %}*/
/*   .product-list-item{*/
/*   box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'never' %}*/
/*   .product-list-item{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'text' %}*/
/*   .product-list-item .cart .button-left-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'icon' %}*/
/*   .product-list-item .cart .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-list-item .cart .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-list-item .cart .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-list-item .cart .button[data-hint]:after,*/
/*   .product-list-item .cart .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-list-item .cart .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .cart .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .cart .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'both' %}*/
/*   .product-list-item .cart .button-left-icon:before,*/
/*   .product-list-item .enquiry-button i:before{*/
/*   margin-right: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_position', 'left') == 'left' %}*/
/*   .product-list-item .cart .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_position', 'left') == 'right' %}*/
/*   .product-list-item .cart .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product List Quickview*//* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'hover' %}*/
/*   .product-list-item:hover .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'always' %}*/
/*   .product-list-item .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'never' %}*/
/*   .product-list-item .quickview-button {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_position', 'left') == 'left' %}*/
/*   .product-list-item .quickview-button .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_position', 'left') == 'right' %}*/
/*   .product-list-item .quickview-button .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'text' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'icon' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-list-item .quickview-button .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-list-item .quickview-button .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-list-item .quickview-button .button[data-hint]:after,*/
/*   .product-list-item .quickview-button .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-list-item .quickview-button .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .quickview-button .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .quickview-button .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'both' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   margin-right: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Page *//* */
/* */
/* #product-gallery.image-additional-grid a{*/
/* width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%;*/
/* }*/
/* */
/* {% if journal2.settings.get('product_page_gallery_carousel', '1') == '0' %}*/
/*   .product-info .left .image-additional{*/
/*   margin-right: -{{ journal2.settings.get('product_page_additional_spacing') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_button_icon_position', 'left') == 'left' %}*/
/*   #button-cart .button-cart-text:after{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_button_icon_position', 'left') == 'right' %}*/
/*   #button-cart .button-cart-text:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_gallery_carousel_arrows', 'hover') == 'hover' %}*/
/*   .product-info .left .image-additional .swiper-button-prev,*/
/*   .product-info .left .image-additional .swiper-button-next{*/
/*   display:none;*/
/*   }*/
/*   .product-info .left .image-additional:hover .swiper-button-prev,*/
/*   .product-info .left .image-additional:hover .swiper-button-next{*/
/*   display:block;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('boxed_header', '0') == '1' and journal2.settings.get('boxed_header_above', 'on') == 'off' %}*/
/*   @media only screen and (min-width: 980px){*/
/*   #top-modules > div:first-of-type.journal2_slider{*/
/*   margin-top:-{{ journal2.settings.get('boxed_top_spacing') + 120 }}px;*/
/*   position:relative;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .compare-info td{*/
/* border-right-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* table.list{*/
/* border-bottom-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* border-left-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* table.list td{*/
/* border-right-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* border-top-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* */
/* */
/* /* Product Labels*//* */
/* */
/* .label-latest + .label-sale{*/
/* top: {{ journal2.settings.get('label_latest_height') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('label_latest_status', 'always') == 'hover' %}*/
/*   .label-latest{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-latest, .product-list-item:hover .label-latest, .product-info .image:hover .label-latest{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('label_latest_status', 'always') == 'never' %}*/
/*   .label-latest{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('label_special_status', 'always') == 'hover' %}*/
/*   .label-sale{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-sale, .product-list-item:hover .label-sale, .product-info .image:hover .label-sale{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* */
/* */
/* {% endif %}*/
/* {% if journal2.settings.get('out_of_stock_status', 'always') == 'hover' %}*/
/*   .label-outofstock{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-outofstock, .product-list-item:hover .label-outofstock, .product-info .image:hover .label-outofstock{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('out_of_stock_status', 'always') == 'never' %}*/
/*   .label-outofstock{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('out_of_stock_style', 'diagonal') == 'normal' %}*/
/*   span.label-outofstock {*/
/*   padding: .4em .55em .3em;*/
/*   transform: translate(5px, 5px) rotate(0deg);*/
/*   min-width:inherit;*/
/*   }*/
/*   html[dir="rtl"] span.label-outofstock {*/
/*   padding: .4em .55em .3em;*/
/*   transform: translate(-5px, 5px) rotate(0deg);*/
/*   min-width:inherit;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_list_latest_label_status', 'block') == 'none' %}*/
/*   .product-list-item .image .label-latest + .label-sale{*/
/*   top: 5px;*/
/*   margin-top: 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* #more-details.hint--top:before{*/
/* border-top-color: {{ journal2.settings.get('quickview_more_details_tip_bg') }};*/
/* }*/
/* */
/* .boxed-header header{*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* }*/
/* .boxed-header .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .boxed-header .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('boxed_menu_off', '1') == '0' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .boxed-header .is-sticky header .header{*/
/*   max-width:{{ journal2.settings.get('site_width') }}px;*/
/*   left: 50%;*/
/*   transform: translateX(-50%);*/
/*   }*/
/*   }*/
/*   .is-sticky .header {*/
/*   box-shadow: none;*/
/*   background: transparent;*/
/*   }*/
/*   .is-sticky .journal-menu-bg {*/
/*   background-color:transparent;*/
/*   background-image:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('pp_gallery_name_overflow', 'on') == 'off' %}*/
/*   div.lg-sub-html > span{*/
/*   white-space:normal;*/
/*   }*/
/*   div.lg-sub-html {*/
/*   padding: 20px;*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .journal-language .dropdown-toggle,*/
/* .journal-currency .dropdown-toggle{*/
/* color:{{ journal2.settings.get('full_text_font_phone') }};*/
/* }*/
/* .journal-header-center #language,*/
/* .journal-header-center #currency{*/
/* border-color:{{ journal2.settings.get('lang_divider_phone') }};*/
/* }*/
/* }*/
/* */
/* .sticky-menu .is-sticky .journal-header-default .header{*/
/* background-color: {{ journal2.settings.get('main_menu_bg_color') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('one_page_phone_required', 'block') == 'none' %}*/
/*   .phone-input label::before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_phone_required', 'block') == 'none' and journal2.settings.get('one_page_show_phone', 'block') == 'none' %}*/
/*   #content.one-page-checkout div fieldset > div.phone-input{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* html[dir="rtl"] .journal-carousel .htabs a:last-of-type{*/
/* border-left-color:{{ journal2.settings.get('carousel_title_divider') }};*/
/* }*/
/* */
/* .boxed-header .journal-header-center .journal-links{*/
/* padding-left: 10px;*/
/* }*/
/* .boxed-header .journal-header-center .journal-search{*/
/* padding-left: 20px;*/
/* }*/
/* .boxed-header .journal-header-center .journal-secondary{*/
/* padding-right: 10px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('cart_header_shadow', 'none') == 'none' %}*/
/*   #cart{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-header-center .journal-center-bg{*/
/* top:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('cart_header_shadow', 'none') == 'default' %}*/
/*   #cart {*/
/*   box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('cart_content_shadow', 'none') == 'none' %}*/
/*   #cart .cart-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cart_content_shadow', 'none') == 'default' %}*/
/*   #cart .cart-wrapper {*/
/*   box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('search_shadow', 'none') == 'none' %}*/
/*   #search input{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_shadow', 'none') == 'default' %}*/
/*   #search input{*/
/*   box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_autosuggest_shadow', 'none') == 'none' %}*/
/*   .autocomplete2-suggestions{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_autosuggest_shadow', 'none') == 'default' %}*/
/*   .autocomplete2-suggestions{*/
/*   box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (max-width: 760px) {*/
/* ul.super-menu > li > a,*/
/* ul.super-menu > li:hover > a{*/
/* color:{{ journal2.settings.get('mobile_menu_item_color_phone') }};*/
/* }*/
/* ul.super-menu > li,*/
/* ul.super-menu > li:hover{*/
/* background-color:{{ journal2.settings.get('mobile_menu_item_bg_phone') }};*/
/* }*/
/* .boxed-header .journal-header-center .journal-search,*/
/* .boxed-header .journal-header-center .journal-links{*/
/* padding-left: 0;*/
/* }*/
/* .boxed-header .journal-header-center .journal-cart,*/
/* .boxed-header .journal-header-center .journal-secondary{*/
/* padding-right: 0;*/
/* }*/
/* .button-search{*/
/* background-color:{{ journal2.settings.get('search_button_bg_mobile') }};*/
/* }*/
/* .button-search i:before{*/
/* color:{{ journal2.settings.get('search_icon_color_mobile') }} !important;*/
/* }*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('catalog_grid_compare', 'inline-block') == 'inline-block' %}*/
/*   .product-filter .product-compare {*/
/*   display: flex;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_compare_link_status', 'on') == 'off' %}*/
/*   .product-filter .product-compare{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (max-width: 980px) {*/
/* .mobile-menu-on-tablet ul.super-menu > li > a,*/
/* .mobile-menu-on-tablet ul.super-menu > li:hover > a{*/
/* color:{{ journal2.settings.get('mobile_menu_item_color_phone') }};*/
/* }*/
/* .mobile-menu-on-tablet ul.super-menu > li,*/
/* .mobile-menu-on-tablet ul.super-menu > li:hover{*/
/* background-color:{{ journal2.settings.get('mobile_menu_item_bg_phone') }};*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('responsive_design') == '1' %}*/
/*   @media only screen and (min-width:760px) and (max-width:{{ journal2.settings.get('site_width') + 15 }}px) {*/
/*   .journal-header-center .journal-search{*/
/*   padding-left: 15px;*/
/*   }*/
/*   .journal-header-center .journal-cart{*/
/*   padding-right: 15px;*/
/*   }*/
/*   .journal-header-center .journal-cart{*/
/*   width:calc(25% - 20px);*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-header-center .journal-search{*/
/*   padding-right: 15px;*/
/*   }*/
/*   }*/
/*   @media only screen and (max-width:760px) {*/
/*   .journal-header-center .journal-search,*/
/*   html[dir="rtl"] .journal-header-center .journal-search{*/
/*   padding-left: 0;*/
/*   padding-right: 0;*/
/*   }*/
/*   .journal-header-center .journal-cart,*/
/*   html[dir="rtl"] .journal-header-center .journal-cart{*/
/*   padding-right: 0;*/
/*   padding-left: 0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (min-width: 760px){*/
/* .boxed-header .journal-header-center .journal-cart{*/
/* padding-right:15px;*/
/* }*/
/* html[dir="rtl"] .boxed-header .journal-header-center .journal-cart{*/
/* padding-right:0;*/
/* padding-left:15px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (min-width: {{ journal2.settings.get('site_width') }}px) {*/
/* .sticky-menu:not(.boxed-header) .is-sticky .journal-header-compact #header .journal-menu .super-menu > li:first-of-type > a {*/
/* margin-left: 0;*/
/* }*/
/* .skin-16 .journal-header-mega .journal-search {*/
/* padding-right: 0;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .super-menu, .mega-menu, .html-menu{*/
/* border-radius:0;*/
/* }*/
/* .bottom-footer.fullwidth-bar .copyright{*/
/* padding-left: 15px;*/
/* }*/
/* .bottom-footer.fullwidth-bar .payments{*/
/* padding-right: 15px;*/
/* }*/
/* */
/* #top-modules > div:not(.gutter),*/
/* #bottom-modules > div:not(.gutter){*/
/* padding-left: 20px;*/
/* padding-right: 20px;*/
/* }*/
/* */
/* #top-modules .journal2_slider,*/
/* #bottom-modules .journal2_slider,*/
/* #top-modules .journal2_headline_rotator{*/
/* padding-left: 0 !important;*/
/* padding-right: 0 !important;*/
/* }*/
/* */
/* .no-secondary .journal-header-center #currency{*/
/* border-right-width:0;*/
/* }*/
/* .no-secondary .journal-header-center #language{*/
/* border-left-width:0;*/
/* }*/
/* html[dir="rtl"].no-secondary .journal-header-center #currency{*/
/* border-left-width:0;*/
/* border-right-width:1px;*/
/* }*/
/* html[dir="rtl"].no-secondary .journal-header-center #language{*/
/* border-right-width:0;*/
/* border-left-width:1px;*/
/* }*/
/* .journal-header-compact #header .journal-search {*/
/* padding-right:15px !important;*/
/* }*/
/* html[dir="rtl"] .journal-header-compact #header .journal-search {*/
/* padding-right:0 !important;*/
/* padding-left:15px !important;*/
/* }*/
/* .sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* .boxed-header body{*/
/* padding:0;*/
/* }*/
/* .fullwidth-footer .columns{*/
/* padding-left: 15px;*/
/* }*/
/* .copyright{*/
/* padding-left: 15px;*/
/* }*/
/* .journal-header-mega .journal-logo{*/
/* padding-left:15px;*/
/* }*/
/* html[dir="rtl"] .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:15px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* }*/
/* html[dir="rtl"] .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:0;*/
/* }*/
/* }*/
/* */
/* .boxed-header .journal-header-mega .journal-logo{*/
/* padding-left:15px;*/
/* }*/
/* html[dir="rtl"].boxed-header .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:15px;*/
/* }*/
/* */
/* @media only screen and (min-width : 760px) {*/
/* .side-blocks-active .journal-fullwidth-slider .tp-leftarrow,*/
/* .side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {*/
/* left: 60px !important;*/
/* }*/
/* .side-blocks-active .journal-fullwidth-slider .tp-rightarrow,*/
/* .side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {*/
/* right: 60px !important;*/
/* }*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow,*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {*/
/* right: 60px !important;*/
/* left: auto !important;*/
/* }*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow,*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {*/
/* left: 60px !important;*/
/* right: auto !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('quickview_more_details', '1') == '0' %}*/
/*   .quickview #more-details{*/
/*   display:none;*/
/*   }*/
/*   .quickview #button-cart{*/
/*   width:63%;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('mega_header_align_2', 'center') == 'left' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .journal-header-mega #logo a img{*/
/*   left: 0;*/
/*   transform: translate(0, -50%);*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mega_header_align_2', 'center') == 'left' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   html[dir="rtl"] .journal-header-mega #logo a img{*/
/*   left: auto;*/
/*   right:0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_menu_shadow', 'none') == 'none' %}*/
/*   header .links a,*/
/*   header .links .no-link{*/
/*   border-bottom-color:#e4e4e4;*/
/*   }*/
/* {% endif %}*/
/* */
/* .boxed-header.default-header .journal-top-header{*/
/* clip: rect(0px,{{ journal2.settings.get('site_width') }}px,45px,0px);*/
/* }*/
/* */
/* .journal-header-default .links .no-link{*/
/* border-color:{{ journal2.settings.get('top_menu_border_color') }}*/
/* }*/
/* */
/* .journal-header-center #cart .content:before,*/
/* .oc2 #cart .content .cart-wrapper:before{*/
/* color:{{ journal2.settings.get('cart_content_bg') }}*/
/* }*/
/* */
/* .journal-header-center .autocomplete2-suggestions:before{*/
/* color:{{ journal2.settings.get('autosuggest_bg') }}*/
/* }*/
/* */
/* {% if journal2.settings.get('top_menu_icons_display', 'inline') == 'block' %}*/
/*   header .links a i,*/
/*   .links .no-link i,*/
/*   .journal-header-default #header .journal-links .top-menu > li > a{*/
/*   display:block;*/
/*   }*/
/*   header .links a i,*/
/*   .links .no-link i{*/
/*   margin-top:3px;*/
/*   }*/
/*   header .links .top-menu-link{*/
/*   position:relative;*/
/*   top:-2px;*/
/*   }*/
/*   .has-dropdown::after {*/
/*   margin-left: 2px;*/
/*   top: -3px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-language .dropdown-menu:before,*/
/* .journal-currency .dropdown-menu:before{*/
/* color:{{ journal2.settings.get('lang_drop_bg') }}*/
/* }*/
/* */
/* #header .top-menu .top-dropdown li:first-of-type {*/
/* border-top-left-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* border-top-right-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* }*/
/* #header .top-menu .top-dropdown li:last-of-type {*/
/* border-bottom-left-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* border-bottom-right-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* }*/
/* #header .top-menu .top-dropdown li:first-of-type::before{*/
/* color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }}*/
/* }*/
/* */
/* #search ::-webkit-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search ::-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-ms-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* .compare-info tbody td{*/
/* border-left-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* @media only screen and (max-width: 760px){*/
/* #search ::-webkit-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search ::-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-ms-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* }*/
/* */
/* .button-search{*/
/* border-right-style:{{ journal2.settings.get('search_divider_type') }};*/
/* border-right-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* html[dir="rtl"] .button-search{*/
/* border-left-style:{{ journal2.settings.get('search_divider_type') }};*/
/* border-left-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-left{*/
/* border-left-style: {{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('top_divider_phone', 'off') == 'on' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .center-header #search, .default-header #search{*/
/*   border-top-width:1px;*/
/*   border-top-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-top-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_button_pos', 'left') == 'right' %}*/
/*   .button-search {*/
/*   right: 0;*/
/*   }*/
/*   html[dir="rtl"] .button-search {*/
/*   right: auto;*/
/*   left:0;*/
/*   }*/
/*   #search input {*/
/*   padding-left: 12px;*/
/*   padding-right: 50px;*/
/*   }*/
/*   .button-search{*/
/*   border-right-width:0;*/
/*   border-left-width:1px;*/
/*   border-left-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-left-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/*   html[dir="rtl"] .button-search{*/
/*   border-left-width:0;*/
/*   border-right-width:1px;*/
/*   border-right-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-right-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* header .journal-login{*/
/* border-bottom-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* */
/* */
/* .super-menu > li:last-of-type{*/
/* border-right-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .default-header .journal-login{*/
/* background-color: {{ journal2.settings.get('secondary_menu_bg_color_mobile') }}*/
/* }*/
/* .journal-header-center #search input,*/
/* .journal-header-center .button-search{*/
/* border-radius:0;*/
/* }*/
/* .center-header #search input, .default-header #search input{*/
/* background-color:{{ journal2.settings.get('search_bg_mobile') }};*/
/* }*/
/* .center-header header #cart, .default-header header #cart{*/
/* background-color:{{ journal2.settings.get('cart_heading_bg_mobile') }};*/
/* }*/
/* .journal-menu .mobile-menu > li{*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* }*/
/* */
/* .inline-button .product-details{*/
/* padding-bottom:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('product_grid_button_block_button', 'block-button') == 'inline-button' and journal2.settings.get('catalog_grid_cart', 'block') == 'block' %}*/
/*   .product-grid-item .cart{*/
/*   display:inline-block !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' %}*/
/*   .mega-menu .product-grid-item .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' %}*/
/*   .product-grid-item .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_product_page_cart', 'block') == 'none' %}*/
/*   .quickview .product-info .right .cart{*/
/*   display:table;*/
/*   }*/
/*   .product-info .right .cart div .qty,*/
/*   .product-info .right .cart div #button-cart{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' %}*/
/*   .custom-sections .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' %}*/
/*   .side-column .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' %}*/
/*   #content .journal-carousel .product-grid-item .product-details .cart,*/
/*   #top-modules .journal-carousel .product-grid-item .product-details .cart,*/
/*   #bottom-modules .journal-carousel .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_status', '1') == '0' %}*/
/*   .product-info .right .options h3{*/
/*   display:none;*/
/*   }*/
/*   .product-info .right .option-image:first-of-type{*/
/*   margin-top:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* .product-info .right .options.push-1 .option-image li.selected span img{*/
/* border-color:{{ journal2.settings.get('product_page_options_push_image_border_hover') }};*/
/* }*/
/* */
/* .mega-menu-categories .mega-menu-item,*/
/* .mega-menu-brands .mega-menu-item,*/
/* .mega-menu-html .mega-menu-item,*/
/* #header .mega-menu .product-grid-item{*/
/* margin-bottom:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-right:last-of-type{*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-right:last-of-type{*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* }*/
/* */
/* .mega-menu > div{*/
/* margin-bottom:-{{ journal2.settings.get('menu_categories_item_margin') }}px !important;*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .mega-menu-item > div,*/
/* html[dir="rtl"] #header .mega-menu .product-wrapper{*/
/* margin-right:0;*/
/* margin-left:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .mega-menu .mega-menu-column:last-of-type > div{*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu .mega-menu-column.mega-menu-products > div{*/
/* margin-left:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .mega-menu-column > div > h3, .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-right:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu-column > div > h3, html[dir="rtl"] .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-right:0;*/
/* margin-left:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* .mega-menu .mega-menu-column:last-of-type > h3,*/
/* .mega-menu .mega-menu-column:last-of-type > div > h3,*/
/* .mega-menu .mega-menu-column:last-of-type > .menu-cms-block,*/
/* .mega-menu .mega-menu-column.mega-menu-html-block > div{*/
/* margin-right:0;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .super-menu{*/
/* border-width:0;*/
/* }*/
/* .mega-menu .mega-menu-column > div{*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu .mega-menu-column > div{*/
/* margin-left:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* margin-right:0;*/
/* }*/
/* }*/
/* */
/* .journal-sf .sf-image .box-content ul{*/
/* margin-bottom:-{{ journal2.settings.get('filter_image_section_margin_bottom') }}px;*/
/* margin-right:-{{ journal2.settings.get('filter_image_section_margin_right') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('blog_show_author', 'on') == 'off' %}*/
/*   .p-author, .p-posted{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_date', 'on') == 'off' %}*/
/*   .p-date{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_comments', 'on') == 'off' %}*/
/*   .p-comment{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_author', 'on') == 'off' and journal2.settings.get('blog_show_date', 'on') == 'off' and journal2.settings.get('blog_show_comments', 'on') == 'off' %}*/
/*   .comment-date{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher{*/
/*   padding-right: 12px;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   margin-top:0;*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-checkout .coupon-voucher .cvr div.checkout-voucher{*/
/*   padding-right:0;*/
/*   padding-left: 12px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_voucher_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr .checkout-voucher{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   margin-top:0;*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   padding-right:0;*/
/*   padding-left: 12px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr .checkout-reward{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_voucher_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher div.checkout-voucher,*/
/*   .journal-checkout .coupon-voucher div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward,*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_voucher_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher,*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_voucher_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('dropdown_shadow', 'none') == 'none' %}*/
/*   .drop-down ul{*/
/*   box-shadow:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_product_page_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_product_page_compare', 'inline-block') == 'none' %}*/
/*   .product-info .right .wishlist-compare{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_name', 'table') == 'none' or journal2.settings.get('catalog_grid_carousel_name', 'table') == 'none' or journal2.settings.get('catalog_grid_side_carousel_name', 'table') == 'none' or journal2.settings.get('catalog_grid_cs_name', 'table') == 'none' or journal2.settings.get('catalog_grid_main_menu_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   padding-top:13px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' %}*/
/*   .product-grid-item .price + hr,*/
/*   .product-grid-item .price + .rating + hr{*/
/*   display:block;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_carousel_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_cs_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_main_menu_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('contacts_display', 'off') == 'on' %}*/
/*   footer .contacts{*/
/*   text-align:center;*/
/*   }*/
/*   footer .contacts-left,*/
/*   html[dir="rtl"] footer .contacts-left{*/
/*   float: none;*/
/*   }*/
/*   footer .contacts-right{*/
/*   display: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* .has-cta .rotator-tex{*/
/* line-height:{{ journal2.settings.get('cta_button_height') }}px;*/
/* }*/
/* */
/* footer .contacts .hint--top:before{*/
/* border-top-color: {{ journal2.settings.get('footer_tooltip_bg_color') }};*/
/* }*/
/* */
/* */
/* .side-column .box-category,*/
/* .side-column .box-content,*/
/* .side-column .box-content > div,*/
/* .side-column .box-content > ul > li:last-of-type,*/
/* .side-column .oc-module .product-grid-item:last-of-type{*/
/* border-bottom-left-radius: inherit;*/
/* border-bottom-right-radius: inherit;*/
/* border-radius:inherit;*/
/* }*/
/* */
/* */
/* .journal-sf ul li label:hover{*/
/* color:{{ journal2.settings.get('filter_active_text') }};*/
/* }*/
/* .sf-icon:before{*/
/* border-top-color:{{ journal2.settings.get('reset_tip_bg') }};*/
/* }*/
/* */
/* /**/
/* .journal-sf ul li label:hover img{*/
/* border-color:{{ journal2.settings.get('filter_active_border') }};*/
/* } *//* */
/* */
/* .sf-price .value:after{*/
/* border-bottom-color:{{ journal2.settings.get('filter_price_tip') }};*/
/* }*/
/* */
/* .mobile-trigger{*/
/* background-color:{{ journal2.settings.get('main_menu_bg_color') }};*/
/* }*/
/* */
/* */
/* .journal-header-default .links > a{*/
/* border-bottom-color: transparent;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .super-menu{*/
/* background-color:{{ journal2.settings.get('mega_menu_bg') }};*/
/* }*/
/* .journal-header-default .links > a{*/
/* border-bottom-color: {{ journal2.settings.get('top_menu_border_color') }};*/
/* }*/
/* }*/
/* .nav-numbers a:hover,*/
/* .nav-numbers li.active a{*/
/* -webkit-backface-visibility: hidden;*/
/* -webkit-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* -moz-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* -ms-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* }*/
/* .headline-mode .nav-numbers a:hover,*/
/* .headline-mode .nav-numbers li.active a{*/
/* -webkit-backface-visibility: hidden;*/
/* -webkit-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* -moz-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* -ms-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* }*/
/* .tp-bullets.simplebullets.round .bullet.selected,*/
/* .tp-bullets.simplebullets.round .bullet:hover,*/
/* .journal-simple-slider .owl-controls .owl-page.active span,*/
/* .journal-simple-slider .owl-controls.clickable .owl-page:hover span{*/
/* transform: scale({{ journal2.settings.get('slider_bullet_scale') }});*/
/* }*/
/* */
/* .swiper-pagination-bullet:hover, .swiper-pagination-bullet-active{*/
/* transform: scale({{ journal2.settings.get('carousel_bullet_scale') }});*/
/* }*/
/* */
/* @media only screen and (max-width: 980px) {*/
/* .journal-header-default .mega-menu{*/
/* width: 100%;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .journal-header-center .journal-secondary{*/
/* background-color:{{ journal2.settings.get('top_bar_bg_color') }};*/
/* }*/
/* }*/
/* */
/* .mega-menu{*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .bottom-menu-bar #header .top-menu > li{*/
/* border-color:{{ journal2.settings.get('top_menu_border_color') }};*/
/* }*/
/* .bottom-menu-bar #header .journal-links{*/
/* background-color:{{ journal2.settings.get('top_menu_bg_color') }};*/
/* }*/
/* .bottom-menu-bar .journal-header-center .journal-secondary {*/
/* border-top-width: 0;*/
/* }*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li{*/
/* border-color:{{ journal2.settings.get('bottom_bar_border_color') }};*/
/* }*/
/* .bottom-menu-bar #header div.journal-links, .bottom-menu-bar #header .journal-links a:hover{*/
/* background-color:{{ journal2.settings.get('bottom_bar_bg_color') }};*/
/* }*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > a,*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > a:hover,*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > .no-link{*/
/* color:{{ journal2.settings.get('bottom_bar_color') }};*/
/* }*/
/* }*/
/* */
/* .boxed-header .is-sticky .header {*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* left: 50%;*/
/* transform: translateX(-50%);*/
/* }*/
/* */
/* {% if journal2.settings.get('sticky_header_style', 'default') == 'menu' %}*/
/*   .is-sticky .super-menu, .is-sticky .journal-menu-bg {*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('sticky_header_style', 'default') == 'menu' and journal2.settings.get('boxed_menu_off', '0') == '1' %}*/
/*   html.boxed-header .is-sticky .header {*/
/*   max-width:100%;*/
/*   left:0;*/
/*   transform: translateX(0);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* .bottom-menu-bar #header .journal-links .top-menu .top-dropdown li:last-of-type::after{*/
/* color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }};*/
/* }*/
/* */
/* @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* .mobile-menu-on-tablet .mobile-menu > li > ul,*/
/* .mobile-menu-on-tablet .mobile-menu > li > .mega-menu{*/
/* border-style:{{ journal2.settings.get('main_menu_mobile_border_type') }};*/
/* border-color:{{ journal2.settings.get('main_menu_mobile_border_color') }};*/
/* }*/
/* .mobile-menu-on-tablet ul.menu-centered{*/
/* height:auto;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .mobile-menu > li > ul,*/
/* .mobile-menu > li > .mega-menu{*/
/* border-style:{{ journal2.settings.get('main_menu_mobile_border_type') }};*/
/* border-color:{{ journal2.settings.get('main_menu_mobile_border_color') }};*/
/* }*/
/* }*/
/* */
/* @media only screen and (min-width: 760px) {*/
/* .journal-header-mega #search {*/
/* max-width: {{ journal2.settings.get('search_width', '100') }}%;*/
/* left: {{ journal2.settings.get('search_offset', '0') }}px;*/
/* }*/
/* .journal-header-center .j-100{*/
/* height:{{ journal2.settings.get('header_height_input', '100') }}px;*/
/* }*/
/* .journal-header-center .journal-menu-bg{*/
/* top:{{ journal2.settings.get('header_height_input', '100') + 40 + journal2.settings.get('top_bar_height', '40') - 40 }}px;*/
/* }*/
/* .journal-header-center .top-bar > .j-min, .journal-header-center .top-menu > li > .m-item, .journal-header-center .journal-top-header{*/
/* height:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* .journal-header-center .journal-menu,*/
/* .journal-header-center .journal-menu-bg,*/
/* .journal-header-center .mobile-trigger,*/
/* ul.menu-centered{*/
/* height:{{ journal2.settings.get('main_menu_height', '40') }}px;*/
/* }*/
/* .journal-header-center .mobile-trigger,*/
/* .journal-header-center .super-menu > li > a{*/
/* line-height:{{ journal2.settings.get('main_menu_height', '40') }}px;*/
/* }*/
/* .journal-header-center .journal-language form .dropdown-menu,*/
/* .journal-header-center .journal-currency form .dropdown-menu{*/
/* top:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* */
/* .sticky-default.center-header .is-sticky .journal-header-center .j-100{*/
/* height:{{ journal2.settings.get('sticky_header_height_input', '') }}px;*/
/* }*/
/* .sticky-default.center-header .is-sticky .journal-menu-bg{*/
/* top:{{ journal2.settings.get('sticky_header_height_input', '') }}px;*/
/* }*/
/* */
/* .is-sticky .journal-header-center .journal-menu,*/
/* .is-sticky .journal-header-center .journal-menu-bg,*/
/* .is-sticky .journal-header-center .mobile-trigger{*/
/* height:{{ journal2.settings.get('sticky_main_menu_height', '40') }}px;*/
/* }*/
/* .is-sticky .journal-header-center .mobile-trigger,*/
/* .is-sticky .journal-header-center .super-menu > li > a{*/
/* line-height:{{ journal2.settings.get('sticky_main_menu_height', '40') }}px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* #header .journal-logo{*/
/* height:{{ journal2.settings.get('header_height_input_phone', '') }}px !important;*/
/* }*/
/* }*/
/* */
/* .center-header body.is-sticky .header-assets.top-bar{*/
/* background-color:{{ journal2.settings.get('top_bar_bg_color') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('logo_on_phone', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   #header .journal-logo {*/
/*   display: none;*/
/*   }*/
/*   .journal-header-center .journal-secondary {*/
/*   border-bottom-width: 0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('mega_menu_animate', 'on') == 'off' and journal2.settings.get('mobile_menu_on', 'phone') == 'tablet' %}*/
/*   @media only screen and (min-width: 980px){*/
/*   .super-menu>li:hover .mega-menu,*/
/*   .super-menu>li:hover > ul{*/
/*   display:block !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mega_menu_animate', 'on') == 'off' and journal2.settings.get('mobile_menu_on', 'phone') == 'phone' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .super-menu>li:hover .mega-menu,*/
/*   .super-menu>li:hover > ul{*/
/*   display:block !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('header_box_shadow_type', 'none') == 'default' %}*/
/*   .header{*/
/*   box-shadow:0 0 5px rgba(0, 0, 0, 0.4);*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* .mobile-menu-on-tablet .journal-header-center .journal-menu{*/
/* height:auto;*/
/* }*/
/* .mobile-menu-on-tablet .journal-header-center .super-menu > li > a{*/
/* line-height:40px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_show_category_images', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .mega-menu-categories .mega-menu-item ul,*/
/*   .mega-menu-categories .mega-menu-item.menu-image-left ul{*/
/*   width:100%;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item img {*/
/*   display: none !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('remove_top_bar', 'on') == 'off' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .header-assets.top-bar,*/
/*   .journal-top-header{*/
/*   display:none;*/
/*   }*/
/*   .journal-header-center .journal-menu-bg{*/
/*   top:{{ journal2.settings.get('header_height_input', '100') }}px;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('side_modules_margin', 'on') == 'off' %}*/
/*   .side-column .box{*/
/*   margin-bottom:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_price_full', 'inline-block') == 'block' %}*/
/*   .product-grid-item .price{*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('filter_image_size', 'medium') == 'tiny' %}*/
/*   .product-grid-item .price{*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cs_two_per_row', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .box-sections ul li {*/
/*   width: 100%;*/
/*   border-right-width: 0;*/
/*   }*/
/*   .box-sections ul li:nth-last-child(2):nth-child(odd) {*/
/*   border-bottom-width: 1px;*/
/*   }*/
/*   html[dir="rtl"] .box-sections ul li {*/
/*   border-right-width: 0 !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* #tabs{*/
/* top:{{ (journal2.settings.get('product_page_tabs_content_border:border-width')) }};*/
/* }*/
/* */
/* .product-grid-item.display-icon .wishlist-icon:before,*/
/* .product-grid-item.display-icon .compare-icon:before{*/
/* line-height:{{ journal2.settings.get('product_grid_wishlist_icon_bg_height') }}px;*/
/* }*/
/* */
/* .journal-header-center #cart .heading i{*/
/* height:{{ 40 - (journal2.settings.get('cart_heading_border:border-width', 0) * 2) }}px;*/
/* }*/
/* */
/* .journal-desktop .menu-floated .float-left{*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* .column.products > h3{*/
/* margin-bottom:{{ 12 - journal2.settings.get('footer_product_padding') }}px;*/
/* }*/
/* .column.products{*/
/* padding-bottom:{{ 12 - journal2.settings.get('footer_product_padding') }}px;*/
/* }*/
/* */
/* .side-column .journal-gallery .box-heading{*/
/* margin-bottom:{{ 10 - journal2.settings.get('side_gallery_padding') }}px;*/
/* }*/
/* */
/* .side-column .box-category > ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 2 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 3 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 4 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 5 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .breadcrumb{*/
/* padding-left:10px;*/
/* }*/
/* .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu > li:first-of-type{*/
/* border-left-width:1px;*/
/* border-right-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu > li:last-of-type{*/
/* border-left-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu.menu-floated > li:first-of-type*/
/* border-right-width:0;*/
/* }*/
/* }*/
/* */
/* .super-menu.menu-floated{*/
/* border-right-width:1px;*/
/* border-left-width:1px;*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-style:{{ journal2.settings.get('menu_divider_type', 'solid') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('cs_fullwidth_divider', 'off') == 'on' %}*/
/*   .custom-sections .box-heading.box-sections{*/
/*   border-left-width:1px;*/
/*   border-right-width:1px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_unite', '1') == '0' and journal2.settings.get('product_grid_wishlist_icon_display', 'icon') == 'icon' and journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'button' %}*/
/* */
/*   .product-grid-item .wishlist,*/
/*   .product-grid-item .compare{*/
/*   padding:0;*/
/*   }*/
/*   .product-grid-item .button-group{*/
/*   display: flex;*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* .custom-sections .box-heading.box-sections{*/
/* border-left-style:{{ journal2.settings.get('cs_title_divider_type') }};*/
/* }*/
/* */
/* .journal-carousel:not(.journal-gallery) .box-content .swiper-container{*/
/* padding: {{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* margin: -{{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* }*/
/* */
/* .journal-carousel.arrows-top .swiper-button-prev,*/
/* .journal-carousel.arrows-top .swiper-button-next{*/
/* margin-top:{{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* }*/
/* */
/* .side-column .journal-carousel.arrows-top .swiper-button-prev,*/
/* .side-column .journal-carousel.arrows-top .swiper-button-next,*/
/* .related-products.journal-carousel.arrows-top .swiper-button-prev,*/
/* .related-products.journal-carousel.arrows-top .swiper-button-next{*/
/* margin-top:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('footer_top_margin', '0') == '20' %}*/
/*   div#footer{*/
/*   margin-top:{{ journal2.settings.get('footer_custom_top_margin', '20') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_bottom_margin', '0') == '20' %}*/
/*   div#footer{*/
/*   margin-bottom:{{ journal2.settings.get('footer_custom_bottom_margin', '20') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .extended-container + .boxed-footer #footer{*/
/* margin-top:{{ journal2.settings.get('footer_custom_top_margin') - journal2.settings.get('container_bottom_spacing') }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('carousel_title_side_margin', 'on') == 'off' %}*/
/*   .side-column .journal-carousel .htabs {*/
/*   margin-bottom: 0;*/
/*   }*/
/*   .side-column .arrows-top:not(.journal-gallery) .swiper-button-prev,*/
/*   .side-column .arrows-top:not(.journal-gallery) .swiper-button-next {*/
/*   margin-top:20px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('menu_brands_title_align', 'left') == 'center' %}*/
/*   .mega-menu-brands div > h3 {*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_brands_title_align', 'left') == 'right' %}*/
/*   .mega-menu-brands div > h3 {*/
/*   justify-content: flex-end;*/
/*   }*/
/* {% endif %}*/
/* */
/* .side-column .journal-carousel .box-content .swiper-container{*/
/* padding:0;*/
/* margin:0;*/
/* }*/
/* html[dir="rtl"] .journal-carousel.arrows-top .swiper-button-next{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_icon_offset_left', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel.arrows-top .swiper-button-prev{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_icon_offset_right', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel:not(.arrows-top) .swiper-button-next{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_side_icon_offset_left', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel:not(.arrows-top) .swiper-button-prev{*/
/* left:auto;*/
/* right:{{ journal2.settings.get('carousel_side_icon_offset_right', '') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('post_grid_button_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .post-button{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('post_grid_button_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .post-button{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_module_button_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .post-module .post-button{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('post_module_button_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .post-module .post-button{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_categories_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .mega-menu-categories .mega-menu-item h3 a{*/
/*   text-align:center;*/
/*   justify-content: center;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item h3 a{*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_categories_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .mega-menu-categories .mega-menu-item h3 a{*/
/*   text-align:left;*/
/*   justify-content: flex-start;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item h3 a{*/
/*   justify-content: flex-end;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'left' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:right;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'left' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:right;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('post_title_overflow', 'on') == 'off' %}*/
/*   .blog-post .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   line-height:1.2;*/
/*   padding:8px 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('module_title_overflow', 'on') == 'off' %}*/
/*   .post-module .box-heading{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   line-height:1.2;*/
/*   padding-top:8px;*/
/*   padding-bottom:8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .posts.blog-list-view .post-item-details{*/
/* width: {{ 100 - journal2.settings.get('post_list_image_width', '33.333333') }}%;*/
/* }*/
/* */
/* .side-column .box.cms-blocks .box-heading{*/
/* margin-bottom:{{ journal2.settings.get('side_cms_margin') }}px;*/
/* }*/
/* */
/* @media only screen and (min-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .safari5 #footer,*/
/* .safari5.boxed-header header{*/
/* width: {{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* .tp-banner{*/
/* height:100% !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('logo_ratio', 'on') == 'off' %}*/
/*   #logo a img{*/
/*   height:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* */
/* .tp-banner-container{*/
/* height:auto !important;*/
/* }*/
/* */
/* .side-column .oc-module .product-details {*/
/* max-width: 130px;*/
/* }*/
/* .checkout-page #content {*/
/* padding-left: 20px;*/
/* padding-right: 20px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .product-grid-item .has-countdown + .product-details .rating{*/
/* top:-50px;*/
/* }*/
/* .product-grid-item .image.has-countdown .wishlist,*/
/* .product-grid-item .image.has-countdown .compare{*/
/* margin-bottom:42px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('show_countdown', 'never') == 'always' %}*/
/*   .product-grid-item .countdown,*/
/*   .product-list-item .countdown {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/*   .product-grid-item .has-countdown + .product-details .rating{*/
/*   top:-70px;*/
/*   }*/
/*   .product-grid-item .image.has-countdown .wishlist,*/
/*   .product-grid-item .image.has-countdown .compare{*/
/*   margin-bottom:42px;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('show_countdown', 'never') == 'hover' %}*/
/*   .product-grid-item:hover .countdown,*/
/*   .product-list-item:hover .countdown {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/*   .product-grid-item:hover .has-countdown + .product-details .rating{*/
/*   top:-70px;*/
/*   }*/
/*   .product-grid-item:hover .image.has-countdown .wishlist,*/
/*   .product-grid-item:hover .image.has-countdown .compare{*/
/*   margin-bottom:42px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('show_countdown', 'never') == 'hidden' %}*/
/*   .product-grid-item .countdown,*/
/*   .product-list-item .countdown {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/*     */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('show_countdown', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .has-countdown .quickview-button{*/
/*   margin-top:-40px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('show_countdown', 'hover') == 'always' %}*/
/*   .product-grid-item .has-countdown .quickview-button{*/
/*   margin-top:-40px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_page_cloud_zoom_inner') == '0' %}*/
/*   .zm-viewer{*/
/*   display:none;*/
/*   border-left:1px solid white;*/
/*   }*/
/* {% endif %}*/
/* */
/* .option li.hint--top:before{*/
/* border-top-color:{{ journal2.settings.get('product_page_push_tooltip_bg') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'on' %}*/
/*   @media only screen and (max-width: 470px) {*/
/*   .journal-cart{*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg') }};*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg_mobile') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' and journal2.settings.get('catalog_header_cart2', 'visible') == 'visible' %}*/
/*   @media only screen and (max-width: 470px) {*/
/*   .phone-sticky-cart.menu-cart-off .journal-menu .mobile-trigger{*/
/*   width:100%;*/
/*   }*/
/*   header .journal-menu .mobile-trigger {*/
/*   width: 50%;*/
/*   margin-top: -40px;*/
/*   z-index: 3;*/
/*   background-color:transparent;*/
/*   }*/
/*   .journal-cart{*/
/*   z-index:2;*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg') }}*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .phone-sticky-cart.phone-sticky-menu:not(.menu-cart-off) .journal-menu{*/
/* z-index:1;*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' and journal2.settings.get('catalog_header_search', 'block') == 'block' %}*/
/*   @media only screen and (max-width: 470px){*/
/*   div.mobile-trigger, .mobile-menu-on-tablet div.mobile-trigger{*/
/*   color:{{ journal2.settings.get('mobile_trigger_text_color_cart_same_line') }};*/
/*   }*/
/*   div.mobile-trigger:before, .mobile-menu-on-tablet div.mobile-trigger:before{*/
/*   color:{{ journal2.settings.get('mobile_trigger_icon_color_cart_same_line') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-header-center #header .menu-dropdown::before{*/
/* border-bottom-color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }}*/
/* }*/
/* */
/* .header-notice > div{*/
/* max-width:{{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* */
/* @media only screen and (max-width:{{ journal2.settings.get('site_width', 1024) + 15 }}px){*/
/* .header-notice > div{*/
/* padding-left:15px;*/
/* padding-right: 15px;*/
/* }*/
/* .header-notice.floated-icon > div{*/
/* padding-bottom:10px;*/
/* }*/
/* button.close-notice {*/
/* right: 8px;*/
/* }*/
/* html[dir="rtl"] button.close-notice {*/
/* right: auto;*/
/* left: 8px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'top' %}*/
/*   .product-grid-item .quickview-button{*/
/*   top:0;*/
/*   transform: translate(-50%, 0);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_align', 'left') == 'center' %}*/
/*   .post-item-details .comment-date{*/
/*   margin:0 auto;*/
/*   }*/
/*   .blog-grid-view .post-button{*/
/*   align-self:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_align', 'left') == 'right' %}*/
/*   .post-item-details .comment-date{*/
/*   width:100%;*/
/*   }*/
/*   .blog-grid-view .post-button{*/
/*   align-self:flex-end;*/
/*   }*/
/*   html[dir="rtl"] .blog-grid-view .post-button{*/
/*   align-self:flex-start;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' %}*/
/*   .product-grid-item .quickview-button{*/
/*   top:100%;*/
/*   transform: translate(-50%, -100%);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('main_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .heading-title, html[dir="rtl"] .box-heading:not(.box-sections), html[dir="rtl"] #blogArticle*/
/*   .articleHeader h1, html[dir="rtl"] .journal-carousel .htabs.single-tab a, html[dir="rtl"] .oc-filter .panel-heading, html[dir="rtl"] .post-module .box-heading, html[dir="rtl"] #content h1.heading-title{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('main_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .heading-title, html[dir="rtl"] .box-heading:not(.box-sections), html[dir="rtl"] #blogArticle*/
/*   .articleHeader h1, html[dir="rtl"] .journal-carousel .htabs.single-tab a, html[dir="rtl"] .oc-filter .panel-heading, html[dir="rtl"] .post-module .box-heading, html[dir="rtl"] #content h1.heading-title{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('secondary_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .secondary-title, html[dir="rtl"] #content #review-title{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('secondary_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .secondary-title, html[dir="rtl"] #content #review-title{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('scroll_to_top_pos', 'right') == 'left' %}*/
/*   .scroll-top{*/
/*   left:5px;*/
/*   right:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_side_margin', '15') == '0' %}*/
/*   footer .columns {*/
/*   padding-left:0;*/
/*   }*/
/*   html[dir="rtl"] footer .columns {*/
/*   padding-right:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_shadow_type', 'none') == 'default' %}*/
/*   footer{*/
/*   box-shadow: 0 -2px 15px -3px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_shadow_type', 'none') == 'none' %}*/
/*   footer{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') == 'default' %}*/
/*   .journal-top-header{*/
/*   box-shadow:0 0 5px rgba(0, 0, 0, 0.4);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') == 'none' %}*/
/*   .journal-top-header{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') != 'none' %}*/
/*   .journal-header-default .links a, .journal-header-default .links .no-link {*/
/*   border-bottom-width: 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Content Margin *//* */
/* */
/* @media only screen and (min-width: 760px){*/
/* #column-left + #content {*/
/* margin-left: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* }*/
/* #column-right + #content {*/
/* margin-right: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/* }*/
/* */
/* #column-left + #column-right + #content{*/
/* margin-left: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* margin-right: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/* }*/
/* }*/
/* */
/* /* Tablet Column Width + Content Margin *//* */
/* */
/* @media only screen and (min-width:760px) and (max-width:980px) {*/
/* #column-left {*/
/* width: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-right{*/
/* width: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-left + #content {*/
/* margin-left: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-right + #content {*/
/* margin-right: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-left + #column-right + #content{*/
/* margin-left: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* margin-right: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* }*/
/* */
/* /* Extended Layout Margins *//* */
/* */
/* @media only screen and (min-width:760px) and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .skin-16 .journal-header-center .journal-search {*/
/* padding-left: 30px;*/
/* }*/
/* .extended-layout #column-left{*/
/* padding-left:20px;*/
/* }*/
/* .extended-layout #column-right{*/
/* padding-right:20px;*/
/* }*/
/* .extended-layout #content,*/
/* .extended-layout #column-left + #content,*/
/* .extended-layout #column-right + #content{*/
/* padding-left:20px;*/
/* padding-right:20px;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-left{*/
/* padding-right:20px!important;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-right{*/
/* padding-left:20px !important;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-left + #content {*/
/* margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* margin-left: 0;*/
/* */
/* }*/
/* html[dir="rtl"].extended-layout #column-right + #content {*/
/* margin-right: 0;*/
/* }*/
/* }*/
/* */
/* .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-bottom:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .fly-drop-down ul li{*/
/* min-height:{{ journal2.settings.get('flyout_menu_item_height', 40) }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .product-grid-item .rating{*/
/* margin-left:{{ journal2.settings.get('rating_offset_x_phone') }}px;*/
/* }*/
/* .product-grid-item .rating{*/
/* top:{{ journal2.settings.get('rating_offset_y_phone') }}px;*/
/* }*/
/* }*/
/* */
/* /* RTL Columns *//* */
/* */
/* {% if journal2.settings.get('rtl_columns', '1') == '1' %}*/
/* */
/*   html[dir="rtl"] .flyout-left .fly-mega-menu,*/
/*   html[dir="rtl"] .flyout-left .fly-drop-down > ul {*/
/*   left: auto;*/
/*   right: 100%;*/
/*   }*/
/*   html[dir="rtl"] .flyout-right .fly-mega-menu,*/
/*   html[dir="rtl"] .flyout-right .fly-drop-down > ul {*/
/*   left: 100% !important;*/
/*   right: auto;*/
/*   }*/
/*   html[dir="rtl"] .flyout-menu .flyout > ul > li > a i.menu-plus {*/
/*   left: 5px;*/
/*   right: auto;*/
/*   transform: scale(-1);*/
/*   }*/
/*   html[dir="rtl"] #column-right .flyout-menu .flyout > ul > li > a i.menu-plus {*/
/*   left: auto;*/
/*   right: 8px;*/
/*   transform: scale(1);*/
/*   }*/
/*   html[dir="rtl"] .flyout-menu .flyout > ul > li > a {*/
/*   padding: 7px 12px 7px 25px;*/
/*   }*/
/*   html[dir="rtl"] #column-right .flyout-menu .flyout > ul > li > a {*/
/*   padding: 7px 25px 7px 12px;*/
/*   text-align:left;*/
/*   }*/
/* */
/* */
/*   html[dir="rtl"] #column-left {*/
/*   float: right;*/
/*   }*/
/*   html[dir="rtl"] #column-right {*/
/*   float: left;*/
/*   }*/
/* */
/* */
/*   @media only screen and (min-width: 760px){*/
/* */
/*   html[dir="rtl"] #column-left {*/
/*   padding: 20px 20px 20px 0;*/
/*   }*/
/*   html[dir="rtl"] #column-right {*/
/*   padding: 20px 0 20px 20px;*/
/*   }*/
/* */
/*   html[dir="rtl"] #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/*   margin-left: 0;*/
/* */
/*   }*/
/*   html[dir="rtl"] #column-right + #content {*/
/*   margin-left: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/*   margin-right: 0;*/
/*   }*/
/* */
/*   html[dir="rtl"] #column-left + #column-right + #content{*/
/*   margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/*   margin-left: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/*   }*/
/* */
/*   }*/
/* */
/*   @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* */
/*   html[dir="rtl"] #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left:0;*/
/*   }*/
/*   html[dir="rtl"] #column-right + #content {*/
/*   margin-left: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/*   margin-right:0;*/
/*   }*/
/*   html[dir="rtl"] #column-left + #column-right + #content{*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/*   }*/
/* */
/*   html[dir="rtl"].extended-layout #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left: 0;*/
/* */
/*   }*/
/*   }*/
/* */
/*   @media only screen and (min-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/*   html[dir="rtl"].extended-layout #column-left{*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-right{*/
/*   padding-left:0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-right + #content {*/
/*   padding-left: 20px;*/
/*   padding-right: 0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-left + #content {*/
/*   padding-right: 20px;*/
/*   padding-left: 0;*/
/*   }*/
/*   }*/
/* */
/* {% endif %}*/
/* */
/* */
/* .refine-images::before,*/
/* #refine-images::before,*/
/* .category-list::before{*/
/* content:"{{ journal2.settings.get('refine_text', '') }}";*/
/* margin-right:{{ journal2.settings.get('refine_grid_item_spacing', '') }}px;*/
/* }*/
/* {% if journal2.settings.get('refine_text_status', 'none') == 'none' %}*/
/*   .refine-images::before,*/
/*   #refine-images::before,*/
/*   .category-list::before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* .refine-image {*/
/* padding-right: {{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* margin-bottom: {{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* }*/
/* .refine-images {*/
/* margin-right: -{{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* margin-bottom: {{ 15 - journal2.settings.get('refine_grid_item_spacing', '15') }}px;;*/
/* }*/
/* */
/* .product-grid-item {*/
/* margin-bottom: {{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .product-wrapper,*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-right: {{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-top: {{ 20 - journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .product-grid, #content .box-product{*/
/* margin-right: -{{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* */
/* /* Mobile Product Spacing *//* */
/* */
/* @media only screen and (max-width: 760px){*/
/* #cart .heading i::before{*/
/* color:{{ journal2.settings.get('cart_icon_mobile') }};*/
/* }*/
/* #cart .heading i{*/
/* background-color:{{ journal2.settings.get('cart_icon_bg_mobile') }};*/
/* }*/
/* div#container,*/
/* .home-page div#container {*/
/* margin-top: 0;*/
/* margin-bottom: 0;*/
/* box-shadow:none;*/
/* }*/
/* .product-grid-item:not(.swiper-slide) {*/
/* margin-bottom: {{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* .product-grid-item:not(.swiper-slide) .product-wrapper,*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-right: {{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* .product-grid, #content .box-product{*/
/* margin-right: -{{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* }*/
/* */
/* .button:active{*/
/* box-shadow:{{ journal2.settings.get('button_shadow_active') }};*/
/* }*/
/* */
/* #column-left .oc-module .product-details{*/
/* max-width:{{ journal2.settings.get('left_column_width', '220') - 220 + 145 }}px;*/
/* }*/
/* */
/* #column-right .oc-module .product-details{*/
/* max-width:{{ journal2.settings.get('right_column_width', '220') - 220 + 145 }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('body_bg_image:background-image') and journal2.settings.get('body_bg_image:background-attachment') == 'fixed' %}*/
/*   .mobile body,*/
/*   .tablet body{*/
/*   background-image:none;*/
/*   }*/
/*   .mobile body::before,*/
/*   .tablet body::before{*/
/*   content: "";*/
/*   top: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   bottom:0;*/
/*   width: 100%;*/
/*   height: 100vh;*/
/*   position: fixed;*/
/*   background-image: {{ journal2.settings.get('body_bg_image:background-image') }};*/
/*   background-attachment: scroll;*/
/*   background-size: initial;*/
/*   background-repeat: inherit;*/
/*   background-position: center top;*/
/*   z-index:-1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('body_bg_image_home:background-image') and journal2.settings.get('body_bg_image_home:background-attachment') == 'fixed' %}*/
/*   .mobile.home-page body,*/
/*   .tablet.home-page body{*/
/*   background-image:none;*/
/*   }*/
/*   .mobile.home-page body::before,*/
/*   .tablet.home-page body::before{*/
/*   content: "";*/
/*   top: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   bottom:0;*/
/*   width: 100%;*/
/*   height: 100vh;*/
/*   position: fixed;*/
/*   background-image: {{ journal2.settings.get('body_bg_image_home:background-image') }};*/
/*   background-attachment: scroll;*/
/*   background-size: initial;*/
/*   background-repeat: inherit;*/
/*   background-position: center top;*/
/*   z-index:-1;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Custom CSS *//* */
/* {{ journal2.settings.get('custom_css') }}*/
/* */
/* */
