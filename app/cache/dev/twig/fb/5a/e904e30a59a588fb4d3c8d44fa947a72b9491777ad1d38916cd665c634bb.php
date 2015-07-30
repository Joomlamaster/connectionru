<?php

/* ConnectionMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_fb5ae904e30a59a588fb4d3c8d44fa947a72b9491777ad1d38916cd665c634bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionMessageBundle::layout.html.twig");

        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_message_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <h2>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "MessageBundle");
        echo "</h2>

    ";
        // line 6
        $this->env->loadTemplate("ConnectionMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
