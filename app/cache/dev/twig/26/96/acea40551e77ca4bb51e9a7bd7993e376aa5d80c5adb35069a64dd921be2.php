<?php

/* ConnectionMessageBundle:Email:message_new.html.twig */
class __TwigTemplate_2696acea40551e77ca4bb51e9a7bd7993e376aa5d80c5adb35069a64dd921be2 extends Twig_Template
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
        // line 2
        echo "<p>You received a new message from ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " at  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getCreatedAt", array()), "g:ia l, M d, Y"), "html", null, true);
        echo "</p>
";
        // line 4
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("message_view", array("threadId" => (isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))), "html", null, true);
        echo "\">Login now</a> and read your messages.</p>
";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Email:message_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 2,);
    }
}
