<?php

/* ConnectionMessageBundle::layout.html.twig */
class __TwigTemplate_96ff9ba8d6bb0adcc28291abdd3736a2631f04936767769e87bfbd8970e1322f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_theme($context, array $blocks = array())
    {
        echo "content-page";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionmessage/css/messenger.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("messenger", array(), "MessageBundle");
        echo "</li>
        </ul>
    </div>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h4>";
        // line 20
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
        // line 28
        echo $this->env->getExtension('routing')->getUrl("fos_message_inbox");
        echo "\"><i class=\"glyphicon glyphicon-inbox\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("fos_message_sent");
        echo "\"><i class=\"glyphicon glyphicon-send\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("fos_message_deleted");
        echo "\"><i class=\"glyphicon glyphicon-trash\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
                    </ul>
                </div>
                <div class=\"messenger-content  col-xs-10\">
                    ";
        // line 34
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 35
        echo "                </div>
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
        // line 47
        echo $this->env->getExtension('routing')->getPath("edit_user_profile");
        echo "\">My Profile</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("user_search");
        echo "\">Search</a></li>
                </ul>
            </li>
        </ul>
    </div>
";
    }

    // line 34
    public function block_fos_message_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  130 => 48,  126 => 47,  112 => 35,  110 => 34,  101 => 30,  95 => 29,  89 => 28,  78 => 20,  74 => 18,  71 => 17,  63 => 13,  59 => 12,  55 => 10,  52 => 9,  46 => 6,  41 => 5,  38 => 4,  32 => 3,);
    }
}
