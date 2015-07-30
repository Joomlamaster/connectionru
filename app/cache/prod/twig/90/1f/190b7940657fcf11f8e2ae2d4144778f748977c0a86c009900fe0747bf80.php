<?php

/* ConnectionUserBundle:Default:_headerLogin.html.twig */
class __TwigTemplate_901f190b7940657fcf11f8e2ae2d4144778f748977c0a86c009900fe0747bf80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"fos-custom-registration-container\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" role=\"form\" id='login-form' method=\"post\" class=\"fos_user_registration_register\">
            <div class=\"clearfix form-inline\">
                ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "                    <div class=\"alert alert-danger hlogin-error\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 11
        echo "            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>
            <div class=\"clearfix form-inline\">
                <label for=\"username\">Username or email</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"E-mail\" class=\"form-control\">
            </div>
            <div class=\"clearfix form-inline\">
                <label for=\"password\">Password</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <div class=\"clearfix form-inline\">
                <label class=\"remember\">
                    <input type=\"checkbox\" value=\"\"> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
            </div>
            <div class=\"clearfix form-inline\">
                <label class=\"forgot\">
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password ?</a>
                </label>
            </div>
            <div class=\"clearfix form-inline\">
                <button type=\"submit\" class=\"btn btn-xs btn-gradient\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "messages"), "html", null, true);
        echo "\">Sign in</button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Default:_headerLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  82 => 28,  74 => 23,  63 => 15,  57 => 12,  54 => 11,  48 => 9,  46 => 8,  41 => 6,  38 => 5,  32 => 4,  29 => 3,);
    }
}
