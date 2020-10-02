<?php

/* journal2/template/common/currency.twig */
class __TwigTemplate_c10c0601ed1310d09f7e6db28703064e1269a5af063588b41bea8cdcabdea0d2 extends Twig_Template
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
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => (((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) ? ("currency_display") : ("currency_display_mobile")), 1 => "symbol"), "method");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 3
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <div id=\"currency\" class=\"";
            // line 4
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "currency_display", 1 => "never"), "method") == "full")) ? ("full-text") : (""));
            echo "\">
      <div class=\"btn-group\">
        <button class=\"dropdown-toggle\" type=\"button\" data-hover=\"dropdown\">
          <div>";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 10
                    if (((isset($context["type"]) ? $context["type"] : null) == "symbol")) {
                        // line 11
                        echo "                  <span class=\"currency-symbol\">";
                        echo (($this->getAttribute($context["currency"], "symbol_left", array())) ? ($this->getAttribute($context["currency"], "symbol_left", array())) : ($this->getAttribute($context["currency"], "symbol_right", array())));
                        echo "</span>";
                    } elseif ((                    // line 12
(isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 13
                        echo $this->getAttribute($context["currency"], "title", array());
                    } elseif ((                    // line 14
(isset($context["type"]) ? $context["type"] : null) == "code")) {
                        // line 15
                        echo $this->getAttribute($context["currency"], "code", array());
                    } elseif ((                    // line 16
(isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 17
                        if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                            // line 18
                            echo "                    <span class=\"currency-symbol\">";
                            echo $this->getAttribute($context["currency"], "symbol_left", array());
                            echo "</span>
                    <span class=\"currency-text\">";
                            // line 19
                            echo $this->getAttribute($context["currency"], "title", array());
                            echo "</span>";
                        } else {
                            // line 21
                            echo "                    <span class=\"currency-text\">";
                            echo $this->getAttribute($context["currency"], "title", array());
                            echo "</span>
                    <span class=\"currency-symbol\">";
                            // line 22
                            echo $this->getAttribute($context["currency"], "symbol_right", array());
                            echo "</span>";
                        }
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          </div>
        </button>
        <ul class=\"dropdown-menu\">";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 31
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 32
                    if (((isset($context["type"]) ? $context["type"] : null) == "symbol")) {
                        // line 33
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo "</a></li>";
                    }
                    // line 35
                    if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 36
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</a></li>";
                    }
                    // line 38
                    if (((isset($context["type"]) ? $context["type"] : null) == "code")) {
                        // line 39
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</a></li>";
                    }
                    // line 41
                    if (((isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 42
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo " <span class=\"currency-text\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span></a></li>";
                    }
                } else {
                    // line 45
                    if (((isset($context["type"]) ? $context["type"] : null) == "symbol")) {
                        // line 46
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "</a></li>";
                    }
                    // line 48
                    if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 49
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</a></li>";
                    }
                    // line 51
                    if (((isset($context["type"]) ? $context["type"] : null) == "code")) {
                        // line 52
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\">";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</a></li>";
                    }
                    // line 54
                    if (((isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 55
                        echo "                <li><a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "'); \$(this).closest('form').submit();\"><span class=\"currency-text\">";
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span>";
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "</a></li>";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </ul>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 62
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
    </div>
  </form>";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  174 => 59,  160 => 55,  158 => 54,  151 => 52,  149 => 51,  142 => 49,  140 => 48,  133 => 46,  131 => 45,  121 => 42,  119 => 41,  112 => 39,  110 => 38,  103 => 36,  101 => 35,  94 => 33,  92 => 32,  90 => 31,  86 => 30,  82 => 27,  72 => 22,  67 => 21,  63 => 19,  58 => 18,  56 => 17,  54 => 16,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  42 => 11,  40 => 10,  38 => 9,  34 => 8,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set type = journal2.settings.get(staticCall('Journal2Utils', 'getDevice') == 'desktop' ? 'currency_display' : 'currency_display_mobile', 'symbol') %}*/
/* {% if currencies | length > 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*     <div id="currency" class="{{ journal2.settings.get('currency_display', 'never') == 'full' ? 'full-text' : '' }}">*/
/*       <div class="btn-group">*/
/*         <button class="dropdown-toggle" type="button" data-hover="dropdown">*/
/*           <div>*/
/*             {% for currency in currencies %}*/
/*               {% if currency.code == code %}*/
/*                 {% if type == 'symbol' %}*/
/*                   <span class="currency-symbol">{{ currency.symbol_left ? currency.symbol_left : currency.symbol_right }}</span>*/
/*                 {% elseif type == 'text' %}*/
/*                   {{ currency.title }}*/
/*                 {% elseif type == 'code' %}*/
/*                   {{ currency.code }}*/
/*                 {% elseif type == 'full' %}*/
/*                   {% if currency.symbol_left %}*/
/*                     <span class="currency-symbol">{{ currency.symbol_left }}</span>*/
/*                     <span class="currency-text">{{ currency.title }}</span>*/
/*                   {% else %}*/
/*                     <span class="currency-text">{{ currency.title }}</span>*/
/*                     <span class="currency-symbol">{{ currency.symbol_right }}</span>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*         </button>*/
/*         <ul class="dropdown-menu">*/
/*           {% for currency in currencies %}*/
/*             {% if currency.symbol_left %}*/
/*               {% if type == 'symbol' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.symbol_left }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'text' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.title }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'code' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.code }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'full' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.symbol_left }} <span class="currency-text">{{ currency.title }}</span></a></li>*/
/*               {% endif %}*/
/*             {% else %}*/
/*               {% if type == 'symbol' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.symbol_right }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'text' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.title }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'code' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();">{{ currency.code }}</a></li>*/
/*               {% endif %}*/
/*               {% if type == 'full' %}*/
/*                 <li><a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ currency.code }}'); $(this).closest('form').submit();"><span class="currency-text">{{ currency.title }}</span> {{ currency.symbol_right }}</a></li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       <input type="hidden" name="code" value=""/>*/
/*       <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*     </div>*/
/*   </form>*/
/* {% endif %}*/
/* */
