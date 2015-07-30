<?php

/* ConnectionUserBundle:Twitter:login_button.html.twig */
class __TwigTemplate_c646131f2f7fa71a56831dc49682d42dc76d29e1211698dfb78c2030b6960d40 extends Twig_Template
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
    <a class=\"sprite sprite-navbar-twitter\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["twitterUrl"]) ? $context["twitterUrl"] : null), "html", null, true);
        echo "\"></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Twitter:login_button.html.twig";
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
