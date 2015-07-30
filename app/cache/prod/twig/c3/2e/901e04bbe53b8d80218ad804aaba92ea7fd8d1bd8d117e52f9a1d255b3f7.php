<?php

/* ConnectionWebBundle:Frontend:layout.html.twig */
class __TwigTemplate_c32e901e04bbe53b8d80218ad804aaba92ea7fd8d1bd8d117e52f9a1d255b3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'theme' => array($this, 'block_theme'),
            'header' => array($this, 'block_header'),
            'flashes' => array($this, 'block_flashes'),
            'main' => array($this, 'block_main'),
            'background' => array($this, 'block_background'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'popup' => array($this, 'block_popup'),
            'tellAFriend' => array($this, 'block_tellAFriend'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>

        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array()))) : ("")), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array()))) : ("")), "html", null, true);
        echo "\">

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\">

        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    </head>
    <body class=\"";
        // line 41
        $this->displayBlock('theme', $context, $blocks);
        echo "\">
        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('flashes', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('main', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        $this->displayBlock('popup', $context, $blocks);
        // line 101
        echo "        ";
        $this->displayBlock('tellAFriend', $context, $blocks);
        // line 104
        echo "
        ";
        // line 106
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 134
        echo "        <div class=\"global-loader hide\"><span>Please Wait...</span></div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()))) : ("")), "html", null, true);
        echo "
            ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/jquery-ui-1.11.1/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrapselect/bootstrap-select.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/popup/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />

        ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "85baa7f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_85baa7f_0") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend_frontend_1.css");
            // line 30
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "85baa7f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_85baa7f_1") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend_main_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "85baa7f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_85baa7f_2") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend_sprite_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "85baa7f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_85baa7f_3") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend_datepicker_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "85baa7f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_85baa7f") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "        ";
    }

    // line 41
    public function block_theme($context, array $blocks = array())
    {
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "            ";
        $this->env->loadTemplate("ConnectionWebBundle:Frontend/Parts:_header.html.twig")->display($context);
        // line 44
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionWebBundle:Frontend:topNavbar"));
        echo "
        ";
    }

    // line 47
    public function block_flashes($context, array $blocks = array())
    {
        // line 48
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["name"] => $context["flashes"]) {
            if (twig_in_filter($context["name"], array(0 => "success", 1 => "error", 2 => "notice", 3 => "fos_user_success"))) {
                // line 49
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 50
                    echo "                    <div class=\"alert global-alert alert-";
                    echo twig_escape_filter($this->env, ((($context["name"] == "fos_user_success")) ? ("success") : (((($context["name"] == "error")) ? ("danger") : (((($context["name"] == "notice")) ? ("warning") : ($context["name"])))))), "html", null, true);
                    echo "\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
                        ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flash"]), "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        ";
    }

    // line 58
    public function block_main($context, array $blocks = array())
    {
        // line 59
        echo "
            ";
        // line 61
        echo "            ";
        $this->displayBlock('background', $context, $blocks);
        // line 64
        echo "                ";
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 65
        echo "                <div class=\"container\">
                    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "                </div>
            </div>
        ";
    }

    // line 61
    public function block_background($context, array $blocks = array())
    {
        // line 62
        echo "                <div class=\"jumbotron\">
            ";
    }

    // line 64
    public function block_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        // line 67
        echo "                    ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "        <div class=\"container\" style=\"margin-top: 100px\">
            <footer>
                ";
        // line 76
        echo "
                <div class=\"col-xs-2\">
                    <div class=\"footer-logo logo-bottom\"></div>
                </div>
                <div class=\"col-xs-6\">
\t\t\t\t\t<p class=\"copy\">© Copyright ";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ConnectionRu., L.L.C. All rights reserved. Terms of use</p>
                </div>
                <div class=\"col-xs-4\">
                    <ul class=\"bottom-right-menu\">
                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("connection_about");
        echo "\">About us</a></li>
                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("connection_privacy");
        echo "\">Privacy</a></li>
                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("connection_contact");
        echo "\">Contact us</a></li>
                        <li class=\"sprite sprite-rss\"></li>
                        <li class=\"sprite sprite-facebook\"></li>
                        <li class=\"sprite sprite-twitter\"></li>
                        <li class=\"sprite sprite-instagram\"></li>
                        <li class=\"sprite sprite-pinterest\"></li>
                    </ul>
                </div>
            </footer>
        </div>
        ";
    }

    // line 99
    public function block_popup($context, array $blocks = array())
    {
        // line 100
        echo "        ";
    }

    // line 101
    public function block_tellAFriend($context, array $blocks = array())
    {
        // line 102
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionWebBundle:Frontend:tellAFriendEndPoint", array("link" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()))));
        echo "
        ";
    }

    // line 106
    public function block_javascript($context, array $blocks = array())
    {
        // line 107
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrapselect/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/common.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/tell-a-friend.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/js/registration.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"> \$(function() { FormAjaxFields.init(); }) </script>

            ";
        // line 116
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6884741_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6884741_0") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend_frontend_1.js");
            // line 119
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "6884741"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6884741") : $this->env->getExtension('assets')->getAssetUrl("assets/compiled/frontend.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 121
        echo "
            <!-- Google Analytics -->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-58721557-1', 'auto');
                ga('send', 'pageview');

            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 121,  386 => 119,  382 => 116,  376 => 113,  372 => 112,  368 => 111,  364 => 110,  360 => 109,  356 => 108,  351 => 107,  348 => 106,  341 => 102,  338 => 101,  334 => 100,  331 => 99,  316 => 87,  312 => 86,  308 => 85,  301 => 81,  294 => 76,  290 => 73,  287 => 72,  283 => 67,  280 => 66,  275 => 64,  270 => 62,  267 => 61,  261 => 68,  259 => 66,  256 => 65,  253 => 64,  250 => 61,  247 => 59,  244 => 58,  240 => 56,  233 => 55,  224 => 52,  218 => 50,  213 => 49,  207 => 48,  204 => 47,  197 => 44,  194 => 43,  191 => 42,  186 => 41,  182 => 32,  150 => 30,  146 => 24,  141 => 22,  137 => 21,  133 => 20,  129 => 19,  124 => 18,  121 => 17,  114 => 6,  111 => 5,  104 => 134,  101 => 106,  98 => 104,  95 => 101,  93 => 99,  90 => 98,  88 => 72,  85 => 71,  83 => 58,  80 => 57,  78 => 47,  75 => 46,  73 => 42,  69 => 41,  59 => 33,  56 => 17,  49 => 12,  45 => 11,  40 => 8,  38 => 5,  32 => 1,);
    }
}
