<?php

/* journal2/template/journal2/module/side_category.twig */
class __TwigTemplate_891ce38b376dfd79ff80d3bc5bad4d684e3f65c413f23cf4e31a6d207aa7b545 extends Twig_Template
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
        // line 25
        echo "<div id=\"journal-side-category-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-side-category-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box side-category";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
  <div class=\"box-heading\">";
        // line 26
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"box-category\">
    <ul>";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_items"]) ? $context["top_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "        <li>";
            // line 31
            if (($this->getAttribute($context["item"], "type", array()) == "custom")) {
                // line 32
                if ($this->getAttribute($context["item"], "href", array())) {
                    // line 33
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\"";
                    echo $this->getAttribute($context["item"], "target", array());
                    echo " class=\"";
                    echo $this->getAttribute($context["item"], "class", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>";
                } else {
                    // line 35
                    echo "              <a>";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>";
                }
            } else {
                // line 38
                $context["menu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["item"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
                // line 39
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
              <span class=\"category-name\">";
                // line 40
                echo $this->getAttribute($context["item"], "name", array());
                // line 41
                if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                    // line 42
                    echo "                  <span class=\"product-count\">(";
                    echo $this->getAttribute($context["item"], "total", array());
                    echo ")</span>";
                }
                // line 44
                echo "              </span>";
                // line 45
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 46
                    if (($this->getAttribute($context["item"], "class", array()) == "active")) {
                        // line 47
                        echo "                  <i><span>-</span></i>";
                    } else {
                        // line 49
                        echo "                  <i><span>+</span></i>";
                    }
                }
                // line 52
                echo "            </a>";
                // line 53
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 54
                    echo "              <ul>";
                    echo (isset($context["menu"]) ? $context["menu"] : null);
                    echo "</ul>";
                }
            }
            // line 57
            echo "        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 60
            echo "        <li>";
            // line 61
            $context["menu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["category"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
            // line 62
            echo "          <a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["category"], "class", array());
            echo "\">
            <span class=\"category-name\">";
            // line 63
            echo $this->getAttribute($context["category"], "name", array());
            // line 64
            if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                // line 65
                echo "                <span class=\"product-count\">(";
                echo $this->getAttribute($context["category"], "total", array());
                echo ")</span>";
            }
            // line 67
            echo "            </span>";
            // line 68
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "subcategories", array())) > 0)) {
                // line 69
                if (($this->getAttribute($context["category"], "class", array()) == "active")) {
                    // line 70
                    echo "                <i><span>-</span></i>";
                } else {
                    // line 72
                    echo "                <i><span>+</span></i>";
                }
            }
            // line 75
            echo "          </a>";
            // line 76
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "subcategories", array())) > 0)) {
                // line 77
                echo "            <ul>";
                echo (isset($context["menu"]) ? $context["menu"] : null);
                echo "</ul>";
            }
            // line 79
            echo "        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bottom_items"]) ? $context["bottom_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 82
            echo "        <li>";
            // line 83
            if (($this->getAttribute($context["item"], "type", array()) == "custom")) {
                // line 84
                if ($this->getAttribute($context["item"], "href", array())) {
                    // line 85
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\"";
                    echo $this->getAttribute($context["item"], "target", array());
                    echo " class=\"";
                    echo $this->getAttribute($context["item"], "class", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>";
                } else {
                    // line 87
                    echo "              <a>";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "</a>";
                }
            } else {
                // line 90
                $context["menu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["item"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
                // line 91
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
              <span class=\"category-name\">";
                // line 92
                echo $this->getAttribute($context["item"], "name", array());
                // line 93
                if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                    // line 94
                    echo "                  <span class=\"product-count\">(";
                    echo $this->getAttribute($context["item"], "total", array());
                    echo ")</span>";
                }
                // line 96
                echo "              </span>";
                // line 97
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 98
                    if (($this->getAttribute($context["item"], "class", array()) == "active")) {
                        // line 99
                        echo "                  <i><span>-</span></i>";
                    } else {
                        // line 101
                        echo "                  <i><span>+</span></i>";
                    }
                }
                // line 104
                echo "            </a>";
                // line 105
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 106
                    echo "              <ul>";
                    echo (isset($context["menu"]) ? $context["menu"] : null);
                    echo "</ul>";
                }
            }
            // line 109
            echo "        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    </ul>
  </div>";
        // line 113
        if (((isset($context["type"]) ? $context["type"] : null) == "accordion")) {
            // line 114
            echo "    <script>
      \$('#journal-side-category-";
            // line 115
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .box-category a i').click(function (e, first) {
        e.preventDefault();
        \$('+ ul', \$(this).parent()).slideToggle(first ? 0 : 400);
        \$(this).parent().toggleClass('active');
        \$(this).html(\$(this).parent().hasClass('active') ? \"<span>-</span>\" : \"<span>+</span>\");
        return false;
      });
      \$('#journal-side-category-";
            // line 122
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .is-active i').trigger('click', true);
    </script>";
        }
        // line 125
        echo "</div>
";
    }

    // line 1
    public function getrenderSideCategoryMenu($__menu__ = null, $__show_total__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "show_total" => $__show_total__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                $context["submenu"] = $this->getAttribute($this, "renderSideCategoryMenu", array(0 => $context["item"], 1 => (isset($context["show_total"]) ? $context["show_total"] : null)), "method");
                // line 4
                echo "    <li>
      <a href=\"";
                // line 5
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
        <span class=\"category-name\">";
                // line 6
                echo $this->getAttribute($context["item"], "name", array());
                // line 7
                if ((isset($context["show_total"]) ? $context["show_total"] : null)) {
                    // line 8
                    echo "            <span class=\"product-count\">(";
                    echo $this->getAttribute($context["item"], "total", array());
                    echo ")</span>";
                }
                // line 10
                echo "        </span>";
                // line 11
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 12
                    if (($this->getAttribute($context["item"], "class", array()) == "active")) {
                        // line 13
                        echo "            <i><span>-</span></i>";
                    } else {
                        // line 15
                        echo "            <i><span>+</span></i>";
                    }
                }
                // line 18
                echo "      </a>";
                // line 19
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 20
                    echo "        <ul>";
                    echo (isset($context["submenu"]) ? $context["submenu"] : null);
                    echo "</ul>";
                }
                // line 22
                echo "    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/side_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 22,  315 => 20,  313 => 19,  311 => 18,  307 => 15,  304 => 13,  302 => 12,  300 => 11,  298 => 10,  293 => 8,  291 => 7,  289 => 6,  283 => 5,  280 => 4,  278 => 3,  274 => 2,  261 => 1,  256 => 125,  251 => 122,  241 => 115,  238 => 114,  236 => 113,  233 => 111,  227 => 109,  221 => 106,  219 => 105,  217 => 104,  213 => 101,  210 => 99,  208 => 98,  206 => 97,  204 => 96,  199 => 94,  197 => 93,  195 => 92,  188 => 91,  186 => 90,  180 => 87,  169 => 85,  167 => 84,  165 => 83,  163 => 82,  159 => 81,  153 => 79,  148 => 77,  146 => 76,  144 => 75,  140 => 72,  137 => 70,  135 => 69,  133 => 68,  131 => 67,  126 => 65,  124 => 64,  122 => 63,  115 => 62,  113 => 61,  111 => 60,  107 => 59,  101 => 57,  95 => 54,  93 => 53,  91 => 52,  87 => 49,  84 => 47,  82 => 46,  80 => 45,  78 => 44,  73 => 42,  71 => 41,  69 => 40,  62 => 39,  60 => 38,  54 => 35,  43 => 33,  41 => 32,  39 => 31,  37 => 30,  33 => 29,  28 => 26,  19 => 25,);
    }
}
/* {% macro renderSideCategoryMenu(menu, show_total) %}*/
/*   {% for item in menu.subcategories %}*/
/*     {% set submenu = _self.renderSideCategoryMenu(item, show_total) %}*/
/*     <li>*/
/*       <a href="{{ item.href }}" class="{{ item.class }}">*/
/*         <span class="category-name">{{ item.name }}*/
/*           {% if show_total %}*/
/*             <span class="product-count">({{ item.total }})</span>*/
/*           {% endif %}*/
/*         </span>*/
/*         {% if item.subcategories | length > 0 %}*/
/*           {% if item.class == 'active' %}*/
/*             <i><span>-</span></i>*/
/*           {% else %}*/
/*             <i><span>+</span></i>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </a>*/
/*       {% if item.subcategories | length > 0 %}*/
/*         <ul> {{ submenu }}</ul>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* <div id="journal-side-category-{{ module }}" class="journal-side-category-{{ module_id }} box side-category {{ class }}">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*   <div class="box-category">*/
/*     <ul>*/
/*       {% for item in top_items %}*/
/*         <li>*/
/*           {% if item.type == 'custom' %}*/
/*             {% if item.href %}*/
/*               <a href="{{ item.href }}" {{ item.target }} class="{{ item.class }}">{{ item.name }}</a>*/
/*             {% else %}*/
/*               <a>{{ item.name }}</a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             {% set menu = _self.renderSideCategoryMenu(item, show_total) %}*/
/*             <a href="{{ item.href }}" class="{{ item.class }}">*/
/*               <span class="category-name">{{ item.name }}*/
/*                 {% if show_total %}*/
/*                   <span class="product-count">({{ item.total }})</span>*/
/*                 {% endif %}*/
/*               </span>*/
/*               {% if item.subcategories | length > 0 %}*/
/*                 {% if item.class == 'active' %}*/
/*                   <i><span>-</span></i>*/
/*                 {% else %}*/
/*                   <i><span>+</span></i>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </a>*/
/*             {% if item.subcategories | length > 0 %}*/
/*               <ul> {{ menu }}</ul>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       {% for category in categories %}*/
/*         <li>*/
/*           {% set menu = _self.renderSideCategoryMenu(category, show_total) %}*/
/*           <a href="{{ category.href }}" class="{{ category.class }}">*/
/*             <span class="category-name">{{ category.name }}*/
/*               {% if show_total %}*/
/*                 <span class="product-count">({{ category.total }})</span>*/
/*               {% endif %}*/
/*             </span>*/
/*             {% if category.subcategories | length > 0 %}*/
/*               {% if category.class == 'active' %}*/
/*                 <i><span>-</span></i>*/
/*               {% else %}*/
/*                 <i><span>+</span></i>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </a>*/
/*           {% if category.subcategories | length > 0 %}*/
/*             <ul> {{ menu }}</ul>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       {% for item in bottom_items %}*/
/*         <li>*/
/*           {% if item.type == 'custom' %}*/
/*             {% if item.href %}*/
/*               <a href="{{ item.href }}" {{ item.target }} class="{{ item.class }}">{{ item.name }}</a>*/
/*             {% else %}*/
/*               <a>{{ item.name }}</a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             {% set menu = _self.renderSideCategoryMenu(item, show_total) %}*/
/*             <a href="{{ item.href }}" class="{{ item.class }}">*/
/*               <span class="category-name">{{ item.name }}*/
/*                 {% if show_total %}*/
/*                   <span class="product-count">({{ item.total }})</span>*/
/*                 {% endif %}*/
/*               </span>*/
/*               {% if item.subcategories | length > 0 %}*/
/*                 {% if item.class == 'active' %}*/
/*                   <i><span>-</span></i>*/
/*                 {% else %}*/
/*                   <i><span>+</span></i>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </a>*/
/*             {% if item.subcategories | length > 0 %}*/
/*               <ul> {{ menu }}</ul>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/*   {% if type == 'accordion' %}*/
/*     <script>*/
/*       $('#journal-side-category-{{ module }} .box-category a i').click(function (e, first) {*/
/*         e.preventDefault();*/
/*         $('+ ul', $(this).parent()).slideToggle(first ? 0 : 400);*/
/*         $(this).parent().toggleClass('active');*/
/*         $(this).html($(this).parent().hasClass('active') ? "<span>-</span>" : "<span>+</span>");*/
/*         return false;*/
/*       });*/
/*       $('#journal-side-category-{{ module }} .is-active i').trigger('click', true);*/
/*     </script>*/
/*   {% endif %}*/
/* </div>*/
/* */
