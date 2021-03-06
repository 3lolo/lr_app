<?php

/* @EasyAdmin/css/admin.css.twig */
class __TwigTemplate_d2bd9ce2189b7698ac69e17372e78e3a11717f87e06d741340f2960b87757df2 extends Twig_Template
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
        $__internal_827b952cab507f35c82b9cae8591c53329c003abf4bbbc82bf38487259eb0351 = $this->env->getExtension("native_profiler");
        $__internal_827b952cab507f35c82b9cae8591c53329c003abf4bbbc82bf38487259eb0351->enter($__internal_827b952cab507f35c82b9cae8591c53329c003abf4bbbc82bf38487259eb0351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/admin.css.twig"));

        // line 2
        echo "
/*! ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== */

";
        // line 7
        $context["color_schemes"] = array("dark" => array("danger" => "#D44542", "success" => "#00994D", "text" => "#222222", "link" => "#1122CC", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#222222", "gray_dark" => "#A59D95", "gray" => "#D5D2CA", "gray_light" => "#E5E5E5", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#E5E5E5", "table_border" => "#CCC", "table_row_border" => "#F5F5F5", "header_background" => "#222222", "menu_background" => "#222222", "header_text" => "#F5F5F5", "header_separator" => "rgba(255, 255, 255, .2)"), "light" => array("danger" => "#D44542", "success" => "#00994D", "text" => "#444444", "link" => "#1122CC", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#777", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#F5F5F5", "header_background" => "#FAFAFA", "menu_background" => "#EFEFEF", "header_text" =>         // line 47
(isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color")), "header_separator" => "rgba(0, 0, 0, 0.05)"));
        // line 51
        echo "
";
        // line 52
        $context["colors"] = $this->getAttribute((isset($context["color_schemes"]) ? $context["color_schemes"] : $this->getContext($context, "color_schemes")), (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")), array(), "array");
        // line 53
        echo "
/* -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- */
body {
    background: ";
        // line 58
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "page_background", array());
        echo ";
    color: ";
        // line 59
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
}

/* Links
   ------------------------------------------------------------------------- */
a {
    color: ";
        // line 69
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo ";
    text-decoration: none;
}
a:hover {
    border: none;
    color: ";
        // line 74
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
a:active {
    outline: 0;
    position: relative;
    top: 1px;
}

/* Headings
   ------------------------------------------------------------------------- */
h1, h2, h3, h4, h5, h6 {
    color: ";
        // line 86
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    font-weight: 500;
    line-height: 1.2;
    margin-bottom: .3em;
    margin-top: 1em;
}

h1 + h2,
h1 + h3,
h1 + h4,
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}

h1 { font-size: 21px; }
h2 { font-size: 18px; }
h3 { font-size: 16px; }
h4 { font-size: 16px; }
h5 { font-size: 14px; }
h6 { font-size: 14px; }

h1.title {
    font-weight: 400;
    margin-top: 0;
}

/* Text
   ------------------------------------------------------------------------- */
p {
    margin: 0 0 1em 0;
}

p.lead {
    font-size: 18px;
    font-weight: normal;
}

i {
    font-style: normal;
}

.disabled {
    color: ";
        // line 129
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo " !important;
}

/* Lists
   ------------------------------------------------------------------------- */
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
ul ul, ul ol, ol ol, ol ul {
    margin-top: .5em;
}
li {
    margin-bottom: 1em;
}

/* Code
   ------------------------------------------------------------------------- */
code {
    background: transparent;
    border-radius: 0;
    color: ";
        // line 150
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    font-family: Consolas, \"Liberation Mono\", \"Droid Sans Mono\", Monaco, Menlo, \"Courier New\", Courier, monospace;
    font-size-adjust: .5;
    font-size: 14px;
    padding: 0;
}
h1 code, h2 code, h3 code, h4 code, h5 code, h6 code {
    color: inherit;
    font: inherit !important;
}


/* Flash messages
   ------------------------------------------------------------------------- */
div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 168
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 169
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 172
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 173
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

/* Labels
   ------------------------------------------------------------------------- */
/* this prevents overriding default styles for labels (label-info, label-primary, etc.) */
.label:not([class*=label-]) {
    background: ";
        // line 183
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 186
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}
.label-success {
    background: ";
        // line 193
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
}
.label-danger {
    background: ";
        // line 196
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 202
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}

/* this makes boolean labels to be of the same width for most languages */
.boolean .label,
.toggle .label {
    min-width: 33px;
}

/* Switches / toggles
   ------------------------------------------------------------------------- */
.toggle .btn {
    border-radius: 3px;
    font-size: 11px;
    font-weight: bold;
    text-transform: uppercase;
}
.toggle .toggle.btn-success {
    border-color: ";
        // line 220
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    background: ";
        // line 221
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
}
.toggle .toggle.btn-danger {
    border-color: ";
        // line 224
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    background: ";
        // line 225
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .toggle .toggle-on {
    background: ";
        // line 234
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
}
.toggle .toggle .toggle-off {
    background: ";
        // line 237
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
.toggle .toggle-group label {
    padding-top: 2px;
}
.toggle .toggle.btn-xs {
    width: 44px;
}
.toggle .toggle.btn-xs .toggle-handle {
    height: 18px;
    margin-top: 1px;
    margin-right: 5px;
}
.toggle .toggle-on.btn-xs,
.toggle .toggle-off.btn-xs {
    padding-left: 4px;
    text-align: center;
}

/* Badges
   ------------------------------------------------------------------------- */
span.badge {
    background-color: ";
        // line 259
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}

/* Buttons
   ------------------------------------------------------------------------- */
a.btn:not([class*=btn-]),
input.btn:not([class*=btn-]),
button.btn:not([class*=btn-]) {
    background: ";
        // line 267
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
a.btn,
input.btn,
button.btn {
    border: none;
    border-radius: 4px;
    color: ";
        // line 274
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    line-height: 1.2;
    outline: none;
    padding: .7em 1em;
    text-align: center;
}
a.btn:hover,
input.btn:hover,
button.btn:hover {
    color: ";
        // line 283
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    opacity: .9;
}

.btn + .btn {
    margin-left: 5px;
}

a.btn i,
input.btn i,
button.btn i {
    font-size: 18px;
    padding-right: 6px;
}

/* .bnt-secondary is for 'buttons' displayed as text links */
a.btn-secondary,
input.btn-secondary,
button.btn-secondary,
a.btn-secondary:hover,
input.btn-secondary:hover,
button.btn-secondary:hover {
    background: transparent;
    color: ";
        // line 306
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
a.btn-secondary:hover,
input.btn-secondary:hover,
button.btn-secondary:hover {
    text-decoration: none;
}
a.btn-secondary:active,
input.btn-secondary:active,
button.btn-secondary:active {
    box-shadow: none;
    -webkit-box-shadow: none;
}

a.btn-danger,
input.btn-danger,
button.btn-danger {
    background: ";
        // line 324
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}

/* Forms
   ------------------------------------------------------------------------- */
.form-control,
.form-control:focus {
    color: ";
        // line 331
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    border: 1px solid ";
        // line 332
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 342
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
}

.has-error .control-label {
    color: ";
        // line 346
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
.has-error .form-control,
.has-error .form-control:focus {
    border-color: ";
        // line 350
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    box-shadow: none;
}
.has-error .error-block {
    color: ";
        // line 354
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.nullable-control {
    padding-top: 5px;
}

/* Field: collection
   ------------------------------------------------------------------------- */
.field-collection .collection-empty {
    margin: .5em 0;
}
.field-collection .collection-empty .label-empty {
    color: ";
        // line 378
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
}

/* Select2 widget
   ------------------------------------------------------------------------- */
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 384
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 387
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 393
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 397
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 400
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    margin: 5px 1%;
    width: 96%;
}

/* Modal windows
   ------------------------------------------------------------------------- */
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 415
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    margin-top: 1.5em;
}

/* -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- */

/* Wrapper
   ------------------------------------------------------------------------- */
#wrapper {
    padding: 60px 0 0;
}

/* Header
   ------------------------------------------------------------------------- */
/* Responsive menu inspired by http://www.joesnellpdx.com/toggle-navigation-no-javascript/ */

#header {
    background: ";
        // line 434
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_background", array());
        echo ";
    border-color: ";
        // line 435
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_background", array());
        echo ";
    box-shadow: 1px 0 2px #DDD;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
#header .navbar-toggle {
    border: 0;
    padding: 5px 0 5px 10px;
}
#header .navbar-toggle:hover,
#header .navbar-toggle:active,
#header .navbar-toggle:focus {
    background-color: transparent;
}
#header .navbar-toggle i {
    color: ";
        // line 452
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_text", array());
        echo ";
    font-size: 21px;
    text-align: right;
}
#header-logo {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
#header-logo a {
    color: ";
        // line 462
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    display: block;
    float: left;
    font-size: 16px;
    font-weight: 500;
    height: auto;
    margin: 0;
    overflow: hidden;
    position: relative;
    text-decoration: none;
    text-overflow: ellipsis;
    white-space: nowrap;
    z-index: 1002;
}

#header-logo a img {
    margin-top: -2px;
    max-height: 26px;
    max-width: 94%;
}
#header-logo:active {
    position: static;
}

#header-menu,
.flexMenu-popup {
    background: ";
        // line 488
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "menu_background", array());
        echo ";
    box-shadow: 0 1px 2px ";
        // line 489
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
        echo ";
    margin: 0 -15px;
}
#header-menu li,
.flexMenu-popup li {
    display: block;
    margin-bottom: 0;
    text-align: left;
}
.flexMenu-popup {
    position: absolute;
    right: 0;
}
.flexMenu-popup li a {
    white-space: pre;
}
#header-menu li a {
    border-top: 1px solid ";
        // line 506
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_separator", array());
        echo ";
    color: ";
        // line 507
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_text", array());
        echo ";
";
        // line 508
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 509
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        } elseif (("light" ==         // line 510
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 511
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
            echo ";
";
        }
        // line 513
        echo "    display: block;
    font-size: 16px;
    text-decoration: none;
    padding: 1em;
}
#header-menu li:hover,
#header-menu li.active {
  background: ";
        // line 520
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
#header-menu li:hover a,
#header-menu li.active a {
  background: ";
        // line 524
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
  color: ";
        // line 525
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
#header #header-footer {
    display: none;
}

