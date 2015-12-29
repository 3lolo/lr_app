<?php

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_1403b2511489e49c2b2795b3308b18a1c5e6504d3b3b101d12297e614659b567 extends Twig_Template
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
        $__internal_d213864586f761de8ba14f1616df8916e6a538ca9f94cf3cf180228a95bd2739 = $this->env->getExtension("native_profiler");
        $__internal_d213864586f761de8ba14f1616df8916e6a538ca9f94cf3cf180228a95bd2739->enter($__internal_d213864586f761de8ba14f1616df8916e6a538ca9f94cf3cf180228a95bd2739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "haveToPaginate", array())) {
            // line 4
            echo "    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-2 hidden-xs\" class=\"list-pagination-counter\">
                ";
            // line 7
            echo $this->env->getExtension('translator')->trans("paginator.counter", array("%start%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageOffsetStart", array()), "%end%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageOffsetEnd", array()), "%results%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array())), "EasyAdminBundle");
            echo "
            </div>

            <div class=\"col-xs-12 col-sm-10\">
                <ul class=\"pagination list-pagination-paginator ";
            // line 11
            echo (((1 == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) ? ("first-page") : (""));
            echo " ";
            echo (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "hasNextPage", array())) ? ("") : ("last-page"));
            echo "\">
                    ";
            // line 12
            if ((1 == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                // line 13
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            } else {
                // line 19
                echo "                        <li>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("page" => 1))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 25
            echo "
                    ";
            // line 26
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "hasPreviousPage", array())) {
                // line 27
                echo "                        <li>
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            } else {
                // line 33
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            }
            // line 39
            echo "
                    ";
            // line 40
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "hasNextPage", array())) {
                // line 41
                echo "                        <li>
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())))), "html", null, true);
                echo "\">
                                ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 47
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 53
            echo "
                    ";
            // line 54
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) < $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array()))) {
                // line 55
                echo "                        <li>
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())))), "html", null, true);
                echo "\">
                                ";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 61
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 67
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_d213864586f761de8ba14f1616df8916e6a538ca9f94cf3cf180228a95bd2739->leave($__internal_d213864586f761de8ba14f1616df8916e6a538ca9f94cf3cf180228a95bd2739_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 67,  155 => 63,  151 => 61,  144 => 57,  140 => 56,  137 => 55,  135 => 54,  132 => 53,  125 => 49,  121 => 47,  114 => 43,  110 => 42,  107 => 41,  105 => 40,  102 => 39,  95 => 35,  91 => 33,  84 => 29,  80 => 28,  77 => 27,  75 => 26,  72 => 25,  65 => 21,  61 => 20,  58 => 19,  51 => 15,  47 => 13,  45 => 12,  39 => 11,  32 => 7,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if paginator.haveToPaginate %}*/
/*     <div class="list-pagination">*/
/*         <div class="row">*/
/*             <div class="col-sm-2 hidden-xs" class="list-pagination-counter">*/
/*                 {{ 'paginator.counter'|trans({ '%start%': paginator.currentPageOffsetStart, '%end%': paginator.currentPageOffsetEnd, '%results%': paginator.nbResults})|raw }}*/
/*             </div>*/
/* */
/*             <div class="col-xs-12 col-sm-10">*/
/*                 <ul class="pagination list-pagination-paginator {{ 1 == paginator.currentPage ? 'first-page' : '' }} {{ paginator.hasNextPage ? '' : 'last-page' }}">*/
/*                     {% if 1 == paginator.currentPage %}*/
/*                         <li class="disabled">*/
/*                             <span>*/
/*                                 <i class="fa fa-angle-double-left"></i> {{ 'paginator.first'|trans }}*/
/*                             </span>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li>*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ page: 1 }) ) }}">*/
/*                                 <i class="fa fa-angle-double-left"></i> {{ 'paginator.first'|trans }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endif %}*/
/* */
/*                     {% if paginator.hasPreviousPage %}*/
/*                         <li>*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ page: paginator.previousPage }) ) }}">*/
/*                                 <i class="fa fa-angle-left"></i> {{ 'paginator.previous'|trans }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li class="disabled">*/
/*                             <span>*/
/*                                 <i class="fa fa-angle-left"></i> {{ 'paginator.previous'|trans }}*/
/*                             </span>*/
/*                         </li>*/
/*                     {% endif %}*/
/* */
/*                     {% if paginator.hasNextPage %}*/
/*                         <li>*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ page: paginator.nextPage }) ) }}">*/
/*                                 {{ 'paginator.next'|trans }} <i class="fa fa-angle-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li class="disabled">*/
/*                             <span>*/
/*                                 {{ 'paginator.next'|trans }} <i class="fa fa-angle-right"></i>*/
/*                             </span>*/
/*                         </li>*/
/*                     {% endif %}*/
/* */
/*                     {% if paginator.currentPage < paginator.nbPages %}*/
/*                         <li>*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ page: paginator.nbPages }) ) }}">*/
/*                                 {{ 'paginator.last'|trans }} <i class="fa fa-angle-double-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li class="disabled">*/
/*                             <span>*/
/*                                 {{ 'paginator.last'|trans }} <i class="fa fa-angle-double-right"></i>*/
/*                             </span>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
