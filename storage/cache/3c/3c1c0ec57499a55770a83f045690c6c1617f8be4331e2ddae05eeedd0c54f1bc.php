<?php

/* journal2/template/common/header.twig */
class __TwigTemplate_86698708ab7075a54cacdd23f946251e220f386331fae84b3fc98ed852e2c359 extends Twig_Template
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
        echo "<!DOCTYPE html>";
        // line 2
        if ( !twig_constant("JOURNAL_INSTALLED")) {
            // line 3
            echo "<h3>Journal Installation Error</h3>
<p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>
<p>Please read this: <a href=\"http://docs.digital-atelier.com/opencart/journal/#/settings/install\" target=\"_blank\">here</a>.</p>";
        }
        // line 7
        if ( !(isset($context["currency"]) ? $context["currency"] : null)) {
            // line 8
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "addClass", array(0 => "no-currency"), "method");
        }
        // line 10
        if ( !(isset($context["language"]) ? $context["language"] : null)) {
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "addClass", array(0 => "no-language"), "method");
        }
        // line 13
        echo "<html dir=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "getAll", array(), "method");
        echo "\" data-j2v=\"";
        echo twig_constant("JOURNAL_VERSION");
        echo "\">
<head>
<meta charset=\"UTF-8\" />";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design", 1 => "1"), "method") == "1")) {
            // line 17
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pinch_zoom", 1 => "1"), "method") == "1")) {
                // line 18
                echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
            } else {
                // line 20
                echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
            }
        }
        // line 23
        echo "<meta name=\"format-detection\" content=\"telephone=no\">
<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\"/><![endif]-->
<title>";
        // line 25
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 26
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />";
        // line 27
        $context["meta_title"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_meta_title"), "method");
        // line 28
        if ((isset($context["meta_title"]) ? $context["meta_title"] : null)) {
            // line 29
            echo "<meta name=\"title\" content=\"";
            echo (isset($context["meta_title"]) ? $context["meta_title"] : null);
            echo "\" />";
        }
        // line 31
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 32
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 34
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 35
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_metas", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["sm"]) {
            // line 38
            echo "<meta";
            echo $this->getAttribute($context["sm"], "key", array());
            echo "=\"";
            echo $this->getAttribute($context["sm"], "type", array());
            echo "\" content=\"";
            echo $this->getAttribute($context["sm"], "content", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        if ((isset($context["icon"]) ? $context["icon"] : null)) {
            // line 41
            echo "<link href=\"";
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "\" rel=\"icon\" />";
        }
        // line 43
        $context["blog_feed_url"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_blog_feed_url"), "method");
        // line 44
        if ((isset($context["blog_feed_url"]) ? $context["blog_feed_url"] : null)) {
            // line 45
            echo "<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
            echo (isset($context["blog_feed_url"]) ? $context["blog_feed_url"] : null);
            echo "\" />";
        }
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 51
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "google_fonts", array()), "getFonts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 54
            echo "<link rel=\"stylesheet\" href=\"";
            echo $context["font"];
            echo "\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 57
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => $context["script"], 1 => "header"), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/hint.min.css"), "method");
        // line 60
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/journal.css"), "method");
        // line 61
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/features.css"), "method");
        // line 62
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/header.css"), "method");
        // line 63
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/module.css"), "method");
        // line 64
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/pages.css"), "method");
        // line 65
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/account.css"), "method");
        // line 66
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/blog-manager.css"), "method");
        // line 67
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/side-column.css"), "method");
        // line 68
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/product.css"), "method");
        // line 69
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/category.css"), "method");
        // line 70
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/footer.css"), "method");
        // line 71
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/icons.css"), "method");
        // line 72
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design"), "method")) {
            // line 73
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/responsive.css"), "method");
        }
        // line 75
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/flex.css"), "method");
        // line 76
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/rtl.css"), "method");
        // line 77
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "css", array(), "method");
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "cache", array()), "getDeveloperMode", array(), "method") ||  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "getMinifyCss", array(), "method"))) {
            // line 79
            echo "<link rel=\"stylesheet\" href=\"index.php?route=journal2/assets/css\" />";
        }
        // line 81
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => "catalog/view/theme/journal2/js/journal.js", 1 => "header"), "method");
        // line 82
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "loadGoogleRecaptcha", array(), "method")) {
            // line 83
            echo "<script src=\"https://www.google.com/recaptcha/api.js\"></script>";
        }
        // line 85
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "js", array(0 => "header"), "method");
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 87
            echo $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "<script>";
        // line 90
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 91
            echo "Journal.COUNTDOWN = {
  DAYS    : \"";
            // line 92
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_days", 1 => "Days"), "method");
            echo "\",
  HOURS   : \"";
            // line 93
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_hours", 1 => "Hours"), "method");
            echo "\",
  MINUTES : \"";
            // line 94
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_min", 1 => "Min"), "method");
            echo "\",
  SECONDS : \"";
            // line 95
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_sec", 1 => "Sec"), "method");
            echo "\"
};";
        }
        // line 98
        echo "Journal.NOTIFICATION_BUTTONS = '";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_buttons"), "method");
        echo "';
