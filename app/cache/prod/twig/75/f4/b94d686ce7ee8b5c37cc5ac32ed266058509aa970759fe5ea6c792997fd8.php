<?php

/* ConnectionWebBundle:Frontend:about.html.twig */
class __TwigTemplate_75f4b94d686ce7ee8b5c37cc5ac32ed266058509aa970759fe5ea6c792997fd8 extends Twig_Template
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
            <li>About Us</li>
        </ul>
    </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-xs-8\">
            <h4>About us</h4>
            <h5>ConnectionRu.com - <span class=\"blue\">There is Someone for Everyone</span></h5>
            <p>
                ConnectionRu.com is an online platform for singles and people who are
                looking to connect with each otherand find a meaningful relationship or
                simply an interesting crowd to interact with.<br>
                We’re here to help you find your true soul-mate, best friend,
                networking buddy orhave an opportunity to connect with people around the
                world who share your interests and ways of life.<br>
            </p>
            <p>
            </p>
            <em>ConnectionRu Team</em>
        </div>
        <div class=\"col-xs-4\">
            <img src=\"/bundles/connectionweb/img/about-us.png\" alt=\"About us\"/>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:about.html.twig";
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
