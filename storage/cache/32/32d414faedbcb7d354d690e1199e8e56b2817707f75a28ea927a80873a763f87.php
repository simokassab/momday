<?php

/* journal2/template/product/product.twig */
class __TwigTemplate_4269053ddcdf544eb9ec80ec5a526e36fd08916c25761217c2d5cadfe848e2a7 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"catalog/view/theme/journal2/css/momday.css\">
<script src=\"catalog/view/javascript/momday/celebrity.js\"></script>
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>";
        // line 11
        if ( !(isset($context["allowedProductBuy"]) ? $context["allowedProductBuy"] : null)) {
            // line 12
            echo "                                <div class=\"warning\">
                                  <i class=\"fa fa-exclamation-circle\"></i>";
            // line 14
            echo (isset($context["error_own_product"]) ? $context["error_own_product"] : null);
            echo "
                                </div>";
        }
        // line 17
        echo "                              
  <div class=\"row\">";
        // line 18
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            $context["class"] = "col-sm-6";
        } elseif ((        // line 21
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 22
            $context["class"] = "col-sm-9";
        } else {
            // line 24
            $context["class"] = "col-sm-12";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-page-content\" itemscope itemtype=\"http://schema.org/Product\">";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "top")) {
            // line 28
            echo "        <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>";
        }
        // line 30
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row product-info";
        // line 31
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "split_ratio"), "method");
        echo "\">
        <div class=\"left\">";
        // line 33
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 34
            echo "            <div class=\"image\">";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 36
                echo "                <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "              <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" id=\"image\" data-largeimg=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" itemprop=\"image\"/></a>
            </div>";
            // line 40
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method")) {
                // line 41
                echo "              <div class=\"gallery-text\"><span>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_text"), "method");
                echo "</span></div>";
            }
        }
        // line 44
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 45
            echo "            <div id=\"product-gallery\" class=\"image-additional";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 47
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container\"";
                // line 48
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\"";
                }
                echo ">
                  <div class=\"swiper-wrapper\">";
            }
            // line 51
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 52
                echo "                      <a class=\"swiper-slide\"";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width:";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\"";
                }
                echo " href=\"";
                echo (((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) ? ((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) ? ((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) : ((isset($context["thumb"]) ? $context["thumb"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></a>";
            }
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 55
                echo "                      <a class=\"swiper-slide\"";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width:";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\"";
                }
                echo " href=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" itemprop=\"image\"/></a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 58
                echo "                  </div>
                </div>";
                // line 60
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows"), "method") != "never")) {
                    // line 61
                    echo "                <div class=\"swiper-button-next swiper-hidden\"></div>
                <div class=\"swiper-button-prev swiper-hidden\"></div>";
                }
                // line 64
                echo "              </div>";
            }
            // line 66
            echo "            </div>";
            // line 67
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 68
                echo "            <script>
              (function () {
                var opts = {
                  slidesPerView: parseInt('";
                // line 71
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  slidesPerGroup: parseInt('";
                // line 72
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  spaceBetween: parseInt('";
                // line 73
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),";
                // line 74
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows"), "method") != "never")) {
                    // line 75
                    echo "                  nextButton: \$('#product-gallery .swiper-button-next'),
                  prevButton: \$('#product-gallery .swiper-button-prev'),";
                }
                // line 78
                echo "                  autoplay:";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                  speed: parseInt(";
                // line 79
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_speed"), "method");
                echo ", 10) || 400,
                  touchEventsTarget:";
                // line 80
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container'";
                } else {
                    echo " false";
                }
                // line 81
                echo "                };

                \$('#product-gallery .swiper-container').swiper(opts);
              })();
            </script>";
            }
        }
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_image", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 89
            echo "            <div class=\"journal-custom-tab\">";
            // line 90
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 91
                echo "                <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>";
            }
            // line 93
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 94
                echo "                <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>";
            }
            // line 96
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "          <div class=\"image-gallery\" style=\"display: none !important;\">";
        // line 100
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 101
            echo "              <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" data-original=\"";
            echo (((isset($context["original"]) ? $context["original"] : null)) ? ((isset($context["original"]) ? $context["original"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>";
        }
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 104
            echo "              <a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" data-original=\"";
            echo (($this->getAttribute($context["image"], "original", array())) ? ($this->getAttribute($context["image"], "original", array())) : ($this->getAttribute($context["image"], "popup", array())));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "          </div>";
        // line 107
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "left")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 108
            echo "            <div class=\"social share-this\">
              <div class=\"social-loaded\">
                <script type=\"text/javascript\">var switchTo5x = true;</script>
                <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 112
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 114
                echo "                  <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "              </div>
            </div>";
        }
        // line 119
        echo "          <meta itemprop=\"description\" content=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_description"), "method");
        echo "\"/>
          <div class=\"product-tabs\">";
        // line 121
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "bottom")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 122
            echo "              <div class=\"social share-this\">
                <div class=\"social-loaded\">
                  <script type=\"text/javascript\">var switchTo5x = true;</script>
                  <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                  <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 126
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 128
                echo "                    <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                </div>
              </div>";
        }
        // line 133
        echo "            <ul id=\"tabs\" class=\"nav nav-tabs htabs\">";
        // line 134
        $context["is_active"] = true;
        // line 135
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 136
            echo "                <li";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\"";
                $context["is_active"] = false;
            }
            echo "><a href=\"#tab-description\" data-toggle=\"tab\">";
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>";
        }
        // line 138
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 139
            echo "                <li";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\"";
                $context["is_active"] = false;
            }
            echo "><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>";
        }
        // line 141
        if ((isset($context["video_present"]) ? $context["video_present"] : null)) {
            // line 142
            echo "                <li";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\"";
                $context["is_active"] = false;
            }
            echo "><a href=\"#tab-video\" data-toggle=\"tab\">";
            echo (isset($context["tab_video"]) ? $context["tab_video"] : null);
            echo "</a></li>";
        }
        // line 144
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 145
            echo "                <li";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\"";
                $context["is_active"] = false;
            }
            echo "><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>";
        }
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 148
            echo "                <li";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\"";
                $context["is_active"] = false;
            }
            echo "><a href=\"#additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["tab"], "name", array());
            echo "</a></li>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            </ul>
            <div class=\"tabs-content\">";
        // line 152
        $context["is_active"] = true;
        // line 153
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 154
            echo "                <div class=\"tab-pane tab-content";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>";
        }
        // line 156
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 157
            echo "                <div class=\"tab-pane tab-content";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-specification\">
                  <table class=\"table table-bordered attribute\">";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 160
                echo "                      <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 162
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                      </tr>
                      </thead>
                      <tbody>";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 167
                    echo "                        <tr>
                          <td>";
                    // line 168
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                          <td>";
                    // line 169
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                        </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                      </tbody>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                  </table>
                </div>";
        }
        // line 177
        if ((isset($context["video_present"]) ? $context["video_present"] : null)) {
            // line 178
            echo "                  <div class=\"tab-pane tab-content";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-video\">
                      <video height=\"315\" width=\"560\" controls=\"\">
                          <source src=\"";
            // line 180
            echo (isset($context["video_url"]) ? $context["video_url"] : null);
            echo "\" type=\"video/mp4\">
                      </video>
                  </div>";
        }
        // line 184
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 185
            echo "                <div class=\"tab-pane tab-content";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-review\"";
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                echo " itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\"";
            }
            echo ">";
            // line 186
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                // line 187
                echo "                    <meta itemprop=\"ratingValue\" content=\"";
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\"/>
                    <meta itemprop=\"reviewCount\" content=\"";
                // line 188
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_num_reviews"), "method");
                echo "\"/>
                    <meta itemprop=\"bestRating\" content=\"5\"/>
                    <meta itemprop=\"worstRating\" content=\"1\"/>";
            }
            // line 192
            echo "                  <form class=\"form-horizontal\" id=\"form-review\">
                    <div id=\"review\"></div>
                    <h2 id=\"review-title\">";
            // line 194
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>";
            // line 195
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 196
                echo "                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\" for=\"input-name\">";
                // line 198
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                          <input type=\"text\" name=\"name\" value=\"";
                // line 199
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\" for=\"input-review\">";
                // line 204
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                          <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                          <div class=\"help-block\">";
                // line 206
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\">";
                // line 211
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                          &nbsp;&nbsp;&nbsp;";
                // line 212
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"1\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"2\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"3\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"4\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"5\"/>
                          &nbsp;";
                // line 222
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                      </div>";
                // line 224
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                      <div class=\"buttons clearfix\">
                        <div class=\"pull-right\">
                          <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 227
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary button\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                        </div>
                      </div>";
            } else {
                // line 231
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
            }
            // line 233
            echo "                  </form>
                </div>";
        }
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 237
            echo "                <div id=\"additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"tab-pane tab-content journal-custom-tab";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active";
                $context["is_active"] = false;
            }
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "            </div>
          </div>
        </div>";
        // line 242
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 243
            $context["class"] = "col-sm-6";
        } else {
            // line 245
            $context["class"] = "col-sm-4";
        }
        // line 247
        echo "        <div class=\"right\">";
        // line 248
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 249
            echo "            <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>";
        }
        // line 251
        echo "          <div id=\"product\" class=\"product-options\">";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_top", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 253
            echo "              <div class=\"journal-custom-tab\">";
            // line 254
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 255
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>";
            }
            // line 257
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 258
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>";
            }
            // line 260
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
              </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "            <ul class=\"list-unstyled description\">";
        // line 264
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 265
            echo "                <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ":";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>";
        }
        // line 267
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 268
            echo "                <li class=\"brand-logo\">
                  <a href=\"";
            // line 269
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                    <img src=\"";
            // line 270
            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
            echo "\" width=\"";
            echo (isset($context["manufacturer_image_width"]) ? $context["manufacturer_image_width"] : null);
            echo "\" height=\"";
            echo (isset($context["manufacturer_image_height"]) ? $context["manufacturer_image_height"] : null);
            echo "\" alt=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\"/>
                  </a>";
            // line 272
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 273
                echo "                    <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">";
                // line 274
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
                    </a>";
            }
            // line 277
            echo "                </li>";
        } else {
            // line 279
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 280
                echo "                  <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>";
            }
        }
        // line 283
        echo "              <li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>";
        // line 284
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 285
            echo "                <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>";
        }
        // line 287
        echo "              <li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>";
        // line 289
        if ((isset($context["wk_custome_field_wkcustomfields"]) ? $context["wk_custome_field_wkcustomfields"] : null)) {
            // line 290
            if ( !twig_test_empty((isset($context["customFields"]) ? $context["customFields"] : null))) {
                // line 291
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["customFields"]) ? $context["customFields"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 292
                    echo "                                          <li>";
                    echo (($this->getAttribute($context["value"], "fieldName", array(), "array") . ":") . $this->getAttribute($context["value"], "fieldValue", array(), "array"));
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["momday_attribute_name_to_value"]) ? $context["momday_attribute_name_to_value"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 299
            echo "                    <li class=\"p-";
            echo $context["key"];
            echo "\">";
            echo $context["key"];
            echo ": <span class=\"p-";
            echo $context["value"];
            echo "\">";
            echo $context["value"];
            echo "</span></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        if ((isset($context["item_is_to_charity"]) ? $context["item_is_to_charity"] : null)) {
            // line 302
            echo "                    <li class=\"p-stock\" style=\"color:rgb(176, 158, 102);\">";
            echo (isset($context["text_item_to_charity"]) ? $context["text_item_to_charity"] : null);
            echo "</li>";
        }
        // line 305
        echo "            </ul>";
        // line 306
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 307
            echo "              <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>";
        }
        // line 309
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 310
            echo "              <div class=\"countdown-wrapper\">
                <div class=\"expire-text\">";
            // line 311
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
                <div class=\"countdown\"></div>
              </div>
              <script>Journal.countdown(\$('.right .countdown'), '";
            // line 314
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>";
        }
        // line 317
        if ((array_key_exists("delivery_date", $context) && (isset($context["delivery_date"]) ? $context["delivery_date"] : null))) {
            // line 318
            echo "                            <ul class=\"list-unstyled\">
                              <li>";
            // line 319
            echo (((isset($context["text_delivery_date"]) ? $context["text_delivery_date"] : null) . " : ") . (isset($context["delivery_date"]) ? $context["delivery_date"] : null));
            echo "</li>
                            </ul>";
        }
        // line 323
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 324
            echo "              <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
                <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
                <meta itemprop=\"priceCurrency\" content=\"";
            // line 326
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
                <meta itemprop=\"price\" content=\"";
            // line 327
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>";
            // line 328
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 329
                echo "                  <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>";
            }
            // line 331
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 332
                echo "                  <li class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>";
            } else {
                // line 334
                echo "                  <li class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                  <li class=\"price-new\"";
                // line 335
                if ((isset($context["date_end"]) ? $context["date_end"] : null)) {
                    echo "data-end-date=\"";
                    echo (isset($context["date_end"]) ? $context["date_end"] : null);
                    echo "\"";
                }
                echo ">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</li>";
            }
            // line 337
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 338
                echo "                  <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>";
            }
            // line 340
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 341
                echo "                  <li class=\"reward\">
                    <small>";
                // line 342
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
                  </li>";
            }
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 346
                echo "                  <li class=\"discounts\">";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "              </ul>";
        }
        // line 350
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 351
            echo "              <div class=\"options";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
                <h3>";
            // line 352
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>";
            // line 353
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 354
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 355
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 356
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <select name=\"option[";
                    // line 357
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 358
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>";
                    // line 359
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 360
                        echo "                          <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        // line 361
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 362
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")";
                        }
                        // line 363
                        echo " </option>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 365
                    echo "                      </select>
                    </div>";
                }
                // line 368
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 369
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 370
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div id=\"input-option";
                    // line 371
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 372
                        echo "                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" name=\"option[";
                        // line 374
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>";
                        // line 375
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 376
                        echo $this->getAttribute($context["option_value"], "name", array());
                        // line 377
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 378
                            echo "                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")";
                        }
                        // line 379
                        echo " </label>
                          </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 381
                    echo " </div>
                    </div>";
                }
                // line 384
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 385
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 386
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div id=\"input-option";
                    // line 387
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 388
                        echo "                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" name=\"option[";
                        // line 390
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>";
                        // line 391
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 392
                        echo $this->getAttribute($context["option_value"], "name", array());
                        // line 393
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 394
                            echo "                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")";
                        }
                        // line 395
                        echo " </label>
                          </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 397
                    echo " </div>
                    </div>";
                }
                // line 400
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 401
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 402
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <input type=\"text\" name=\"option[";
                    // line 403
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                    </div>";
                }
                // line 406
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 407
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 408
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <textarea name=\"option[";
                    // line 409
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                    </div>";
                }
                // line 412
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 413
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 414
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <button type=\"button\" id=\"button-upload";
                    // line 415
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                      <input type=\"hidden\" name=\"option[";
                    // line 416
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                    </div>";
                }
                // line 419
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 420
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 421
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 423
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                        <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                    </div>";
                }
                // line 429
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 430
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 431
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 433
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                    </div>";
                }
                // line 439
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 440
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 441
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 443
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                    </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            echo "              </div>
              <script>Journal.enableSelectOptionAsButtonsList();</script>";
        }
        // line 453
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 454
            echo "              <hr>
              <h3>";
            // line 455
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 458
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>";
            // line 459
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 460
                echo "                    <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>";
        }
        // line 466
        echo "            <div class=\"form-group cart";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock";
        }
        echo "\">
              <div>";
        // line 468
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_enquiry", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 470
                echo "                    <div>";
                echo $this->getAttribute($context["tab"], "content", array());
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            echo "                  <input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>";
        } else {
            // line 474
            echo "                  <span width =\"140px\" class=\"qty\">
              <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 475
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 476
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 477
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
              <script>
                /* quantity buttons */
                var \$input = \$('.cart input[name=\"quantity\"]');
                function up() {
                  var val = parseInt(\$input.val(), 10) + 1 || parseInt(\$input.attr('data-min-value'), 10);
                  \$input.val(val);
                }
                function down() {
                  var val = parseInt(\$input.val(), 10) - 1 || 0;
                  var min = parseInt(\$input.attr('data-min-value'), 10) || 1;
                  \$input.val(Math.max(val, min));
                }
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">-</a>').insertBefore(\$input).click(down);
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">+</a>').insertAfter(\$input).click(up);
                \$input.keydown(function (e) {
                  if (e.which === 38) {
                    up();
                    return false;
                  }
                  if (e.which === 40) {
                    down();
                    return false;
                  }
                });
              </script>
              </span>


                  <button";
            // line 506
            if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                echo "style=\"width:128px;\"";
            }
            echo " type=\"button\" id=\"button-cart\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"button\"><span class=\"button-cart-text\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>";
            // line 507
            if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                // line 508
                echo "                  <a style= \"width:160px;\" onclick=\"addRemoveFromCelebrityStore(this, '";
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "', '";
                echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                echo "', '";
                echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                echo "');\"";
                // line 509
                if (twig_in_filter((isset($context["product_id"]) ? $context["product_id"] : null), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                    echo "product-in-store=\"1\"";
                } else {
                    echo "product-in-store=\"0\"";
                }
                // line 510
                echo "                     class=\" instore";
                if (twig_in_filter((isset($context["product_id"]) ? $context["product_id"] : null), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                    echo "button-celebrity-pressed";
                }
                echo " celebrity-store-button-identifier button hint--top button-celebrity-store-product\"
                  ><span class = \"celebrity-store-button-text-identifier button-celebrity-store-product-text\">";
                // line 511
                if (twig_in_filter((isset($context["product_id"]) ? $context["product_id"] : null), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                    echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                } else {
                    echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                }
                echo "</span></a>";
            }
        }
        // line 514
        echo "              </div>
            </div>";
        // line 516
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 517
            echo "              <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i>";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>";
        }
        // line 519
        echo "            <div class=\"wishlist-compare\">
              <span class=\"links\">
                  <a onclick=\"addToWishList('";
        // line 521
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
                  <a onclick=\"addToCompare('";
        // line 522
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
              </span>
            </div>";
        // line 525
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 526
            echo "              <div class=\"rating\">
                <p>";
            // line 527
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 528
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 529
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
              </div>";
        }
        // line 532
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "right")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 533
            echo "              <div class=\"social share-this\">
                <div class=\"social-loaded\">
                  <script type=\"text/javascript\">var switchTo5x = true;</script>
                  <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                  <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 537
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>";
            // line 538
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 539
                echo "                    <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "                </div>
              </div>";
        }
        // line 545
        echo (isset($context["sellerprofile"]) ? $context["sellerprofile"] : null);
        // line 546
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_bottom", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 547
            echo "              <div class=\"journal-custom-tab\">";
            // line 548
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 549
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>";
            }
            // line 551
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 552
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>";
            }
            // line 554
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
              </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "          </div>
        </div>
      </div>";
        // line 560
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 561
            echo "        <p class=\"tags\">
          <b>";
            // line 562
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</b>";
            // line 563
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 564
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 565
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>";
                } else {
                    // line 567
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>,";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 570
            echo "        </p>";
        }
        // line 572
        if (((isset($context["products"]) ? $context["products"] : null) && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_status"), "method"))) {
            // line 573
            echo "        <div class=\"box related-products";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                echo " journal-carousel";
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") == "top")) {
                    echo " arrows-top";
                }
            }
            echo "\">
          <div>
            <div class=\"box-heading\">";
            // line 575
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</div>
            <div class=\"box-content\">";
            // line 577
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 578
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container\"";
                // line 579
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\"";
                }
                echo ">
                  <div class=\"swiper-wrapper\">";
            }
            // line 582
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 583
                echo "                      <div class=\"product-grid-item";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_grid_classes"), "method");
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                    echo " swiper-slide";
                }
                echo " display-";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                echo "\">
                        <div class=\"product-thumb product-wrapper";
                // line 584
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock";
                }
                echo "\">
                          <div class=\"image";
                // line 585
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown";
                }
                echo "\">
                            <a href=\"";
                // line 586
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\"";
                }
                echo ">
                              <img class=\"lazy first-image\" width=\"";
                // line 587
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                            </a>";
                // line 589
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 590
                    echo "                              <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 592
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 593
                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 594
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>";
                }
                // line 596
                echo "                          </div>
                          <div class=\"product-details\">
                            <div class=\"caption\">
                              <h4 class=\"name\"><a href=\"";
                // line 599
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                              <p class=\"description\">";
                // line 600
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>";
                // line 601
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 602
                    echo "                                <div class=\"price\">";
                    // line 603
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 604
                        echo $this->getAttribute($context["product"], "price", array());
                    } else {
                        // line 606
                        echo "                                    <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\"";
                        if ($this->getAttribute($context["product"], "date_end", array())) {
                            echo "data-end-date=\"";
                            echo $this->getAttribute($context["product"], "date_end", array());
                            echo "\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>";
                    }
                    // line 608
                    echo "                                </div>";
                }
                // line 610
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 611
                    echo "                                <div class=\"rating\">";
                    // line 612
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 613
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 614
                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        } else {
                            // line 616
                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 619
                    echo "                                </div>";
                }
                // line 621
                echo "                            </div>
                            <div class=\"button-group\">";
                // line 623
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 624
                    echo "                                <div class=\"cart enquiry-button\">
                                  <a href=\"javascript:Journal.openPopup('";
                    // line 625
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                    echo "', '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-clk=\"addToCart('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                    echo "<span class=\"button-cart-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "</span></a>
                                </div>";
                } else {
                    // line 628
                    echo "                                <div class=\"cart";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock";
                    }
                    echo "\">
                                  <a onclick=\"addToCart('";
                    // line 629
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                                </div>";
                }
                // line 632
                echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 633
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 639
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 640
                echo "                  </div>
                </div>";
                // line 642
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none"))) {
                    // line 643
                    echo "                  <div class=\"swiper-button-next\"></div>
                  <div class=\"swiper-button-prev\"></div>";
                }
            }
            // line 647
            echo "              </div>";
            // line 648
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method"))) {
                // line 649
                echo "                <div class=\"swiper-pagination\"></div>";
            }
            // line 651
            echo "            </div>
          </div>
        </div>";
            // line 655
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
                // line 656
                echo "        <script>
          \$('.related-products .product-grid-item > div').each(function () {
            var \$new = \$(this).find('.price-new');
            if (\$new.length && \$new.attr('data-end-date')) {
              \$(this).find('.image').append('<div class=\"countdown\"></div>');
            }
            Journal.countdown(\$(this).find('.countdown'), \$new.attr('data-end-date'));
          });
        </script>";
            }
            // line 666
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 667
                $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_items_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count", 1 => 0), "method"))));
                // line 668
                $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(                // line 669
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(                // line 670
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(                // line 671
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(                // line 672
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(                // line 673
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
                // line 675
                echo "        <script>
          (function () {
            var grid = \$.parseJSON('";
                // line 677
                echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
                echo "');

            var breakpoints = {
              470: {
                slidesPerView: grid[0][1],
                slidesPerGroup: grid[0][1]
              },
              760: {
                slidesPerView: grid[1][1],
                slidesPerGroup: grid[1][1]
              },
              980: {
                slidesPerView: grid[2][1],
                slidesPerGroup: grid[2][1]
              },
              1220: {
                slidesPerView: grid[3][1],
                slidesPerGroup: grid[3][1]
              }
            };

            var opts = {
              slidesPerView: grid[4][1],
              slidesPerGroup: grid[4][1],
              breakpoints: breakpoints,
              spaceBetween: parseInt('";
                // line 702
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "15"), "method");
                echo "', 10),
              pagination:";
                // line 703
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method")) {
                    echo " \$('.related-products .swiper-pagination')";
                } else {
                    echo " false";
                }
                echo ",
              paginationClickable: true,
              nextButton:";
                // line 705
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-next')";
                } else {
                    echo " false";
                }
                echo ",
              prevButton:";
                // line 706
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-prev')";
                } else {
                    echo " false";
                }
                echo ",
              autoplayStopOnHover:";
                // line 707
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_pause_on_hover"), "method")) {
                    echo " true";
                } else {
                    echo " false";
                }
                echo ",
              autoplay:";
                // line 708
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
              speed: parseInt(";
                // line 709
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_transition_speed"), "method");
                echo ", 10) || 400,
              touchEventsTarget:";
                // line 710
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_touchdrag"), "method")) {
                    echo " 'container'";
                } else {
                    echo " false";
                }
                // line 711
                echo "            };

            \$('.related-products .swiper-container').swiper(opts);
          })();
        </script>";
            }
        }
        // line 718
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>

