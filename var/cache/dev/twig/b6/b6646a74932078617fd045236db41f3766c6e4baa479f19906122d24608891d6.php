<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_a70dce0fb1d7b713d35996306557a1950f7a3ea08f7febf8690499b39115551f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a767602724af3d0cf8b4cdfa1a0dfb36afaac91cb533cc2c24ac896aa903b9a = $this->env->getExtension("native_profiler");
        $__internal_5a767602724af3d0cf8b4cdfa1a0dfb36afaac91cb533cc2c24ac896aa903b9a->enter($__internal_5a767602724af3d0cf8b4cdfa1a0dfb36afaac91cb533cc2c24ac896aa903b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 3
        echo "
";
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('form_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('date_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('time_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('form_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_label', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('radio_label', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('collection_row', $context, $blocks);
        // line 264
        echo "
";
        // line 265
        $this->displayBlock('button_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('choice_row', $context, $blocks);
        // line 275
        echo "
";
        // line 276
        $this->displayBlock('date_row', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('time_row', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('radio_row', $context, $blocks);
        // line 304
        echo "
";
        // line 306
        $this->displayBlock('form_errors', $context, $blocks);
        // line 324
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 335
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        
        $__internal_5a767602724af3d0cf8b4cdfa1a0dfb36afaac91cb533cc2c24ac896aa903b9a->leave($__internal_5a767602724af3d0cf8b4cdfa1a0dfb36afaac91cb533cc2c24ac896aa903b9a_prof);

    }

    // line 6
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_8f19bc9b7acd9f0da44ebd1a9c8cc4fea85fc301caaa0efe266356d2f3e12c39 = $this->env->getExtension("native_profiler");
        $__internal_8f19bc9b7acd9f0da44ebd1a9c8cc4fea85fc301caaa0efe266356d2f3e12c39->enter($__internal_8f19bc9b7acd9f0da44ebd1a9c8cc4fea85fc301caaa0efe266356d2f3e12c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 7
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 9
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            containerDiv.remove();
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 18
            echo "
        <div class=\"form-group field-collection-item-action\">
            <div class=\"col-sm-12\">
                <a href=\"#\" onclick=\"";
            // line 21
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"pull-right text-danger\">
                    <i class=\"fa fa-remove\"></i>
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </a>
            </div>
        </div>
    ";
        }
        
        $__internal_8f19bc9b7acd9f0da44ebd1a9c8cc4fea85fc301caaa0efe266356d2f3e12c39->leave($__internal_8f19bc9b7acd9f0da44ebd1a9c8cc4fea85fc301caaa0efe266356d2f3e12c39_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_db379431f32def71ab6b3bb9d6692f9f1df83a5461e00f5e29f6926a76323eef = $this->env->getExtension("native_profiler");
        $__internal_db379431f32def71ab6b3bb9d6692f9f1df83a5461e00f5e29f6926a76323eef->enter($__internal_db379431f32def71ab6b3bb9d6692f9f1df83a5461e00f5e29f6926a76323eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_db379431f32def71ab6b3bb9d6692f9f1df83a5461e00f5e29f6926a76323eef->leave($__internal_db379431f32def71ab6b3bb9d6692f9f1df83a5461e00f5e29f6926a76323eef_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_36fff86235e970da98c7a3c5c6a260b4a9ffc6f8f5191aecaee8100fb34e0a7c = $this->env->getExtension("native_profiler");
        $__internal_36fff86235e970da98c7a3c5c6a260b4a9ffc6f8f5191aecaee8100fb34e0a7c->enter($__internal_36fff86235e970da98c7a3c5c6a260b4a9ffc6f8f5191aecaee8100fb34e0a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_36fff86235e970da98c7a3c5c6a260b4a9ffc6f8f5191aecaee8100fb34e0a7c->leave($__internal_36fff86235e970da98c7a3c5c6a260b4a9ffc6f8f5191aecaee8100fb34e0a7c_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ef09c57f4edb4d6e491d65d91c185055d580d1bafed41637c5ff2c65e069d278 = $this->env->getExtension("native_profiler");
        $__internal_ef09c57f4edb4d6e491d65d91c185055d580d1bafed41637c5ff2c65e069d278->enter($__internal_ef09c57f4edb4d6e491d65d91c185055d580d1bafed41637c5ff2c65e069d278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ef09c57f4edb4d6e491d65d91c185055d580d1bafed41637c5ff2c65e069d278->leave($__internal_ef09c57f4edb4d6e491d65d91c185055d580d1bafed41637c5ff2c65e069d278_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0a536aee7c737fa03404011c735a9921f106a8982b023b77917211e38b98af37 = $this->env->getExtension("native_profiler");
        $__internal_0a536aee7c737fa03404011c735a9921f106a8982b023b77917211e38b98af37->enter($__internal_0a536aee7c737fa03404011c735a9921f106a8982b023b77917211e38b98af37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 53
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 54
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 55
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 57
        echo "    </div>";
        
        $__internal_0a536aee7c737fa03404011c735a9921f106a8982b023b77917211e38b98af37->leave($__internal_0a536aee7c737fa03404011c735a9921f106a8982b023b77917211e38b98af37_prof);

    }

    // line 60
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0838f13f5f5cd8b6cd5fb7ee4c8d8027da695041aa150bb231dacb11becd15d5 = $this->env->getExtension("native_profiler");
        $__internal_0838f13f5f5cd8b6cd5fb7ee4c8d8027da695041aa150bb231dacb11becd15d5->enter($__internal_0838f13f5f5cd8b6cd5fb7ee4c8d8027da695041aa150bb231dacb11becd15d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 61
        echo "<div class=\"input-group\">";
        // line 62
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 63
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0838f13f5f5cd8b6cd5fb7ee4c8d8027da695041aa150bb231dacb11becd15d5->leave($__internal_0838f13f5f5cd8b6cd5fb7ee4c8d8027da695041aa150bb231dacb11becd15d5_prof);

    }

    // line 67
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_715001dc922cccf4eb17148e4c519c156eb71a053d5482ae9d3845b10091dc98 = $this->env->getExtension("native_profiler");
        $__internal_715001dc922cccf4eb17148e4c519c156eb71a053d5482ae9d3845b10091dc98->enter($__internal_715001dc922cccf4eb17148e4c519c156eb71a053d5482ae9d3845b10091dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 68
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 69
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 71
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 72
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 77
            echo "</div>";
        }
        
        $__internal_715001dc922cccf4eb17148e4c519c156eb71a053d5482ae9d3845b10091dc98->leave($__internal_715001dc922cccf4eb17148e4c519c156eb71a053d5482ae9d3845b10091dc98_prof);

    }

    // line 81
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5a8b5f230cc4ce00ace640a106fc339d8a21cc248be3be422e1055c04f605c24 = $this->env->getExtension("native_profiler");
        $__internal_5a8b5f230cc4ce00ace640a106fc339d8a21cc248be3be422e1055c04f605c24->enter($__internal_5a8b5f230cc4ce00ace640a106fc339d8a21cc248be3be422e1055c04f605c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 82
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 83
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 85
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 86
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 87
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 89
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 90
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 91
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 92
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 95
                echo "</div>";
            }
        }
        
        $__internal_5a8b5f230cc4ce00ace640a106fc339d8a21cc248be3be422e1055c04f605c24->leave($__internal_5a8b5f230cc4ce00ace640a106fc339d8a21cc248be3be422e1055c04f605c24_prof);

    }

    // line 100
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0718fc076918a0cb835caa842e08e759b30a797243c871e5e16442b9a37ba8af = $this->env->getExtension("native_profiler");
        $__internal_0718fc076918a0cb835caa842e08e759b30a797243c871e5e16442b9a37ba8af->enter($__internal_0718fc076918a0cb835caa842e08e759b30a797243c871e5e16442b9a37ba8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 101
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 102
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 104
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 105
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 106
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 109
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 110
                echo "</div>";
            }
        }
        
        $__internal_0718fc076918a0cb835caa842e08e759b30a797243c871e5e16442b9a37ba8af->leave($__internal_0718fc076918a0cb835caa842e08e759b30a797243c871e5e16442b9a37ba8af_prof);

    }

    // line 115
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8c632eb4f34020d7e3a6872e9f69de5f997497a5d5a21aaae24796856869f01f = $this->env->getExtension("native_profiler");
        $__internal_8c632eb4f34020d7e3a6872e9f69de5f997497a5d5a21aaae24796856869f01f->enter($__internal_8c632eb4f34020d7e3a6872e9f69de5f997497a5d5a21aaae24796856869f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 116
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 117
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8c632eb4f34020d7e3a6872e9f69de5f997497a5d5a21aaae24796856869f01f->leave($__internal_8c632eb4f34020d7e3a6872e9f69de5f997497a5d5a21aaae24796856869f01f_prof);

    }

    // line 120
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_74bf89413d36e7bf8b277fe2d38a3df5ed8b9752b465443b70ef7e6ed4cc0527 = $this->env->getExtension("native_profiler");
        $__internal_74bf89413d36e7bf8b277fe2d38a3df5ed8b9752b465443b70ef7e6ed4cc0527->enter($__internal_74bf89413d36e7bf8b277fe2d38a3df5ed8b9752b465443b70ef7e6ed4cc0527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 121
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 122
            echo "<div class=\"control-group\">";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "</div>";
        } else {
            // line 130
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 133
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>";
        }
        
        $__internal_74bf89413d36e7bf8b277fe2d38a3df5ed8b9752b465443b70ef7e6ed4cc0527->leave($__internal_74bf89413d36e7bf8b277fe2d38a3df5ed8b9752b465443b70ef7e6ed4cc0527_prof);

    }

    // line 140
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dc6d730e91b27a56c4f706cfbe9be19f0b01c4646c4e68c82d1deb1f56e4a8d5 = $this->env->getExtension("native_profiler");
        $__internal_dc6d730e91b27a56c4f706cfbe9be19f0b01c4646c4e68c82d1deb1f56e4a8d5->enter($__internal_dc6d730e91b27a56c4f706cfbe9be19f0b01c4646c4e68c82d1deb1f56e4a8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 141
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 142
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 145
            echo "<div class=\"checkbox\">";
            // line 146
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 147
            echo "</div>";
        }
        
        $__internal_dc6d730e91b27a56c4f706cfbe9be19f0b01c4646c4e68c82d1deb1f56e4a8d5->leave($__internal_dc6d730e91b27a56c4f706cfbe9be19f0b01c4646c4e68c82d1deb1f56e4a8d5_prof);

    }

    // line 151
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2e6201cb1d9a9c1e4aab27494d464994c69ef1bad23eb5cf8963db78ae9c1f38 = $this->env->getExtension("native_profiler");
        $__internal_2e6201cb1d9a9c1e4aab27494d464994c69ef1bad23eb5cf8963db78ae9c1f38->enter($__internal_2e6201cb1d9a9c1e4aab27494d464994c69ef1bad23eb5cf8963db78ae9c1f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 152
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 153
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 156
            echo "<div class=\"radio\">";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 158
            echo "</div>";
        }
        
        $__internal_2e6201cb1d9a9c1e4aab27494d464994c69ef1bad23eb5cf8963db78ae9c1f38->leave($__internal_2e6201cb1d9a9c1e4aab27494d464994c69ef1bad23eb5cf8963db78ae9c1f38_prof);

    }

    // line 164
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bbb96e0e326da32ffc3d8575a8da4617741a2f3155cae232c3852d9c8acc3359 = $this->env->getExtension("native_profiler");
        $__internal_bbb96e0e326da32ffc3d8575a8da4617741a2f3155cae232c3852d9c8acc3359->enter($__internal_bbb96e0e326da32ffc3d8575a8da4617741a2f3155cae232c3852d9c8acc3359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 166
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_bbb96e0e326da32ffc3d8575a8da4617741a2f3155cae232c3852d9c8acc3359->leave($__internal_bbb96e0e326da32ffc3d8575a8da4617741a2f3155cae232c3852d9c8acc3359_prof);

    }

    // line 169
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2fff42765fc82757764407b3f970d8614aa56f8233d2d15199d3e15dbfcffc70 = $this->env->getExtension("native_profiler");
        $__internal_2fff42765fc82757764407b3f970d8614aa56f8233d2d15199d3e15dbfcffc70->enter($__internal_2fff42765fc82757764407b3f970d8614aa56f8233d2d15199d3e15dbfcffc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 171
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 172
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2fff42765fc82757764407b3f970d8614aa56f8233d2d15199d3e15dbfcffc70->leave($__internal_2fff42765fc82757764407b3f970d8614aa56f8233d2d15199d3e15dbfcffc70_prof);

    }

    // line 175
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_266d915edd3265c63ddfca36c3002740db0a0b91b7b1d9ecb6f185969ddd43aa = $this->env->getExtension("native_profiler");
        $__internal_266d915edd3265c63ddfca36c3002740db0a0b91b7b1d9ecb6f185969ddd43aa->enter($__internal_266d915edd3265c63ddfca36c3002740db0a0b91b7b1d9ecb6f185969ddd43aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 176
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_266d915edd3265c63ddfca36c3002740db0a0b91b7b1d9ecb6f185969ddd43aa->leave($__internal_266d915edd3265c63ddfca36c3002740db0a0b91b7b1d9ecb6f185969ddd43aa_prof);

    }

    // line 179
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_dc7f1534b12c107a48e21c5c9540200587506db53e3fed56dd3247312e61cea7 = $this->env->getExtension("native_profiler");
        $__internal_dc7f1534b12c107a48e21c5c9540200587506db53e3fed56dd3247312e61cea7->enter($__internal_dc7f1534b12c107a48e21c5c9540200587506db53e3fed56dd3247312e61cea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 180
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_dc7f1534b12c107a48e21c5c9540200587506db53e3fed56dd3247312e61cea7->leave($__internal_dc7f1534b12c107a48e21c5c9540200587506db53e3fed56dd3247312e61cea7_prof);

    }

    // line 183
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bc60cef4bb36e50dd4a26b53ca06e5ffaa92ccc058ebd066fe3cb973f666ada5 = $this->env->getExtension("native_profiler");
        $__internal_bc60cef4bb36e50dd4a26b53ca06e5ffaa92ccc058ebd066fe3cb973f666ada5->enter($__internal_bc60cef4bb36e50dd4a26b53ca06e5ffaa92ccc058ebd066fe3cb973f666ada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 184
        echo "    ";
        // line 185
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 186
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 187
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 188
                echo "        ";
            }
            // line 189
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 190
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 191
                echo "        ";
            }
            // line 192
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 193
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 194
                echo "        ";
            }
            // line 195
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 196
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 197
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_bc60cef4bb36e50dd4a26b53ca06e5ffaa92ccc058ebd066fe3cb973f666ada5->leave($__internal_bc60cef4bb36e50dd4a26b53ca06e5ffaa92ccc058ebd066fe3cb973f666ada5_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_00f7b62c4502ac5a2b020e99b5ba0fe4ff964bd10fc840ea7dbf1b50409b5de9 = $this->env->getExtension("native_profiler");
        $__internal_00f7b62c4502ac5a2b020e99b5ba0fe4ff964bd10fc840ea7dbf1b50409b5de9->enter($__internal_00f7b62c4502ac5a2b020e99b5ba0fe4ff964bd10fc840ea7dbf1b50409b5de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 206
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, (isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), "html", null, true);
        echo "\">

        ";
        // line 208
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), array(), "EasyAdminBundle"), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array()), array(), "EasyAdminBundle"));
        // line 209
        echo "        ";
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans((isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle")) ? array() : array("label" => $_label_)));
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 214
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "nullable", array()))) {
            // line 215
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 217
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 225
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 226
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), "EasyAdminBundle");
            echo "</span>
        ";
        }
        // line 228
        echo "    </div>";
        
        $__internal_00f7b62c4502ac5a2b020e99b5ba0fe4ff964bd10fc840ea7dbf1b50409b5de9->leave($__internal_00f7b62c4502ac5a2b020e99b5ba0fe4ff964bd10fc840ea7dbf1b50409b5de9_prof);

    }

    // line 231
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_dc2a8cd42695114ac300aec825b9775e01bbed14a97ebebb6823d762a0c3e90d = $this->env->getExtension("native_profiler");
        $__internal_dc2a8cd42695114ac300aec825b9775e01bbed14a97ebebb6823d762a0c3e90d->enter($__internal_dc2a8cd42695114ac300aec825b9775e01bbed14a97ebebb6823d762a0c3e90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 232
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 234
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 235
            echo "        ";
            ob_start();
            // line 236
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 239
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                var numItems = collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 246
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 247
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                collection.append(newItem);
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 253
            echo "
        <div class=\"form-group field-collection-action\">
            <div class=\"col-sm-12\">
                <a href=\"#\" onclick=\"";
            // line 256
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"pull-right text-primary\">
                    <i class=\"fa fa-plus-square\"></i>
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </a>
            </div>
        </div>
    ";
        }
        
        $__internal_dc2a8cd42695114ac300aec825b9775e01bbed14a97ebebb6823d762a0c3e90d->leave($__internal_dc2a8cd42695114ac300aec825b9775e01bbed14a97ebebb6823d762a0c3e90d_prof);

    }

    // line 265
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8da098fae0782270d081d724741d164f2131b16730cd6922c783c8c742551042 = $this->env->getExtension("native_profiler");
        $__internal_8da098fae0782270d081d724741d164f2131b16730cd6922c783c8c742551042->enter($__internal_8da098fae0782270d081d724741d164f2131b16730cd6922c783c8c742551042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 266
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 268
        echo "</div>";
        
        $__internal_8da098fae0782270d081d724741d164f2131b16730cd6922c783c8c742551042->leave($__internal_8da098fae0782270d081d724741d164f2131b16730cd6922c783c8c742551042_prof);

    }

    // line 271
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7075780045ac6b255b81995745106f0cec3ee1cb3d3b2f065cc30b62c6511b2c = $this->env->getExtension("native_profiler");
        $__internal_7075780045ac6b255b81995745106f0cec3ee1cb3d3b2f065cc30b62c6511b2c->enter($__internal_7075780045ac6b255b81995745106f0cec3ee1cb3d3b2f065cc30b62c6511b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 272
        $context["force_error"] = true;
        // line 273
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7075780045ac6b255b81995745106f0cec3ee1cb3d3b2f065cc30b62c6511b2c->leave($__internal_7075780045ac6b255b81995745106f0cec3ee1cb3d3b2f065cc30b62c6511b2c_prof);

    }

    // line 276
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_67481fc049e9e945807abc17317808cb1ee04d7856eac2fd0a3e0a018120b6e0 = $this->env->getExtension("native_profiler");
        $__internal_67481fc049e9e945807abc17317808cb1ee04d7856eac2fd0a3e0a018120b6e0->enter($__internal_67481fc049e9e945807abc17317808cb1ee04d7856eac2fd0a3e0a018120b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 277
        $context["force_error"] = true;
        // line 278
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_67481fc049e9e945807abc17317808cb1ee04d7856eac2fd0a3e0a018120b6e0->leave($__internal_67481fc049e9e945807abc17317808cb1ee04d7856eac2fd0a3e0a018120b6e0_prof);

    }

    // line 281
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_32ffcdffd774f48775e514cf924b32d5e4daaefcb3e040cd79602109c340d6ac = $this->env->getExtension("native_profiler");
        $__internal_32ffcdffd774f48775e514cf924b32d5e4daaefcb3e040cd79602109c340d6ac->enter($__internal_32ffcdffd774f48775e514cf924b32d5e4daaefcb3e040cd79602109c340d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 282
        $context["force_error"] = true;
        // line 283
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_32ffcdffd774f48775e514cf924b32d5e4daaefcb3e040cd79602109c340d6ac->leave($__internal_32ffcdffd774f48775e514cf924b32d5e4daaefcb3e040cd79602109c340d6ac_prof);

    }

    // line 286
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b61635e6d2fef8a92269b5be4df41ec6a1fb49751e6eafe7e10f8e068e34ef56 = $this->env->getExtension("native_profiler");
        $__internal_b61635e6d2fef8a92269b5be4df41ec6a1fb49751e6eafe7e10f8e068e34ef56->enter($__internal_b61635e6d2fef8a92269b5be4df41ec6a1fb49751e6eafe7e10f8e068e34ef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 287
        $context["force_error"] = true;
        // line 288
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b61635e6d2fef8a92269b5be4df41ec6a1fb49751e6eafe7e10f8e068e34ef56->leave($__internal_b61635e6d2fef8a92269b5be4df41ec6a1fb49751e6eafe7e10f8e068e34ef56_prof);

    }

    // line 291
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e2550924eaf6995cd503802fb35a16c51408765dd3adfd43054dfc40691b7b33 = $this->env->getExtension("native_profiler");
        $__internal_e2550924eaf6995cd503802fb35a16c51408765dd3adfd43054dfc40691b7b33->enter($__internal_e2550924eaf6995cd503802fb35a16c51408765dd3adfd43054dfc40691b7b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 292
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default")), "html", null, true);
        echo "\">";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 295
        echo "</div>";
        
        $__internal_e2550924eaf6995cd503802fb35a16c51408765dd3adfd43054dfc40691b7b33->leave($__internal_e2550924eaf6995cd503802fb35a16c51408765dd3adfd43054dfc40691b7b33_prof);

    }

    // line 298
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_cac82b13e5aa272fb30d9788aba2454641290374f3f145db7d655d82d27be194 = $this->env->getExtension("native_profiler");
        $__internal_cac82b13e5aa272fb30d9788aba2454641290374f3f145db7d655d82d27be194->enter($__internal_cac82b13e5aa272fb30d9788aba2454641290374f3f145db7d655d82d27be194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 299
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default")), "html", null, true);
        echo "\">";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 302
        echo "</div>";
        
        $__internal_cac82b13e5aa272fb30d9788aba2454641290374f3f145db7d655d82d27be194->leave($__internal_cac82b13e5aa272fb30d9788aba2454641290374f3f145db7d655d82d27be194_prof);

    }

    // line 306
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a5fffde27582b89eeb5b268a56b726505d74096c8c58346fd77df33a5b6bdca9 = $this->env->getExtension("native_profiler");
        $__internal_a5fffde27582b89eeb5b268a56b726505d74096c8c58346fd77df33a5b6bdca9->enter($__internal_a5fffde27582b89eeb5b268a56b726505d74096c8c58346fd77df33a5b6bdca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 307
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 308
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 309
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 311
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 312
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 314
                echo "                <ul>
                    ";
                // line 315
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 316
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "                </ul>
            ";
            }
            // line 320
            echo "        </div>
    ";
        }
        
        $__internal_a5fffde27582b89eeb5b268a56b726505d74096c8c58346fd77df33a5b6bdca9->leave($__internal_a5fffde27582b89eeb5b268a56b726505d74096c8c58346fd77df33a5b6bdca9_prof);

    }

    // line 324
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_49ce60406ffa2c33cd8330bcf9aac95dda9e3640428a005d2ae1e6b3d84c9615 = $this->env->getExtension("native_profiler");
        $__internal_49ce60406ffa2c33cd8330bcf9aac95dda9e3640428a005d2ae1e6b3d84c9615->enter($__internal_49ce60406ffa2c33cd8330bcf9aac95dda9e3640428a005d2ae1e6b3d84c9615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 325
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 326
            echo "        <div class=\"empty collection-empty\">
            <span class=\"label label-empty\">";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 330
        echo "
    ";
        // line 331
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_49ce60406ffa2c33cd8330bcf9aac95dda9e3640428a005d2ae1e6b3d84c9615->leave($__internal_49ce60406ffa2c33cd8330bcf9aac95dda9e3640428a005d2ae1e6b3d84c9615_prof);

    }

    // line 335
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_69969cb5630018984a7f1f910c77335a61a7edf2e887e1bfb53cd0323bdbd086 = $this->env->getExtension("native_profiler");
        $__internal_69969cb5630018984a7f1f910c77335a61a7edf2e887e1bfb53cd0323bdbd086->enter($__internal_69969cb5630018984a7f1f910c77335a61a7edf2e887e1bfb53cd0323bdbd086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 336
        echo "
    ";
        // line 337
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), array(), "EasyAdminBundle"), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array()), array(), "EasyAdminBundle"));
        // line 338
        echo "
    ";
        // line 339
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 340
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 342
        echo "
    <div class=\"row\">
        <input type=\"hidden\" name=\"referer\" value=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

        ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                // line 347
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "class", array()), "col-xs-12")) : ("col-xs-12")), "html", null, true);
                echo "\">
                ";
                // line 348
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "
        <div class=\"col-xs-12\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 355
        $this->displayBlock('item_actions', $context, $blocks);
        // line 404
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_69969cb5630018984a7f1f910c77335a61a7edf2e887e1bfb53cd0323bdbd086->leave($__internal_69969cb5630018984a7f1f910c77335a61a7edf2e887e1bfb53cd0323bdbd086_prof);

    }

    // line 355
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_c84837cb984f209bb95dbf37916d9fb4b54254821b0e07ff52d2403267c80d42 = $this->env->getExtension("native_profiler");
        $__internal_c84837cb984f209bb95dbf37916d9fb4b54254821b0e07ff52d2403267c80d42->enter($__internal_c84837cb984f209bb95dbf37916d9fb4b54254821b0e07ff52d2403267c80d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 356
        echo "                        ";
        // line 357
        echo "                        <button type=\"submit\" class=\"btn\">
                            <i class=\"fa fa-save\"></i> ";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages"), "html", null, true);
        echo "
                        </button>

                        ";
        // line 361
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 362
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 363
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 364
        echo "
                        ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["_action"]) {
            // line 366
            echo "                            ";
            if (("method" == $this->getAttribute($context["_action"], "type", array()))) {
                // line 367
                echo "                                ";
                $context["_action_href"] = $this->env->getExtension('routing')->getPath("easyadmin", array("action" => $this->getAttribute($context["_action"], "name", array()), "view" => $this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "id" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
                // line 368
                echo "                            ";
            } elseif (("route" == $this->getAttribute($context["_action"], "type", array()))) {
                // line 369
                echo "                                ";
                $context["_action_href"] = $this->env->getExtension('routing')->getPath($this->getAttribute($context["_action"], "name", array()), array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "id" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
                // line 370
                echo "                            ";
            }
            // line 371
            echo "
                            <a class=\"btn ";
            // line 372
            echo twig_escape_filter($this->env, (($this->getAttribute($context["_action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["_action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["_action_href"]) ? $context["_action_href"] : $this->getContext($context, "_action_href")), "html", null, true);
            echo "\">
                                ";
            // line 373
            if ($this->getAttribute($context["_action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["_action"], "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 374
            echo "                                ";
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["_action"], "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["_action"], "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["_action"], "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages")) : ("")), "html", null, true);
            echo "
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "
                        ";
        // line 378
        if (($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "edit")) {
            // line 379
            echo "                            ";
            if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("edit", "delete", $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) {
                // line 380
                echo "                                ";
                $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("edit", "delete", $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()));
                // line 381
                echo "                                <button type=\"button\" id=\"button-delete\"
                                        class=\"btn ";
                // line 382
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "btn-danger")) : ("btn-danger")), "html", null, true);
                echo "\">
                                    ";
                // line 383
                if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 384
                echo "                                    ";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages")) : ("")), "html", null, true);
                echo "
                                </button>
                            ";
            }
            // line 387
            echo "                        ";
        }
        // line 388
        echo "
                        ";
        // line 390
        echo "                        ";
        if ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new") && $this->env->getExtension('easyadmin_extension')->isActionEnabled("new", "list", $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())))) {
            // line 391
            echo "                            ";
            $context["_list_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("new", "list", $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()));
            // line 392
            echo "                        ";
        } elseif ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "edit") && $this->env->getExtension('easyadmin_extension')->isActionEnabled("edit", "list", $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())))) {
            // line 393
            echo "                            ";
            $context["_list_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("edit", "list", $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()));
            // line 394
            echo "                        ";
        }
        // line 395
        echo "
                        ";
        // line 396
        if (array_key_exists("_list_action", $context)) {
            // line 397
            echo "                            <a class=\"btn btn-secondary\"
                               href=\"";
            // line 398
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "referer"), "method")) ? (urldecode($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"))) : ($this->env->getExtension('routing')->getPath("easyadmin", array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "action" => $this->getAttribute((isset($context["_list_action"]) ? $context["_list_action"] : $this->getContext($context, "_list_action")), "name", array()), "view" => $this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()))))), "html", null, true);
            echo "\">";
            ob_start();
            // line 399
            echo "                                    ";
            if ($this->getAttribute((isset($context["_list_action"]) ? $context["_list_action"] : $this->getContext($context, "_list_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_list_action"]) ? $context["_list_action"] : $this->getContext($context, "_list_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 400
            echo "                                    ";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_list_action"]) ? $context["_list_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_list_action"]) ? $context["_list_action"] : $this->getContext($context, "_list_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_list_action"]) ? $context["_list_action"] : $this->getContext($context, "_list_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages")) : ("")), "html", null, true);
            echo "
                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 401
            echo "</a>
                        ";
        }
        // line 403
        echo "                    ";
        
        $__internal_c84837cb984f209bb95dbf37916d9fb4b54254821b0e07ff52d2403267c80d42->leave($__internal_c84837cb984f209bb95dbf37916d9fb4b54254821b0e07ff52d2403267c80d42_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1285 => 403,  1281 => 401,  1275 => 400,  1268 => 399,  1264 => 398,  1261 => 397,  1259 => 396,  1256 => 395,  1253 => 394,  1250 => 393,  1247 => 392,  1244 => 391,  1241 => 390,  1238 => 388,  1235 => 387,  1228 => 384,  1222 => 383,  1218 => 382,  1215 => 381,  1212 => 380,  1209 => 379,  1207 => 378,  1204 => 377,  1194 => 374,  1188 => 373,  1182 => 372,  1179 => 371,  1176 => 370,  1173 => 369,  1170 => 368,  1167 => 367,  1164 => 366,  1160 => 365,  1157 => 364,  1155 => 363,  1154 => 362,  1153 => 361,  1147 => 358,  1144 => 357,  1142 => 356,  1136 => 355,  1125 => 404,  1123 => 355,  1117 => 351,  1107 => 348,  1102 => 347,  1097 => 346,  1092 => 344,  1088 => 342,  1082 => 340,  1080 => 339,  1077 => 338,  1075 => 337,  1072 => 336,  1066 => 335,  1059 => 331,  1056 => 330,  1050 => 327,  1047 => 326,  1045 => 325,  1039 => 324,  1030 => 320,  1026 => 318,  1017 => 316,  1013 => 315,  1010 => 314,  1004 => 312,  1002 => 311,  998 => 310,  995 => 309,  992 => 308,  989 => 307,  983 => 306,  976 => 302,  974 => 301,  972 => 300,  964 => 299,  958 => 298,  951 => 295,  949 => 294,  947 => 293,  939 => 292,  933 => 291,  926 => 288,  924 => 287,  918 => 286,  911 => 283,  909 => 282,  903 => 281,  896 => 278,  894 => 277,  888 => 276,  881 => 273,  879 => 272,  873 => 271,  866 => 268,  864 => 267,  858 => 266,  852 => 265,  839 => 258,  834 => 256,  829 => 253,  818 => 247,  812 => 246,  802 => 239,  797 => 236,  794 => 235,  792 => 234,  786 => 232,  780 => 231,  773 => 228,  767 => 226,  765 => 225,  763 => 223,  756 => 218,  750 => 217,  746 => 215,  744 => 214,  742 => 212,  740 => 211,  737 => 209,  735 => 208,  725 => 206,  723 => 205,  717 => 204,  708 => 198,  706 => 197,  704 => 196,  689 => 195,  686 => 194,  683 => 193,  680 => 192,  677 => 191,  674 => 190,  671 => 189,  668 => 188,  665 => 187,  662 => 186,  659 => 185,  657 => 184,  651 => 183,  644 => 180,  638 => 179,  631 => 176,  625 => 175,  618 => 172,  616 => 171,  610 => 169,  603 => 166,  601 => 165,  595 => 164,  587 => 158,  585 => 157,  583 => 156,  580 => 154,  578 => 153,  576 => 152,  570 => 151,  562 => 147,  560 => 146,  558 => 145,  555 => 143,  553 => 142,  551 => 141,  545 => 140,  537 => 136,  531 => 133,  530 => 132,  526 => 131,  522 => 130,  519 => 128,  513 => 125,  512 => 124,  508 => 123,  506 => 122,  504 => 121,  498 => 120,  491 => 117,  489 => 116,  483 => 115,  474 => 110,  471 => 109,  463 => 108,  458 => 106,  456 => 105,  454 => 104,  451 => 102,  449 => 101,  443 => 100,  434 => 95,  432 => 94,  430 => 92,  429 => 91,  428 => 90,  427 => 89,  422 => 87,  420 => 86,  418 => 85,  415 => 83,  413 => 82,  407 => 81,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  387 => 72,  385 => 71,  382 => 69,  380 => 68,  374 => 67,  366 => 63,  364 => 62,  362 => 61,  356 => 60,  349 => 57,  343 => 55,  341 => 54,  339 => 53,  333 => 51,  330 => 50,  328 => 49,  325 => 48,  319 => 47,  312 => 44,  310 => 43,  304 => 42,  297 => 39,  295 => 38,  289 => 37,  282 => 34,  279 => 32,  277 => 31,  271 => 30,  258 => 23,  253 => 21,  248 => 18,  241 => 14,  236 => 11,  233 => 10,  231 => 9,  229 => 7,  223 => 6,  216 => 335,  214 => 324,  212 => 306,  209 => 304,  207 => 298,  204 => 297,  202 => 291,  199 => 290,  197 => 286,  194 => 285,  192 => 281,  189 => 280,  187 => 276,  184 => 275,  182 => 271,  179 => 270,  177 => 265,  174 => 264,  172 => 231,  169 => 230,  167 => 204,  164 => 203,  161 => 201,  159 => 183,  156 => 182,  154 => 179,  151 => 178,  149 => 175,  146 => 174,  144 => 169,  141 => 168,  139 => 164,  136 => 163,  133 => 161,  131 => 151,  128 => 150,  126 => 140,  123 => 139,  121 => 120,  118 => 119,  116 => 115,  113 => 114,  111 => 100,  108 => 99,  106 => 81,  103 => 80,  101 => 67,  98 => 66,  96 => 60,  93 => 59,  91 => 47,  88 => 46,  86 => 42,  83 => 41,  81 => 37,  78 => 36,  76 => 30,  73 => 29,  71 => 6,  68 => 5,  65 => 3,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* {% trans_default_domain "EasyAdminBundle" %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {{- parent() -}}*/
/* */
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             containerDiv.remove();*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="form-group field-collection-item-action">*/
/*             <div class="col-sm-12">*/
/*                 <a href="#" onclick="{{ remove_item_javascript|raw }}" class="pull-right text-danger">*/
/*                     <i class="fa fa-remove"></i>*/
/*                     {{ 'action.remove_item'|trans }}*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or 'file' != type %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do no display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? label|trans({}, translation_domain) -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ _field_type }}">*/
/* */
/*         {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/* */
/*         {{- form_label(form, _field_label|trans(_trans_parameters)) -}}*/
/*         {{- form_widget(form) -}}*/
/* */
/*         {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable %}*/
/*             <div class="nullable-control">*/
/*                 <label>*/
/*                     <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                     {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                 </label>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{- form_errors(form) -}}*/
/* */
/*         {% if easyadmin.field.help|default('') != '' %}*/
/*             <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block collection_row %}*/
/*     {{ block('form_row') }}*/
/* */
/*     {% if allow_add|default(false) %}*/
/*         {% set js_add_item %}*/
/*             $(function() {*/
/*                 if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*                 var collection = $('#{{ id }}');*/
/*                 var numItems = collection.children('div.form-group').length;*/
/* */
/*                 collection.prev('.collection-empty').remove();*/
/* */
/*                 var newItem = collection.attr('data-prototype')*/
/*                     .replace(/\>__name__label__\</g, '>' + numItems + '<')*/
/*                     .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)*/
/*                     .replace(/{{ name }}\]\[__name__\]/g, '{{ name }}][' + numItems + ']')*/
/*                 ;*/
/* */
/*                 collection.append(newItem);*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="form-group field-collection-action">*/
/*             <div class="col-sm-12">*/
/*                 <a href="#" onclick="{{ js_add_item|raw }}" class="pull-right text-primary">*/
/*                     <i class="fa fa-plus-square"></i>*/
/*                     {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock collection_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group field-{{ easyadmin.field.fieldType|default('default') }} {{ easyadmin.field.class|default('') }}">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ easyadmin.field.fieldType|default('default') }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ easyadmin.field.fieldType|default('default') }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* {% block form_errors %}*/
/*     {% set error_count = errors|length %}*/
/*     {% if error_count >= 1 %}*/
/*         <div class="error-block">*/
/*             <span class="label label-danger">{{ 'errors'|transchoice(error_count) }}</span>*/
/*             {% if error_count == 1 %}*/
/*                 {{ errors|first.message }}*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for error in errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {% if value is empty %}*/
/*         <div class="empty collection-empty">*/
/*             <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ parent() }}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {# Easy admin form type #}*/
/* {% block easyadmin_widget %}*/
/* */
/*     {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/* */
/*     {% if form.vars.errors|length > 0 %}*/
/*         {{ form_errors(form) }}*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <input type="hidden" name="referer" value="{{ app.request.query.get('referer', '') }}"/>*/
/* */
/*         {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}*/
/*             <div class="{{ field.vars.easyadmin.field.class|default('col-xs-12') }}">*/
/*                 {{ form_row(field) }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-12">*/
/*             <div class="form-group">*/
/*                 <div id="form-actions-row">*/
/*                     {% block item_actions %}*/
/*                         {# the 'save' action is hardcoded for the 'edit' and 'new' views #}*/
/*                         <button type="submit" class="btn">*/
/*                             <i class="fa fa-save"></i> {{ 'action.save'|trans(_trans_parameters, 'messages') }}*/
/*                         </button>*/
/* */
/*                         {% set _entity_actions = (easyadmin.view == 'new')*/
/*                         ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)*/
/*                         : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}*/
/* */
/*                         {% for _action in _entity_actions %}*/
/*                             {% if 'method' == _action.type %}*/
/*                                 {% set _action_href = path('easyadmin', { action: _action.name, view: easyadmin.view, entity: easyadmin.entity.name, id: attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) }) %}*/
/*                             {% elseif 'route' == _action.type %}*/
/*                                 {% set _action_href = path(_action.name, { entity: easyadmin.entity.name, id: attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) }) %}*/
/*                             {% endif %}*/
/* */
/*                             <a class="btn {{ _action.css_class|default('') }}" href="{{ _action_href }}">*/
/*                                 {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                 {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters, 'messages') }}*/
/*                             </a>*/
/*                         {% endfor %}*/
/* */
/*                         {% if easyadmin.view == 'edit' %}*/
/*                             {% if easyadmin_action_is_enabled_for_edit_view('delete', easyadmin.entity.name) %}*/
/*                                 {% set _action = easyadmin_get_action_for_edit_view('delete', easyadmin.entity.name) %}*/
/*                                 <button type="button" id="button-delete"*/
/*                                         class="btn {{ _action.css_class|default('btn-danger') }}">*/
/*                                     {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                     {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters, 'messages') }}*/
/*                                 </button>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {# for aesthetic reasons, the 'list' action is always displayed as a link instead of a button #}*/
/*                         {% if easyadmin.view == 'new' and easyadmin_action_is_enabled_for_new_view('list', easyadmin.entity.name) %}*/
/*                             {% set _list_action = easyadmin_get_action_for_new_view('list', easyadmin.entity.name) %}*/
/*                         {% elseif easyadmin.view == 'edit' and easyadmin_action_is_enabled_for_edit_view('list', easyadmin.entity.name) %}*/
/*                             {% set _list_action = easyadmin_get_action_for_edit_view('list', easyadmin.entity.name) %}*/
/*                         {% endif %}*/
/* */
/*                         {% if _list_action is defined %}*/
/*                             <a class="btn btn-secondary"*/
/*                                href="{{ app.request.query.has('referer') ? app.request.query.get('referer')|easyadmin_urldecode : path('easyadmin', ({ entity: easyadmin.entity.name, action: _list_action.name, view: easyadmin.view }) ) }}">{% spaceless %}*/
/*                                     {% if _list_action.icon %}<i class="fa fa-{{ _list_action.icon }}"></i>{% endif %}*/
/*                                     {{ _list_action.label is defined and not _list_action.label is empty ? _list_action.label|trans(_trans_parameters, 'messages') }}*/
/*                                 {% endspaceless %}</a>*/
/*                         {% endif %}*/
/*                     {% endblock item_actions %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock easyadmin_widget %}*/
/* */
