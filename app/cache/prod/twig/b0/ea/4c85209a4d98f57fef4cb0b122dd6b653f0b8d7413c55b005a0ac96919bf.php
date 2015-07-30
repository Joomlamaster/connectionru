<?php

/* ConnectionMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_b0ea4c85209a4d98f57fef4cb0b122dd6b653f0b8d7413c55b005a0ac96919bf extends Twig_Template
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

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("send_new", array(), "MessageBundle");
        echo "</h2>

<form class=\"new-thread\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("fos_message_thread_new");
        echo "\" role=\"form\" method=\"post\">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recipient", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

    <div class=\"form-group\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>

    <button class=\"btn-gradient\" type=\"submit\">Send</button>
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
</form>

";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  56 => 15,  49 => 11,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
