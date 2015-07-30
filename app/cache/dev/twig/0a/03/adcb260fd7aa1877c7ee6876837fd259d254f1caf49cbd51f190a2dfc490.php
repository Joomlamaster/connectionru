<?php

/* ConnectionUserBundle:Twitter:add_email.html.twig */
class __TwigTemplate_0a03adcb260fd7aa1877c7ee6876837fd259d254f1caf49cbd51f190a2dfc490 extends Twig_Template
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
            <li>Twitter</li>
            <li>Add Email</li>
        </ul>
    </div>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <h4>Please provide Email Address:</h4>
    <div class=\"row\">
        <div class=\"col-xs-5\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        return "ConnectionUserBundle:Twitter:add_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 20,  56 => 15,  53 => 14,  43 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
