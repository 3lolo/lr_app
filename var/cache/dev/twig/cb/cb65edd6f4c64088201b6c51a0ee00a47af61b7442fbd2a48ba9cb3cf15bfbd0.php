<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71942f7847318d21af9f05aefe53f20f30ad64b6bcd8626f2b5946a3f61651b8 extends Twig_Template
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
        $__internal_b07131a8290d511aa5d7b40be0f8a1a5d6c577587ded256f37599537b59b8ee1 = $this->env->getExtension("native_profiler");
        $__internal_b07131a8290d511aa5d7b40be0f8a1a5d6c577587ded256f37599537b59b8ee1->enter($__internal_b07131a8290d511aa5d7b40be0f8a1a5d6c577587ded256f37599537b59b8ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07131a8290d511aa5d7b40be0f8a1a5d6c577587ded256f37599537b59b8ee1->leave($__internal_b07131a8290d511aa5d7b40be0f8a1a5d6c577587ded256f37599537b59b8ee1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b71d457d69275e83209c487412436ddc23c8700d4a8f20e423b942d6ddba7f34 = $this->env->getExtension("native_profiler");
        $__internal_b71d457d69275e83209c487412436ddc23c8700d4a8f20e423b942d6ddba7f34->enter($__internal_b71d457d69275e83209c487412436ddc23c8700d4a8f20e423b942d6ddba7f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b71d457d69275e83209c487412436ddc23c8700d4a8f20e423b942d6ddba7f34->leave($__internal_b71d457d69275e83209c487412436ddc23c8700d4a8f20e423b942d6ddba7f34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e2f8432c701569a52ca95d364bf8d98ce13b14ecbf603a612e7297b54032602 = $this->env->getExtension("native_profiler");
        $__internal_4e2f8432c701569a52ca95d364bf8d98ce13b14ecbf603a612e7297b54032602->enter($__internal_4e2f8432c701569a52ca95d364bf8d98ce13b14ecbf603a612e7297b54032602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e2f8432c701569a52ca95d364bf8d98ce13b14ecbf603a612e7297b54032602->leave($__internal_4e2f8432c701569a52ca95d364bf8d98ce13b14ecbf603a612e7297b54032602_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32182a72ca8f68597b7244006601917bfd8db3f30663ce05c4cc5012f4e246db = $this->env->getExtension("native_profiler");
        $__internal_32182a72ca8f68597b7244006601917bfd8db3f30663ce05c4cc5012f4e246db->enter($__internal_32182a72ca8f68597b7244006601917bfd8db3f30663ce05c4cc5012f4e246db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32182a72ca8f68597b7244006601917bfd8db3f30663ce05c4cc5012f4e246db->leave($__internal_32182a72ca8f68597b7244006601917bfd8db3f30663ce05c4cc5012f4e246db_prof);

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
