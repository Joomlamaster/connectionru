<?php

/* FOSMessageBundle:Message:search.html.twig */
class __TwigTemplate_3b4b3bc764861c31a6512b255a1dd578378d6cb3948a99485d6dd4e21954e50b extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("search", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : null)), array("%num%" => twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : null))), "FOSMessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->env->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : null))));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  45 => 11,  41 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
