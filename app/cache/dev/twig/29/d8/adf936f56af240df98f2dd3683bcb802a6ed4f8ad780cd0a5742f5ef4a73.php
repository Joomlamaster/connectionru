<?php

/* ConnectionWebBundle:Frontend:contact.html.twig */
class __TwigTemplate_29d8adf936f56af240df98f2dd3683bcb802a6ed4f8ad780cd0a5742f5ef4a73 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "@ConnectionUser/Search/fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_theme($context, array $blocks = array())
    {
        echo "contact-us";
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-xs-5\">
            <h4>Contact us</h4>
            ";
        // line 18
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) ? $context["saved"] : $this->getContext($context, "saved")))) {
            // line 19
            echo "                <h5>ConnectionRu.com - <span class=\"blue\">Thank you for contacting us, your request will be processed sup.</span></h5>
            ";
        } else {
            // line 21
            echo "                ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                ";
            // line 22
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
            ";
        }
        // line 24
        echo "        </div>
        <div class=\"col-xs-3\">
        </div>
        <div class=\"col-xs-4\">
            <img src=\"/bundles/connectionweb/img/about-us.png\" alt=\"About us\"/>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  73 => 22,  68 => 21,  64 => 19,  62 => 18,  57 => 15,  54 => 14,  45 => 9,  41 => 7,  38 => 6,  32 => 4,  27 => 2,);
    }
}
