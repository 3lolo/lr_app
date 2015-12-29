<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_b13833fcd255d0bd62277d9215ba3ae7f50cc959f34459614139f74110027b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'content_title' => array($this, 'block_content_title'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'view_actions' => array($this, 'block_view_actions'),
            'new_action' => array($this, 'block_new_action'),
            'search_action' => array($this, 'block_search_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f79c7e058fd4d21880fe66f5a6a967c08f91ca60a0d2ef2d2495cf8021e9d84 = $this->env->getExtension("native_profiler");
        $__internal_4f79c7e058fd4d21880fe66f5a6a967c08f91ca60a0d2ef2d2495cf8021e9d84->enter($__internal_4f79c7e058fd4d21880fe66f5a6a967c08f91ca60a0d2ef2d2495cf8021e9d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f79c7e058fd4d21880fe66f5a6a967c08f91ca60a0d2ef2d2495cf8021e9d84->leave($__internal_4f79c7e058fd4d21880fe66f5a6a967c08f91ca60a0d2ef2d2495cf8021e9d84_prof);

    }

    // line 6
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5d560fc3c5048383aed0a56b529edc432c32bc0d7e36fd79fff3e7a8e82748a0 = $this->env->getExtension("native_profiler");
        $__internal_5d560fc3c5048383aed0a56b529edc432c32bc0d7e36fd79fff3e7a8e82748a0->enter($__internal_5d560fc3c5048383aed0a56b529edc432c32bc0d7e36fd79fff3e7a8e82748a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_5d560fc3c5048383aed0a56b529edc432c32bc0d7e36fd79fff3e7a8e82748a0->leave($__internal_5d560fc3c5048383aed0a56b529edc432c32bc0d7e36fd79fff3e7a8e82748a0_prof);

    }

    // line 7
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_84ce950329874621a51033dca382312b07a03b089af90d47ee6de42a8f14a9a3 = $this->env->getExtension("native_profiler");
        $__internal_84ce950329874621a51033dca382312b07a03b089af90d47ee6de42a8f14a9a3->enter($__internal_84ce950329874621a51033dca382312b07a03b089af90d47ee6de42a8f14a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_84ce950329874621a51033dca382312b07a03b089af90d47ee6de42a8f14a9a3->leave($__internal_84ce950329874621a51033dca382312b07a03b089af90d47ee6de42a8f14a9a3_prof);

    }

    // line 9
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_9d33a15db008cb0d18873675d6cc7010fbd165ec8d3b1a3d2b8e27503d47ebb8 = $this->env->getExtension("native_profiler");
        $__internal_9d33a15db008cb0d18873675d6cc7010fbd165ec8d3b1a3d2b8e27503d47ebb8->enter($__internal_9d33a15db008cb0d18873675d6cc7010fbd165ec8d3b1a3d2b8e27503d47ebb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-toggle.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9d33a15db008cb0d18873675d6cc7010fbd165ec8d3b1a3d2b8e27503d47ebb8->leave($__internal_9d33a15db008cb0d18873675d6cc7010fbd165ec8d3b1a3d2b8e27503d47ebb8_prof);

    }

    // line 14
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e13cde478cd19f4159e315ec300aeca2dbb5ff2d84a6cf7bbc748bb24780ec53 = $this->env->getExtension("native_profiler");
        $__internal_e13cde478cd19f4159e315ec300aeca2dbb5ff2d84a6cf7bbc748bb24780ec53->enter($__internal_e13cde478cd19f4159e315ec300aeca2dbb5ff2d84a6cf7bbc748bb24780ec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 15
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 16
            echo "        ";
            echo $this->env->getExtension('translator')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('translator')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e13cde478cd19f4159e315ec300aeca2dbb5ff2d84a6cf7bbc748bb24780ec53->leave($__internal_e13cde478cd19f4159e315ec300aeca2dbb5ff2d84a6cf7bbc748bb24780ec53_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_16d43a8bd9c7cdfa4c31406b609a58fa70da99930bc47f84f8b776d905dccf22 = $this->env->getExtension("native_profiler");
        $__internal_16d43a8bd9c7cdfa4c31406b609a58fa70da99930bc47f84f8b776d905dccf22->enter($__internal_16d43a8bd9c7cdfa4c31406b609a58fa70da99930bc47f84f8b776d905dccf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    ";
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 25
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 26
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "sortField" => $this->getAttribute($this->getAttribute(        // line 27
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 31
        echo "
    ";
        // line 32
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 36
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('routing')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 39
        echo "
    <div class=\"row\">
        <div id=\"content-header\" class=\"col-sm-12\">
            ";
        // line 42
        $this->displayBlock('content_header', $context, $blocks);
        // line 79
        echo "        </div>

        <div id=\"main\" class=\"col-sm-12\">
        ";
        // line 82
        $this->displayBlock('main', $context, $blocks);
        // line 182
        echo "        </div>
    </div>
";
        
        $__internal_16d43a8bd9c7cdfa4c31406b609a58fa70da99930bc47f84f8b776d905dccf22->leave($__internal_16d43a8bd9c7cdfa4c31406b609a58fa70da99930bc47f84f8b776d905dccf22_prof);

    }

    // line 38
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_bac2c14bd895e720266e9c44e41b6236389cb6e8a241426cf54544bd106d972c = $this->env->getExtension("native_profiler");
        $__internal_bac2c14bd895e720266e9c44e41b6236389cb6e8a241426cf54544bd106d972c->enter($__internal_bac2c14bd895e720266e9c44e41b6236389cb6e8a241426cf54544bd106d972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $this->displayParentBlock("flash_messages", $context, $blocks);
        
        $__internal_bac2c14bd895e720266e9c44e41b6236389cb6e8a241426cf54544bd106d972c->leave($__internal_bac2c14bd895e720266e9c44e41b6236389cb6e8a241426cf54544bd106d972c_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e6bdb8ed294f85ea562c299f846d944f064db21bbbacc5acde0b634212a87852 = $this->env->getExtension("native_profiler");
        $__internal_e6bdb8ed294f85ea562c299f846d944f064db21bbbacc5acde0b634212a87852->enter($__internal_e6bdb8ed294f85ea562c299f846d944f064db21bbbacc5acde0b634212a87852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-5\">
                    <h1 class=\"title\">";
        // line 45
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
                </div>
                <div class=\"col-xs-12 col-sm-7\">
                ";
        // line 48
        $this->displayBlock('view_actions', $context, $blocks);
        // line 76
        echo "                </div>
            </div>
            ";
        
        $__internal_e6bdb8ed294f85ea562c299f846d944f064db21bbbacc5acde0b634212a87852->leave($__internal_e6bdb8ed294f85ea562c299f846d944f064db21bbbacc5acde0b634212a87852_prof);

    }

    // line 48
    public function block_view_actions($context, array $blocks = array())
    {
        $__internal_f7fc7a9a58428f253d1420a422b7686a5227c7a22b7ae9543819a010a8941c42 = $this->env->getExtension("native_profiler");
        $__internal_f7fc7a9a58428f253d1420a422b7686a5227c7a22b7ae9543819a010a8941c42->enter($__internal_f7fc7a9a58428f253d1420a422b7686a5227c7a22b7ae9543819a010a8941c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_actions"));

        // line 49
        echo "                    ";
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 50
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 59
            echo "                    ";
        }
        // line 60
        echo "
                    ";
        // line 61
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 62
            echo "                        ";
            $this->displayBlock('search_action', $context, $blocks);
            // line 74
            echo "                    ";
        }
        // line 75
        echo "                ";
        
        $__internal_f7fc7a9a58428f253d1420a422b7686a5227c7a22b7ae9543819a010a8941c42->leave($__internal_f7fc7a9a58428f253d1420a422b7686a5227c7a22b7ae9543819a010a8941c42_prof);

    }

    // line 50
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_f7ce47d6acaf9e3be8586e4213625fcc34b2f0fc7db92f4b8fe8fe88f1e02d16 = $this->env->getExtension("native_profiler");
        $__internal_f7ce47d6acaf9e3be8586e4213625fcc34b2f0fc7db92f4b8fe8fe88f1e02d16->enter($__internal_f7ce47d6acaf9e3be8586e4213625fcc34b2f0fc7db92f4b8fe8fe88f1e02d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 51
        echo "                            ";
        $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 52
        echo "                            <div id=\"content-actions\">
                                <a class=\"btn ";
        // line 53
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\">
                                    ";
        // line 54
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 55
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_f7ce47d6acaf9e3be8586e4213625fcc34b2f0fc7db92f4b8fe8fe88f1e02d16->leave($__internal_f7ce47d6acaf9e3be8586e4213625fcc34b2f0fc7db92f4b8fe8fe88f1e02d16_prof);

    }

    // line 62
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_40580e41fd5477c6671b2987e40cf3b20489b891da483c8d00d25430dc28987c = $this->env->getExtension("native_profiler");
        $__internal_40580e41fd5477c6671b2987e40cf3b20489b891da483c8d00d25430dc28987c->enter($__internal_40580e41fd5477c6671b2987e40cf3b20489b891da483c8d00d25430dc28987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 63
        echo "                            ";
        $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 64
        echo "                            <form id=\"content-search\" class=\"col-xs-6 col-sm-8 ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" method=\"get\" action=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                <input type=\"hidden\" name=\"action\" value=\"search\">
                                <input type=\"hidden\" name=\"entity\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" id=\"content-search-query\" type=\"search\" name=\"query\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                </div>
                            </form>
                        ";
        
        $__internal_40580e41fd5477c6671b2987e40cf3b20489b891da483c8d00d25430dc28987c->leave($__internal_40580e41fd5477c6671b2987e40cf3b20489b891da483c8d00d25430dc28987c_prof);

    }

    // line 82
    public function block_main($context, array $blocks = array())
    {
        $__internal_730b693b11ca341e270b06b63ffc9e0b5e86e10afdfba966f9a25acf985a5aed = $this->env->getExtension("native_profiler");
        $__internal_730b693b11ca341e270b06b63ffc9e0b5e86e10afdfba966f9a25acf985a5aed->enter($__internal_730b693b11ca341e270b06b63ffc9e0b5e86e10afdfba966f9a25acf985a5aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 83
        echo "            <div>
                ";
        // line 84
        $context["_list_item_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 85
        echo "
                <table class=\"table\">
                    <thead>
                    ";
        // line 88
        $this->displayBlock('table_head', $context, $blocks);
        // line 126
        echo "                    </thead>

                    <tbody>
                    ";
        // line 129
        $this->displayBlock('table_body', $context, $blocks);
        // line 174
        echo "                    </tbody>
                </table>

                ";
        // line 177
        $this->displayBlock('paginator', $context, $blocks);
        // line 180
        echo "            </div>
        ";
        
        $__internal_730b693b11ca341e270b06b63ffc9e0b5e86e10afdfba966f9a25acf985a5aed->leave($__internal_730b693b11ca341e270b06b63ffc9e0b5e86e10afdfba966f9a25acf985a5aed_prof);

    }

    // line 88
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_706fd0a96d945403604c9b208e1de69b2871f1bb0e9d270e042639585858d4f1 = $this->env->getExtension("native_profiler");
        $__internal_706fd0a96d945403604c9b208e1de69b2871f1bb0e9d270e042639585858d4f1->enter($__internal_706fd0a96d945403604c9b208e1de69b2871f1bb0e9d270e042639585858d4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 89
        echo "                        <tr>
                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 91
            echo "                                ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
            // line 92
            echo "
                                <th data-property-name=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (((($this->getAttribute($context["metadata"], "virtual", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "virtual", array()), false)) : (false))) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo "\">
                                    ";
            // line 94
            if ((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) {
                // line 95
                echo "                                        ";
                $context["sortDirection"] = ((("DESC" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method"))) ? ("ASC") : ("DESC"));
                // line 96
                echo "                                        ";
                $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array())));
                // line 97
                echo "                                    ";
            }
            // line 98
            echo "
                                    ";
            // line 99
            $context["_column_label"] = (($this->getAttribute($context["metadata"], "label", array())) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ($this->env->getExtension('form')->humanize($context["field"])));
            // line 100
            echo "
                                    ";
            // line 101
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 102
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ((array_key_exists("sortDirection", $context)) ? (_twig_default_filter((isset($context["sortDirection"]) ? $context["sortDirection"] : $this->getContext($context, "sortDirection")), "DESC")) : ("DESC"))))), "html", null, true);
                echo "\">
                                            ";
                // line 103
                if (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField")) && ((isset($context["sortDirection"]) ? $context["sortDirection"] : $this->getContext($context, "sortDirection")) == "DESC"))) {
                    // line 104
                    echo "                                                <i class=\"fa fa-caret-up\"></i>
                                            ";
                } elseif ((                // line 105
(isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField")) && ((isset($context["sortDirection"]) ? $context["sortDirection"] : $this->getContext($context, "sortDirection")) == "ASC"))) {
                    // line 106
                    echo "                                                <i class=\"fa fa-caret-down\"></i>
                                            ";
                } else {
                    // line 108
                    echo "                                                <i class=\"fa fa-sort\"></i>
                                            ";
                }
                // line 110
                echo "
                                            ";
                // line 111
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                                        </a>
                                    ";
            } else {
                // line 114
                echo "                                        <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                                    ";
            }
            // line 116
            echo "                                </th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                            ";
        // line 119
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 120
            echo "                                <th>
                                    <span>";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                                </th>
                            ";
        }
        // line 124
        echo "                        </tr>
                    ";
        
        $__internal_706fd0a96d945403604c9b208e1de69b2871f1bb0e9d270e042639585858d4f1->leave($__internal_706fd0a96d945403604c9b208e1de69b2871f1bb0e9d270e042639585858d4f1_prof);

    }

    // line 129
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_c545940dcc868021e98eb80744214d7454b71de8716f88e1d6fa27a4150af3bf = $this->env->getExtension("native_profiler");
        $__internal_c545940dcc868021e98eb80744214d7454b71de8716f88e1d6fa27a4150af3bf->enter($__internal_c545940dcc868021e98eb80744214d7454b71de8716f88e1d6fa27a4150af3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 130
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 131
            echo "                            ";
            $context["_item_id"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
            // line 132
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                                ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 134
                echo "                                    ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 135
                echo "                                    ";
                $context["_column_label"] = (($this->getAttribute($context["metadata"], "label", array())) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ($this->env->getExtension('form')->humanize($context["field"])));
                // line 136
                echo "
                                    <td data-label=\"";
                // line 137
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo "\">
                                        ";
                // line 138
                echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                                    </td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "
                                ";
            // line 142
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 143
                echo "                                    ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 144
                echo "                                    <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                                    ";
                // line 145
                $this->displayBlock('item_actions', $context, $blocks);
                // line 163
                echo "                                    </td>
                                ";
            }
            // line 165
            echo "                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 167
            echo "                            <tr>
                                <td class=\"no-results\" colspan=\"";
            // line 168
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                                    ";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                    ";
        
        $__internal_c545940dcc868021e98eb80744214d7454b71de8716f88e1d6fa27a4150af3bf->leave($__internal_c545940dcc868021e98eb80744214d7454b71de8716f88e1d6fa27a4150af3bf_prof);

    }

    // line 145
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_2d390f201d00927efe8ac5754db468ac24b122db875017c4f3a231d2e59ced6e = $this->env->getExtension("native_profiler");
        $__internal_2d390f201d00927efe8ac5754db468ac24b122db875017c4f3a231d2e59ced6e->enter($__internal_2d390f201d00927efe8ac5754db468ac24b122db875017c4f3a231d2e59ced6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 146
        echo "                                        ";
        ob_start();
        // line 147
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["_action"]) {
            // line 148
            echo "                                                ";
            if (("method" == $this->getAttribute($context["_action"], "type", array()))) {
                // line 149
                echo "                                                    ";
                $context["_action_href"] = $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute($context["_action"], "name", array()), "id" => (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")))));
                // line 150
                echo "                                                ";
            } elseif (("route" == $this->getAttribute($context["_action"], "type", array()))) {
                // line 151
                echo "                                                    ";
                $context["_action_href"] = $this->env->getExtension('routing')->getPath($this->getAttribute($context["_action"], "name", array()), twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute($context["_action"], "name", array()), "id" => (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")))));
                // line 152
                echo "                                                ";
            }
            // line 153
            echo "
                                                <a class=\"";
            // line 154
            echo twig_escape_filter($this->env, (($this->getAttribute($context["_action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["_action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["_action_href"]) ? $context["_action_href"] : $this->getContext($context, "_action_href")), "html", null, true);
            echo "\">
                                                    ";
            // line 155
            if ($this->getAttribute($context["_action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["_action"], "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 156
            echo "                                                    ";
            if (($this->getAttribute($context["_action"], "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["_action"], "label", array())))) {
                // line 157
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["_action"], "label", array()), twig_array_merge((isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), array("%entity_id%" => (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))))), "html", null, true);
                echo "
                                                    ";
            }
            // line 159
            echo "                                                </a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                                        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 162
        echo "                                    ";
        
        $__internal_2d390f201d00927efe8ac5754db468ac24b122db875017c4f3a231d2e59ced6e->leave($__internal_2d390f201d00927efe8ac5754db468ac24b122db875017c4f3a231d2e59ced6e_prof);

    }

    // line 177
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_1fb1398ecc371efc138bdd8ee58828fae8b7d34a77fa2e5303b2d5f350250571 = $this->env->getExtension("native_profiler");
        $__internal_1fb1398ecc371efc138bdd8ee58828fae8b7d34a77fa2e5303b2d5f350250571->enter($__internal_1fb1398ecc371efc138bdd8ee58828fae8b7d34a77fa2e5303b2d5f350250571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 178
        echo "                    ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
                ";
        
        $__internal_1fb1398ecc371efc138bdd8ee58828fae8b7d34a77fa2e5303b2d5f350250571->leave($__internal_1fb1398ecc371efc138bdd8ee58828fae8b7d34a77fa2e5303b2d5f350250571_prof);

    }

    // line 186
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_fe167ae9edfb5fa7cbfc78e96107c52924aba254936e227e91fd6439baf6f9fc = $this->env->getExtension("native_profiler");
        $__internal_fe167ae9edfb5fa7cbfc78e96107c52924aba254936e227e91fd6439baf6f9fc->enter($__internal_fe167ae9edfb5fa7cbfc78e96107c52924aba254936e227e91fd6439baf6f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 187
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/bootstrap-toggle.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function(result) {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });
        });
    </script>

    ";
        // line 219
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 220
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.highlight.min.js"), "html", null, true);
            echo "\"></script>

        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 223
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_fe167ae9edfb5fa7cbfc78e96107c52924aba254936e227e91fd6439baf6f9fc->leave($__internal_fe167ae9edfb5fa7cbfc78e96107c52924aba254936e227e91fd6439baf6f9fc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  752 => 223,  745 => 220,  743 => 219,  722 => 201,  707 => 189,  701 => 187,  695 => 186,  685 => 178,  679 => 177,  672 => 162,  669 => 161,  662 => 159,  656 => 157,  653 => 156,  647 => 155,  641 => 154,  638 => 153,  635 => 152,  632 => 151,  629 => 150,  626 => 149,  623 => 148,  618 => 147,  615 => 146,  609 => 145,  602 => 173,  592 => 169,  588 => 168,  585 => 167,  571 => 165,  567 => 163,  565 => 145,  560 => 144,  557 => 143,  555 => 142,  552 => 141,  543 => 138,  535 => 137,  532 => 136,  529 => 135,  526 => 134,  522 => 133,  517 => 132,  514 => 131,  495 => 130,  489 => 129,  481 => 124,  475 => 121,  472 => 120,  470 => 119,  467 => 118,  460 => 116,  454 => 114,  448 => 111,  445 => 110,  441 => 108,  437 => 106,  435 => 105,  432 => 104,  430 => 103,  425 => 102,  423 => 101,  420 => 100,  418 => 99,  415 => 98,  412 => 97,  409 => 96,  406 => 95,  404 => 94,  394 => 93,  391 => 92,  388 => 91,  384 => 90,  381 => 89,  375 => 88,  367 => 180,  365 => 177,  360 => 174,  358 => 129,  353 => 126,  351 => 88,  346 => 85,  344 => 84,  341 => 83,  335 => 82,  322 => 70,  317 => 68,  313 => 67,  309 => 66,  301 => 64,  298 => 63,  292 => 62,  280 => 55,  274 => 54,  268 => 53,  265 => 52,  262 => 51,  256 => 50,  249 => 75,  246 => 74,  243 => 62,  241 => 61,  238 => 60,  235 => 59,  232 => 50,  229 => 49,  223 => 48,  214 => 76,  212 => 48,  206 => 45,  202 => 43,  196 => 42,  184 => 38,  175 => 182,  173 => 82,  168 => 79,  166 => 42,  161 => 39,  159 => 38,  156 => 37,  154 => 36,  151 => 35,  148 => 34,  145 => 33,  143 => 32,  140 => 31,  138 => 29,  137 => 28,  136 => 27,  135 => 26,  134 => 25,  132 => 24,  126 => 23,  115 => 19,  112 => 18,  106 => 16,  103 => 15,  97 => 14,  88 => 11,  83 => 10,  77 => 9,  65 => 7,  53 => 6,  46 => 4,  44 => 2,  42 => 1,  33 => 4,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-list-' ~ _entity_config.name %}*/
/* {% block body_class 'list list-' ~ _entity_config.name|lower %}*/
/* */
/* {% block head_stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/bootstrap-toggle.min.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block content_title %}*/
/*     {% if 'search' == app.request.get('action') %}*/
/*         {{ 'search.page_title'|transchoice(count = paginator.nbResults, domain = 'EasyAdminBundle')|raw }}*/
/*     {% else %}*/
/*         {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*         {{ _entity_config.list.title|default(_default_title)|trans(_trans_parameters) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% set _request_parameters = _request_parameters|default({})|merge({*/
/*         action: app.request.get('action'),*/
/*         entity: _entity_config.name,*/
/*         sortField: app.request.get('sortField', ''),*/
/*         sortDirection: app.request.get('sortDirection', 'DESC'),*/
/*         page: app.request.get('page', 1)*/
/*     }) %}*/
/* */
/*     {% if 'search' == app.request.get('action') %}*/
/*         {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}*/
/*     {% endif %}*/
/* */
/*     {% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}*/
/* */
/*     {% block flash_messages %}{{ parent() }}{% endblock flash_messages %}*/
/* */
/*     <div class="row">*/
/*         <div id="content-header" class="col-sm-12">*/
/*             {% block content_header %}*/
/*             <div class="row">*/
/*                 <div class="col-xs-12 col-sm-5">*/
/*                     <h1 class="title">{{ block('content_title') }}</h1>*/
/*                 </div>*/
/*                 <div class="col-xs-12 col-sm-7">*/
/*                 {% block view_actions %}*/
/*                     {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}*/
/*                         {% block new_action %}*/
/*                             {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}*/
/*                             <div id="content-actions">*/
/*                                 <a class="btn {{ _action.css_class|default('') }}" href="{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}">*/
/*                                     {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                     {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endblock new_action %}*/
/*                     {% endif %}*/
/* */
/*                     {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}*/
/*                         {% block search_action %}*/
/*                             {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}*/
/*                             <form id="content-search" class="col-xs-6 col-sm-8 {{ _action.css_class|default('') }}" method="get" action="{{ path('easyadmin') }}">*/
/*                                 <input type="hidden" name="action" value="search">*/
/*                                 <input type="hidden" name="entity" value="{{ _request_parameters.entity }}">*/
/*                                 <input type="hidden" name="sortField" value="{{ _request_parameters.sortField }}">*/
/*                                 <input type="hidden" name="sortDirection" value="{{ _request_parameters.sortDirection }}">*/
/*                                 <div class="input-group">*/
/*                                     <input class="form-control" id="content-search-query" type="search" name="query" placeholder="{{ _action.label|default('action.search')|trans(_trans_parameters) }}" value="{{ app.request.get('query')|default('') }}">*/
/*                                 </div>*/
/*                             </form>*/
/*                         {% endblock search_action %}*/
/*                     {% endif %}*/
/*                 {% endblock view_actions %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endblock content_header %}*/
/*         </div>*/
/* */
/*         <div id="main" class="col-sm-12">*/
/*         {% block main %}*/
/*             <div>*/
/*                 {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}*/
/* */
/*                 <table class="table">*/
/*                     <thead>*/
/*                     {% block table_head %}*/
/*                         <tr>*/
/*                             {% for field, metadata in fields %}*/
/*                                 {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/* */
/*                                 <th data-property-name="{{ metadata.property }}" class="{{ isSortingField ? 'sorted' : '' }} {{ metadata.virtual|default(false) ? 'virtual' : '' }} {{ metadata.dataType|lower }}">*/
/*                                     {% if isSortingField %}*/
/*                                         {% set sortDirection = ('DESC' == app.request.get('sortDirection')) ? 'ASC' : 'DESC' %}*/
/*                                         {% set _request_parameters = _request_parameters|merge({ sortField: metadata.property }) %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% set _column_label =  metadata.label ? metadata.label|trans(_trans_parameters) : field|humanize %}*/
/* */
/*                                     {% if metadata.sortable %}*/
/*                                         <a href="{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: sortDirection|default('DESC') })) }}">*/
/*                                             {% if isSortingField and sortDirection == 'DESC' %}*/
/*                                                 <i class="fa fa-caret-up"></i>*/
/*                                             {% elseif isSortingField and sortDirection == 'ASC' %}*/
/*                                                 <i class="fa fa-caret-down"></i>*/
/*                                             {% else %}*/
/*                                                 <i class="fa fa-sort"></i>*/
/*                                             {% endif %}*/
/* */
/*                                             {{ _column_label|raw }}*/
/*                                         </a>*/
/*                                     {% else %}*/
/*                                         <span>{{ _column_label|raw }}</span>*/
/*                                     {% endif %}*/
/*                                 </th>*/
/*                             {% endfor %}*/
/* */
/*                             {% if _list_item_actions|length > 0 %}*/
/*                                 <th>*/
/*                                     <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>*/
/*                                 </th>*/
/*                             {% endif %}*/
/*                         </tr>*/
/*                     {% endblock table_head %}*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% block table_body %}*/
/*                         {% for item in paginator.currentPageResults %}*/
/*                             {% set _item_id = attribute(item, _entity_config.primary_key_field_name) %}*/
/*                             <tr data-id="{{ _item_id }}">*/
/*                                 {% for field, metadata in fields %}*/
/*                                     {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/*                                     {% set _column_label =  metadata.label ? metadata.label|trans(_trans_parameters) : field|humanize %}*/
/* */
/*                                     <td data-label="{{ _column_label }}" class="{{ isSortingField ? 'sorted' : '' }} {{ metadata.dataType|lower }}">*/
/*                                         {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}*/
/*                                     </td>*/
/*                                 {% endfor %}*/
/* */
/*                                 {% if _list_item_actions|length > 0 %}*/
/*                                     {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*                                     <td data-label="{{ _column_label }}" class="actions">*/
/*                                     {% block item_actions %}*/
/*                                         {% spaceless %}*/
/*                                             {% for _action in _list_item_actions %}*/
/*                                                 {% if 'method' == _action.type %}*/
/*                                                     {% set _action_href = path('easyadmin', _request_parameters|merge({ action: _action.name, id: _item_id })) %}*/
/*                                                 {% elseif 'route' == _action.type %}*/
/*                                                     {% set _action_href = path(_action.name, _request_parameters|merge({ action: _action.name, id: _item_id })) %}*/
/*                                                 {% endif %}*/
/* */
/*                                                 <a class="{{ _action.css_class|default('') }}" href="{{ _action_href }}">*/
/*                                                     {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                                     {% if _action.label is defined and not _action.label is empty %}*/
/*                                                         {{ _action.label|trans(_trans_parameters|merge({ '%entity_id%': _item_id })) }}*/
/*                                                     {% endif %}*/
/*                                                 </a>*/
/*                                             {% endfor %}*/
/*                                         {% endspaceless %}*/
/*                                     {% endblock item_actions %}*/
/*                                     </td>*/
/*                                 {% endif %}*/
/*                             </tr>*/
/*                         {% else %}*/
/*                             <tr>*/
/*                                 <td class="no-results" colspan="{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}">*/
/*                                     {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% endblock table_body %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 {% block paginator %}*/
/*                     {{ include(_entity_config.templates.paginator) }}*/
/*                 {% endblock paginator %}*/
/*             </div>*/
/*         {% endblock main %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script src="{{ asset('bundles/easyadmin/javascript/bootstrap-toggle.min.js') }}"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('#main table .toggle input[type="checkbox"]').change(function() {*/
/*                 var toggle = $(this);*/
/*                 var newValue = toggle.prop('checked');*/
/*                 var oldValue = !newValue;*/
/* */
/*                 var columnIndex = $(this).closest('td').index() + 1;*/
/*                 var propertyName = $('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');*/
/* */
/*                 var toggleUrl = "{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}"*/
/*                               + "&id=" + $(this).closest('tr').data('id')*/
/*                               + "&property=" + propertyName*/
/*                               + "&newValue=" + newValue.toString();*/
/* */
/*                 var toggleRequest = $.ajax({ type: "GET", url: toggleUrl, data: {} });*/
/* */
/*                 toggleRequest.done(function(result) {});*/
/* */
/*                 toggleRequest.fail(function(result) {*/
/*                     // in case of error, restore the original value and disable the toggle*/
/*                     toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');*/
/*                     toggle.bootstrapToggle('disable');*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {% if 'search' == app.request.get('action') %}*/
/*         <script src="{{ asset('bundles/easyadmin/javascript/jquery.highlight.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript">*/
/*             var _search_query = "{{ app.request.get('query')|default('')|e('js') }}";*/
/*             // the original query is prepended to allow matching exact phrases in addition to single words*/
/*             $('#main table tbody').highlight($.merge([_search_query], _search_query.split(' ')));*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
