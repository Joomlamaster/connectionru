<?php

/* ConnectionMessageBundle:Message:search.html.twig */
class __TwigTemplate_453c73b049f2eeedebaadfaf3f894e1d12fd52ede4c475588b030381f5e9d94f extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("search", array(), "MessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))), array("%num%" => twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))), "MessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->env->loadTemplate("ConnectionMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:search.html.twig";
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
