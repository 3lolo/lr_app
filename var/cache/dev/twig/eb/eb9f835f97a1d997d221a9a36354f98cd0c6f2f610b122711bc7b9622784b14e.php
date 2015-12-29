<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_481f46fb80356f437a6b7da73b00cd2de5196ec95cfae6b0f3a95fc0ff7e13d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2291e2ae88e30c37286bf0ca91efd89bac487bb23f20e7ab937d1fa3fc29591 = $this->env->getExtension("native_profiler");
        $__internal_c2291e2ae88e30c37286bf0ca91efd89bac487bb23f20e7ab937d1fa3fc29591->enter($__internal_c2291e2ae88e30c37286bf0ca91efd89bac487bb23f20e7ab937d1fa3fc29591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2291e2ae88e30c37286bf0ca91efd89bac487bb23f20e7ab937d1fa3fc29591->leave($__internal_c2291e2ae88e30c37286bf0ca91efd89bac487bb23f20e7ab937d1fa3fc29591_prof);

    }

    // line 7
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_decba52977107389a7185459848317614ac84e0cb37520e64a7653988ef812b8 = $this->env->getExtension("native_profiler");
        $__internal_decba52977107389a7185459848317614ac84e0cb37520e64a7653988ef812b8->enter($__internal_decba52977107389a7185459848317614ac84e0cb37520e64a7653988ef812b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_decba52977107389a7185459848317614ac84e0cb37520e64a7653988ef812b8->leave($__internal_decba52977107389a7185459848317614ac84e0cb37520e64a7653988ef812b8_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ae5fd836fad5f31c16fe4fb240e4fe2a2b09474c45bd42ad8e684f2fbfd43170 = $this->env->getExtension("native_profiler");
        $__internal_ae5fd836fad5f31c16fe4fb240e4fe2a2b09474c45bd42ad8e684f2fbfd43170->enter($__internal_ae5fd836fad5f31c16fe4fb240e4fe2a2b09474c45bd42ad8e684f2fbfd43170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_ae5fd836fad5f31c16fe4fb240e4fe2a2b09474c45bd42ad8e684f2fbfd43170->leave($__internal_ae5fd836fad5f31c16fe4fb240e4fe2a2b09474c45bd42ad8e684f2fbfd43170_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e5a15458beee07d0d79a0f36a4e33dfd6395bbbe56457cde828a7d32072a79a7 = $this->env->getExtension("native_profiler");
        $__internal_e5a15458beee07d0d79a0f36a4e33dfd6395bbbe56457cde828a7d32072a79a7->enter($__internal_e5a15458beee07d0d79a0f36a4e33dfd6395bbbe56457cde828a7d32072a79a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 11
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_e5a15458beee07d0d79a0f36a4e33dfd6395bbbe56457cde828a7d32072a79a7->leave($__internal_e5a15458beee07d0d79a0f36a4e33dfd6395bbbe56457cde828a7d32072a79a7_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_dc4ed691fdb13ce88e2ce36f8943ab07b377a427847d38d6094e0fb293d0097b = $this->env->getExtension("native_profiler");
        $__internal_dc4ed691fdb13ce88e2ce36f8943ab07b377a427847d38d6094e0fb293d0097b->enter($__internal_dc4ed691fdb13ce88e2ce36f8943ab07b377a427847d38d6094e0fb293d0097b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <div class=\"form-horizontal\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 18
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "label", array())) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ($this->env->getExtension('form')->humanize($context["field"]))), "html", null, true);
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 24
            echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 27
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 28
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "help", array()));
                echo "</span>
                    ";
            }
            // line 30
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 36
        $this->displayBlock('item_actions', $context, $blocks);
        // line 68
        echo "            </div>
        </div>
    </div>

    ";
        // line 72
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_dc4ed691fdb13ce88e2ce36f8943ab07b377a427847d38d6094e0fb293d0097b->leave($__internal_dc4ed691fdb13ce88e2ce36f8943ab07b377a427847d38d6094e0fb293d0097b_prof);

    }

    // line 36
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_be8c067dcad19c1998709a9f081354ad6eeb128ba278136adb8dabd2215860f5 = $this->env->getExtension("native_profiler");
        $__internal_be8c067dcad19c1998709a9f081354ad6eeb128ba278136adb8dabd2215860f5->enter($__internal_be8c067dcad19c1998709a9f081354ad6eeb128ba278136adb8dabd2215860f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 37
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["_action"]) {
            // line 39
            echo "                    ";
            if (("method" == $this->getAttribute($context["_action"], "type", array()))) {
                // line 40
                echo "                        ";
                $context["_action_href"] = $this->env->getExtension('routing')->getPath("easyadmin", array("action" => $this->getAttribute($context["_action"], "name", array()), "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method")));
                // line 41
                echo "                    ";
            } elseif (("route" == $this->getAttribute($context["_action"], "type", array()))) {
                // line 42
                echo "                        ";
                $context["_action_href"] = $this->env->getExtension('routing')->getPath($this->getAttribute($context["_action"], "name", array()), array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method")));
                // line 43
                echo "                    ";
            }
            // line 44
            echo "
                    <a class=\"btn ";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["_action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["_action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["_action_href"]) ? $context["_action_href"] : $this->getContext($context, "_action_href")), "html", null, true);
            echo "\">
                        ";
            // line 46
            if ($this->getAttribute($context["_action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["_action"], "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 47
            echo "                        ";
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["_action"], "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["_action"], "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["_action"], "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
            echo "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                ";
        // line 51
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("show", "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 52
            echo "                    ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("show", "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 53
            echo "                    <button type=\"button\" id=\"button-delete\" class=\"btn ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "btn-danger")) : ("btn-danger")), "html", null, true);
            echo "\">
                        ";
            // line 54
            if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 55
            echo "                        ";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 58
        echo "
                ";
        // line 60
        echo "                ";
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("show", "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 61
            echo "                    ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("show", "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 62
            echo "                    <a class=\"btn btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "referer"), "method")) ? (urldecode($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"))) : ($this->env->getExtension('routing')->getPath("easyadmin", array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array()), "view" => "show")))), "html", null, true);
            echo "\">";
            ob_start();
            // line 63
            echo "                        ";
            if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 64
            echo "                        ";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
            echo "
                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 65
            echo "</a>
                ";
        }
        // line 67
        echo "            ";
        
        $__internal_be8c067dcad19c1998709a9f081354ad6eeb128ba278136adb8dabd2215860f5->leave($__internal_be8c067dcad19c1998709a9f081354ad6eeb128ba278136adb8dabd2215860f5_prof);

    }

    // line 72
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_441a28645498031b96e7b88381ae19be19cc58fc9acfa604ff7ce2c6fcbc7a54 = $this->env->getExtension("native_profiler");
        $__internal_441a28645498031b96e7b88381ae19be19cc58fc9acfa604ff7ce2c6fcbc7a54->enter($__internal_441a28645498031b96e7b88381ae19be19cc58fc9acfa604ff7ce2c6fcbc7a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 73
        echo "        ";
        echo         // line 74
        $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("action" => (($this->getAttribute($this->getAttribute(        // line 75
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "vars", array()), "action", array()) . "&referer=") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method")), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 79
        echo "

        <div id=\"modal-delete\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <h4>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                        <p>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.content", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                            ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.cancel", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 93
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("show", "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 94
            echo "                            ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("show", "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 95
            echo "                            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\">
                                ";
            // line 96
            if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 97
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.delete")) : ("action.delete")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
            echo "
                            </button>
                        ";
        }
        // line 100
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_441a28645498031b96e7b88381ae19be19cc58fc9acfa604ff7ce2c6fcbc7a54->leave($__internal_441a28645498031b96e7b88381ae19be19cc58fc9acfa604ff7ce2c6fcbc7a54_prof);

    }

    // line 107
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_77eed311e100f8343b2b742a858ae338a7cc4d9bfad9e1b6f7c96bb6d7c7891d = $this->env->getExtension("native_profiler");
        $__internal_77eed311e100f8343b2b742a858ae338a7cc4d9bfad9e1b6f7c96bb6d7c7891d->enter($__internal_77eed311e100f8343b2b742a858ae338a7cc4d9bfad9e1b6f7c96bb6d7c7891d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 108
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#button-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .one('click', '#modal-delete-button', function (e) {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_77eed311e100f8343b2b742a858ae338a7cc4d9bfad9e1b6f7c96bb6d7c7891d->leave($__internal_77eed311e100f8343b2b742a858ae338a7cc4d9bfad9e1b6f7c96bb6d7c7891d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 108,  345 => 107,  334 => 100,  327 => 97,  321 => 96,  318 => 95,  315 => 94,  313 => 93,  307 => 90,  300 => 86,  296 => 85,  288 => 79,  286 => 75,  285 => 74,  283 => 73,  277 => 72,  270 => 67,  266 => 65,  260 => 64,  253 => 63,  248 => 62,  245 => 61,  242 => 60,  239 => 58,  232 => 55,  226 => 54,  221 => 53,  218 => 52,  216 => 51,  213 => 50,  203 => 47,  197 => 46,  191 => 45,  188 => 44,  185 => 43,  182 => 42,  179 => 41,  176 => 40,  173 => 39,  168 => 38,  165 => 37,  159 => 36,  152 => 72,  146 => 68,  144 => 36,  139 => 33,  131 => 30,  125 => 28,  123 => 27,  117 => 24,  110 => 20,  102 => 18,  98 => 17,  95 => 16,  89 => 15,  79 => 12,  76 => 11,  70 => 10,  58 => 8,  46 => 7,  39 => 5,  37 => 3,  35 => 2,  33 => 1,  24 => 5,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'show show-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/*     {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.show.title|default(_default_title)|trans(_trans_parameters) }}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="form-horizontal">*/
/*         {% for field, metadata in fields %}*/
/*             <div class="form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}">*/
/*                 <label class="col-sm-2 control-label">*/
/*                     {{  metadata.label ? metadata.label|trans(_trans_parameters) : field|humanize }}*/
/*                 </label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="form-control">*/
/*                         {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}*/
/*                     </div>*/
/* */
/*                     {% if metadata.help|default('') != '' %}*/
/*                         <span class="help-block"><i class="fa fa-info-circle"></i> {{ metadata.help|trans|raw }}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="form-group form-actions">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*             {% block item_actions %}*/
/*                 {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}*/
/*                 {% for _action in _show_actions %}*/
/*                     {% if 'method' == _action.type %}*/
/*                         {% set _action_href = path('easyadmin', { action: _action.name, entity: _entity_config.name, id: attribute(entity, _entity_config.primary_key_field_name), referer: app.request.query.get('referer', '') }) %}*/
/*                     {% elseif 'route' == _action.type %}*/
/*                         {% set _action_href = path(_action.name, { entity: _entity_config.name, id: attribute(entity, _entity_config.primary_key_field_name), referer: app.request.query.get('referer', '') }) %}*/
/*                     {% endif %}*/
/* */
/*                     <a class="btn {{ _action.css_class|default('') }}" href="{{ _action_href }}">*/
/*                         {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                         {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                     </a>*/
/*                 {% endfor %}*/
/* */
/*                 {% if easyadmin_action_is_enabled_for_show_view('delete', _entity_config.name) %}*/
/*                     {% set _action = easyadmin_get_action_for_show_view('delete', _entity_config.name) %}*/
/*                     <button type="button" id="button-delete" class="btn {{ _action.css_class|default('btn-danger') }}">*/
/*                         {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                         {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                     </button>*/
/*                 {% endif %}*/
/* */
/*                 {# for aesthetic reasons, the 'list' action is always displayed as a link instead of a button #}*/
/*                 {% if easyadmin_action_is_enabled_for_show_view('list', _entity_config.name) %}*/
/*                     {% set _action = easyadmin_get_action_for_show_view('list', _entity_config.name) %}*/
/*                     <a class="btn btn-secondary" href="{{ app.request.query.has('referer') ? app.request.query.get('referer')|easyadmin_urldecode : path('easyadmin', ({ entity: _entity_config.name, action: _action.name, view: 'show' })) }}">{% spaceless %}*/
/*                         {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                         {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                     {% endspaceless %}</a>*/
/*                 {% endif %}*/
/*             {% endblock item_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block delete_form %}*/
/*         {{*/
/*             form(delete_form, {*/
/*                 action: delete_form.vars.action ~ '&referer=' ~ app.request.query.get('referer', ''),*/
/*                 method: 'DELETE',*/
/*                 attr: { id: 'delete-form', style: 'display: none' }*/
/*             })*/
/*         }}*/
/* */
/*         <div id="modal-delete" class="modal fade">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-body">*/
/*                         <h4>{{ 'delete_modal.title'|trans(_trans_parameters, 'EasyAdminBundle') }}</h4>*/
/*                         <p>{{ 'delete_modal.content'|trans(_trans_parameters, 'EasyAdminBundle') }}</p>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" data-dismiss="modal" class="btn">*/
/*                             {{ 'action.cancel'|trans(_trans_parameters) }}*/
/*                         </button>*/
/* */
/*                         {% if easyadmin_action_is_enabled_for_show_view('delete', _entity_config.name) %}*/
/*                             {% set _action = easyadmin_get_action_for_show_view('delete', _entity_config.name) %}*/
/*                             <button type="button" data-dismiss="modal" class="btn btn-danger" id="modal-delete-button">*/
/*                                 {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                 {{ _action.label|default('action.delete')|trans(_trans_parameters) }}*/
/*                             </button>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('#button-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .one('click', '#modal-delete-button', function (e) {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
