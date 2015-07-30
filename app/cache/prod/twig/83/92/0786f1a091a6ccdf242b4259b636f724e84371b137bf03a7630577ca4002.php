<?php

/* ConnectionMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_83920786f1a091a6ccdf242b4259b636f724e84371b137bf03a7630577ca4002 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "MessageBundle");
        echo "</h2>
    ";
        // line 5
        $this->env->loadTemplate("ConnectionMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : null))));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
