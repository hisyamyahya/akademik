<?php

/* login.twig */
class __TwigTemplate_88ef334fe5c876024ea74969f7dc6f4f3572dab3d52e123f117f00b8f7797669 extends Twig_Template
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
\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "\" />
\t<meta name=\"keyword\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\" />
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    \t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    \t<link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url("assets/logo"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
        echo "\" type=\"image/x-icon\">
    \t";
        // line 12
        echo link_tag("themes/css/bootstrap.min.css");
        echo "
    \t";
        // line 13
        echo link_tag("themes/css/font-awesome.min.css");
        echo "
    \t";
        // line 14
        echo link_tag("themes/css/beyond.min.css");
        echo "
    \t";
        // line 15
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
        // line 23
        echo twig_escape_filter($this->env, base_url("assets/logo"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
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
        // line 33
        echo form_open("", "id=\"login\" class=\"from-horizontal\" role=\"form\"");
        echo "
\t            \t\t\t<div class=\"loginbox-textbox\">
\t            \t\t\t\t<div class=\"form-group\">
\t            \t\t\t\t\t<span class=\"input-icon icon-left\">
\t            \t\t\t\t\t\t<i class=\"fa fa-user blue\"></i>
\t                \t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\" placeholder=\"USERNAME OR NIM OR NISD\" />
\t                \t\t\t\t</span>
\t                \t\t\t</div>
\t            \t\t\t</div>
\t\t\t            \t<div class=\"loginbox-textbox\">
\t\t\t                \t<div class=\"form-group\">
\t            \t\t\t\t\t<span class=\"input-icon icon-left\">
\t            \t\t\t\t\t\t<i class=\"fa fa-lock blue\"></i>
\t                \t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"PASSWORD\" />
\t                \t\t\t\t</span>
\t                \t\t\t</div>
\t\t\t            \t</div>
\t\t\t            \t<div class=\"loginbox-submit\">
\t\t\t                \t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Login\">
\t\t\t            \t</div>
\t\t\t";
        // line 53
        echo form_close();
        echo "
\t\t</div>
\t\t<div class=\"logobox\">ASAS</div>
    \t</div>
    \t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, base_url("themes/js/jquery-2.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\" ></script>
    \t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, base_url("themes/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\" ></script>
    \t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, base_url("themes/js/beyond.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\" ></script>
    \t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, base_url("themes/js/toastr/toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\" ></script>
    \t<script type=\"text/javascript\">
    \t\t\$(document).ready(function(){
    \t\t\t\$(\"#username\").focus();
    \t\t\t\$(\"#login\").submit(function(){
    \t\t\tvar base_url = \"";
        // line 65
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
    \t\t\t\t\$.ajax({
\t                       \t\t\ttype: 'POST',
\t                        \t\t\turl: base_url + 'auth/login',
\t                        \t\t\tdata: \$(\"#login\").serialize(),
\t                        \t\t\tcache: false,
\t                        \t\t\tdataType: \"JSON\",
\t                        \t\t\tsuccess: function (json) {
\t                            \t\t\tif (json.error == 1) {

\t                                    \t\t\t\tNotify(json.pesan,'top-right', '5000', 'danger', 'fa-warning', false);

\t\t\t\t                          } else {
\t\t\t                                \t\tif(json.logerror==1)
\t\t\t\t                                \t{
\t\t\t\t                                        \t
\t\t\t\t                                        \tNotify(json.logpesan,'top-right', '5000', 'warning', 'fa-warning', true);
\t\t\t\t                                \t
\t\t\t\t                                \t}else{

\t\t\t\t                                   \t             Notify(json.logpesan,'top-right', '5000', 'success', 'fa-success', true);
\t\t\t\t\t                                     
\t\t\t\t                                \t};
\t\t\t\t                          };
\t\t                        \t\t},
\t\t                    \t});
\t\t                    \treturn false;
    \t\t\t});
    \t\t})
    \t</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  127 => 60,  123 => 59,  119 => 58,  115 => 57,  108 => 53,  85 => 33,  70 => 23,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  41 => 11,  34 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }
}