/* Footer
   ------------------------------------------------------------------------- */
#footer {
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    clear: both;
    margin-top: 2em;
    padding-bottom: 2em;
    padding-top: 1em;
}
#footer {
    color: ";
        // line 541
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    font-size: 12px;
}

/* Main body
   ------------------------------------------------------------------------- */
#content #main {
    margin-bottom: 2em;
}

/* Sidebar
   ------------------------------------------------------------------------- */
#sidebar {
}

/* -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- */
body.easyadmin h1.title {
    margin-bottom: 20px;
}

/* -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- */
body.list h1.title {
    margin-bottom: 10px;
}
body.list #content-header {
    margin-bottom: 10px;
}

body.list #content-header #content-search,
body.list #content-header #content-actions {
    float: right;
}
body.list #content-header #content-search {
    float: left;
    padding-left: 0;
}
body.list #content-header #content-search .input-group {
    position: relative;
    width: 100%;
}
body.list #content-header #content-search #content-search-query {
    border-radius: 0;
    padding-right: 28px;
}
body.list #content-header #content-search .input-group:after {
  content: \"\\f002\";
  color: ";
        // line 591
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
  font-family: \"FontAwesome\";
  font-size: 16px;
  position: absolute;
  margin-left: -25px;
  margin-top: 5px;
  z-index: 10;
}

body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 612
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border: 1px solid ";
        // line 613
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 618
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    text-align: right;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
body.list table tbody td.actions a {
    margin-left: 10px;
}
body.list table tbody td.image img {
    max-height: 50px;
    max-width: 150px;
}

body.list .table tbody span.highlight {
    background: #FFFF99;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
}
body.list .pagination > li > a {
    background: ";
        // line 664
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border-color: ";
        // line 665
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 667
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 670
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    color: ";
        // line 671
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
/* this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) */
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

/* -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- */
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: red;
    position: absolute;
}

/* -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- */
body.new form textarea {
    min-height: 250px;
}
body.new form .field-date select + select {
    margin-top: .5em;
}
body.new form .field-collection-action {
    margin-top: -15px;
}
body.new form .field-collection-item-action {
    margin-bottom: 0;
    margin-top: 5px;
}

body.new form #form-actions-row button,
body.new form #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new form.theme-bootstrap_3_horizontal_layout #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

@media (min-width: 768px) {
    body.new form.theme-bootstrap_3_horizontal_layout #form-actions-row {
        margin-left: 16.66666667%;
    }
}

/* -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- */
body.edit form textarea {
    min-height: 250px;
}
body.edit form .field-date select + select {
    margin-top: .5em;
}
body.edit form .field-collection-action {
    margin-top: -15px;
}
body.edit form .field-collection-item-action {
    margin-bottom: 0;
    margin-top: 5px;
}

body.edit form #form-actions-row button,
body.edit form #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit form.theme-bootstrap_3_horizontal_layout #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

@media (min-width: 768px) {
    body.edit form.theme-bootstrap_3_horizontal_layout #form-actions-row {
        margin-left: 16.66666667%;
    }
}

/* -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- */
body.show .form-control {
";
        // line 765
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 766
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 767
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 768
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 770
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}
body.show .form-control.image {
    max-height: 300px;
    max-width: 100%;
}

/* -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- */
body.error .error-description {
    background: ";
        // line 789
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    height: auto;
    margin: 2em auto 2em;
    max-width: 90%;
    min-height: 200px;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 797
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 798
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    margin-top: 0;
    padding: 15px;
    text-transform: uppercase;
}
body.error .error-message {
    padding: 15px;
}
body.error .error-message p.lead {
    margin-bottom: 0;
    padding-bottom: .5em;
}

/* =========================================================================
   RESPONSIVE
   ========================================================================= */

/* -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- */
@media (min-width: 768px) {

    h1, h2, h3, h4, h5, h6 {
        margin-top: 2em;
    }

    h1 { font-size: 21px; }
    h2 { font-size: 18px; }
    h3 { font-size: 16px; }
    h4 { font-size: 16px; }
    h5 { font-size: 14px; }
    h6 { font-size: 14px; }

    h1.title {
        font-size: 21px;
    }

    ul, ol {
        margin-left: 2em;
    }

    body #wrapper {
        padding: 70px 0 0;
        width: 100%;
    }

    #header-menu {
        background: transparent;
        box-shadow: none;
        margin-left: 0;
        float: none;
    }
    #header-menu li a {
        border-top: 0;
        padding: 15px 16px 14px;
    }
    #header-menu li a:hover,
    #header #header-menu li:hover,
    #header #header-menu li.active,
    #header #header-menu li.active a,
    #header #header-menu ul.flexMenu-popup li a:hover,
    #header #header-menu ul.flexMenu-popup li.active a{
        background: transparent;
        color: ";
        // line 861
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    #header #header-menu ul.flexMenu-popup li a{
        background: transparent;
        color: ";
        // line 865
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_text", array());
        echo ";
    }

    #header-logo a.medium {
        font-size: 18px;
    }
    #header-logo a.short {
        font-size: 21px;
    }

    body.list h1.title {
        padding-top: 3px;
    }
    body.list #content-header #content-search {
        float: right;
    }

    body.list table {
        background: ";
        // line 883
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
        border: 1px solid ";
        // line 884
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 890
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 894
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 899
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 905
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
        color: ";
        // line 906
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
        text-decoration: none;
    }
    body.list table thead th a:hover i {
        color: ";
        // line 910
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
        background: ";
        // line 914
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
        color: ";
        // line 915
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
        color: ";
        // line 920
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    }
    body.list table thead th.boolean,
    body.list table tbody td.boolean,
    body.list table thead th.toggle,
    body.list table tbody td.toggle {
        text-align: center;
    }
    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 929
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 932
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    /* these styles are needed to fix some visual glitches when the sort field is the first column */
    body.list .table thead tr th:first-child.sorted {
        border-left: 1px solid ";
        // line 936
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
        border-top: 1px solid ";
        // line 937
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    body.list .table tbody {
";
        // line 940
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 941
            echo "        border-bottom: 2px solid ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        } elseif (("light" ==         // line 942
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 943
            echo "        /* this '1px double' style is correct because 'double' gives the border more priority
           and allows us to override the table border bottom (otherwise this border won't
            be shown) */
        border-bottom: 1px double ";
            // line 946
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 948
        echo "    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 956
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
        display: table-cell;
        text-align: left;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 965
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 966
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 969
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }

    body.new form .field-date select + select,
    body.edit form .field-date select + select {
        margin-left: .5em;
        margin-top: 0;
    }

    body.error .error-description {
        max-width: 80%;
    }
}

