<?php

/* ConnectionUserBundle:Facebook:login_button.html.twig */
class __TwigTemplate_18d05b2e470110fe58abd3ffc010fc4fe1071638b18105ff45ebb6fb4ce3ba29 extends Twig_Template
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
        echo "<div class=\"sprite\">
    <a class=\"sprite sprite-navbar-facebook\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true);
        echo "\"></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Facebook:login_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
