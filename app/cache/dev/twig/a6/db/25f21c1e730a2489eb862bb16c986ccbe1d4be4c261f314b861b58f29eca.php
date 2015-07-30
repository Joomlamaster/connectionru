<?php

/* ConnectionMessageBundle:Message:sent.html.twig */
class __TwigTemplate_a6db25f21c1e730a2489eb862bb16c986ccbe1d4be4c261f314b861b58f29eca extends Twig_Template
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
        echo "    <h2>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "MessageBundle");
        echo "</h2>
    ";
        // line 4
        $this->env->loadTemplate("ConnectionMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,);
    }
}
