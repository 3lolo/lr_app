<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_4a66a6866aaef2e1b821b89ad8d6402cbddb400874e875325c29f4508c09d407 extends Twig_Template
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
        $__internal_9715e77ac924b3ebce40b3002108170484882bbaedaca8565bba91d8d8f0d4f1 = $this->env->getExtension("native_profiler");
        $__internal_9715e77ac924b3ebce40b3002108170484882bbaedaca8565bba91d8d8f0d4f1->enter($__internal_9715e77ac924b3ebce40b3002108170484882bbaedaca8565bba91d8d8f0d4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9715e77ac924b3ebce40b3002108170484882bbaedaca8565bba91d8d8f0d4f1->leave($__internal_9715e77ac924b3ebce40b3002108170484882bbaedaca8565bba91d8d8f0d4f1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
