<?php

/* ConnectionUserBundle:Profile:link_profile.html.twig */
class __TwigTemplate_4a91a82ecfad0bfd7fe643cab7d81c6cb473178e59fc0c360fa808c9525fd53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_theme($context, array $blocks = array())
    {
        echo "create-profile";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Profile</li>
        </ul>
    </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <h4>We found an account with same Email Address, is it you ?:</h4>
    <div class=\"row\">
        <div class=\"col-xs-2\">
            <div id=\"add-photo\">
                <div class=\"msg\">
                    <div class=\"sprite sprite-add-photo\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xs-5\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h5>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-xs-5\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-xs-5\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile:link_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  89 => 38,  79 => 31,  69 => 26,  55 => 14,  52 => 13,  43 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
