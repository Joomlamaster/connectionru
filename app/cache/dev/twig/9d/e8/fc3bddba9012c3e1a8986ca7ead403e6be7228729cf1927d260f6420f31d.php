<?php

/* ConnectionEventBundle:Comment:comment.html.twig */
class __TwigTemplate_9de8fc3bddba9012c3e1a8986ca7ead403e6be7228729cf1927d260f6420f31d extends Twig_Template
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
        echo "<div class=\"comment\" >
    <div class=\"author\"><a href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "username", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo "</a></div>
    <div class=\"content\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment", array()), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Comment:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }
}
