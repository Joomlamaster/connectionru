<?php

/* ConnectionWebBundle:Frontend/Parts:background.html.twig */
class __TwigTemplate_64024a70bb36dcdcb3870e35d8196b261bf4ebfbb208aaf3ee750a88dc873b88 extends Twig_Template
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
        if ((array_key_exists("background", $context) && (!twig_test_empty((isset($context["background"]) ? $context["background"] : $this->getContext($context, "background")))))) {
            // line 2
            echo "<div class=\"jumbotron\" style=\"background: url('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["background"]) ? $context["background"] : $this->getContext($context, "background")), "path", array()), "html", null, true);
            echo "') no-repeat center; -moz-background-size: 100%; /* Firefox 3.6+ */
        -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
        -o-background-size: 100%; /* Opera 9.6+ */
        background-size: 100%; /* Современные браузеры */\">
";
        } else {
            // line 7
            echo "    <div class=\"jumbotron\">
";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend/Parts:background.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  21 => 2,  19 => 1,);
    }
}
