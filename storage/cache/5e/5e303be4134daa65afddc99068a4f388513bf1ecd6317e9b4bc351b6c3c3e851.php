<?php

/* journal2/template/common/column_right.twig */
class __TwigTemplate_030268955e560d0227ef3f5d62d247c3120041ba20cbb67049f73c3586e3df05 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "  <div id=\"column-right\" class=\"col-sm-3 hidden-xs side-column";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "flyout_column_right_active"), "method")) {
                echo " flyout-right";
            }
            echo "\">";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo $context["module"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/*   <div id="column-right" class="col-sm-3 hidden-xs side-column {% if journal2.settings.get('flyout_column_right_active') %} flyout-right {% endif %}">*/
/*     {% for module in modules %}*/
/*       {{ module }}*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