<script type=\"text/javascript\"><!--
  \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
    \$.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
      dataType: 'json',
      beforeSend: function () {
        \$('#recurring-description').html('');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();

        if (json['success']) {
          \$('#recurring-description').html(json['success']);
        }
      }
    });
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('#button-cart').on('click', function() {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-cart').button('loading');
      },
      complete: function() {
        \$('#button-cart').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible, .text-danger').remove();
        \$('.form-group').removeClass('has-error');

        if (json['error']) {
          if (json['error']['option']) {
            for (i in json['error']['option']) {
              var element = \$('#input-option' + i.replace('_', '-'));

              if (element.parent().hasClass('input-group')) {
                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              } else {
                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              }
            }
          }

          if (json['error']['recurring']) {
            \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
          }

          // Highlight any found errors
          \$('.text-danger').parent().addClass('has-error');
        }

        if (json['success']) {
          if (!Journal.showNotification(json['success'], json['image'], true)) {
            \$('.breadcrumb').after('<div class=\"alert alert-success success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
          }

          \$('#cart-total').html(json['total']);

          if (Journal.scrollToTop) {
            \$('html, body').animate({ scrollTop: 0 }, 'slow');
          }

          \$('#cart ul').load('index.php?route=common/cart/info ul li');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
  });

  \$('button[id^=\\'button-upload\\']').on('click', function () {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function () {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            \$(node).button('loading');
          },
          complete: function () {
            \$(node).button('reset');
          },
          success: function (json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input').val(json['code']);
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
//--></script>
<script type=\"text/javascript\"><!--
  \$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 880
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 884
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function () {
        \$('#button-review').button('loading');
      },
      complete: function () {
        \$('#button-review').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });

  \$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });
//--></script>";
        // line 922
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2294 => 922,  2254 => 884,  2247 => 880,  2082 => 718,  2074 => 711,  2068 => 710,  2064 => 709,  2060 => 708,  2052 => 707,  2044 => 706,  2036 => 705,  2027 => 703,  2023 => 702,  1995 => 677,  1991 => 675,  1989 => 673,  1988 => 672,  1987 => 671,  1986 => 670,  1985 => 669,  1984 => 668,  1982 => 667,  1980 => 666,  1969 => 656,  1967 => 655,  1963 => 651,  1960 => 649,  1958 => 648,  1956 => 647,  1951 => 643,  1949 => 642,  1946 => 640,  1944 => 639,  1929 => 633,  1920 => 632,  1909 => 629,  1902 => 628,  1887 => 625,  1884 => 624,  1882 => 623,  1879 => 621,  1876 => 619,  1869 => 616,  1866 => 614,  1864 => 613,  1860 => 612,  1858 => 611,  1856 => 610,  1853 => 608,  1840 => 606,  1837 => 604,  1835 => 603,  1833 => 602,  1831 => 601,  1828 => 600,  1822 => 599,  1817 => 596,  1809 => 594,  1800 => 593,  1798 => 592,  1788 => 590,  1784 => 589,  1770 => 587,  1760 => 586,  1754 => 585,  1748 => 584,  1737 => 583,  1733 => 582,  1726 => 579,  1723 => 578,  1721 => 577,  1717 => 575,  1706 => 573,  1704 => 572,  1701 => 570,  1682 => 567,  1675 => 565,  1673 => 564,  1656 => 563,  1653 => 562,  1650 => 561,  1648 => 560,  1644 => 557,  1636 => 554,  1631 => 552,  1629 => 551,  1622 => 549,  1620 => 548,  1618 => 547,  1614 => 546,  1612 => 545,  1608 => 541,  1597 => 539,  1593 => 538,  1590 => 537,  1584 => 533,  1582 => 532,  1574 => 529,  1564 => 528,  1560 => 527,  1557 => 526,  1555 => 525,  1548 => 522,  1542 => 521,  1538 => 519,  1533 => 517,  1531 => 516,  1528 => 514,  1519 => 511,  1512 => 510,  1506 => 509,  1498 => 508,  1496 => 507,  1487 => 506,  1455 => 477,  1449 => 476,  1445 => 475,  1442 => 474,  1437 => 472,  1429 => 470,  1425 => 469,  1423 => 468,  1416 => 466,  1411 => 462,  1401 => 460,  1397 => 459,  1394 => 458,  1388 => 455,  1385 => 454,  1383 => 453,  1379 => 450,  1363 => 443,  1356 => 441,  1347 => 440,  1345 => 439,  1333 => 433,  1326 => 431,  1317 => 430,  1315 => 429,  1303 => 423,  1296 => 421,  1287 => 420,  1285 => 419,  1278 => 416,  1270 => 415,  1266 => 414,  1257 => 413,  1255 => 412,  1244 => 409,  1238 => 408,  1229 => 407,  1227 => 406,  1216 => 403,  1210 => 402,  1201 => 401,  1199 => 400,  1195 => 397,  1188 => 395,  1182 => 394,  1180 => 393,  1178 => 392,  1166 => 391,  1161 => 390,  1157 => 388,  1151 => 387,  1147 => 386,  1138 => 385,  1136 => 384,  1132 => 381,  1125 => 379,  1119 => 378,  1117 => 377,  1115 => 376,  1103 => 375,  1098 => 374,  1094 => 372,  1088 => 371,  1084 => 370,  1075 => 369,  1073 => 368,  1069 => 365,  1063 => 363,  1057 => 362,  1055 => 361,  1050 => 360,  1046 => 359,  1043 => 358,  1037 => 357,  1031 => 356,  1022 => 355,  1020 => 354,  1016 => 353,  1013 => 352,  1008 => 351,  1006 => 350,  1003 => 348,  993 => 346,  989 => 345,  983 => 342,  980 => 341,  978 => 340,  972 => 338,  970 => 337,  960 => 335,  955 => 334,  950 => 332,  948 => 331,  945 => 329,  943 => 328,  940 => 327,  936 => 326,  932 => 324,  930 => 323,  925 => 319,  922 => 318,  920 => 317,  916 => 314,  910 => 311,  907 => 310,  905 => 309,  900 => 307,  898 => 306,  896 => 305,  891 => 302,  889 => 301,  875 => 299,  871 => 298,  861 => 292,  857 => 291,  855 => 290,  853 => 289,  845 => 287,  838 => 285,  836 => 284,  830 => 283,  820 => 280,  818 => 279,  815 => 277,  810 => 274,  806 => 273,  804 => 272,  794 => 270,  790 => 269,  787 => 268,  785 => 267,  778 => 265,  776 => 264,  774 => 263,  766 => 260,  761 => 258,  759 => 257,  752 => 255,  750 => 254,  748 => 253,  744 => 252,  742 => 251,  737 => 249,  735 => 248,  733 => 247,  730 => 245,  727 => 243,  725 => 242,  721 => 239,  698 => 237,  681 => 236,  677 => 233,  674 => 231,  666 => 227,  660 => 224,  656 => 222,  643 => 212,  639 => 211,  631 => 206,  626 => 204,  618 => 199,  614 => 198,  610 => 196,  608 => 195,  605 => 194,  601 => 192,  595 => 188,  590 => 187,  588 => 186,  577 => 185,  575 => 184,  569 => 180,  560 => 178,  558 => 177,  554 => 174,  548 => 172,  540 => 169,  536 => 168,  533 => 167,  529 => 166,  523 => 162,  519 => 160,  515 => 159,  507 => 157,  505 => 156,  495 => 154,  493 => 153,  491 => 152,  488 => 150,  465 => 148,  448 => 147,  438 => 145,  436 => 144,  426 => 142,  424 => 141,  414 => 139,  412 => 138,  402 => 136,  400 => 135,  398 => 134,  396 => 133,  392 => 130,  381 => 128,  377 => 127,  374 => 126,  368 => 122,  366 => 121,  361 => 119,  357 => 116,  346 => 114,  342 => 113,  339 => 112,  333 => 108,  331 => 107,  329 => 106,  311 => 104,  307 => 103,  292 => 101,  290 => 100,  288 => 99,  280 => 96,  275 => 94,  273 => 93,  266 => 91,  264 => 90,  262 => 89,  258 => 88,  250 => 81,  244 => 80,  240 => 79,  235 => 78,  231 => 75,  229 => 74,  226 => 73,  222 => 72,  218 => 71,  213 => 68,  211 => 67,  209 => 66,  206 => 64,  202 => 61,  200 => 60,  197 => 58,  195 => 57,  173 => 55,  169 => 54,  150 => 52,  148 => 51,  141 => 48,  138 => 47,  136 => 46,  132 => 45,  130 => 44,  124 => 41,  122 => 40,  107 => 38,  97 => 36,  93 => 35,  91 => 34,  89 => 33,  85 => 31,  81 => 30,  76 => 28,  74 => 27,  70 => 26,  67 => 24,  64 => 22,  62 => 21,  60 => 20,  58 => 19,  55 => 18,  52 => 17,  47 => 14,  44 => 12,  42 => 11,  40 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <link rel="stylesheet" href="catalog/view/theme/journal2/css/momday.css">*/
/* <script src="catalog/view/javascript/momday/celebrity.js"></script>*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*                               {% if not allowedProductBuy %}*/
/*                                 <div class="warning">*/
/*                                   <i class="fa fa-exclamation-circle"></i>*/
/*                                     {{ error_own_product }}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               */
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} product-page-content" itemscope itemtype="http://schema.org/Product">*/
/*       {% if journal2.settings.get('product_page_title_position', 'top') == 'top' %}*/
/*         <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="row product-info {{ journal2.settings.get('split_ratio') }}">*/
/*         <div class="left">*/
/*           {% if thumb %}*/
/*             <div class="image">*/
/*               {% for label, name in labels %}*/
/*                 <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*               {% endfor %}*/
/*               <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*             </div>*/
/*             {% if journal2.settings.get('product_page_gallery') %}*/
/*               <div class="gallery-text"><span>{{ journal2.settings.get('product_page_gallery_text') }}</span></div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if images %}*/
/*             <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*               {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                   <div class="swiper-wrapper">*/
/*                     {% endif %}*/
/*                     {% if thumb %}*/
/*                       <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                     {% endif %}*/
/*                     {% for image in images %}*/
/*                       <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" itemprop="image"/></a>*/
/*                     {% endfor %}*/
/*                     {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if journal2.settings.get('product_page_gallery_carousel_arrows') != 'never' %}*/
/*                 <div class="swiper-button-next swiper-hidden"></div>*/
/*                 <div class="swiper-button-prev swiper-hidden"></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <script>*/
/*               (function () {*/
/*                 var opts = {*/
/*                   slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel_arrows') != 'never' %}*/
/*                   nextButton: $('#product-gallery .swiper-button-next'),*/
/*                   prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                   {% endif %}*/
/*                   autoplay: {{ journal2.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                   speed: parseInt({{ journal2.settings.get('product_page_gallery_carousel_transition_speed') }}, 10) || 400,*/
/*                   touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*                 };*/
/* */
/*                 $('#product-gallery .swiper-container').swiper(opts);*/
/*               })();*/
/*             </script>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% for tab in journal2.settings.get('additional_product_description_image', []) %}*/
/*             <div class="journal-custom-tab">*/
/*               {% if tab.has_icon %}*/
/*                 <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*               {% endif %}*/
/*               {% if tab.name %}*/
/*                 <h3>{{ tab.name }}</h3>*/
/*               {% endif %}*/
/*               {{ tab.content }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           <div class="image-gallery" style="display: none !important;">*/
/*             {% if thumb %}*/
/*               <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*             {% endif %}*/
/*             {% for image in images %}*/
/*               <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'left' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*             <div class="social share-this">*/
/*               <div class="social-loaded">*/
/*                 <script type="text/javascript">var switchTo5x = true;</script>*/
/*                 <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                 <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                 {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                   <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           <meta itemprop="description" content="{{ journal2.settings.get('product_description') }}"/>*/
/*           <div class="product-tabs">*/
/*             {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'bottom' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*               <div class="social share-this">*/
/*                 <div class="social-loaded">*/
/*                   <script type="text/javascript">var switchTo5x = true;</script>*/
/*                   <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                   <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                   {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                     <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <ul id="tabs" class="nav nav-tabs htabs">*/
/*               {% set is_active = true %}*/
/*               {% if description and not journal2.settings.get('hide_product_description') %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*               {% endif %}*/
/*               {% if attribute_groups %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*               {% endif %}*/
/*               {% if video_present %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-video" data-toggle="tab">{{ tab_video }}</a></li>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*               {% endif %}*/
/*               {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#additional-product-tab-{{ loop.index }}" data-toggle="tab">{{ tab.name }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*             <div class="tabs-content">*/
/*               {% set is_active = true %}*/
/*               {% if description and not journal2.settings.get('hide_product_description') %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-description">{{ description }}</div>*/
/*               {% endif %}*/
/*               {% if attribute_groups %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-specification">*/
/*                   <table class="table table-bordered attribute">*/
/*                     {% for attribute_group in attribute_groups %}*/
/*                       <thead>*/
/*                       <tr>*/
/*                         <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                       </tr>*/
/*                       </thead>*/
/*                       <tbody>*/
/*                       {% for attribute in attribute_group.attribute %}*/
/*                         <tr>*/
/*                           <td>{{ attribute.name }}</td>*/
/*                           <td>{{ attribute.text }}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                       </tbody>*/
/*                     {% endfor %}*/
/*                   </table>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if video_present %}*/
/*                   <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-video">*/
/*                       <video height="315" width="560" controls="">*/
/*                           <source src="{{ video_url }}" type="video/mp4">*/
/*                       </video>*/
/*                   </div>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-review" {% if rating %} itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" {% endif %}>*/
/*                   {% if rating %}*/
/*                     <meta itemprop="ratingValue" content="{{ rating }}"/>*/
/*                     <meta itemprop="reviewCount" content="{{ journal2.settings.get('product_num_reviews') }}"/>*/
/*                     <meta itemprop="bestRating" content="5"/>*/
/*                     <meta itemprop="worstRating" content="1"/>*/
/*                   {% endif %}*/
/*                   <form class="form-horizontal" id="form-review">*/
/*                     <div id="review"></div>*/
/*                     <h2 id="review-title">{{ text_write }}</h2>*/
/*                     {% if review_guest %}*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                           <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control"/>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                           <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                           <div class="help-block">{{ text_note }}</div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label">{{ entry_rating }}</label>*/
/*                           &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                           <input type="radio" name="rating" value="1"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="2"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="3"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="4"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="5"/>*/
/*                           &nbsp;{{ entry_good }}</div>*/
/*                       </div>*/
/*                       {{ captcha }}*/
/*                       <div class="buttons clearfix">*/
/*                         <div class="pull-right">*/
/*                           <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary button">{{ button_continue }}</button>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       {{ text_login }}*/
/*                     {% endif %}*/
/*                   </form>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*                 <div id="additional-product-tab-{{ loop.index }}" class="tab-pane tab-content journal-custom-tab {% if is_active %} active {% set is_active = false %}{% endif %}">{{ tab.content }}</div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*           {% set class = 'col-sm-4' %}*/
/*         {% endif %}*/
/*         <div class="right">*/
/*           {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*             <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*           {% endif %}*/
/*           <div id="product" class="product-options">*/
/*             {% for tab in journal2.settings.get('additional_product_description_top', []) %}*/
/*               <div class="journal-custom-tab">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*                 {% endif %}*/
/*                 {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*                 {% endif %}*/
/*                 {{ tab.content }}*/
/*               </div>*/
/*             {% endfor %}*/
/*             <ul class="list-unstyled description">*/
/*               {% if journal2.settings.get('product_views') %}*/
/*                 <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*               {% endif %}*/
/*               {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*                 <li class="brand-logo">*/
/*                   <a href="{{ manufacturers }}" class="brand-image">*/
/*                     <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*                   </a>*/
/*                   {% if manufacturer_image_name %}*/
/*                     <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                       {{ manufacturer_image_name }}*/
/*                     </a>*/
/*                   {% endif %}*/
/*                 </li>*/
/*               {% else %}*/
/*                 {% if manufacturer %}*/
/*                   <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*               <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/*               {% if reward %}*/
/*                 <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/*               {% endif %}*/
/*               <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/* */
/*                           {% if wk_custome_field_wkcustomfields %}*/
/*                                    {% if customFields is not empty %}*/
/*                                     {% for key, value in customFields %}*/
/*                                           <li>{{ value['fieldName'] ~ ':' ~ value['fieldValue'] }}</li>*/
/*                                     {% endfor %}*/
/*                                   {% endif %}*/
/*                           {% endif %}*/
/*                               */
/*                 {#Momday Code#}*/
/*                 {% for key, value in momday_attribute_name_to_value %}*/
/*                     <li class="p-{{ key }}">{{ key }}: <span class="p-{{ value }}">{{ value }}</span></li>*/
/*                 {% endfor %}*/
/*                 {% if item_is_to_charity %}*/
/*                     <li class="p-stock" style="color:rgb(176, 158, 102);">{{ text_item_to_charity }}</li>*/
/*                 {% endif %}*/
/*                 {#End Momday Code#}*/
/*             </ul>*/
/*             {% if journal2.settings.get('product_sold') %}*/
/*               <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/*             {% endif %}*/
/*             {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*               <div class="countdown-wrapper">*/
/*                 <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*                 <div class="countdown"></div>*/
/*               </div>*/
/*               <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/*             {% endif %}*/
/* */
/*                         {% if delivery_date is defined and delivery_date %}*/
/*                             <ul class="list-unstyled">*/
/*                               <li>{{ text_delivery_date  ~ ' : ' ~ delivery_date }}</li>*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     */
/*             {% if price %}*/
/*               <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*                 <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*                 <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*                 <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*                 {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*                   <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*                 {% endif %}*/
/*                 {% if not special %}*/
/*                   <li class="product-price">{{ price }}</li>*/
/*                 {% else %}*/
/*                   <li class="price-old">{{ price }}</li>*/
/*                   <li class="price-new" {% if date_end %}data-end-date="{{ date_end }}"{% endif %}>{{ special }}</li>*/
/*                 {% endif %}*/
/*                 {% if tax %}*/
/*                   <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*                 {% endif %}*/
/*                 {% if points %}*/
/*                   <li class="reward">*/
/*                     <small>{{ text_points }} {{ points }}</small>*/
/*                   </li>*/
/*                 {% endif %}*/
/*                 {% for discount in discounts %}*/
/*                   <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             {% endif %}*/
/*             {% if options %}*/
/*               <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*                 <h3>{{ text_option }}</h3>*/
/*                 {% for option in options %}*/
/*                   {% if option.type == 'select' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% for option_value in option.product_option_value %}*/
/*                           <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </option>*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'radio' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                               {{ option_value.name }}*/
/*                               {% if option_value.price %}*/
/*                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                               {% endif %} </label>*/
/*                           </div>*/
/*                         {% endfor %} </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'checkbox' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/*                               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                               {{ option_value.name }}*/
/*                               {% if option_value.price %}*/
/*                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                               {% endif %} </label>*/
/*                           </div>*/
/*                         {% endfor %} </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'text' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'textarea' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'file' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                       <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'date' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group date">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'datetime' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group datetime">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'time' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group time">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*               <hr>*/
/*               <h3>{{ text_payment_recurring }}</h3>*/
/*               <div class="form-group required">*/
/*                 <select name="recurring_id" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for recurring in recurrings %}*/
/*                     <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <div class="help-block" id="recurring-description"></div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*               <div>*/
/*                 {% if journal2.settings.get('hide_add_to_cart_button') %}*/
/*                   {% for tab in journal2.settings.get('additional_product_enquiry', []) %}*/
/*                     <div>{{ tab.content }}</div>*/
/*                   {% endfor %}*/
/*                   <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                 {% else %}*/
/*                   <span width ="140px" class="qty">*/
/*               <label class="control-label text-qty" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" data-min-value="{{ minimum }}" id="input-quantity" class="form-control"/>*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*               <script>*/
/*                 /* quantity buttons *//* */
/*                 var $input = $('.cart input[name="quantity"]');*/
/*                 function up() {*/
/*                   var val = parseInt($input.val(), 10) + 1 || parseInt($input.attr('data-min-value'), 10);*/
/*                   $input.val(val);*/
/*                 }*/
/*                 function down() {*/
/*                   var val = parseInt($input.val(), 10) - 1 || 0;*/
/*                   var min = parseInt($input.attr('data-min-value'), 10) || 1;*/
/*                   $input.val(Math.max(val, min));*/
/*                 }*/
/*                 $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);*/
/*                 $('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);*/
/*                 $input.keydown(function (e) {*/
/*                   if (e.which === 38) {*/
/*                     up();*/
/*                     return false;*/
/*                   }*/
/*                   if (e.which === 40) {*/
/*                     down();*/
/*                     return false;*/
/*                   }*/
/*                 });*/
/*               </script>*/
/*               </span>*/
/* */
/* */
/*                   <button {% if is_celebrity %}style="width:128px;"{% endif %} type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/*                   {% if is_celebrity %}*/
/*                   <a style= "width:160px;" onclick="addRemoveFromCelebrityStore(this, '{{ product_id }}', '{{ text_add_to_celebrity_store }}', '{{ text_in_celebrity_store }}');"*/
/*                      {% if product_id in celebrity_products %}product-in-store="1"{% else %}product-in-store="0"{% endif %}*/
/*                      class=" instore  {% if product_id in celebrity_products %}button-celebrity-pressed{% endif %} celebrity-store-button-identifier button hint--top button-celebrity-store-product"*/
/*                   ><span class = "celebrity-store-button-text-identifier button-celebrity-store-product-text">{% if product_id in celebrity_products %}{{ text_in_celebrity_store }}{% else %}{{ text_add_to_celebrity_store }}{% endif %}</span></a>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*               <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/*             <div class="wishlist-compare">*/
/*               <span class="links">*/
/*                   <a onclick="addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*                   <a onclick="addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*               </span>*/
/*             </div>*/
/*             {% if review_status %}*/
/*               <div class="rating">*/
/*                 <p>{% for i in 1..5 %}*/
/*                     {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                   {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'right' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*               <div class="social share-this">*/
/*                 <div class="social-loaded">*/
/*                   <script type="text/javascript">var switchTo5x = true;</script>*/
/*                   <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                   <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                   {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                     <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {{ sellerprofile }}  */
/*             {% for tab in journal2.settings.get('additional_product_description_bottom', []) %}*/
/*               <div class="journal-custom-tab">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*                 {% endif %}*/
/*                 {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*                 {% endif %}*/
/*                 {{ tab.content }}*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if tags %}*/
/*         <p class="tags">*/
/*           <b>{{ text_tags }}</b>*/
/*           {% for tag in tags %}*/
/*             {% if loop.last %}*/
/*               <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*             {% else %}*/
/*               <a href="{{ tag.href }}">{{ tag.tag }}</a>,*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </p>*/
/*       {% endif %}*/
/*       {% if products and journal2.settings.get('related_products_status') %}*/
/*         <div class="box related-products {% if journal2.settings.get('related_products_carousel') %} journal-carousel {% if journal2.settings.get('related_products_carousel_arrows') == 'top' %} arrows-top {% endif %} {% endif %}">*/
/*           <div>*/
/*             <div class="box-heading">{{ text_related }}</div>*/
/*             <div class="box-content">*/
/*               {% if journal2.settings.get('related_products_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                   <div class="swiper-wrapper">*/
/*                     {% endif %}*/
/*                     {% for product in products %}*/
/*                       <div class="product-grid-item {{ journal2.settings.get('related_products_grid_classes') }} {% if journal2.settings.get('related_products_carousel') %} swiper-slide {% endif %} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                             <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                               <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                             </a>*/
/*                             {% for label, name in product.labels %}*/
/*                               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                             {% endfor %}*/
/*                             {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           <div class="product-details">*/
/*                             <div class="caption">*/
/*                               <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                               <p class="description">{{ product.description }}</p>*/
/*                               {% if product.price %}*/
/*                                 <div class="price">*/
/*                                   {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                   {% else %}*/
/*                                     <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                                   {% endif %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               {% if product.rating %}*/
/*                                 <div class="rating">*/
/*                                   {% for i in 1..5 %}*/
/*                                     {% if product.rating < i %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% else %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% endif %}*/
/*                                   {% endfor %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             <div class="button-group">*/
/*                               {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                                 <div class="cart enquiry-button">*/
/*                                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                                 </div>*/
/*                               {% else %}*/
/*                                 <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                   <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                     {% if journal2.settings.get('related_products_carousel') %}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_arrows') != 'none' %}*/
/*                   <div class="swiper-button-next"></div>*/
/*                   <div class="swiper-button-prev"></div>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_bullets') %}*/
/*                 <div class="swiper-pagination"></div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*         <script>*/
/*           $('.related-products .product-grid-item > div').each(function () {*/
/*             var $new = $(this).find('.price-new');*/
/*             if ($new.length && $new.attr('data-end-date')) {*/
/*               $(this).find('.image').append('<div class="countdown"></div>');*/
/*             }*/
/*             Journal.countdown($(this).find('.countdown'), $new.attr('data-end-date'));*/
/*           });*/
/*         </script>*/
/*       {% endif %}*/
/*       {% if journal2.settings.get('related_products_carousel') %}*/
/*         {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('related_products_items_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count', 0)]) %}*/
/*         {% set grid = [*/
/*         [0, grid.xs],*/
/*         [470, grid.sm],*/
/*         [760, grid.md],*/
/*         [980, grid.lg],*/
/*         [1100, grid.xl],*/
/*         ] %}*/
/*         <script>*/
/*           (function () {*/
/*             var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*             var breakpoints = {*/
/*               470: {*/
/*                 slidesPerView: grid[0][1],*/
/*                 slidesPerGroup: grid[0][1]*/
/*               },*/
/*               760: {*/
/*                 slidesPerView: grid[1][1],*/
/*                 slidesPerGroup: grid[1][1]*/
/*               },*/
/*               980: {*/
/*                 slidesPerView: grid[2][1],*/
/*                 slidesPerGroup: grid[2][1]*/
/*               },*/
/*               1220: {*/
/*                 slidesPerView: grid[3][1],*/
/*                 slidesPerGroup: grid[3][1]*/
/*               }*/
/*             };*/
/* */
/*             var opts = {*/
/*               slidesPerView: grid[4][1],*/
/*               slidesPerGroup: grid[4][1],*/
/*               breakpoints: breakpoints,*/
/*               spaceBetween: parseInt('{{ journal2.settings.get('product_grid_item_spacing', '15') }}', 10),*/
/*               pagination: {% if journal2.settings.get('related_products_carousel_bullets') %} $('.related-products .swiper-pagination') {% else %} false {% endif %},*/
/*               paginationClickable: true,*/
/*               nextButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-next') {% else %} false {% endif %},*/
/*               prevButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-prev') {% else %} false {% endif %},*/
/*               autoplayStopOnHover: {% if journal2.settings.get('related_products_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*               autoplay: {{ journal2.settings.get('related_products_carousel_autoplay') ? journal2.settings.get('related_products_carousel_transition_delay', 4000) : 'false' }},*/
/*               speed: parseInt({{ journal2.settings.get('related_products_carousel_transition_speed') }}, 10) || 400,*/
/*               touchEventsTarget: {% if journal2.settings.get('related_products_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*             };*/
/* */
/*             $('.related-products .swiper-container').swiper(opts);*/
/*           })();*/
/*         </script>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/getRecurringDescription',*/
/*       type: 'post',*/
/*       data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#recurring-description').html('');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/* */
/*         if (json['success']) {*/
/*           $('#recurring-description').html(json['success']);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-cart').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/*         $('.form-group').removeClass('has-error');*/
/* */
/*         if (json['error']) {*/
/*           if (json['error']['option']) {*/
/*             for (i in json['error']['option']) {*/
/*               var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*               if (element.parent().hasClass('input-group')) {*/
/*                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               } else {*/
/*                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               }*/
/*             }*/
/*           }*/
/* */
/*           if (json['error']['recurring']) {*/
/*             $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*           }*/
/* */
/*           // Highlight any found errors*/
/*           $('.text-danger').parent().addClass('has-error');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           if (!Journal.showNotification(json['success'], json['image'], true)) {*/
/*             $('.breadcrumb').after('<div class="alert alert-success success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*           }*/
/* */
/*           $('#cart-total').html(json['total']);*/
/* */
/*           if (Journal.scrollToTop) {*/
/*             $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*           }*/
/* */
/*           $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/*   });*/
/* */
/*   $('button[id^=\'button-upload\']').on('click', function () {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function () {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function () {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function () {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function (json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function (xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#review').delegate('.pagination a', 'click', function (e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).ready(function () {*/
/*     $('.thumbnails').magnificPopup({*/
/*       type: 'image',*/
/*       delegate: 'a',*/
/*       gallery: {*/
/*         enabled: true*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
