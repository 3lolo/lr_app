<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_21416bd80544fb7d89a623c4d963c39a1a12c5e523d4380546f7780ee50cd3f6 extends Twig_Template
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
        $__internal_5d5c249ff7df27e764c33f06748b646cf316f33ad3286554dc92cabb13f3fa8c = $this->env->getExtension("native_profiler");
        $__internal_5d5c249ff7df27e764c33f06748b646cf316f33ad3286554dc92cabb13f3fa8c->enter($__internal_5d5c249ff7df27e764c33f06748b646cf316f33ad3286554dc92cabb13f3fa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_5d5c249ff7df27e764c33f06748b646cf316f33ad3286554dc92cabb13f3fa8c->leave($__internal_5d5c249ff7df27e764c33f06748b646cf316f33ad3286554dc92cabb13f3fa8c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
