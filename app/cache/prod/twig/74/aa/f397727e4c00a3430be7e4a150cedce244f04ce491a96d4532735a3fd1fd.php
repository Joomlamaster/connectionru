<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_74aaf397727e4c00a3430be7e4a150cedce244f04ce491a96d4532735a3fd1fd extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->env->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : null))));
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
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
