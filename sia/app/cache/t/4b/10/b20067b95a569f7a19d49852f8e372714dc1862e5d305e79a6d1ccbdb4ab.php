<?php

/* buka.html */
class __TwigTemplate_4b10b20067b95a569f7a19d49852f8e372714dc1862e5d305e79a6d1ccbdb4ab extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["wew"]) ? $context["wew"] : null), "html", null, true);
        echo "
";
        // line 2
        $context["foo"] = twig_split_filter($this->env, "one,two,three", ",");
    }

    public function getTemplateName()
    {
        return "buka.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
