<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_9f1f57a52eee97582bd880126f19b444bb81b58ee76cf09d3e5318f797ae34a0 extends Twig_Template
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
        $__internal_117b1bcb5f02a7c0c9927ea94cf2a2e153b73123aa9bce6904df27a1f1379905 = $this->env->getExtension("native_profiler");
        $__internal_117b1bcb5f02a7c0c9927ea94cf2a2e153b73123aa9bce6904df27a1f1379905->enter($__internal_117b1bcb5f02a7c0c9927ea94cf2a2e153b73123aa9bce6904df27a1f1379905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_117b1bcb5f02a7c0c9927ea94cf2a2e153b73123aa9bce6904df27a1f1379905->leave($__internal_117b1bcb5f02a7c0c9927ea94cf2a2e153b73123aa9bce6904df27a1f1379905_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
