<?php

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_1da64c115c78b2f6f1106841d9d542d58f6e6fd4d5d454c58459d2fe77285e37 extends Twig_Template
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
        $__internal_62c3e30b9d610555fc193dd7495f3cb259ccfa5d14a48bb724a9351979ddaeb1 = $this->env->getExtension("native_profiler");
        $__internal_62c3e30b9d610555fc193dd7495f3cb259ccfa5d14a48bb724a9351979ddaeb1->enter($__internal_62c3e30b9d610555fc193dd7495f3cb259ccfa5d14a48bb724a9351979ddaeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
";
        
        $__internal_62c3e30b9d610555fc193dd7495f3cb259ccfa5d14a48bb724a9351979ddaeb1->leave($__internal_62c3e30b9d610555fc193dd7495f3cb259ccfa5d14a48bb724a9351979ddaeb1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <img src="{{ value }}">*/
/* */
