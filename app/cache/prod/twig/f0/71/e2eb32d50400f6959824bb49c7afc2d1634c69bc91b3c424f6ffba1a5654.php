<?php

/* ConnectionAdminBundle::layout.html.twig */
class __TwigTemplate_f071e2eb32d50400f6959824bb49c7afc2d1634c69bc91b3c424f6ffba1a5654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topNavBar' => array($this, 'block_topNavBar'),
            'leftNavBar' => array($this, 'block_leftNavBar'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">
    <head>
        <title>
            ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>

        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array()))) : ("")), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array()))) : ("")), "html", null, true);
        echo "\">

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\">
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('topNavBar', $context, $blocks);
        // line 47
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2 sidebar\">
                    ";
        // line 50
        $this->displayBlock('leftNavBar', $context, $blocks);
        // line 58
        echo "                </div>
                <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                    <h1 class=\"page-header\">";
        // line 60
        echo twig_escape_filter($this->env, ((array_key_exists("headline", $context)) ? (_twig_default_filter((isset($context["headline"]) ? $context["headline"] : null), "Dashboard")) : ("Dashboard")), "html", null, true);
        echo "</h1>
                    ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "                </div>
            </div>
        </div>

        ";
        // line 67
        $this->displayBlock('javascript', $context, $blocks);
        // line 72
        echo "    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "                ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()))) : ("")), "html", null, true);
        echo "
            ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionadmin/css/dashboard.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 21
    public function block_topNavBar($context, array $blocks = array())
    {
        // line 22
        echo "            <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">ConnectionRu</a>
                    </div>#}
                    <ul class=\"nav navbar-nav pull-right\">
                        <li class=\"dropdown search-item\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        ";
    }

    // line 50
    public function block_leftNavBar($context, array $blocks = array())
    {
        // line 51
        echo "                        <ul class=\"nav nav-sidebar\">
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_settings_background");
        echo "\">Background</a></li>
                            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_contact_us");
        echo "\">Contact Us</a></li>
                            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\">Events</a></li>
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_user_index");
        echo "\">Users</a></li>
                        </ul>
                    ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "                    ";
    }

    // line 67
    public function block_javascript($context, array $blocks = array())
    {
        // line 68
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "ConnectionAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  190 => 69,  185 => 68,  182 => 67,  178 => 62,  175 => 61,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  153 => 51,  150 => 50,  139 => 40,  132 => 36,  116 => 22,  113 => 21,  107 => 17,  103 => 16,  98 => 15,  95 => 14,  88 => 5,  85 => 4,  80 => 72,  78 => 67,  72 => 63,  70 => 61,  66 => 60,  62 => 58,  60 => 50,  55 => 47,  53 => 21,  49 => 19,  47 => 14,  41 => 11,  37 => 10,  32 => 7,  30 => 4,  25 => 1,);
    }
}
