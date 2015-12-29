<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_60b0527f9cfda949f2e37a8424fed6738a9f7da8d6d5d3177458bb5b64b3fbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e29399359e4ee5e39a2bfc26b2a35c3f1fe8e4a4775da825ed32c0cc62ef766 = $this->env->getExtension("native_profiler");
        $__internal_1e29399359e4ee5e39a2bfc26b2a35c3f1fe8e4a4775da825ed32c0cc62ef766->enter($__internal_1e29399359e4ee5e39a2bfc26b2a35c3f1fe8e4a4775da825ed32c0cc62ef766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e29399359e4ee5e39a2bfc26b2a35c3f1fe8e4a4775da825ed32c0cc62ef766->leave($__internal_1e29399359e4ee5e39a2bfc26b2a35c3f1fe8e4a4775da825ed32c0cc62ef766_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bd174915612f61c7c73753f9e56e4bf8293676a33769cb21c045c9f795f779ee = $this->env->getExtension("native_profiler");
        $__internal_bd174915612f61c7c73753f9e56e4bf8293676a33769cb21c045c9f795f779ee->enter($__internal_bd174915612f61c7c73753f9e56e4bf8293676a33769cb21c045c9f795f779ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_bd174915612f61c7c73753f9e56e4bf8293676a33769cb21c045c9f795f779ee->leave($__internal_bd174915612f61c7c73753f9e56e4bf8293676a33769cb21c045c9f795f779ee_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2a7ad61baa16eaf7c9cbef91b7d57144dc80c137d49bd3ba086a65cbf78207a2 = $this->env->getExtension("native_profiler");
        $__internal_2a7ad61baa16eaf7c9cbef91b7d57144dc80c137d49bd3ba086a65cbf78207a2->enter($__internal_2a7ad61baa16eaf7c9cbef91b7d57144dc80c137d49bd3ba086a65cbf78207a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_2a7ad61baa16eaf7c9cbef91b7d57144dc80c137d49bd3ba086a65cbf78207a2->leave($__internal_2a7ad61baa16eaf7c9cbef91b7d57144dc80c137d49bd3ba086a65cbf78207a2_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3b87c7d1ebe7c48f91f827eff4e56bf91ad2fcc2ee4acba5c310cb539b3fdf36 = $this->env->getExtension("native_profiler");
        $__internal_3b87c7d1ebe7c48f91f827eff4e56bf91ad2fcc2ee4acba5c310cb539b3fdf36->enter($__internal_3b87c7d1ebe7c48f91f827eff4e56bf91ad2fcc2ee4acba5c310cb539b3fdf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_3b87c7d1ebe7c48f91f827eff4e56bf91ad2fcc2ee4acba5c310cb539b3fdf36->leave($__internal_3b87c7d1ebe7c48f91f827eff4e56bf91ad2fcc2ee4acba5c310cb539b3fdf36_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_44c5e968f2f123272e5e784821925b5a89145c7e4885fb9bcd47113fcd2bcd1f = $this->env->getExtension("native_profiler");
        $__internal_44c5e968f2f123272e5e784821925b5a89145c7e4885fb9bcd47113fcd2bcd1f->enter($__internal_44c5e968f2f123272e5e784821925b5a89145c7e4885fb9bcd47113fcd2bcd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_44c5e968f2f123272e5e784821925b5a89145c7e4885fb9bcd47113fcd2bcd1f->leave($__internal_44c5e968f2f123272e5e784821925b5a89145c7e4885fb9bcd47113fcd2bcd1f_prof);

    }

    // line 18
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_287bd1813e763fba3354e6029d1c4ad1fbed7429b55a18c6bbafcaa1e118630b = $this->env->getExtension("native_profiler");
        $__internal_287bd1813e763fba3354e6029d1c4ad1fbed7429b55a18c6bbafcaa1e118630b->enter($__internal_287bd1813e763fba3354e6029d1c4ad1fbed7429b55a18c6bbafcaa1e118630b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 19
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_287bd1813e763fba3354e6029d1c4ad1fbed7429b55a18c6bbafcaa1e118630b->leave($__internal_287bd1813e763fba3354e6029d1c4ad1fbed7429b55a18c6bbafcaa1e118630b_prof);

    }

    // line 22
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_31d3f3c19e34d1985df7aeb8630ec2c2137ede1b30251500fa5ee13a9784f304 = $this->env->getExtension("native_profiler");
        $__internal_31d3f3c19e34d1985df7aeb8630ec2c2137ede1b30251500fa5ee13a9784f304->enter($__internal_31d3f3c19e34d1985df7aeb8630ec2c2137ede1b30251500fa5ee13a9784f304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 23
        echo "        ";
        echo         // line 24
        $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("action" => (($this->getAttribute($this->getAttribute(        // line 25
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "vars", array()), "action", array()) . "&referer=") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method")), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 29
        echo "

        <div id=\"modal-delete\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <h4>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                        <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.content", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.cancel", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 43
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("edit", "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 44
            echo "                            ";
            $context["_delete_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("edit", "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 45
            echo "                            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\">
                                ";
            // line 46
            if ($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 47
            echo "                                ";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
            echo "
                            </button>
                        ";
        }
        // line 50
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_31d3f3c19e34d1985df7aeb8630ec2c2137ede1b30251500fa5ee13a9784f304->leave($__internal_31d3f3c19e34d1985df7aeb8630ec2c2137ede1b30251500fa5ee13a9784f304_prof);

    }

    // line 57
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_cbc0ddd70d2fc638ddfced6ee365384e30377104dc29fbc452904ce85aa865d4 = $this->env->getExtension("native_profiler");
        $__internal_cbc0ddd70d2fc638ddfced6ee365384e30377104dc29fbc452904ce85aa865d4->enter($__internal_cbc0ddd70d2fc638ddfced6ee365384e30377104dc29fbc452904ce85aa865d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 58
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2.min.css"), "html", null, true);
        echo "\">
    ";
        // line 59
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_cbc0ddd70d2fc638ddfced6ee365384e30377104dc29fbc452904ce85aa865d4->leave($__internal_cbc0ddd70d2fc638ddfced6ee365384e30377104dc29fbc452904ce85aa865d4_prof);

    }

    // line 62
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f3433bfafc4015daec9a0a757da67fd4681b0721595c3a1dc2c228d6877de1b0 = $this->env->getExtension("native_profiler");
        $__internal_f3433bfafc4015daec9a0a757da67fd4681b0721595c3a1dc2c228d6877de1b0->enter($__internal_f3433bfafc4015daec9a0a757da67fd4681b0721595c3a1dc2c228d6877de1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 63
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.are-you-sure.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#edit-form').areYouSure({ 'message': 'You haven\\'t saved the changes made on this form.' });

            \$('#button-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .one('click', '#modal-delete-button', function (e) {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_f3433bfafc4015daec9a0a757da67fd4681b0721595c3a1dc2c228d6877de1b0->leave($__internal_f3433bfafc4015daec9a0a757da67fd4681b0721595c3a1dc2c228d6877de1b0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 81,  227 => 65,  221 => 63,  215 => 62,  206 => 59,  201 => 58,  195 => 57,  184 => 50,  177 => 47,  171 => 46,  168 => 45,  165 => 44,  163 => 43,  157 => 40,  150 => 36,  146 => 35,  138 => 29,  136 => 25,  135 => 24,  133 => 23,  127 => 22,  117 => 19,  111 => 18,  104 => 22,  101 => 21,  98 => 18,  92 => 17,  82 => 14,  79 => 13,  73 => 12,  61 => 10,  49 => 9,  42 => 7,  40 => 5,  38 => 4,  36 => 3,  34 => 1,  25 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'edit edit-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/*     {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.edit.title|default(_default_title)|trans(_trans_parameters) }}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
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
/*                         {% if easyadmin_action_is_enabled_for_edit_view('delete', _entity_config.name) %}*/
/*                             {% set _delete_action = easyadmin_get_action_for_edit_view('delete', _entity_config.name) %}*/
/*                             <button type="button" data-dismiss="modal" class="btn btn-danger" id="modal-delete-button">*/
/*                                 {% if _delete_action.icon %}<i class="fa fa-{{ _delete_action.icon }}"></i>{% endif %}*/
/*                                 {{ _delete_action.label is defined and not _delete_action.label is empty ? _delete_action.label|trans(_trans_parameters) }}*/
/*                             </button>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block head_stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/select2.min.css') }}">*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script src="{{ asset('bundles/easyadmin/javascript/jquery.are-you-sure.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('#edit-form').areYouSure({ 'message': 'You haven\'t saved the changes made on this form.' });*/
/* */
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
/* */
/*     <script src="{{ asset('bundles/easyadmin/javascript/select2.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
