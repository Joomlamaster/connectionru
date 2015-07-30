<?php

/* ConnectionUserBundle:Default:login_form.html.twig */
class __TwigTemplate_0684fcc9c94483bc8d925b340b568f9725e9783f91b8139d2ba7965e806f8d40 extends Twig_Template
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
        if ((!array_key_exists("hideTopLogin", $context))) {
            // line 2
            echo "    <form class=\"navbar-form navbar-right\" action=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" role=\"form\" id='login-form' method=\"post\">
        <div class=\"form-group\">
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"E-mail\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Your password\" class=\"form-control\">
        </div>
        <button type=\"submit\" class=\"btn btn-xs btn-gradient\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "messages"), "html", null, true);
            echo "\">Sign in</button>
        <label class=\"remember pull-left\">
            <input type=\"checkbox\" value=\"\"> Remember me
        </label>
        <label class=\"forgot\">
            <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Forgot password ?</a>
        </label>
    </form>
";
        }
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Default:login_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  40 => 14,  32 => 9,  21 => 2,  19 => 1,);
    }
}
