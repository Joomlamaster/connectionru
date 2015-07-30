<?php

/* ConnectionWebBundle:Frontend:privacy.html.twig */
class __TwigTemplate_c1172dde7f04051858099ba12038d7c09a3bc6f4b04cf73705ea770b9120f5e1 extends Twig_Template
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

    // line 3
    public function block_theme($context, array $blocks = array())
    {
        echo "content-page";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Privacy</li>
        </ul>
    </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h4>Privacy</h4>
            <p></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:privacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  52 => 13,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}
