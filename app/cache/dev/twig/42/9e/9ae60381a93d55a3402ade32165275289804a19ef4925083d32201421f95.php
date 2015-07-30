<?php

/* ConnectionUserBundle:Profile:view.html.twig */
class __TwigTemplate_429e9ae60381a93d55a3402ade32165275289804a19ef4925083d32201421f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'popup' => array($this, 'block_popup'),
            'javascript' => array($this, 'block_javascript'),
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

    // line 2
    public function block_theme($context, array $blocks = array())
    {
        echo "view-profile";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Profile</li>
        </ul>
    </div>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/profile.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "        <div class=\"row\">
            <div class=\"col-xs-2\">
                <div id=\"add-photo\">
                    ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "avatar", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile", array()), "avatar", array()))))) {
            // line 22
            echo "                        <img class=\"img-rounded\" width=\"140\" height=\"190\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile", array()), "avatar", array()), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 24
            echo "                        <div class=\"msg\">
                            <div class=\"sprite sprite-add-photo\"></div>
                        </div>
                    ";
        }
        // line 28
        echo "                </div>
                <div class=\"text-center profile-image-buttons\">
                    ";
        // line 30
        echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/View:action_buttons.html.twig", array("user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))));
        echo "
                </div>
            </div>
            <div class=\"col-xs-10\">
                <ul class=\"nav nav-tabs\" id=\"profile-tabs\">
                    <li class=\"active\"><a href=\"#profile\">Profile</a></li>
                    <li><a href=\"#gallery\">Photos</a></li>
                    ";
        // line 37
        if ((array_key_exists("events", $context) && (!twig_test_empty((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")))))) {
            // line 38
            echo "                        <li><a href=\"#events\">Events</a></li>
                    ";
        }
        // line 40
        echo "                </ul>

                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"profile\">
                        <div class=\"col-xs-15\">
                            ";
        // line 45
        echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/View:personal_info.html.twig");
        echo "
                        </div>
                    </div>
                    ";
        // line 48
        if ((array_key_exists("userPhotos", $context) && (!twig_test_empty((isset($context["userPhotos"]) ? $context["userPhotos"] : $this->getContext($context, "userPhotos")))))) {
            // line 49
            echo "                        <div class=\"tab-pane\" id=\"gallery\">
                            ";
            // line 50
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/View:gallery.html.twig", array("userPhotos" => (isset($context["userPhotos"]) ? $context["userPhotos"] : $this->getContext($context, "userPhotos"))));
            echo "
                        </div>
                    ";
        }
        // line 53
        echo "                    ";
        if ((array_key_exists("events", $context) && (!twig_test_empty((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")))))) {
            // line 54
            echo "                        <div class=\"tab-pane\" id=\"events\">
                            ";
            // line 55
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/Edit:events.html.twig", array("events" => (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))));
            echo "
                        </div>
                    ";
        }
        // line 58
        echo "                </div>
            </div>
            <div class=\"col-xs-5\"></div>
        </div>
";
    }

    // line 63
    public function block_popup($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Popup:view_profile_image_popup.html.twig");
        echo "
";
    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrap-confirmation.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/popup/popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/js/fos_message.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/js/profile.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        ";
        // line 75
        echo "        FM.popUp.listen(\"";
        echo $this->env->getExtension('routing')->getPath("update_profile_image");
        echo "\");
        ";
        // line 77
        echo "        \$('#profile-tabs a').click(function (e) {
            e.preventDefault();
            \$(this).tab('show');
        });

        FosMessage.init();
    </script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 77,  194 => 75,  189 => 72,  185 => 71,  181 => 70,  177 => 69,  173 => 68,  168 => 67,  165 => 66,  158 => 64,  155 => 63,  147 => 58,  141 => 55,  138 => 54,  135 => 53,  129 => 50,  126 => 49,  124 => 48,  118 => 45,  111 => 40,  107 => 38,  105 => 37,  95 => 30,  91 => 28,  85 => 24,  79 => 22,  77 => 21,  72 => 18,  69 => 17,  63 => 14,  58 => 13,  55 => 12,  46 => 7,  42 => 5,  39 => 4,  33 => 2,);
    }
}
