<?php

/* ConnectionUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5889bda9704127c73540fac64491b866085ca0d8ac4f63389cacd1f575d537ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionUserBundle::registration_layout.html.twig");

        $this->blocks = array(
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
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->env->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