/* -------------------------------------------------------------------------
   NORMAL DESKTOPS and LANDSCAPE TABLETS
   ------------------------------------------------------------------------- */
@media (min-width: 1024px) {
    body #wrapper {
        padding: 0;
        width: 100%;
    }

    #header {
        height: 50px;
        margin-bottom: 2em;
        overflow: hidden;
        position: static;
        width: 100%;
    }

    #header-logo a img {
        max-height: 40px;
    }

    #header-nav {
        position: static;
    }
    #header-menu {
        background: transparent;
        box-shadow: none;
        line-height: 50px;
        margin: 0;
        padding: 0 15px;
        position: static;
        overflow: hidden;
    }

    #header-logo a.medium {
        font-size: 21px;
    }
    #header-logo a.short {
        font-size: 24px;
    }

    #header-menu li {
        background: transparent;
        float: left;
        display: inline-block;
        line-height: 40px;
    }
    #header-menu li a {
        border: 0;
";
        // line 1036
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1037
            echo "        color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        } elseif (("light" ==         // line 1038
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1039
            echo "        color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
            echo ";
";
        }
        // line 1041
        echo "        display: block;
        line-height: 40px;
        padding: 5px 1.5em 5px 0;
    }

    #header #header-footer {
        color: ";
        // line 1047
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
        display: block;
        font-size: 14px;
    }
    #header #header-footer p {
        margin: 16px 0 16px;
        text-align: right;
    }
    #header #header-footer p small span {
        display: none;
    }
    #header #header-footer p small i {
        font-size: 14px;
        padding-right: 3px;
    }

    #content {
        border: 0;
        box-shadow: none;
        margin-left: 0;
        padding: 0 15px;
        width: 100%;
    }
    #content #main {
        padding-right: 15px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    body.list .table-responsive {
        overflow-x: hidden;
    }

    body.error .error-description {
        max-width: 70%;
    }
}

/* -------------------------------------------------------------------------
   LARGE DESKTOPS
   ------------------------------------------------------------------------- */
@media (min-width: 1200px) {
   /* all the '100%' below are necessary for the sticky left sidebar */
    html {
      height: 100%;
    }
    body {
      height: 100%;
      min-height: 100%;
    }

    body #wrapper {
        height: 100%;
        min-height: 100%;
        margin-left: 0;
        width: 1240px;
    }

    /* Header
       ------------------------------------------------------------------------- */
    #header {
        margin-bottom: 0;
        height: 100%;
        top: 0;
        bottom: 0;
        overflow: hidden;
        position: fixed;
        width: 202px;
    }
    #header-contents {
        min-height: 100%;
        display: flex;
        display: -webkit-flex;
        flex-direction: column;
        -webkit-flex-direction: column;
    }
    #header-logo {
        float: none;
        margin: 0;
        height: auto;
        overflow: visible;
        text-overflow: inherit;
        padding: 0;
        white-space: inherit;
    }
    #header-logo a {
        display: block;
        float: none;
        min-height: 65px;
        font-size: 18px;
        padding: 20px 10px;
    }
    #header-logo a.medium {
        font-size: 24px;
    }
    #header-logo a.short {
        font-size: 28px;
    }
    #header-logo a img {
        max-height: 48px;
    }
    #header #header-nav {
        flex: 1;
        -webkit-flex: 1;
        height: 0 !important;
        margin: 0;
        overflow: hidden;
        overflow-y: auto !important;
        padding: 0;
        width: 222px;
    }
    #header #header-menu {
        display: block;
        padding: 0;
        list-style: none;
        width: 202px;
    }
    #header #header-menu:hover {
        overflow-y: auto;
    }
    #header #header-menu:active {
        overflow-y: hidden;
    }
    #header #header-menu li {
        border-bottom: 1px solid ";
        // line 1174
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_separator", array());
        echo ";
        display: block;
        float: none;
        margin: 0;
        padding: 0;
    }
    #header #header-menu li:last-child {
        border: none;
    }
    #header #header-menu li a {
        font-weight: 500;
        line-height: 1.4;
        padding: 12px 0 12px 10px;
    }
    #header #header-menu li a:hover {
        background: ";
        // line 1189
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_background", array());
        echo ";
        color: ";
        // line 1190
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
        text-decoration: none;
    }
    #header #header-menu li:hover a  {
        background: ";
        // line 1194
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_background", array());
        echo ";
        color: ";
        // line 1195
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    #header #header-menu li.active a,
    #header #header-menu li.active:hover a {
        background: ";
        // line 1199
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
        color: ";
        // line 1200
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    }
    #header #header-footer {
        background: ";
        // line 1203
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "header_background", array());
        echo ";
";
        // line 1204
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1205
            echo "        border-top: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
";
        }
        // line 1207
        echo "        font-size: 14px;
        padding-bottom: 1em;
        padding-top: 1em;
        padding-left: 10px;
        width: 100%;
        -moz-transition: box-shadow 0.3s ease-out;
        -webkit-transition: box-shadow 0.3s ease-out;
        transition: box-shadow 0.3s ease-out;
    }
    #header #header-footer.drop-shadow {
";
        // line 1217
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1218
            echo "        box-shadow: rgba(0, 0, 0, .8) 0 -1px 80px;
";
        } elseif (("light" ==         // line 1219
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1220
            echo "        box-shadow: rgba(0, 0, 0, .3) 0 -1px 80px;
";
        }
        // line 1222
        echo "    }
    #header #header-footer p {
        line-height: 1.5;
        margin: 0;
        text-align: left;
    }
    #header #header-footer p small {
        display: block;
        font-size: 11px;
    }
    #header #header-footer p small span {
        display: inline-block;
    }

    #content {
        margin-left: 200px;
        min-height: 100%;
        padding-left: 25px;
        padding-top: 20px;
        width: 83.3333%;
    }
    #content #main {
        min-height: 100%;
    }
    #content #sidebar {
    }

    body.error .error-description h1 {
        margin-top: .25em;
    }
}


/* -------------------------------------------------------------------------
ALL BUT LARGE DESKTOP
------------------------------------------------------------------------- */
@media (max-width: 1200px) {
    #header-logo {
        display: table;
        height: 50px;
        padding-top: 0;
        padding-bottom: 0;
    }
    #header-logo a {
        display: table-cell;
        vertical-align: middle;
        float: none;
    }
}