</script>

          <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        
</head>
<body>";
        // line 106
        if ((array_key_exists("notification", $context) && (isset($context["notification"]) ? $context["notification"] : null))) {
            echo (isset($context["notification"]) ? $context["notification"] : null);
        }
        // line 107
        echo "        
<!--[if lt IE 9]>
<div class=\"old-browser\">";
        // line 109
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "old_browser_message", 1 => "You are using an old browser. Please <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">upgrade to a newer version</a> or <a href=\"http://browsehappy.com/\">try a different browser</a>."), "method");
        echo "</div>
<![endif]-->";
        // line 111
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_header_modules"), "method");
        // line 112
        $context["header_type"] = ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_type", 1 => "default"), "method") == "extended")) ? ("default") : ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_type", 1 => "default"), "method")));
        // line 113
        echo twig_include($this->env, $context, ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_template"), "method") . "/template/journal2/headers/") . (isset($context["header_type"]) ? $context["header_type"] : null)) . ".twig"));
        // line 114
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_top_modules"), "method")) {
            // line 115
            echo "<div id=\"top-modules\">";
            // line 116
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_top_modules"), "method");
            echo "
</div>";
        }
        // line 119
        echo "<div class=\"extended-container\">
";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 119,  290 => 116,  288 => 115,  286 => 114,  284 => 113,  282 => 112,  280 => 111,  276 => 109,  272 => 107,  268 => 106,  258 => 98,  253 => 95,  249 => 94,  245 => 93,  241 => 92,  238 => 91,  236 => 90,  234 => 89,  228 => 87,  224 => 86,  222 => 85,  219 => 83,  217 => 82,  215 => 81,  212 => 79,  210 => 78,  208 => 77,  206 => 76,  204 => 75,  201 => 73,  199 => 72,  197 => 71,  195 => 70,  193 => 69,  191 => 68,  189 => 67,  187 => 66,  185 => 65,  183 => 64,  181 => 63,  179 => 62,  177 => 61,  175 => 60,  173 => 59,  167 => 57,  163 => 56,  155 => 54,  151 => 53,  145 => 51,  141 => 50,  131 => 48,  127 => 47,  122 => 45,  120 => 44,  118 => 43,  113 => 41,  111 => 40,  99 => 38,  95 => 37,  90 => 35,  88 => 34,  83 => 32,  81 => 31,  76 => 29,  74 => 28,  72 => 27,  69 => 26,  65 => 25,  61 => 23,  57 => 20,  54 => 18,  52 => 17,  50 => 16,  38 => 13,  35 => 11,  33 => 10,  30 => 8,  28 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {% if not constant('JOURNAL_INSTALLED') %}*/
/* <h3>Journal Installation Error</h3>*/
/* <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>*/
/* <p>Please read this: <a href="http://docs.digital-atelier.com/opencart/journal/#/settings/install" target="_blank">here</a>.</p>*/
/* {% endif %}*/
/* {% if not currency %}*/
/* {{- journal2.html_classes.addClass('no-currency') -}}*/
/* {% endif %}*/
/* {% if not language %}*/
/* {{- journal2.html_classes.addClass('no-language') -}}*/
/* {% endif %}*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="{{ journal2.html_classes.getAll() }}" data-j2v="{{ constant('JOURNAL_VERSION') }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* {% if journal2.settings.get('responsive_design', '1') == '1' %}*/
/* {% if journal2.settings.get('pinch_zoom', '1') == '1' %}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* {% else %}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* {% endif %}*/
/* {% endif %}*/
/* <meta name="format-detection" content="telephone=no">*/
/* <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/><![endif]-->*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% set meta_title = journal2.settings.get('blog_meta_title') %}*/
/* {% if meta_title %}*/
/* <meta name="title" content="{{ meta_title }}" />*/
/* {% endif %}*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* {% for sm in journal2.settings.get('share_metas', {}) %}*/
/* <meta {{ sm.key }}="{{ sm.type }}" content="{{ sm.content }}" />*/
/* {% endfor %}*/
/* {% if icon %}*/
/* <link href="{{ icon }}" rel="icon" />*/
/* {% endif %}*/
/* {% set blog_feed_url = journal2.settings.get('blog_blog_feed_url') %}*/
/* {% if blog_feed_url %}*/
/* <link rel="alternate" type="application/rss+xml" title="RSS" href="{{ blog_feed_url }}" />*/
/* {% endif %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for style in styles %}*/
/* {{- journal2.minifier.addStyle(style.href) -}}*/
/* {% endfor %}*/
/* {% for font in journal2.google_fonts.getFonts() %}*/
/* <link rel="stylesheet" href="{{ font }}"/>*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* {{- journal2.minifier.addScript(script, 'header') -}}*/
/* {% endfor %}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/hint.min.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/journal.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/features.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/header.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/module.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/pages.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/account.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/blog-manager.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/side-column.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/product.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/category.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/footer.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/icons.css') -}}*/
/* {% if journal2.settings.get('responsive_design') %}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/responsive.css') -}}*/
/* {% endif %}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/flex.css') -}}*/
/* {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/rtl.css') -}}*/
/* {{- journal2.minifier.css() -}}*/
/* {% if journal2.cache.getDeveloperMode() or not journal2.minifier.getMinifyCss() %}*/
/* <link rel="stylesheet" href="index.php?route=journal2/assets/css" />*/
/* {% endif %}*/
/* {{- journal2.minifier.addScript('catalog/view/theme/journal2/js/journal.js', 'header') -}}*/
/* {% if journal2.minifier.loadGoogleRecaptcha()  %}*/
/* <script src="https://www.google.com/recaptcha/api.js"></script>*/
/* {% endif %}*/
/* {{ journal2.minifier.js('header') }}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <script>*/
/* {% if journal2.settings.get('show_countdown', 'never') != 'never' or journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/* Journal.COUNTDOWN = {*/
/*   DAYS    : "{{ journal2.settings.get('countdown_days', 'Days') }}",*/
/*   HOURS   : "{{ journal2.settings.get('countdown_hours', 'Hours') }}",*/
/*   MINUTES : "{{ journal2.settings.get('countdown_min', 'Min') }}",*/
/*   SECONDS : "{{ journal2.settings.get('countdown_sec', 'Sec') }}"*/
/* };*/
/* {% endif %}*/
/* Journal.NOTIFICATION_BUTTONS = '{{ journal2.settings.get('notification_buttons') }}';*/
/* </script>*/
/* */
/*           <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/*         */
/* </head>*/
/* <body>*/
/* */
/*             {% if notification is defined and notification %} {{ notification }} {% endif %}*/
/*         */
/* <!--[if lt IE 9]>*/
/* <div class="old-browser">{{ journal2.settings.get('old_browser_message', 'You are using an old browser. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade to a newer version</a> or <a href="http://browsehappy.com/">try a different browser</a>.') }}</div>*/
/* <![endif]-->*/
/* {{ journal2.settings.get('config_header_modules') }}*/
/* {% set header_type = journal2.settings.get('header_type', 'default') == 'extended' ? 'default' : journal2.settings.get('header_type', 'default') %}*/
/* {{ include(config.get('config_template') ~ "/template/journal2/headers/" ~ header_type ~ ".twig") }}*/
/* {% if journal2.settings.get('config_top_modules') %}*/
/* <div id="top-modules">*/
/*   {{ journal2.settings.get('config_top_modules') }}*/
/* </div>*/
/* {% endif %}*/
/* <div class="extended-container">*/
/* */
