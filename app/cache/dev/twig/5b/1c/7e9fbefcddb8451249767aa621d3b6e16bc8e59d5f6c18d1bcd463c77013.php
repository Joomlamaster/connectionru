<?php

/* ConnectionWebBundle:Frontend/Mail:SocialRegistrationNote.html.twig */
class __TwigTemplate_5b1c7e9fbefcddb8451249767aa621d3b6e16bc8e59d5f6c18d1bcd463c77013 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "!<br /><br />

Welcome to ConnectionRu<br />
Your registration has been created with following login information:<br /><br />

e-mail: <b>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</b><br />
password: <b>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "</b><br /><br />

Thanks for your registration.<br /><br />

ConnectionRu Team.";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend/Mail:SocialRegistrationNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  28 => 6,  19 => 1,);
    }
}
