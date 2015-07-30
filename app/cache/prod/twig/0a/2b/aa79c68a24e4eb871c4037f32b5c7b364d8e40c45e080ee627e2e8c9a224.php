<?php

/* ConnectionMessageBundle::layoutAjax.html.twig */
class __TwigTemplate_0a2baa79c68a24e4eb871c4037f32b5c7b364d8e40c45e080ee627e2e8c9a224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionmessage/css/messenger.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <h4>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("messenger", array(), "MessageBundle");
        echo "</h4>
    </div>
</div>
<div class=\"row\">
    <div class=\"messenger-container\">
        <div class=\"row\">
            <div class=\"navbar col-xs-2\">
                <ul>
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("fos_message_inbox");
        echo "\"><i class=\"glyphicon glyphicon-inbox\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("fos_message_sent");
        echo "\"><i class=\"glyphicon glyphicon-send\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("fos_message_deleted");
        echo "\"><i class=\"glyphicon glyphicon-trash\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
                </ul>
            </div>
            <div class=\"messenger-content  col-xs-10\">
                    ";
        // line 22
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 23
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <ul class=\"nav navbar-nav\">
        <li class=\"dropdown search-item\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"glyphicon glyphicon-globe\"></span> GoTo:
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("edit_user_profile");
        echo "\">My Profile</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_search");
        echo "\">Search</a></li>
            </ul>
        </li>
    </ul>
</div>
";
    }

    // line 22
    public function block_fos_message_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle::layoutAjax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  100 => 36,  96 => 35,  82 => 23,  80 => 22,  71 => 18,  65 => 17,  59 => 16,  48 => 8,  44 => 6,  41 => 5,  34 => 2,  31 => 1,  27 => 5,  24 => 4,  22 => 1,);
    }
}
