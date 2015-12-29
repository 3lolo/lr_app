<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_551f3b2412b937eb907e3eb5ff40d319fec14274109cb5f7e7298b3580681d60 extends Twig_Template
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
        $__internal_ae0c39314a79def89678c9737b9da2bf5bfabfb1a95790768b324ea9e2380d9e = $this->env->getExtension("native_profiler");
        $__internal_ae0c39314a79def89678c9737b9da2bf5bfabfb1a95790768b324ea9e2380d9e->enter($__internal_ae0c39314a79def89678c9737b9da2bf5bfabfb1a95790768b324ea9e2380d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_ae0c39314a79def89678c9737b9da2bf5bfabfb1a95790768b324ea9e2380d9e->leave($__internal_ae0c39314a79def89678c9737b9da2bf5bfabfb1a95790768b324ea9e2380d9e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
