<?php

/* ConnectionMessageBundle:Message:thread.html.twig */
class __TwigTemplate_d9da554249583c9823db29286e00cf8b0978ae10fcfbfc415808744978231b4c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h2>

    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"messenger_thread_message\">
            <div class=\"alert alert-success\">
                <div class=\"messenger_thread_message_info\">
                    ";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "MessageBundle");
            // line 11
            echo "                </div>

                <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <h2>";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("reply", array(), "MessageBundle");
        echo "</h2>

    <form class=\"reply\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <button class=\"btn-gradient\" type=\"submit\">Send</button>
    </form>

";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  77 => 22,  72 => 20,  69 => 19,  58 => 14,  54 => 13,  50 => 11,  48 => 10,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
