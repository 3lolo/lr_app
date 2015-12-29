<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_7b9316139842dfdda73de1260ec221d0f603630efe281184167427100526781d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_label' => array($this, 'block_form_label'),
            'form_label_class' => array($this, 'block_form_label_class'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
            'submit_row' => array($this, 'block_submit_row'),
            'form_group_class' => array($this, 'block_form_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c301cec5272a74d9cf9928ba843e4134b6c56311460bb4f2c993e2341ecca1 = $this->env->getExtension("native_profiler");
        $__internal_22c301cec5272a74d9cf9928ba843e4134b6c56311460bb4f2c993e2341ecca1->enter($__internal_22c301cec5272a74d9cf9928ba843e4134b6c56311460bb4f2c993e2341ecca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c301cec5272a74d9cf9928ba843e4134b6c56311460bb4f2c993e2341ecca1->leave($__internal_22c301cec5272a74d9cf9928ba843e4134b6c56311460bb4f2c993e2341ecca1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e7383d90baa236532415c55dcd3a017d3696133b233d676728c569495a82e5a4 = $this->env->getExtension("native_profiler");
        $__internal_e7383d90baa236532415c55dcd3a017d3696133b233d676728c569495a82e5a4->enter($__internal_e7383d90baa236532415c55dcd3a017d3696133b233d676728c569495a82e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e7383d90baa236532415c55dcd3a017d3696133b233d676728c569495a82e5a4->leave($__internal_e7383d90baa236532415c55dcd3a017d3696133b233d676728c569495a82e5a4_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_62e4892facd5df127739ef32edb03de08ea1b6d6e20774e0e7da89f46ee33489 = $this->env->getExtension("native_profiler");
        $__internal_62e4892facd5df127739ef32edb03de08ea1b6d6e20774e0e7da89f46ee33489->enter($__internal_62e4892facd5df127739ef32edb03de08ea1b6d6e20774e0e7da89f46ee33489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_62e4892facd5df127739ef32edb03de08ea1b6d6e20774e0e7da89f46ee33489->leave($__internal_62e4892facd5df127739ef32edb03de08ea1b6d6e20774e0e7da89f46ee33489_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7bcd1dcc5e5efcb8dc07591674d7c950bc461f37dea724b136ebc52133496eff = $this->env->getExtension("native_profiler");
        $__internal_7bcd1dcc5e5efcb8dc07591674d7c950bc461f37dea724b136ebc52133496eff->enter($__internal_7bcd1dcc5e5efcb8dc07591674d7c950bc461f37dea724b136ebc52133496eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_7bcd1dcc5e5efcb8dc07591674d7c950bc461f37dea724b136ebc52133496eff->leave($__internal_7bcd1dcc5e5efcb8dc07591674d7c950bc461f37dea724b136ebc52133496eff_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_08a9c41f8d823c6e4f54ddfedee31d8e689d10403aee1a9adf30435b2551ba9b = $this->env->getExtension("native_profiler");
        $__internal_08a9c41f8d823c6e4f54ddfedee31d8e689d10403aee1a9adf30435b2551ba9b->enter($__internal_08a9c41f8d823c6e4f54ddfedee31d8e689d10403aee1a9adf30435b2551ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 30
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, (isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), "html", null, true);
        echo "\">

        ";
        // line 32
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 33
        echo "        ";
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 34
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans((isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 36
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 39
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "nullable", array()))) {
            // line 40
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 42
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 47
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 50
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 51
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
            ";
        }
        // line 53
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_08a9c41f8d823c6e4f54ddfedee31d8e689d10403aee1a9adf30435b2551ba9b->leave($__internal_08a9c41f8d823c6e4f54ddfedee31d8e689d10403aee1a9adf30435b2551ba9b_prof);

    }

    // line 58
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c3197dcc0bb259c77928c3bb23d34cd918814b898551e2dd35560c67dfda0c5c = $this->env->getExtension("native_profiler");
        $__internal_c3197dcc0bb259c77928c3bb23d34cd918814b898551e2dd35560c67dfda0c5c->enter($__internal_c3197dcc0bb259c77928c3bb23d34cd918814b898551e2dd35560c67dfda0c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 59
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c3197dcc0bb259c77928c3bb23d34cd918814b898551e2dd35560c67dfda0c5c->leave($__internal_c3197dcc0bb259c77928c3bb23d34cd918814b898551e2dd35560c67dfda0c5c_prof);

    }

    // line 62
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_74381de6fc2d9b8ef2d61edb28608e804b75ab304d7225d5f080ec629a30e3cd = $this->env->getExtension("native_profiler");
        $__internal_74381de6fc2d9b8ef2d61edb28608e804b75ab304d7225d5f080ec629a30e3cd->enter($__internal_74381de6fc2d9b8ef2d61edb28608e804b75ab304d7225d5f080ec629a30e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_74381de6fc2d9b8ef2d61edb28608e804b75ab304d7225d5f080ec629a30e3cd->leave($__internal_74381de6fc2d9b8ef2d61edb28608e804b75ab304d7225d5f080ec629a30e3cd_prof);

    }

    // line 66
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_028099826c0e42a4cba1183ecad385a3f237676b58dec4f683b9344a8701bafd = $this->env->getExtension("native_profiler");
        $__internal_028099826c0e42a4cba1183ecad385a3f237676b58dec4f683b9344a8701bafd->enter($__internal_028099826c0e42a4cba1183ecad385a3f237676b58dec4f683b9344a8701bafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 67
        ob_start();
        // line 68
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default")), "html", null, true);
        echo "\">
        <div class=\"";
        // line 69
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 70
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_028099826c0e42a4cba1183ecad385a3f237676b58dec4f683b9344a8701bafd->leave($__internal_028099826c0e42a4cba1183ecad385a3f237676b58dec4f683b9344a8701bafd_prof);

    }

    // line 78
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1e6197db7b5959a934c8046df356ca55c6bbd9f6bf9c84435965b3af703017a4 = $this->env->getExtension("native_profiler");
        $__internal_1e6197db7b5959a934c8046df356ca55c6bbd9f6bf9c84435965b3af703017a4->enter($__internal_1e6197db7b5959a934c8046df356ca55c6bbd9f6bf9c84435965b3af703017a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 79
        ob_start();
        // line 80
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default")), "html", null, true);
        echo "\">
        <div class=\"";
        // line 81
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 82
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1e6197db7b5959a934c8046df356ca55c6bbd9f6bf9c84435965b3af703017a4->leave($__internal_1e6197db7b5959a934c8046df356ca55c6bbd9f6bf9c84435965b3af703017a4_prof);

    }

    // line 89
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_dc8a08926916a6c68d9d07c7e07d49d349086d784657a43f275c504cd6d26079 = $this->env->getExtension("native_profiler");
        $__internal_dc8a08926916a6c68d9d07c7e07d49d349086d784657a43f275c504cd6d26079->enter($__internal_dc8a08926916a6c68d9d07c7e07d49d349086d784657a43f275c504cd6d26079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 90
        echo "col-sm-10";
        
        $__internal_dc8a08926916a6c68d9d07c7e07d49d349086d784657a43f275c504cd6d26079->leave($__internal_dc8a08926916a6c68d9d07c7e07d49d349086d784657a43f275c504cd6d26079_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 90,  286 => 89,  274 => 83,  270 => 82,  266 => 81,  261 => 80,  259 => 79,  253 => 78,  241 => 72,  237 => 71,  233 => 70,  229 => 69,  220 => 68,  218 => 67,  212 => 66,  205 => 63,  199 => 62,  192 => 59,  186 => 58,  176 => 53,  170 => 51,  168 => 50,  163 => 48,  160 => 47,  153 => 43,  147 => 42,  143 => 40,  141 => 39,  136 => 37,  132 => 36,  128 => 35,  125 => 34,  122 => 33,  120 => 32,  110 => 30,  107 => 29,  105 => 28,  99 => 27,  92 => 22,  86 => 21,  77 => 16,  74 => 15,  68 => 13,  65 => 12,  63 => 11,  57 => 10,  50 => 5,  48 => 4,  42 => 3,  11 => 1,);
    }
}
/* {% extends "@EasyAdmin/form/bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/* {% spaceless %}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ _field_type }}">*/
/* */
/*         {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/* */
/*         {{ form_label(form, _field_label|trans(_trans_parameters)) }}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/* */
/*             {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable %}*/
/*                 <div class="nullable-control">*/
/*                     <label>*/
/*                         <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                         {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                     </label>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             {% if easyadmin.field.help|default('') != '' %}*/
/*                 <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ easyadmin.field.fieldType|default('default') }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group field-{{ easyadmin.field.fieldType|default('default') }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
