<?php

/* ConnectionWebBundle:Frontend:tell_a_friend.html.twig */
class __TwigTemplate_a339575feaa342a75cf058db8360ec1a6e5d6044d03c932feb5b3354953b0202 extends Twig_Template
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
        echo "<div class=\"tell-a-friend hidden\">
    <h4>Share with a friend</h4>
    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("connection_tell_a_friend"), "attr" => array("role" => "form")));
        echo "
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Email address</label>
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Message</label>
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget');
        echo "
        </div>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:tell_a_friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  36 => 10,  29 => 6,  23 => 3,  19 => 1,);
    }
}
