<?php

/* ConnectionWebBundle:Frontend/Parts:_topNavbar.html.twig */
class __TwigTemplate_13e770b9b32e3f83a96a7209cfffaaa7d38936948ec496e9c6f43ef6a06f2f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-second\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">
                <div class=\"sprite sprite-logo-brand\"></div>
            </a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <form class=\"navbar-form navbar-right\" role=\"form\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Home</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("event_search");
        echo "\"><span class=\"glyphicon glyphicon-globe\"></span> Events</a>
                    </li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user_search");
        echo "\"><span class=\"glyphicon glyphicon-search\"></span> Search</a></li>
                    ";
        // line 18
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 19
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_extended_register");
            echo "\">Register</a></li>
                    ";
        }
        // line 21
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_index");
            echo "\">Admin</a></li>
                    ";
        }
        // line 24
        echo "                </ul>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend/Parts:_topNavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  61 => 22,  58 => 21,  52 => 19,  50 => 18,  46 => 17,  41 => 15,  35 => 12,  24 => 4,  19 => 1,);
    }
}
