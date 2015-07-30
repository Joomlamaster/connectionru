<?php

/* ConnectionUserBundle::registration_layout.html.twig */
class __TwigTemplate_56e570644676779254425cbf9dae00a19a4d6434e78e72ad2a1657eec22606e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/fos-registration.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    <div class=\"fos-custom-registration-container\">
        ";
        // line 10
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "    </div>
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle::registration_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  38 => 5,  33 => 4,  30 => 3,);
    }
}
