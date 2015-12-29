<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3611f2cd0e3a1132c65046f89e478b53255ba569b65c55d50cfa181ea7c5887a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1530fdae1bc690cceabbab25a146feedb0acf88415cc05d9bc9d9ba8011caf42 = $this->env->getExtension("native_profiler");
        $__internal_1530fdae1bc690cceabbab25a146feedb0acf88415cc05d9bc9d9ba8011caf42->enter($__internal_1530fdae1bc690cceabbab25a146feedb0acf88415cc05d9bc9d9ba8011caf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1530fdae1bc690cceabbab25a146feedb0acf88415cc05d9bc9d9ba8011caf42->leave($__internal_1530fdae1bc690cceabbab25a146feedb0acf88415cc05d9bc9d9ba8011caf42_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f541315d0776f6f59475359d46ad0d5e3de8791c4aec1de247543724722a9501 = $this->env->getExtension("native_profiler");
        $__internal_f541315d0776f6f59475359d46ad0d5e3de8791c4aec1de247543724722a9501->enter($__internal_f541315d0776f6f59475359d46ad0d5e3de8791c4aec1de247543724722a9501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f541315d0776f6f59475359d46ad0d5e3de8791c4aec1de247543724722a9501->leave($__internal_f541315d0776f6f59475359d46ad0d5e3de8791c4aec1de247543724722a9501_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd76599080ac862b207c77b50de7de31fff5849490a01128a911037ced012c7f = $this->env->getExtension("native_profiler");
        $__internal_dd76599080ac862b207c77b50de7de31fff5849490a01128a911037ced012c7f->enter($__internal_dd76599080ac862b207c77b50de7de31fff5849490a01128a911037ced012c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd76599080ac862b207c77b50de7de31fff5849490a01128a911037ced012c7f->leave($__internal_dd76599080ac862b207c77b50de7de31fff5849490a01128a911037ced012c7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_03304d90f9eb291529ea90d17c0a913ac748e480f404da8c089ee143277f7287 = $this->env->getExtension("native_profiler");
        $__internal_03304d90f9eb291529ea90d17c0a913ac748e480f404da8c089ee143277f7287->enter($__internal_03304d90f9eb291529ea90d17c0a913ac748e480f404da8c089ee143277f7287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_03304d90f9eb291529ea90d17c0a913ac748e480f404da8c089ee143277f7287->leave($__internal_03304d90f9eb291529ea90d17c0a913ac748e480f404da8c089ee143277f7287_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
