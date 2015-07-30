<?php

/* ConnectionUserBundle:Registration:quick_register.html.twig */
class __TwigTemplate_30fba5b6db08a89e5892108b556a9ba3c16abd1c0b0841249b562b48309cb6ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionUserBundle::registration_layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionUserBundle::registration_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_theme($context, array $blocks = array())
    {
        echo "create-profile";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"quick-register-page\">
        <div class=\"row\">
            <div class=\"col-md-offset-2 col-md-6\">
            <h4>Log In:</h4>
                <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" role=\"form\"  id='login-form' method=\"post\">
                    <div class=\"form-group\">
                        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"E-mail\" class=\"form-control\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Your password\" class=\"form-control\">
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <button type=\"submit\" class=\"btn btn-xs btn-gradient\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "messages"), "html", null, true);
        echo "\">Sign in</button>
                        </div>
                        <div class=\"col-md-6\">
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password ?</a>
                        </div>
                    </div>
                    <label class=\"forgot\">
                    </label>
                </form>
            </div>
        </div>
        <hr />
        <div class=\"row\">
            <div class=\"col-md-offset-2 col-md-8\">
                <h4>Register:</h4>
                ";
        // line 33
        echo twig_include($this->env, $context, "FOSUserBundle:Registration:register_content.html.twig", array("form" => (isset($context["form"]) ? $context["form"] : null)));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Registration:quick_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  62 => 21,  56 => 18,  44 => 9,  38 => 5,  35 => 4,  29 => 2,);
    }
}
