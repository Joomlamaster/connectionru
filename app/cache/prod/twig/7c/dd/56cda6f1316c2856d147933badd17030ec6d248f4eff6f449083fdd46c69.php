<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_7cdd56cda6f1316c2856d147933badd17030ec6d248f4eff6f449083fdd46c69 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</h2>

<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("fos_message_thread_new");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</a>

";
        // line 9
        $this->env->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : null))));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  46 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
