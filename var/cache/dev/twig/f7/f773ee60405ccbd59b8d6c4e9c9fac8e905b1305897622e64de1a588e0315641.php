<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_00ca61335a190c418f45468341837060d8a0c3279013cf8d19bcda8eeb6b12c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'navbar_header' => array($this, 'block_navbar_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_menu' => array($this, 'block_header_menu'),
            'navigation_items' => array($this, 'block_navigation_items'),
            'header_footer' => array($this, 'block_header_footer'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6577aabed1b59abc2dcd70f6f709dedd4f304b19815695b725d60aefbbe37c3 = $this->env->getExtension("native_profiler");
        $__internal_b6577aabed1b59abc2dcd70f6f709dedd4f304b19815695b725d60aefbbe37c3->enter($__internal_b6577aabed1b59abc2dcd70f6f709dedd4f304b19815695b725d60aefbbe37c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 28
        echo "    </head>

    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "</html>
";
        
        $__internal_b6577aabed1b59abc2dcd70f6f709dedd4f304b19815695b725d60aefbbe37c3->leave($__internal_b6577aabed1b59abc2dcd70f6f709dedd4f304b19815695b725d60aefbbe37c3_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0f6f2afacf92ba16f28f69f9e1eb0ad260af6f0e273af6ffa38ea958c9715026 = $this->env->getExtension("native_profiler");
        $__internal_0f6f2afacf92ba16f28f69f9e1eb0ad260af6f0e273af6ffa38ea958c9715026->enter($__internal_0f6f2afacf92ba16f28f69f9e1eb0ad260af6f0e273af6ffa38ea958c9715026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_0f6f2afacf92ba16f28f69f9e1eb0ad260af6f0e273af6ffa38ea958c9715026->leave($__internal_0f6f2afacf92ba16f28f69f9e1eb0ad260af6f0e273af6ffa38ea958c9715026_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_dcfcffb1a649c877453f94f50f86511a7404421a6a94825059f89239cdfb22df = $this->env->getExtension("native_profiler");
        $__internal_dcfcffb1a649c877453f94f50f86511a7404421a6a94825059f89239cdfb22df->enter($__internal_dcfcffb1a649c877453f94f50f86511a7404421a6a94825059f89239cdfb22df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_easyadmin_render_css");
        echo "\">
        ";
        
        $__internal_dcfcffb1a649c877453f94f50f86511a7404421a6a94825059f89239cdfb22df->leave($__internal_dcfcffb1a649c877453f94f50f86511a7404421a6a94825059f89239cdfb22df_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_146393eda5f29d8efa8c75df4a65055ff6a8c49aec34946ca5fcd4bc663f2aeb = $this->env->getExtension("native_profiler");
        $__internal_146393eda5f29d8efa8c75df4a65055ff6a8c49aec34946ca5fcd4bc663f2aeb->enter($__internal_146393eda5f29d8efa8c75df4a65055ff6a8c49aec34946ca5fcd4bc663f2aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_146393eda5f29d8efa8c75df4a65055ff6a8c49aec34946ca5fcd4bc663f2aeb->leave($__internal_146393eda5f29d8efa8c75df4a65055ff6a8c49aec34946ca5fcd4bc663f2aeb_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_53bf825e1e76a8dd4cd62439672eb34498741257930f9898a3283848e0d25f72 = $this->env->getExtension("native_profiler");
        $__internal_53bf825e1e76a8dd4cd62439672eb34498741257930f9898a3283848e0d25f72->enter($__internal_53bf825e1e76a8dd4cd62439672eb34498741257930f9898a3283848e0d25f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        
        $__internal_53bf825e1e76a8dd4cd62439672eb34498741257930f9898a3283848e0d25f72->leave($__internal_53bf825e1e76a8dd4cd62439672eb34498741257930f9898a3283848e0d25f72_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_a01542ceaf3c8a4e755ea668f5879f8bd7b4d27821420f54fe01876876b58f36 = $this->env->getExtension("native_profiler");
        $__internal_a01542ceaf3c8a4e755ea668f5879f8bd7b4d27821420f54fe01876876b58f36->enter($__internal_a01542ceaf3c8a4e755ea668f5879f8bd7b4d27821420f54fe01876876b58f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    <div id=\"wrapper\" class=\"container\">
        ";
        // line 33
        $this->displayBlock('wrapper', $context, $blocks);
        // line 114
        echo "    </div>

    ";
        // line 116
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 122
        echo "
    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 124
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
    </body>
    ";
        
        $__internal_a01542ceaf3c8a4e755ea668f5879f8bd7b4d27821420f54fe01876876b58f36->leave($__internal_a01542ceaf3c8a4e755ea668f5879f8bd7b4d27821420f54fe01876876b58f36_prof);

    }

    // line 31
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cd9534d1c07201d00c3368f91b4039ae716034d71a3090b686dda7b960ac3b55 = $this->env->getExtension("native_profiler");
        $__internal_cd9534d1c07201d00c3368f91b4039ae716034d71a3090b686dda7b960ac3b55->enter($__internal_cd9534d1c07201d00c3368f91b4039ae716034d71a3090b686dda7b960ac3b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_cd9534d1c07201d00c3368f91b4039ae716034d71a3090b686dda7b960ac3b55->leave($__internal_cd9534d1c07201d00c3368f91b4039ae716034d71a3090b686dda7b960ac3b55_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f9ddbc1e5e3493e1bbb6dc36e7ad70743495b156e50e7c28491408d28b9dddf3 = $this->env->getExtension("native_profiler");
        $__internal_f9ddbc1e5e3493e1bbb6dc36e7ad70743495b156e50e7c28491408d28b9dddf3->enter($__internal_f9ddbc1e5e3493e1bbb6dc36e7ad70743495b156e50e7c28491408d28b9dddf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_f9ddbc1e5e3493e1bbb6dc36e7ad70743495b156e50e7c28491408d28b9dddf3->leave($__internal_f9ddbc1e5e3493e1bbb6dc36e7ad70743495b156e50e7c28491408d28b9dddf3_prof);

    }

    // line 33
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_9cfd050356f80c569bcb8c712f1ff714a861859f86fc278a06c99ad89ad2eb4d = $this->env->getExtension("native_profiler");
        $__internal_9cfd050356f80c569bcb8c712f1ff714a861859f86fc278a06c99ad89ad2eb4d->enter($__internal_9cfd050356f80c569bcb8c712f1ff714a861859f86fc278a06c99ad89ad2eb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 34
        echo "        <nav id=\"header\" class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "        </nav>

        <div id=\"content\" class=\"col-lg-10 col-lg-offset-2\">
            ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "        </div>
        ";
        
        $__internal_9cfd050356f80c569bcb8c712f1ff714a861859f86fc278a06c99ad89ad2eb4d->leave($__internal_9cfd050356f80c569bcb8c712f1ff714a861859f86fc278a06c99ad89ad2eb4d_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_6bf6b5516e0618efa743e212f6688a0d0f0857924defbccdd20a167c7e48b499 = $this->env->getExtension("native_profiler");
        $__internal_6bf6b5516e0618efa743e212f6688a0d0f0857924defbccdd20a167c7e48b499->enter($__internal_6bf6b5516e0618efa743e212f6688a0d0f0857924defbccdd20a167c7e48b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "            <div id=\"header-contents\">
                <div class=\"navbar-header\">
                    ";
        // line 38
        $this->displayBlock('navbar_header', $context, $blocks);
        // line 52
        echo "                </div>

                <div class=\"collapse navbar-collapse\" id=\"header-nav\">
                    ";
        // line 55
        $this->displayBlock('header_menu', $context, $blocks);
        // line 68
        echo "                </div>

                <div id=\"header-footer\" class=\"navbar-right\">
                    ";
        // line 71
        $this->displayBlock('header_footer', $context, $blocks);
        // line 81
        echo "                </div>
            </div>
            ";
        
        $__internal_6bf6b5516e0618efa743e212f6688a0d0f0857924defbccdd20a167c7e48b499->leave($__internal_6bf6b5516e0618efa743e212f6688a0d0f0857924defbccdd20a167c7e48b499_prof);

    }

    // line 38
    public function block_navbar_header($context, array $blocks = array())
    {
        $__internal_a17cb55995fa106681e12349bb46b0c2c9d946a6ff5d357d5b1abff484b12dd9 = $this->env->getExtension("native_profiler");
        $__internal_a17cb55995fa106681e12349bb46b0c2c9d946a6ff5d357d5b1abff484b12dd9->enter($__internal_a17cb55995fa106681e12349bb46b0c2c9d946a6ff5d357d5b1abff484b12dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_header"));

        // line 39
        echo "                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#header-nav\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <div id=\"header-logo\" class=\"navbar-brand\">
                        ";
        // line 44
        $this->displayBlock('header_logo', $context, $blocks);
        // line 50
        echo "                    </div>
                    ";
        
        $__internal_a17cb55995fa106681e12349bb46b0c2c9d946a6ff5d357d5b1abff484b12dd9->leave($__internal_a17cb55995fa106681e12349bb46b0c2c9d946a6ff5d357d5b1abff484b12dd9_prof);

    }

    // line 44
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_2517dbdbad82a53d36fb80e1e87e17aea1589b01502400dfaad4e5244c7e24a3 = $this->env->getExtension("native_profiler");
        $__internal_2517dbdbad82a53d36fb80e1e87e17aea1589b01502400dfaad4e5244c7e24a3->enter($__internal_2517dbdbad82a53d36fb80e1e87e17aea1589b01502400dfaad4e5244c7e24a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 45
        echo "                        ";
        $context["_site_name_length"] = (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) <= 10)) ? ("short") : ((((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) <= 12)) ? ("medium") : ("long"))));
        // line 48
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["_site_name_length"]) ? $context["_site_name_length"] : $this->getContext($context, "_site_name_length")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "</a>
                        ";
        
        $__internal_2517dbdbad82a53d36fb80e1e87e17aea1589b01502400dfaad4e5244c7e24a3->leave($__internal_2517dbdbad82a53d36fb80e1e87e17aea1589b01502400dfaad4e5244c7e24a3_prof);

    }

    // line 55
    public function block_header_menu($context, array $blocks = array())
    {
        $__internal_b10bb1f9bfb5490d451e2b6002a6d83e005998c36f3fab817772f18d6eca28b8 = $this->env->getExtension("native_profiler");
        $__internal_b10bb1f9bfb5490d451e2b6002a6d83e005998c36f3fab817772f18d6eca28b8->enter($__internal_b10bb1f9bfb5490d451e2b6002a6d83e005998c36f3fab817772f18d6eca28b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_menu"));

        // line 56
        echo "                        <ul id=\"header-menu\" class=\"nav navbar-nav\">
                            ";
        // line 57
        $this->displayBlock('navigation_items', $context, $blocks);
        // line 66
        echo "                        </ul>
                    ";
        
        $__internal_b10bb1f9bfb5490d451e2b6002a6d83e005998c36f3fab817772f18d6eca28b8->leave($__internal_b10bb1f9bfb5490d451e2b6002a6d83e005998c36f3fab817772f18d6eca28b8_prof);

    }

    // line 57
    public function block_navigation_items($context, array $blocks = array())
    {
        $__internal_dccc3ee21916318149a4a2e232fde603d17a73d719327e7c68522f114bf4bc27 = $this->env->getExtension("native_profiler");
        $__internal_dccc3ee21916318149a4a2e232fde603d17a73d719327e7c68522f114bf4bc27->enter($__internal_dccc3ee21916318149a4a2e232fde603d17a73d719327e7c68522f114bf4bc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation_items"));

        // line 58
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                                    <li class=\"";
            echo (((twig_lower_filter($this->env, $this->getAttribute($context["item"], "name", array())) == twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "entity"), "method")))) ? ("active") : (""));
            echo "\">
                                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", array("entity" => $this->getAttribute($context["item"], "name", array()), "action" => "list")), "html", null, true);
            echo "\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["item"], "label", array())), "html", null, true);
            // line 62
            echo "</a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            ";
        
        $__internal_dccc3ee21916318149a4a2e232fde603d17a73d719327e7c68522f114bf4bc27->leave($__internal_dccc3ee21916318149a4a2e232fde603d17a73d719327e7c68522f114bf4bc27_prof);

    }

    // line 71
    public function block_header_footer($context, array $blocks = array())
    {
        $__internal_0fd597272fe8bd55235e11d6de036c5af93883a79cc18b74d42cc178868aa0ff = $this->env->getExtension("native_profiler");
        $__internal_0fd597272fe8bd55235e11d6de036c5af93883a79cc18b74d42cc178868aa0ff->enter($__internal_0fd597272fe8bd55235e11d6de036c5af93883a79cc18b74d42cc178868aa0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_footer"));

        // line 72
        echo "                        ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 73
            echo "                            <div id=\"header-security\">
                                <p>
                                    <small><i class=\"fa fa-lock\"></i> <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span></small>
                                    ";
            // line 76
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), "Unnamed User")) : ("Unnamed User")), "html", null, true);
            echo "
                                </p>
                            </div>
                        ";
        }
        // line 80
        echo "                    ";
        
        $__internal_0fd597272fe8bd55235e11d6de036c5af93883a79cc18b74d42cc178868aa0ff->leave($__internal_0fd597272fe8bd55235e11d6de036c5af93883a79cc18b74d42cc178868aa0ff_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3d60d79bb04b1899902bdd3be6ed42c310a07ea30255ba9090e83c5099cf9d9 = $this->env->getExtension("native_profiler");
        $__internal_a3d60d79bb04b1899902bdd3be6ed42c310a07ea30255ba9090e83c5099cf9d9->enter($__internal_a3d60d79bb04b1899902bdd3be6ed42c310a07ea30255ba9090e83c5099cf9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 88
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 91
        echo "
                <div class=\"row\">
                    <div id=\"content-header\" class=\"col-sm-12\">
                        ";
        // line 94
        $this->displayBlock('content_header', $context, $blocks);
        // line 101
        echo "                    </div>

                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 104
        $this->displayBlock('main', $context, $blocks);
        // line 105
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 108
        $this->displayBlock('sidebar', $context, $blocks);
        // line 109
        echo "                    </div>
                </div>
            ";
        
        $__internal_a3d60d79bb04b1899902bdd3be6ed42c310a07ea30255ba9090e83c5099cf9d9->leave($__internal_a3d60d79bb04b1899902bdd3be6ed42c310a07ea30255ba9090e83c5099cf9d9_prof);

    }

    // line 88
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_f7da8af93337e52b8efe469d9692057699cfdb54fa48acdb9dc248b5ed990c22 = $this->env->getExtension("native_profiler");
        $__internal_f7da8af93337e52b8efe469d9692057699cfdb54fa48acdb9dc248b5ed990c22->enter($__internal_f7da8af93337e52b8efe469d9692057699cfdb54fa48acdb9dc248b5ed990c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 89
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_f7da8af93337e52b8efe469d9692057699cfdb54fa48acdb9dc248b5ed990c22->leave($__internal_f7da8af93337e52b8efe469d9692057699cfdb54fa48acdb9dc248b5ed990c22_prof);

    }

    // line 94
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9bb4fa15f0febf3ee7eaa3a70feee5b765a945c418fbc0060fac7a9dd21634b3 = $this->env->getExtension("native_profiler");
        $__internal_9bb4fa15f0febf3ee7eaa3a70feee5b765a945c418fbc0060fac7a9dd21634b3->enter($__internal_9bb4fa15f0febf3ee7eaa3a70feee5b765a945c418fbc0060fac7a9dd21634b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 95
        echo "                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <h1 class=\"title\">";
        // line 97
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                                </div>
                            </div>
                        ";
        
        $__internal_9bb4fa15f0febf3ee7eaa3a70feee5b765a945c418fbc0060fac7a9dd21634b3->leave($__internal_9bb4fa15f0febf3ee7eaa3a70feee5b765a945c418fbc0060fac7a9dd21634b3_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1f01bf055bc685439e3297966fe47a3da9e2b92721fe28344717542655260275 = $this->env->getExtension("native_profiler");
        $__internal_1f01bf055bc685439e3297966fe47a3da9e2b92721fe28344717542655260275->enter($__internal_1f01bf055bc685439e3297966fe47a3da9e2b92721fe28344717542655260275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_1f01bf055bc685439e3297966fe47a3da9e2b92721fe28344717542655260275->leave($__internal_1f01bf055bc685439e3297966fe47a3da9e2b92721fe28344717542655260275_prof);

    }

    // line 104
    public function block_main($context, array $blocks = array())
    {
        $__internal_16c56574fc55b3c1e7e21c71a592746c8e8fe7084315a383e42f3c7885812e58 = $this->env->getExtension("native_profiler");
        $__internal_16c56574fc55b3c1e7e21c71a592746c8e8fe7084315a383e42f3c7885812e58->enter($__internal_16c56574fc55b3c1e7e21c71a592746c8e8fe7084315a383e42f3c7885812e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_16c56574fc55b3c1e7e21c71a592746c8e8fe7084315a383e42f3c7885812e58->leave($__internal_16c56574fc55b3c1e7e21c71a592746c8e8fe7084315a383e42f3c7885812e58_prof);

    }

    // line 108
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_67c3d683313f24946587bfdadc64ccce96a6cb0668c1ff3ab00bd6997112db79 = $this->env->getExtension("native_profiler");
        $__internal_67c3d683313f24946587bfdadc64ccce96a6cb0668c1ff3ab00bd6997112db79->enter($__internal_67c3d683313f24946587bfdadc64ccce96a6cb0668c1ff3ab00bd6997112db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_67c3d683313f24946587bfdadc64ccce96a6cb0668c1ff3ab00bd6997112db79->leave($__internal_67c3d683313f24946587bfdadc64ccce96a6cb0668c1ff3ab00bd6997112db79_prof);

    }

    // line 116
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_55af7fde91e48c6e7278f4647da4930dc39ca94b09b51600c19d3eb55d305537 = $this->env->getExtension("native_profiler");
        $__internal_55af7fde91e48c6e7278f4647da4930dc39ca94b09b51600c19d3eb55d305537->enter($__internal_55af7fde91e48c6e7278f4647da4930dc39ca94b09b51600c19d3eb55d305537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 117
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery-flexmenu.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/admin.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_55af7fde91e48c6e7278f4647da4930dc39ca94b09b51600c19d3eb55d305537->leave($__internal_55af7fde91e48c6e7278f4647da4930dc39ca94b09b51600c19d3eb55d305537_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 120,  556 => 119,  552 => 118,  547 => 117,  541 => 116,  530 => 108,  519 => 104,  498 => 97,  494 => 95,  488 => 94,  478 => 89,  472 => 88,  463 => 109,  461 => 108,  456 => 105,  454 => 104,  449 => 101,  447 => 94,  442 => 91,  439 => 88,  433 => 87,  426 => 80,  419 => 76,  415 => 75,  411 => 73,  408 => 72,  402 => 71,  395 => 65,  387 => 62,  385 => 61,  382 => 60,  377 => 59,  372 => 58,  366 => 57,  358 => 66,  356 => 57,  353 => 56,  347 => 55,  333 => 48,  330 => 45,  324 => 44,  316 => 50,  314 => 44,  307 => 39,  301 => 38,  292 => 81,  290 => 71,  285 => 68,  283 => 55,  278 => 52,  276 => 38,  272 => 36,  266 => 35,  258 => 112,  256 => 87,  251 => 84,  249 => 35,  246 => 34,  240 => 33,  219 => 31,  210 => 126,  201 => 124,  197 => 123,  194 => 122,  192 => 116,  188 => 114,  186 => 33,  178 => 31,  172 => 30,  161 => 27,  149 => 24,  146 => 23,  140 => 22,  131 => 15,  127 => 14,  122 => 13,  116 => 12,  104 => 10,  96 => 129,  94 => 30,  90 => 28,  88 => 27,  85 => 26,  83 => 22,  80 => 21,  71 => 19,  67 => 18,  64 => 17,  62 => 12,  57 => 10,  46 => 2,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ path('_easyadmin_render_css') }}">*/
/*         {% endblock head_stylesheets %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}{% endblock %}*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin {% block body_class %}{% endblock %}">*/
/*     <div id="wrapper" class="container">*/
/*         {% block wrapper %}*/
/*         <nav id="header" class="navbar navbar-default navbar-static-top" role="navigation">*/
/*             {% block header %}*/
/*             <div id="header-contents">*/
/*                 <div class="navbar-header">*/
/*                     {% block navbar_header %}*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-nav">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <i class="fa fa-bars"></i>*/
/*                     </button>*/
/*                     <div id="header-logo" class="navbar-brand">*/
/*                         {% block header_logo %}*/
/*                         {% set _site_name_length = easyadmin_config('site_name')|length <= 10 ? 'short'*/
/*                             : easyadmin_config('site_name')|length <= 12 ? 'medium' : 'long'*/
/*                         %}*/
/*                         <a href="{{ path('easyadmin') }}" class="{{ _site_name_length }}">{{ easyadmin_config('site_name')|raw }}</a>*/
/*                         {% endblock header_logo %}*/
/*                     </div>*/
/*                     {% endblock navbar_header %}*/
/*                 </div>*/
/* */
/*                 <div class="collapse navbar-collapse" id="header-nav">*/
/*                     {% block header_menu %}*/
/*                         <ul id="header-menu" class="nav navbar-nav">*/
/*                             {% block navigation_items %}*/
/*                                 {% for item in easyadmin_config('entities') %}*/
/*                                     <li class="{{ item.name|lower == app.request.get('entity')|lower ? 'active' : '' }}">*/
/*                                         <a href="{{ path('easyadmin', { entity: item.name, action: 'list' }) }}">*/
/*                                             {{- item.label|trans -}}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             {% endblock %}*/
/*                         </ul>*/
/*                     {% endblock header_menu %}*/
/*                 </div>*/
/* */
/*                 <div id="header-footer" class="navbar-right">*/
/*                     {% block header_footer %}*/
/*                         {% if app.user %}*/
/*                             <div id="header-security">*/
/*                                 <p>*/
/*                                     <small><i class="fa fa-lock"></i> <span>{{ 'header.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span></small>*/
/*                                     {{ app.user.username|default('Unnamed User') }}*/
/*                                 </p>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endblock header_footer %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endblock header %}*/
/*         </nav>*/
/* */
/*         <div id="content" class="col-lg-10 col-lg-offset-2">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <div class="row">*/
/*                     <div id="content-header" class="col-sm-12">*/
/*                         {% block content_header %}*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endblock content_header %}*/
/*                     </div>*/
/* */
/*                     <div id="main" class="col-sm-9">*/
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock content %}*/
/*         </div>*/
/*         {% endblock wrapper %}*/
/*     </div>*/
/* */
/*     {% block body_javascript %}*/
/*         <script src="{{ asset('bundles/easyadmin/javascript/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/easyadmin/javascript/jquery-flexmenu.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/easyadmin/javascript/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/easyadmin/javascript/admin.js') }}"></script>*/
/*     {% endblock body_javascript %}*/
/* */
/*     {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*         <script src="{{ asset(js_asset) }}"></script>*/
/*     {% endfor %}*/
/* */
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
