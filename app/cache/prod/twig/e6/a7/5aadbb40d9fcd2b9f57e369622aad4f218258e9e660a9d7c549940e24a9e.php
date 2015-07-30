<?php

/* ConnectionWebBundle:Frontend/Mail:tell-a-friend.html.twig */
class __TwigTemplate_e6a75aadbb40d9fcd2b9f57e369622aad4f218258e9e660a9d7c549940e24a9e extends Twig_Template
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
        echo "<div>
    <h4>ConnectionRu.com</h4>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend/Mail:tell-a-friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
