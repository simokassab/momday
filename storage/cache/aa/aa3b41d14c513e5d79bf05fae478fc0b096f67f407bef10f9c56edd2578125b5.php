<?php

/* journal2/template/error/not_found.twig */
class __TwigTemplate_63c2f8187309ccbb50d243bcc8ab4688171ad971b1e7ed100e04d71c9b63509d extends Twig_Template
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
<div id=\"container\" class=\"container j-container not-found-page\">
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
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            $context["class"] = "col-sm-6";
        } elseif ((        // line 11
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            $context["class"] = "col-sm-9";
        } else {
            // line 14
            $context["class"] = "col-sm-12";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <p>";
        // line 19
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 21
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>";
        // line 23
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>";
        // line 26
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  79 => 23,  73 => 21,  68 => 19,  64 => 18,  61 => 17,  56 => 16,  53 => 14,  50 => 12,  48 => 11,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container not-found-page">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <p>{{ text_error }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
