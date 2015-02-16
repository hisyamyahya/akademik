<?php

/* buka.twig */
class __TwigTemplate_ac40c72f5a606f35ab35ac572e05512ba8c85bbc3af52c9797a88ad812546f35 extends Twig_Template
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
        // line 1
        echo doctype("html5");
        echo "
<html>
<head>
\t<meta charset=\"utf-8\" />
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"login page\" />
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    \t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    \t";
        // line 10
        echo link_tag("themes/css/bootstrap.min.css");
        echo "
    \t";
        // line 11
        echo link_tag("themes/css/font-awesome.min.css");
        echo "
    \t";
        // line 12
        echo link_tag("themes/css/beyond.min.css");
        echo "
    \t";
        // line 13
        echo link_tag("themes/css/animate.min.css");
        echo "
</head>
<body>
\t<div class=\"navbar\">
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"navbar-header pull-left\">
\t\t             \t<a href=\"form-inputs.html#\" class=\"navbar-brand\">
\t\t             \t\t<small>
\t\t             \t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("assets/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t             \t\t</small>
\t\t             \t</a> 
\t\t             </div>

\t\t</div>
\t</div>
\t<div class=\"login-container animated fadeInDown\">
        \t\t<div class=\"loginbox bg-white\">
            \t\t\t<div class=\"loginbox-title\">LOGIN</div>
            \t\t\t";
        // line 31
        echo form_open("", "", "class=\"from-horizontal\" role=\"form\"");
        echo "
\t            \t\t\t<div class=\"loginbox-textbox\">
\t            \t\t\t\t<div class=\"form-group\">
\t            \t\t\t\t\t<span class=\"input-icon icon-left\">
\t            \t\t\t\t\t\t<i class=\"fa fa-user blue\"></i>
\t                \t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"USERNAME OR NIM OR NISD\" />
\t                \t\t\t\t</span>
\t                \t\t\t</div>
\t            \t\t\t</div>
\t\t\t            \t<div class=\"loginbox-textbox\">
\t\t\t                \t<div class=\"form-group\">
\t            \t\t\t\t\t<span class=\"input-icon icon-left\">
\t            \t\t\t\t\t\t<i class=\"fa fa-lock blue\"></i>
\t                \t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"PASSWORD\" />
\t                \t\t\t\t</span>
\t                \t\t\t</div>
\t\t\t            \t</div>
\t\t\t            \t<div class=\"loginbox-submit\">
\t\t\t                \t<input type=\"button\" class=\"btn btn-primary btn-block\" value=\"Login\">
\t\t\t            \t</div>
\t\t\t";
        // line 51
        echo form_close();
        echo "
\t\t</div>
\t\t<div class=\"logobox\">ASAS</div>
    \t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "buka.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 51,  70 => 31,  57 => 21,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  26 => 5,  19 => 1,);
    }
}