";
        
        $__internal_827b952cab507f35c82b9cae8591c53329c003abf4bbbc82bf38487259eb0351->leave($__internal_827b952cab507f35c82b9cae8591c53329c003abf4bbbc82bf38487259eb0351_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/admin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1555 => 1222,  1551 => 1220,  1549 => 1219,  1546 => 1218,  1544 => 1217,  1532 => 1207,  1526 => 1205,  1524 => 1204,  1520 => 1203,  1514 => 1200,  1510 => 1199,  1503 => 1195,  1499 => 1194,  1492 => 1190,  1488 => 1189,  1470 => 1174,  1340 => 1047,  1332 => 1041,  1326 => 1039,  1324 => 1038,  1319 => 1037,  1317 => 1036,  1247 => 969,  1241 => 966,  1237 => 965,  1225 => 956,  1215 => 948,  1210 => 946,  1205 => 943,  1203 => 942,  1198 => 941,  1196 => 940,  1190 => 937,  1186 => 936,  1179 => 932,  1173 => 929,  1161 => 920,  1153 => 915,  1149 => 914,  1142 => 910,  1135 => 906,  1131 => 905,  1122 => 899,  1114 => 894,  1107 => 890,  1098 => 884,  1094 => 883,  1073 => 865,  1066 => 861,  1000 => 798,  996 => 797,  985 => 789,  964 => 770,  958 => 768,  956 => 767,  951 => 766,  949 => 765,  852 => 671,  848 => 670,  842 => 667,  837 => 665,  833 => 664,  784 => 618,  776 => 613,  772 => 612,  748 => 591,  695 => 541,  676 => 525,  672 => 524,  665 => 520,  656 => 513,  650 => 511,  648 => 510,  643 => 509,  641 => 508,  637 => 507,  633 => 506,  613 => 489,  609 => 488,  580 => 462,  567 => 452,  547 => 435,  543 => 434,  521 => 415,  503 => 400,  497 => 397,  490 => 393,  481 => 387,  475 => 384,  466 => 378,  439 => 354,  432 => 350,  425 => 346,  418 => 342,  405 => 332,  401 => 331,  391 => 324,  370 => 306,  344 => 283,  332 => 274,  322 => 267,  311 => 259,  286 => 237,  280 => 234,  268 => 225,  264 => 224,  258 => 221,  254 => 220,  233 => 202,  224 => 196,  218 => 193,  208 => 186,  202 => 183,  189 => 173,  185 => 172,  179 => 169,  175 => 168,  154 => 150,  130 => 129,  84 => 86,  69 => 74,  61 => 69,  48 => 59,  44 => 58,  37 => 53,  35 => 52,  32 => 51,  30 => 47,  29 => 7,  22 => 2,);
    }
}
/* {% autoescape false %}*/
/* */
/* /*! ========================================================================*/
/*     EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License*/
/*     ======================================================================== *//* */
/* */
/* {% set color_schemes = {*/
/*     'dark': {*/
/*         danger: '#D44542',*/
/*         success: '#00994D',*/
/*         text: '#222222',*/
/*         link: '#1122CC',*/
/*         black: '#111111',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#222222',*/
/*         gray_dark: '#A59D95',*/
/*         gray: '#D5D2CA',*/
/*         gray_light: '#E5E5E5',*/
/*         gray_lighter: '#F5F5F5',*/
/*         page_background: '#F5F5F5',*/
/*         table_header: '#E5E5E5',*/
/*         table_border: '#CCC',*/
/*         table_row_border: '#F5F5F5',*/
/*         header_background: '#222222',*/
/*         menu_background: '#222222',*/
/*         header_text: '#F5F5F5',*/
/*         header_separator: 'rgba(255, 255, 255, .2)',*/
/*     },*/
/*     'light': {*/
/*         danger: '#D44542',*/
/*         success: '#00994D',*/
/*         text: '#444444',*/
/*         link: '#1122CC',*/
/*         black: '#333333',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#777',*/
/*         gray_dark: '#AAA',*/
/*         gray: '#CCC',*/
/*         gray_light: '#F5F5F5',*/
/*         gray_lighter: '#FAFAFA',*/
/*         page_background: '#FFFFFF',*/
/*         table_header: '#FAFAFA',*/
/*         table_border: '#FFFFFF',*/
/*         table_row_border: '#F5F5F5',*/
/*         header_background: '#FAFAFA',*/
/*         menu_background: '#EFEFEF',*/
/*         header_text: brand_color,*/
/*         header_separator: 'rgba(0, 0, 0, 0.05)',*/
/*     }*/
/* } %}*/
/* */
/* {% set colors = color_schemes[color_scheme] %}*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    BASIC STYLES*/
/*    ------------------------------------------------------------------------- *//* */
/* body {*/
/*     background: {{ colors.page_background }};*/
/*     color: {{ colors.text }};*/
/*     font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
/*     font-size: 14px;*/
/*     line-height: 1.5;*/
/*     margin: 0;*/
/* }*/
/* */
/* /* Links*/
/*    ------------------------------------------------------------------------- *//* */
/* a {*/
/*     color: {{ colors.link }};*/
/*     text-decoration: none;*/
/* }*/
/* a:hover {*/
/*     border: none;*/
/*     color: {{ brand_color }};*/
/*     text-decoration: underline;*/
/* }*/
/* a:active {*/
/*     outline: 0;*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* /* Headings*/
/*    ------------------------------------------------------------------------- *//* */
/* h1, h2, h3, h4, h5, h6 {*/
/*     color: {{ colors.text }};*/
/*     font-weight: 500;*/
/*     line-height: 1.2;*/
/*     margin-bottom: .3em;*/
/*     margin-top: 1em;*/
/* }*/
/* */
/* h1 + h2,*/
/* h1 + h3,*/
/* h1 + h4,*/
/* h2 + h3,*/
/* h3 + h4 {*/
/*     margin-top: 1em;*/
/* }*/
/* */
/* h1 { font-size: 21px; }*/
/* h2 { font-size: 18px; }*/
/* h3 { font-size: 16px; }*/
/* h4 { font-size: 16px; }*/
/* h5 { font-size: 14px; }*/
/* h6 { font-size: 14px; }*/
/* */
/* h1.title {*/
/*     font-weight: 400;*/
/*     margin-top: 0;*/
/* }*/
/* */
/* /* Text*/
/*    ------------------------------------------------------------------------- *//* */
/* p {*/
/*     margin: 0 0 1em 0;*/
/* }*/
/* */
/* p.lead {*/
/*     font-size: 18px;*/
/*     font-weight: normal;*/
/* }*/
/* */
/* i {*/
/*     font-style: normal;*/
/* }*/
/* */
/* .disabled {*/
/*     color: {{ colors.gray_dark }} !important;*/
/* }*/
/* */
/* /* Lists*/
/*    ------------------------------------------------------------------------- *//* */
/* ul, ol {*/
/*     margin: 1em 0 1em 1em;*/
/*     padding: 0;*/
/* }*/
/* ul ul, ul ol, ol ol, ol ul {*/
/*     margin-top: .5em;*/
/* }*/
/* li {*/
/*     margin-bottom: 1em;*/
/* }*/
/* */
/* /* Code*/
/*    ------------------------------------------------------------------------- *//* */
/* code {*/
/*     background: transparent;*/
/*     border-radius: 0;*/
/*     color: {{ colors.text }};*/
/*     font-family: Consolas, "Liberation Mono", "Droid Sans Mono", Monaco, Menlo, "Courier New", Courier, monospace;*/
/*     font-size-adjust: .5;*/
/*     font-size: 14px;*/
/*     padding: 0;*/
/* }*/
/* h1 code, h2 code, h3 code, h4 code, h5 code, h6 code {*/
/*     color: inherit;*/
/*     font: inherit !important;*/
/* }*/
/* */
/* */
/* /* Flash messages*/
/*    ------------------------------------------------------------------------- *//* */
/* div.flash {*/
/*     padding: .5em;*/
/* }*/
/* div.flash-success {*/
/*     background: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error strong {*/
/*     padding-right: .5em;*/
/* }*/
/* */
/* /* Labels*/
/*    ------------------------------------------------------------------------- *//* */
/* /* this prevents overriding default styles for labels (label-info, label-primary, etc.) *//* */
/* .label:not([class*=label-]) {*/
/*     background: {{ colors.gray_darker }};*/
/* }*/
/* .label {*/
/*     color: {{ colors.white }};*/
/*     display: inline-block;*/
/*     font-size: 11px;*/
/*     padding: 4px;*/
/*     text-transform: uppercase;*/
/* }*/
/* .label-success {*/
/*     background: {{ colors.success }};*/
/* }*/
/* .label-danger {*/
/*     background: {{ colors.danger }};*/
/* }*/
/* .label-empty {*/
/*     background: transparent;*/
/*     border: 2px dotted;*/
/*     border-radius: 4px;*/
/*     color: {{ colors.text }};*/
/* }*/
/* */
/* /* this makes boolean labels to be of the same width for most languages *//* */
/* .boolean .label,*/
/* .toggle .label {*/
/*     min-width: 33px;*/
/* }*/
/* */
/* /* Switches / toggles*/
/*    ------------------------------------------------------------------------- *//* */
/* .toggle .btn {*/
/*     border-radius: 3px;*/
/*     font-size: 11px;*/
/*     font-weight: bold;*/
/*     text-transform: uppercase;*/
/* }*/
/* .toggle .toggle.btn-success {*/
/*     border-color: {{ colors.success }};*/
/*     background: {{ colors.success }};*/
/* }*/
/* .toggle .toggle.btn-danger {*/
/*     border-color: {{ colors.danger }};*/
/*     background: {{ colors.danger }};*/
/* }*/
/* .toggle .btn-success .toggle-handle {*/
/*     box-shadow: -2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* .toggle .btn-danger .toggle-handle {*/
/*     box-shadow: 2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* .toggle .toggle .toggle-on {*/
/*     background: {{ colors.success }};*/
/* }*/
/* .toggle .toggle .toggle-off {*/
/*     background: {{ colors.danger }};*/
/* }*/
/* .toggle .toggle-group label {*/
/*     padding-top: 2px;*/
/* }*/
/* .toggle .toggle.btn-xs {*/
/*     width: 44px;*/
/* }*/
/* .toggle .toggle.btn-xs .toggle-handle {*/
/*     height: 18px;*/
/*     margin-top: 1px;*/
/*     margin-right: 5px;*/
/* }*/
/* .toggle .toggle-on.btn-xs,*/
/* .toggle .toggle-off.btn-xs {*/
/*     padding-left: 4px;*/
/*     text-align: center;*/
/* }*/
/* */
/* /* Badges*/
/*    ------------------------------------------------------------------------- *//* */
/* span.badge {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* */
/* /* Buttons*/
/*    ------------------------------------------------------------------------- *//* */
/* a.btn:not([class*=btn-]),*/
/* input.btn:not([class*=btn-]),*/
/* button.btn:not([class*=btn-]) {*/
/*     background: {{ brand_color }};*/
/* }*/
/* a.btn,*/
/* input.btn,*/
/* button.btn {*/
/*     border: none;*/
/*     border-radius: 4px;*/
/*     color: {{ colors.white }};*/
/*     line-height: 1.2;*/
/*     outline: none;*/
/*     padding: .7em 1em;*/
/*     text-align: center;*/
/* }*/
/* a.btn:hover,*/
/* input.btn:hover,*/
/* button.btn:hover {*/
/*     color: {{ colors.white }};*/
/*     opacity: .9;*/
/* }*/
/* */
/* .btn + .btn {*/
/*     margin-left: 5px;*/
/* }*/
/* */
/* a.btn i,*/
/* input.btn i,*/
/* button.btn i {*/
/*     font-size: 18px;*/
/*     padding-right: 6px;*/
/* }*/
/* */
/* /* .bnt-secondary is for 'buttons' displayed as text links *//* */
/* a.btn-secondary,*/
/* input.btn-secondary,*/
/* button.btn-secondary,*/
/* a.btn-secondary:hover,*/
/* input.btn-secondary:hover,*/
/* button.btn-secondary:hover {*/
/*     background: transparent;*/
/*     color: {{ brand_color }};*/
/*     text-decoration: underline;*/
/* }*/
/* a.btn-secondary:hover,*/
/* input.btn-secondary:hover,*/
/* button.btn-secondary:hover {*/
/*     text-decoration: none;*/
/* }*/
/* a.btn-secondary:active,*/
/* input.btn-secondary:active,*/
/* button.btn-secondary:active {*/
/*     box-shadow: none;*/
/*     -webkit-box-shadow: none;*/
/* }*/
/* */
/* a.btn-danger,*/
/* input.btn-danger,*/
/* button.btn-danger {*/
/*     background: {{ colors.danger }};*/
/* }*/
/* */
/* /* Forms*/
/*    ------------------------------------------------------------------------- *//* */
/* .form-control,*/
/* .form-control:focus {*/
/*     color: {{ colors.text }};*/
/*     border: 1px solid {{ colors.gray_dark }};*/
/*     -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);*/
/*     box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);*/
/*     -webkit-transition: none;*/
/*     -o-transition: none;*/
/*     transition: none;*/
/* }*/
/* */
/* .help-block,*/
/* .has-error .help-block {*/
/*     color: {{ colors.gray_dark }};*/
/* }*/
/* */
/* .has-error .control-label {*/
/*     color: {{ colors.danger }};*/
/* }*/
/* .has-error .form-control,*/
/* .has-error .form-control:focus {*/
/*     border-color: {{ colors.danger }};*/
/*     box-shadow: none;*/
/* }*/
/* .has-error .error-block {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     padding-top: 5px;*/
/* }*/
/* .has-error .error-block .label-danger {*/
/*     margin-right: 3px;*/
/* }*/
/* .has-error .error-block ul {*/
/*     margin: .5em 0 .5em 1.5em;*/
/* }*/
/* .has-error .error-block ul li {*/
/*     margin-bottom: .5em;*/
/* }*/
/* */
/* .nullable-control {*/
/*     padding-top: 5px;*/
/* }*/
/* */
/* /* Field: collection*/
/*    ------------------------------------------------------------------------- *//* */
/* .field-collection .collection-empty {*/
/*     margin: .5em 0;*/
/* }*/
/* .field-collection .collection-empty .label-empty {*/
/*     color: {{ colors.gray_dark }};*/
/* }*/
/* */
/* /* Select2 widget*/
/*    ------------------------------------------------------------------------- *//* */
/* .select2-container--bootstrap .select2-selection {*/
/*     border: 1px solid {{ colors.gray_dark }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {*/
/*     color: {{ colors.text }};*/
/* }*/
/* .select2-container--bootstrap .select2-results__option {*/
/*     margin-bottom: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option[aria-selected=true] {*/
/*     background-color: {{ colors.gray_light }};*/
/*     font-weight: bold;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* .select2-container--bootstrap .select2-search--dropdown .select2-search__field {*/
/*     border: 1px solid {{ colors.gray_dark }};*/
/*     margin: 5px 1%;*/
/*     width: 96%;*/
/* }*/
/* */
/* /* Modal windows*/
/*    ------------------------------------------------------------------------- *//* */
/* .modal-dialog .modal-content {*/
/*     border-radius: 0;*/
/* }*/
/* .modal-dialog .modal-content .modal-body h4 {*/
/*     font-size: 21px;*/
/*     margin: .5em 0;*/
/* }*/
/* .modal-dialog .modal-footer {*/
/*     background: {{ colors.gray_lighter }};*/
/*     margin-top: 1.5em;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    LAYOUT*/
/*    ------------------------------------------------------------------------- *//* */
/* */
/* /* Wrapper*/
/*    ------------------------------------------------------------------------- *//* */
/* #wrapper {*/
/*     padding: 60px 0 0;*/
/* }*/
/* */
/* /* Header*/
/*    ------------------------------------------------------------------------- *//* */
/* /* Responsive menu inspired by http://www.joesnellpdx.com/toggle-navigation-no-javascript/ *//* */
/* */
/* #header {*/
/*     background: {{ colors.header_background }};*/
/*     border-color: {{ colors.header_background }};*/
/*     box-shadow: 1px 0 2px #DDD;*/
/*     position: fixed;*/
/*     top: 0;*/
/*     width: 100%;*/
/*     z-index: 1000;*/
/* }*/
/* #header .navbar-toggle {*/
/*     border: 0;*/
/*     padding: 5px 0 5px 10px;*/
/* }*/
/* #header .navbar-toggle:hover,*/
/* #header .navbar-toggle:active,*/
/* #header .navbar-toggle:focus {*/
/*     background-color: transparent;*/
/* }*/
/* #header .navbar-toggle i {*/
/*     color: {{ colors.header_text }};*/
/*     font-size: 21px;*/
/*     text-align: right;*/
/* }*/
/* #header-logo {*/
/*     overflow: hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/* }*/
/* #header-logo a {*/
/*     color: {{ brand_color }};*/
/*     display: block;*/
/*     float: left;*/
/*     font-size: 16px;*/
/*     font-weight: 500;*/
/*     height: auto;*/
/*     margin: 0;*/
/*     overflow: hidden;*/
/*     position: relative;*/
/*     text-decoration: none;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/*     z-index: 1002;*/
/* }*/
/* */
/* #header-logo a img {*/
/*     margin-top: -2px;*/
/*     max-height: 26px;*/
/*     max-width: 94%;*/
/* }*/
/* #header-logo:active {*/
/*     position: static;*/
/* }*/
/* */
/* #header-menu,*/
/* .flexMenu-popup {*/
/*     background: {{ colors.menu_background }};*/
/*     box-shadow: 0 1px 2px {{ colors.gray_darker }};*/
/*     margin: 0 -15px;*/
/* }*/
/* #header-menu li,*/
/* .flexMenu-popup li {*/
/*     display: block;*/
/*     margin-bottom: 0;*/
/*     text-align: left;*/
/* }*/
/* .flexMenu-popup {*/
/*     position: absolute;*/
/*     right: 0;*/
/* }*/
/* .flexMenu-popup li a {*/
/*     white-space: pre;*/
/* }*/
/* #header-menu li a {*/
/*     border-top: 1px solid {{ colors.header_separator }};*/
/*     color: {{ colors.header_text }};*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.gray_lighter }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.text }};*/
/* {% endif %}*/
/*     display: block;*/
/*     font-size: 16px;*/
/*     text-decoration: none;*/
/*     padding: 1em;*/
/* }*/
/* #header-menu li:hover,*/
/* #header-menu li.active {*/
/*   background: {{ brand_color }};*/
/* }*/
/* #header-menu li:hover a,*/
/* #header-menu li.active a {*/
/*   background: {{ brand_color }};*/
/*   color: {{ colors.white }};*/
/* }*/
/* #header #header-footer {*/
/*     display: none;*/
/* }*/
/* */
/* /* Footer*/
/*    ------------------------------------------------------------------------- *//* */
/* #footer {*/
/*     border-top: 1px solid rgba(0, 0, 0, 0.05);*/
/*     clear: both;*/
/*     margin-top: 2em;*/
/*     padding-bottom: 2em;*/
/*     padding-top: 1em;*/
/* }*/
/* #footer {*/
/*     color: {{ colors.gray_dark }};*/
/*     font-size: 12px;*/
/* }*/
/* */
/* /* Main body*/
/*    ------------------------------------------------------------------------- *//* */
/* #content #main {*/
/*     margin-bottom: 2em;*/
/* }*/
/* */
/* /* Sidebar*/
/*    ------------------------------------------------------------------------- *//* */
/* #sidebar {*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    COMMON ADMIN PAGES*/
/*    ------------------------------------------------------------------------- *//* */
/* body.easyadmin h1.title {*/
/*     margin-bottom: 20px;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    LIST PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.list h1.title {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.list #content-header {*/
/*     margin-bottom: 10px;*/
/* }*/
/* */
/* body.list #content-header #content-search,*/
/* body.list #content-header #content-actions {*/
/*     float: right;*/
/* }*/
/* body.list #content-header #content-search {*/
/*     float: left;*/
/*     padding-left: 0;*/
/* }*/
/* body.list #content-header #content-search .input-group {*/
/*     position: relative;*/
/*     width: 100%;*/
/* }*/
/* body.list #content-header #content-search #content-search-query {*/
/*     border-radius: 0;*/
/*     padding-right: 28px;*/
/* }*/
/* body.list #content-header #content-search .input-group:after {*/
/*   content: "\f002";*/
/*   color: {{ colors.gray_light }};*/
/*   font-family: "FontAwesome";*/
/*   font-size: 16px;*/
/*   position: absolute;*/
/*   margin-left: -25px;*/
/*   margin-top: 5px;*/
/*   z-index: 10;*/
/* }*/
/* */
/* body.list table {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table thead {*/
/*     display: none;*/
/* }*/
/* body.list .table tbody {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table tbody tr {*/
/*     background: {{ colors.white }};*/
/*     border: 1px solid {{ colors.gray }};*/
/*     display: block;*/
/*     margin-bottom: 1em;*/
/* }*/
/* body.list table tbody td {*/
/*     border-bottom: 1px solid {{ colors.table_row_border }};*/
/*     border-top: 0;*/
/*     display: block;*/
/*     text-align: right;*/
/* }*/
/* body.list table tbody td:last-child {*/
/*     border-bottom: 0;*/
/* }*/
/* table td:before {*/
/*     content: attr(data-label);*/
/*     float: left;*/
/*     font-weight: bold;*/
/* }*/
/* table td:after {*/
/*     clear: both;*/
/*     content: "";*/
/*     display: block;*/
/* }*/
/* body.list table tbody td.actions a {*/
/*     margin-left: 10px;*/
/* }*/
/* body.list table tbody td.image img {*/
/*     max-height: 50px;*/
/*     max-width: 150px;*/
/* }*/
/* */
/* body.list .table tbody span.highlight {*/
/*     background: #FFFF99;*/
/*     border-radius: 2px;*/
/*     padding: 1px;*/
/* }*/
/* body.list .table tbody .no-results span.highlight,*/
/* body.list .table tbody .actions span.highlight {*/
/*     background: 0;*/
/*     border-radius: 0;*/
/* }*/
/* */
/* body.list .pagination {*/
/*     float: right;*/
/*     margin: 0;*/
/* }*/
/* body.list .pagination > .disabled > span {*/
/*     background: transparent;*/
/*     border: 1px solid transparent;*/
/* }*/
/* body.list .pagination > li > a {*/
/*     background: {{ colors.white }};*/
/*     border-color: {{ colors.gray }};*/
/*     border-radius: 0;*/
/*     color: {{ colors.text }};*/
/* }*/
/* body.list .pagination > li > a:hover {*/
/*     background: {{ brand_color }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* .pagination > li > a,*/
/* .pagination > li > span {*/
/*     padding: 6px 8px;*/
/* }*/
/* body.list .pagination > li i {*/
/*     padding: 0 3px;*/
/* }*/
/* /* this hack is needed to avoid the last pagination page from showing wrong*/
/*    borders for the second pagination element (we need to put this element above*/
/*    the third element) *//* */
/* body.list .pagination.last-page li:nth-child(2) {*/
/*     position: relative;*/
/*     z-index: 1;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    FORM PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* form label.control-label.required:after {*/
/*     content: "\00a0*";*/
/*     color: red;*/
/*     position: absolute;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    NEW PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.new form textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.new form .field-date select + select {*/
/*     margin-top: .5em;*/
/* }*/
/* body.new form .field-collection-action {*/
/*     margin-top: -15px;*/
/* }*/
/* body.new form .field-collection-item-action {*/
/*     margin-bottom: 0;*/
/*     margin-top: 5px;*/
/* }*/
/* */
/* body.new form #form-actions-row button,*/
/* body.new form #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.new form.theme-bootstrap_3_horizontal_layout #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* @media (min-width: 768px) {*/
/*     body.new form.theme-bootstrap_3_horizontal_layout #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    EDIT PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.edit form textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.edit form .field-date select + select {*/
/*     margin-top: .5em;*/
/* }*/
/* body.edit form .field-collection-action {*/
/*     margin-top: -15px;*/
/* }*/
/* body.edit form .field-collection-item-action {*/
/*     margin-bottom: 0;*/
/*     margin-top: 5px;*/
/* }*/
/* */
/* body.edit form #form-actions-row button,*/
/* body.edit form #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.edit form.theme-bootstrap_3_horizontal_layout #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* @media (min-width: 768px) {*/
/*     body.edit form.theme-bootstrap_3_horizontal_layout #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    SHOW PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.show .form-control {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/*     border: 0;*/
/*     border-radius: 0;*/
/*     box-shadow: none;*/
/*     height: auto;*/
/* }*/
/* body.show .form-control.text {*/
/*     min-height: 34px;*/
/*     max-height: 250px;*/
/*     overflow-y: auto;*/
/* }*/
/* body.show .form-control.image {*/
/*     max-height: 300px;*/
/*     max-width: 100%;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    ERROR PAGES*/
/*    ------------------------------------------------------------------------- *//* */
/* body.error .error-description {*/
/*     background: {{ colors.white }};*/
/*     height: auto;*/
/*     margin: 2em auto 2em;*/
/*     max-width: 90%;*/
/*     min-height: 200px;*/
/*     padding: 0;*/
/* }*/
/* body.error .error-description h1 {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     margin-top: 0;*/
/*     padding: 15px;*/
/*     text-transform: uppercase;*/
/* }*/
/* body.error .error-message {*/
/*     padding: 15px;*/
/* }*/
/* body.error .error-message p.lead {*/
/*     margin-bottom: 0;*/
/*     padding-bottom: .5em;*/
/* }*/
/* */
/* /* =========================================================================*/
/*    RESPONSIVE*/
/*    ========================================================================= *//* */
/* */
/* /* -------------------------------------------------------------------------*/
/*    VERTICAL TABLETS and LANDSCAPE SMARTPHONES*/
/*    ------------------------------------------------------------------------- *//* */
/* @media (min-width: 768px) {*/
/* */
/*     h1, h2, h3, h4, h5, h6 {*/
/*         margin-top: 2em;*/
/*     }*/
/* */
/*     h1 { font-size: 21px; }*/
/*     h2 { font-size: 18px; }*/
/*     h3 { font-size: 16px; }*/
/*     h4 { font-size: 16px; }*/
/*     h5 { font-size: 14px; }*/
/*     h6 { font-size: 14px; }*/
/* */
/*     h1.title {*/
/*         font-size: 21px;*/
/*     }*/
/* */
/*     ul, ol {*/
/*         margin-left: 2em;*/
/*     }*/
/* */
/*     body #wrapper {*/
/*         padding: 70px 0 0;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     #header-menu {*/
/*         background: transparent;*/
/*         box-shadow: none;*/
/*         margin-left: 0;*/
/*         float: none;*/
/*     }*/
/*     #header-menu li a {*/
/*         border-top: 0;*/
/*         padding: 15px 16px 14px;*/
/*     }*/
/*     #header-menu li a:hover,*/
/*     #header #header-menu li:hover,*/
/*     #header #header-menu li.active,*/
/*     #header #header-menu li.active a,*/
/*     #header #header-menu ul.flexMenu-popup li a:hover,*/
/*     #header #header-menu ul.flexMenu-popup li.active a{*/
/*         background: transparent;*/
/*         color: {{ brand_color }};*/
/*     }*/
/*     #header #header-menu ul.flexMenu-popup li a{*/
/*         background: transparent;*/
/*         color: {{ colors.header_text }};*/
/*     }*/
/* */
/*     #header-logo a.medium {*/
/*         font-size: 18px;*/
/*     }*/
/*     #header-logo a.short {*/
/*         font-size: 21px;*/
/*     }*/
/* */
/*     body.list h1.title {*/
/*         padding-top: 3px;*/
/*     }*/
/*     body.list #content-header #content-search {*/
/*         float: right;*/
/*     }*/
/* */
/*     body.list table {*/
/*         background: {{ colors.white }};*/
/*         border: 1px solid {{ colors.table_border }};*/
/*     }*/
/*     body.list table thead {*/
/*         display: table-header-group;*/
/*     }*/
/*     body.list table thead th {*/
/*         background: {{ colors.table_header }};*/
/*         padding: 0;*/
/*     }*/
/*     body.list table thead th i {*/
/*         color: {{ colors.gray_dark }};*/
/*         padding: 0 3px;*/
/*     }*/
/*     body.list table thead th a,*/
/*     body.list table thead th span {*/
/*         color: {{ colors.text }};*/
/*         display: block;*/
/*         padding: 10px 6px;*/
/*         white-space: nowrap;*/
/*     }*/
/*     body.list table thead th a:hover {*/
/*         background: {{ colors.gray_lighter }};*/
/*         color: {{ brand_color }};*/
/*         text-decoration: none;*/
/*     }*/
/*     body.list table thead th a:hover i {*/
/*         color: {{ brand_color }};*/
/*     }*/
/*     body.list table thead th.sorted,*/
/*     body.list table thead th.sorted a {*/
/*         background: {{ brand_color }};*/
/*         color: {{ colors.white }};*/
/*         text-decoration: none;*/
/*     }*/
/*     body.list table thead th.sorted a:hover i,*/
/*     body.list table thead th.sorted i {*/
/*         color: {{ colors.white }};*/
/*     }*/
/*     body.list table thead th.boolean,*/
/*     body.list table tbody td.boolean,*/
/*     body.list table thead th.toggle,*/
/*     body.list table tbody td.toggle {*/
/*         text-align: center;*/
/*     }*/
/*     body.list .table thead tr th {*/
/*         border-bottom: 2px solid {{ colors.gray }};*/
/*     }*/
/*     body.list .table thead tr th.sorted {*/
/*         border-bottom: 2px outset {{ brand_color }};*/
/*     }*/
/*     /* these styles are needed to fix some visual glitches when the sort field is the first column *//* */
/*     body.list .table thead tr th:first-child.sorted {*/
/*         border-left: 1px solid {{ brand_color }};*/
/*         border-top: 1px solid {{ brand_color }};*/
/*     }*/
/*     body.list .table tbody {*/
/* {% if 'dark' == color_scheme %}*/
/*         border-bottom: 2px solid {{ brand_color }};*/
/* {% elseif 'light' == color_scheme %}*/
/*         /* this '1px double' style is correct because 'double' gives the border more priority*/
/*            and allows us to override the table border bottom (otherwise this border won't*/
/*             be shown) *//* */
/*         border-bottom: 1px double {{ colors.gray }};*/
/* {% endif %}*/
/*     }*/
/*     body.list table tbody tr {*/
/*         border: 0;*/
/*         display: table-row;*/
/*         margin-bottom: 0;*/
/*     }*/
/*     body.list table tbody td {*/
/*         border-bottom: 0;*/
/*         border-top: 1px solid {{ colors.table_row_border }};*/
/*         display: table-cell;*/
/*         text-align: left;*/
/*     }*/
/*     table td:before {*/
/*         content: none;*/
/*         float: none;*/
/*     }*/
/*     body.list table tbody td.sorted {*/
/*         background: {{ colors.gray_lighter }};*/
/*         border-color: {{ colors.table_row_border }};*/
/*     }*/
/*     body.list .table tbody tr:hover td {*/
/*         background: {{ colors.gray_lighter }};*/
/*     }*/
/*     body.list table tbody td.actions a {*/
/*         margin-left: 0;*/
/*         margin-right: 10px;*/
/*     }*/
/* */
/*     body.new form .field-date select + select,*/
/*     body.edit form .field-date select + select {*/
/*         margin-left: .5em;*/
/*         margin-top: 0;*/
/*     }*/
/* */
/*     body.error .error-description {*/
/*         max-width: 80%;*/
/*     }*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    NORMAL DESKTOPS and LANDSCAPE TABLETS*/
/*    ------------------------------------------------------------------------- *//* */
/* @media (min-width: 1024px) {*/
/*     body #wrapper {*/
/*         padding: 0;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     #header {*/
/*         height: 50px;*/
/*         margin-bottom: 2em;*/
/*         overflow: hidden;*/
/*         position: static;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     #header-logo a img {*/
/*         max-height: 40px;*/
/*     }*/
/* */
/*     #header-nav {*/
/*         position: static;*/
/*     }*/
/*     #header-menu {*/
/*         background: transparent;*/
/*         box-shadow: none;*/
/*         line-height: 50px;*/
/*         margin: 0;*/
/*         padding: 0 15px;*/
/*         position: static;*/
/*         overflow: hidden;*/
/*     }*/
/* */
/*     #header-logo a.medium {*/
/*         font-size: 21px;*/
/*     }*/
/*     #header-logo a.short {*/
/*         font-size: 24px;*/
/*     }*/
/* */
/*     #header-menu li {*/
/*         background: transparent;*/
/*         float: left;*/
/*         display: inline-block;*/
/*         line-height: 40px;*/
/*     }*/
/*     #header-menu li a {*/
/*         border: 0;*/
/* {% if 'dark' == color_scheme %}*/
/*         color: {{ colors.gray_lighter }};*/
/* {% elseif 'light' == color_scheme %}*/
/*         color: {{ colors.text }};*/
/* {% endif %}*/
/*         display: block;*/
/*         line-height: 40px;*/
/*         padding: 5px 1.5em 5px 0;*/
/*     }*/
/* */
/*     #header #header-footer {*/
/*         color: {{ colors.gray_dark }};*/
/*         display: block;*/
/*         font-size: 14px;*/
/*     }*/
/*     #header #header-footer p {*/
/*         margin: 16px 0 16px;*/
/*         text-align: right;*/
/*     }*/
/*     #header #header-footer p small span {*/
/*         display: none;*/
/*     }*/
/*     #header #header-footer p small i {*/
/*         font-size: 14px;*/
/*         padding-right: 3px;*/
/*     }*/
/* */
/*     #content {*/
/*         border: 0;*/
/*         box-shadow: none;*/
/*         margin-left: 0;*/
/*         padding: 0 15px;*/
/*         width: 100%;*/
/*     }*/
/*     #content #main {*/
/*         padding-right: 15px;*/
/*     }*/
/* */
/*     .pagination > li > a,*/
/*     .pagination > li > span {*/
/*         padding: 6px 12px;*/
/*     }*/
/* */
/*     body.list .table-responsive {*/
/*         overflow-x: hidden;*/
/*     }*/
/* */
/*     body.error .error-description {*/
/*         max-width: 70%;*/
/*     }*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    LARGE DESKTOPS*/
/*    ------------------------------------------------------------------------- *//* */
/* @media (min-width: 1200px) {*/
/*    /* all the '100%' below are necessary for the sticky left sidebar *//* */
/*     html {*/
/*       height: 100%;*/
/*     }*/
/*     body {*/
/*       height: 100%;*/
/*       min-height: 100%;*/
/*     }*/
/* */
/*     body #wrapper {*/
/*         height: 100%;*/
/*         min-height: 100%;*/
/*         margin-left: 0;*/
/*         width: 1240px;*/
/*     }*/
/* */
/*     /* Header*/
/*        ------------------------------------------------------------------------- *//* */
/*     #header {*/
/*         margin-bottom: 0;*/
/*         height: 100%;*/
/*         top: 0;*/
/*         bottom: 0;*/
/*         overflow: hidden;*/
/*         position: fixed;*/
/*         width: 202px;*/
/*     }*/
/*     #header-contents {*/
/*         min-height: 100%;*/
/*         display: flex;*/
/*         display: -webkit-flex;*/
/*         flex-direction: column;*/
/*         -webkit-flex-direction: column;*/
/*     }*/
/*     #header-logo {*/
/*         float: none;*/
/*         margin: 0;*/
/*         height: auto;*/
/*         overflow: visible;*/
/*         text-overflow: inherit;*/
/*         padding: 0;*/
/*         white-space: inherit;*/
/*     }*/
/*     #header-logo a {*/
/*         display: block;*/
/*         float: none;*/
/*         min-height: 65px;*/
/*         font-size: 18px;*/
/*         padding: 20px 10px;*/
/*     }*/
/*     #header-logo a.medium {*/
/*         font-size: 24px;*/
/*     }*/
/*     #header-logo a.short {*/
/*         font-size: 28px;*/
/*     }*/
/*     #header-logo a img {*/
/*         max-height: 48px;*/
/*     }*/
/*     #header #header-nav {*/
/*         flex: 1;*/
/*         -webkit-flex: 1;*/
/*         height: 0 !important;*/
/*         margin: 0;*/
/*         overflow: hidden;*/
/*         overflow-y: auto !important;*/
/*         padding: 0;*/
/*         width: 222px;*/
/*     }*/
/*     #header #header-menu {*/
/*         display: block;*/
/*         padding: 0;*/
/*         list-style: none;*/
/*         width: 202px;*/
/*     }*/
/*     #header #header-menu:hover {*/
/*         overflow-y: auto;*/
/*     }*/
/*     #header #header-menu:active {*/
/*         overflow-y: hidden;*/
/*     }*/
/*     #header #header-menu li {*/
/*         border-bottom: 1px solid {{ colors.header_separator }};*/
/*         display: block;*/
/*         float: none;*/
/*         margin: 0;*/
/*         padding: 0;*/
/*     }*/
/*     #header #header-menu li:last-child {*/
/*         border: none;*/
/*     }*/
/*     #header #header-menu li a {*/
/*         font-weight: 500;*/
/*         line-height: 1.4;*/
/*         padding: 12px 0 12px 10px;*/
/*     }*/
/*     #header #header-menu li a:hover {*/
/*         background: {{ colors.header_background }};*/
/*         color: {{ brand_color }};*/
/*         text-decoration: none;*/
/*     }*/
/*     #header #header-menu li:hover a  {*/
/*         background: {{ colors.header_background }};*/
/*         color: {{ brand_color }};*/
/*     }*/
/*     #header #header-menu li.active a,*/
/*     #header #header-menu li.active:hover a {*/
/*         background: {{ brand_color }};*/
/*         color: {{ colors.white }};*/
/*     }*/
/*     #header #header-footer {*/
/*         background: {{ colors.header_background }};*/
/* {% if 'dark' == color_scheme %}*/
/*         border-top: 1px solid {{ colors.gray_dark }};*/
/* {% endif %}*/
/*         font-size: 14px;*/
/*         padding-bottom: 1em;*/
/*         padding-top: 1em;*/
/*         padding-left: 10px;*/
/*         width: 100%;*/
/*         -moz-transition: box-shadow 0.3s ease-out;*/
/*         -webkit-transition: box-shadow 0.3s ease-out;*/
/*         transition: box-shadow 0.3s ease-out;*/
/*     }*/
/*     #header #header-footer.drop-shadow {*/
/* {% if 'dark' == color_scheme %}*/
/*         box-shadow: rgba(0, 0, 0, .8) 0 -1px 80px;*/
/* {% elseif 'light' == color_scheme %}*/
/*         box-shadow: rgba(0, 0, 0, .3) 0 -1px 80px;*/
/* {% endif %}*/
/*     }*/
/*     #header #header-footer p {*/
/*         line-height: 1.5;*/
/*         margin: 0;*/
/*         text-align: left;*/
/*     }*/
/*     #header #header-footer p small {*/
/*         display: block;*/
/*         font-size: 11px;*/
/*     }*/
/*     #header #header-footer p small span {*/
/*         display: inline-block;*/
/*     }*/
/* */
/*     #content {*/
/*         margin-left: 200px;*/
/*         min-height: 100%;*/
/*         padding-left: 25px;*/
/*         padding-top: 20px;*/
/*         width: 83.3333%;*/
/*     }*/
/*     #content #main {*/
/*         min-height: 100%;*/
/*     }*/
/*     #content #sidebar {*/
/*     }*/
/* */
/*     body.error .error-description h1 {*/
/*         margin-top: .25em;*/
/*     }*/
/* }*/
/* */
/* */
/* /* -------------------------------------------------------------------------*/
/* ALL BUT LARGE DESKTOP*/
/* ------------------------------------------------------------------------- *//* */
/* @media (max-width: 1200px) {*/
/*     #header-logo {*/
/*         display: table;*/
/*         height: 50px;*/
/*         padding-top: 0;*/
/*         padding-bottom: 0;*/
/*     }*/
/*     #header-logo a {*/
/*         display: table-cell;*/
/*         vertical-align: middle;*/
/*         float: none;*/
/*     }*/
/* }*/
/* */
/* {% endautoescape %}*/
/* */
