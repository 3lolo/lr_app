<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_bdfa68c7a35ae4f190783aaf43265cbb801e5c6b1ca0dde010d1cd3acad61546 extends Twig_Template
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
        $__internal_714cf7a9f4f6ec097e69318532d9a5d3b8ebe83ee40b73a5ba4d048255ce70b3 = $this->env->getExtension("native_profiler");
        $__internal_714cf7a9f4f6ec097e69318532d9a5d3b8ebe83ee40b73a5ba4d048255ce70b3->enter($__internal_714cf7a9f4f6ec097e69318532d9a5d3b8ebe83ee40b73a5ba4d048255ce70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

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
        
        $__internal_714cf7a9f4f6ec097e69318532d9a5d3b8ebe83ee40b73a5ba4d048255ce70b3->leave($__internal_714cf7a9f4f6ec097e69318532d9a5d3b8ebe83ee40b73a5ba4d048255ce70b3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
