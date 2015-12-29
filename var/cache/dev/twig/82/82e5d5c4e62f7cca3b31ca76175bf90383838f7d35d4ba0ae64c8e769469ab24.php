<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a2a1955a2488fce805c055ae88238e2b24e08f1d619a3081669ffe1bdb5eff99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b98def7cf1ea2d3790d2a7568aecd598b62eb158af38ad8ad5b9321d7e76f88a = $this->env->getExtension("native_profiler");
        $__internal_b98def7cf1ea2d3790d2a7568aecd598b62eb158af38ad8ad5b9321d7e76f88a->enter($__internal_b98def7cf1ea2d3790d2a7568aecd598b62eb158af38ad8ad5b9321d7e76f88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b98def7cf1ea2d3790d2a7568aecd598b62eb158af38ad8ad5b9321d7e76f88a->leave($__internal_b98def7cf1ea2d3790d2a7568aecd598b62eb158af38ad8ad5b9321d7e76f88a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b7166052a87de48fdb2236961776d639b1b6f44efefdcb20ff0789700b3d9f6 = $this->env->getExtension("native_profiler");
        $__internal_0b7166052a87de48fdb2236961776d639b1b6f44efefdcb20ff0789700b3d9f6->enter($__internal_0b7166052a87de48fdb2236961776d639b1b6f44efefdcb20ff0789700b3d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b7166052a87de48fdb2236961776d639b1b6f44efefdcb20ff0789700b3d9f6->leave($__internal_0b7166052a87de48fdb2236961776d639b1b6f44efefdcb20ff0789700b3d9f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ee452734538f39b7a6593a365eecf776bf4eff2370773533f88fb0c1078ea74 = $this->env->getExtension("native_profiler");
        $__internal_2ee452734538f39b7a6593a365eecf776bf4eff2370773533f88fb0c1078ea74->enter($__internal_2ee452734538f39b7a6593a365eecf776bf4eff2370773533f88fb0c1078ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ee452734538f39b7a6593a365eecf776bf4eff2370773533f88fb0c1078ea74->leave($__internal_2ee452734538f39b7a6593a365eecf776bf4eff2370773533f88fb0c1078ea74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c98646c408298729e62f1583e3122bb3a029dc835fb03155f99130714602e5e9 = $this->env->getExtension("native_profiler");
        $__internal_c98646c408298729e62f1583e3122bb3a029dc835fb03155f99130714602e5e9->enter($__internal_c98646c408298729e62f1583e3122bb3a029dc835fb03155f99130714602e5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c98646c408298729e62f1583e3122bb3a029dc835fb03155f99130714602e5e9->leave($__internal_c98646c408298729e62f1583e3122bb3a029dc835fb03155f99130714602e5e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
