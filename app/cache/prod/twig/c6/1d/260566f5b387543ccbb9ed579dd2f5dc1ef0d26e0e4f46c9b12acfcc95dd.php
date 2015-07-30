<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_c61d260566f5b387543ccbb9ed579dd2f5dc1ef0d26e0e4f46c9b12acfcc95dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</title>
    </head>

    <body>

        <h1>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</h1>

        <ul>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
        </ul>

        ";
        // line 18
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 19
        echo "
    </body>
</html>
";
    }

    // line 18
    public function block_fos_message_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  65 => 19,  63 => 18,  55 => 15,  49 => 14,  43 => 13,  37 => 10,  29 => 5,  25 => 4,  20 => 1,);
    }
}
