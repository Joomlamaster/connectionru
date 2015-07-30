<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_22a0d47ad9161ac3d5eb1a9ea790fc9d3226c6d67dca30458beb7a910e06673b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSMessageBundle::layout.html.twig");

        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->env->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
