<?php

/* journal2/template/common/language.twig */
class __TwigTemplate_9da8e943ae718fa0c3c04e2405710b8ce3e933c10545c938f9da88626ae8c359 extends Twig_Template
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
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => (((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) ? ("language_display") : ("language_display_mobile")), 1 => "flag"), "method");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 3
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <div id=\"language\" class=\"";
            // line 4
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "language_display", 1 => "never"), "method") == "full")) ? ("full-text") : (""));
            echo "\">
      <div class=\"btn-group\">
        <button class=\"dropdown-toggle\" type=\"button\" data-hover=\"dropdown\">
          <div>";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 9
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 10
                    if (((isset($context["type"]) ? $context["type"] : null) == "flag")) {
                        // line 11
                        echo "                  <img width=\"16\" height=\"11\" src=\"";
                        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getLanguageFlag", array(0 => $context["language"])));
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["language"], "name", array());
                        echo "\">";
                    } elseif ((                    // line 12
(isset($context["type"]) ? $context["type"] : null) == "text")) {
                        // line 13
                        echo $this->getAttribute($context["language"], "name", array());
                    } elseif ((                    // line 14
(isset($context["type"]) ? $context["type"] : null) == "full")) {
                        // line 15
                        echo "                  <img width=\"16\" height=\"11\" src=\"";
                        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getLanguageFlag", array(0 => $context["language"])));
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["language"], "name", array());
                        echo "\">
                  <span class=\"language-text\">";
                        // line 16
                        echo $this->getAttribute($context["language"], "name", array());
                        echo "</span>";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "          </div>
        </button>
        <ul class=\"dropdown-menu\">";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 24
                echo "            <li>
              <a onclick=\"\$(this).closest('form').find('input[name=\\'code\\']').val('";
                // line 25
                echo $this->getAttribute($context["language"], "code", array());
                echo "'); \$(this).closest('form').submit();\">";
                // line 26
                if (((isset($context["type"]) ? $context["type"] : null) == "flag")) {
                    // line 27
                    echo "                  <img width=\"16\" height=\"11\" src=\"";
                    echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getLanguageFlag", array(0 => $context["language"])));
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\">";
                } elseif ((                // line 28
(isset($context["type"]) ? $context["type"] : null) == "text")) {
                    // line 29
                    echo $this->getAttribute($context["language"], "name", array());
                } elseif ((                // line 30
(isset($context["type"]) ? $context["type"] : null) == "full")) {
                    // line 31
                    echo "                  <img width=\"16\" height=\"11\" src=\"";
                    echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getLanguageFlag", array(0 => $context["language"])));
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\">
                  <span class=\"language-text\">";
                    // line 32
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</span>";
                }
                // line 34
                echo "              </a>
            </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </ul>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 40
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
    </div>
  </form>";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  116 => 37,  109 => 34,  105 => 32,  98 => 31,  96 => 30,  94 => 29,  92 => 28,  86 => 27,  84 => 26,  81 => 25,  78 => 24,  74 => 23,  70 => 20,  61 => 16,  54 => 15,  52 => 14,  50 => 13,  48 => 12,  42 => 11,  40 => 10,  38 => 9,  34 => 8,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set type = journal2.settings.get(staticCall('Journal2Utils', 'getDevice') == 'desktop' ? 'language_display' : 'language_display_mobile', 'flag') %}*/
/* {% if languages | length > 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*     <div id="language" class="{{ journal2.settings.get('language_display', 'never') == 'full' ? 'full-text' : '' }}">*/
/*       <div class="btn-group">*/
/*         <button class="dropdown-toggle" type="button" data-hover="dropdown">*/
/*           <div>*/
/*             {% for language in languages %}*/
/*               {% if language.code == code %}*/
/*                 {% if type == 'flag' %}*/
/*                   <img width="16" height="11" src="{{ staticCall('Journal2Utils', 'getLanguageFlag', [language]) }}" alt="{{ language.name }}">*/
/*                 {% elseif type == 'text' %}*/
/*                   {{ language.name }}*/
/*                 {% elseif type == 'full' %}*/
/*                   <img width="16" height="11" src="{{ staticCall('Journal2Utils', 'getLanguageFlag', [language]) }}" alt="{{ language.name }}">*/
/*                   <span class="language-text">{{ language.name }}</span>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*         </button>*/
/*         <ul class="dropdown-menu">*/
/*           {% for language in languages %}*/
/*             <li>*/
/*               <a onclick="$(this).closest('form').find('input[name=\'code\']').val('{{ language.code }}'); $(this).closest('form').submit();">*/
/*                 {% if type == 'flag' %}*/
/*                   <img width="16" height="11" src="{{ staticCall('Journal2Utils', 'getLanguageFlag', [language]) }}" alt="{{ language.name }}">*/
/*                 {% elseif type == 'text' %}*/
/*                   {{ language.name }}*/
/*                 {% elseif type == 'full' %}*/
/*                   <img width="16" height="11" src="{{ staticCall('Journal2Utils', 'getLanguageFlag', [language]) }}" alt="{{ language.name }}">*/
/*                   <span class="language-text">{{ language.name }}</span>*/
/*                 {% endif %}*/
/*               </a>*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       <input type="hidden" name="code" value=""/>*/
/*       <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*     </div>*/
/*   </form>*/
/* {% endif %}*/
/* */
