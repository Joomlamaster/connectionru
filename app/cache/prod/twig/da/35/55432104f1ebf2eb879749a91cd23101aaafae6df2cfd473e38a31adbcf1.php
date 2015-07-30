<?php

/* ConnectionUserBundle:Profile:edit.html.twig */
class __TwigTemplate_da3555432104f1ebf2eb879749a91cd23101aaafae6df2cfd473e38a31adbcf1 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "ConnectionUserBundle:Registration:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_theme($context, array $blocks = array())
    {
        echo "create-profile";
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Profile</li>
        </ul>
    </div>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/dropzone/css/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/profile.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jcorp/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrapselect/bootstrap-select.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "        <div class=\"row\">
            <div class=\"col-xs-4 col-md-2\">
                <div class=\"fm-show-popup\" data-target_popup=\"profile-image\">
                    <div id=\"add-photo\">
                        ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "profile", array(), "any", false, true), "avatar", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "profile", array()), "avatar", array()))))) {
            // line 29
            echo "                            <img class=\"img-rounded\" width=\"140px\" height=\"190\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "profile", array()), "avatar", array()), "html", null, true);
            echo "\">
                        ";
        } else {
            // line 31
            echo "                            <div class=\"msg\">
                                <div class=\"sprite sprite-add-photo\"></div>
                                + Add photo
                            </div>
                        ";
        }
        // line 36
        echo "                    </div>
                </div>
                <div class=\"text-center profile-image-buttons\">
                    <div class=\"profile-image-button\">
                        ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "profile", array()), "hasAvatar", array())) {
            // line 41
            echo "                            <a href=\"#\" class=\"btn btn-success dz-upload-image\">Change Photo</a>
                        ";
        } else {
            // line 43
            echo "                            <a href=\"#\" class=\"btn btn-success dz-upload-image\">+ Add photo</a>
                        ";
        }
        // line 45
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-xs-8 col-md-10\">
                <ul id=\"myTab\" class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#profile\" role=\"tab\" data-toggle=\"tab\">Profile</a></li>
                    <li role=\"presentation\"><a href=\"#gallery\" role=\"tab\" data-toggle=\"tab\">Photos</a></li>
                    ";
        // line 52
        if ((array_key_exists("favorites", $context) && (!twig_test_empty((isset($context["favorites"]) ? $context["favorites"] : null))))) {
            // line 53
            echo "                        <li role=\"presentation\"><a href=\"#favorites\" role=\"tab\" data-toggle=\"tab\">Favorites</a></li>
                    ";
        }
        // line 55
        echo "                    ";
        if ((array_key_exists("events", $context) && (!twig_test_empty((isset($context["events"]) ? $context["events"] : null))))) {
            // line 56
            echo "                        <li role=\"presentation\"><a href=\"#events\" role=\"tab\" data-toggle=\"tab\">Events</a></li>
                    ";
        }
        // line 58
        echo "                </ul>

                <div id=\"myTabContent\" class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"profile\">
                        <div class=\"col-xs-10\">
                            ";
        // line 63
        if ((array_key_exists("editPersonalInfo", $context) && (isset($context["editPersonalInfo"]) ? $context["editPersonalInfo"] : null))) {
            // line 64
            echo "                                ";
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/Edit:personal_info.html.twig");
            echo "
                            ";
        } else {
            // line 66
            echo "                                <br/>
                                ";
            // line 67
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/View:personal_info.html.twig");
            echo "<br/>
                            ";
        }
        // line 69
        echo "                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"gallery\">
                        ";
        // line 72
        echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/Edit:gallery.html.twig", array("userPhotos" => (isset($context["userPhotos"]) ? $context["userPhotos"] : null)));
        echo "
                    </div>
                    ";
        // line 74
        if ((array_key_exists("favorites", $context) && (!twig_test_empty((isset($context["favorites"]) ? $context["favorites"] : null))))) {
            // line 75
            echo "                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"favorites\">
                            ";
            // line 76
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/Edit:favorites.html.twig", array("favorites" => (isset($context["favorites"]) ? $context["favorites"] : null)));
            echo "
                        </div>
                    ";
        }
        // line 79
        echo "                    ";
        if ((array_key_exists("events", $context) && (!twig_test_empty((isset($context["events"]) ? $context["events"] : null))))) {
            // line 80
            echo "                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"events\">
                            ";
            // line 81
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/Edit:events.html.twig", array("events" => (isset($context["events"]) ? $context["events"] : null)));
            echo "
                        </div>
                    ";
        }
        // line 84
        echo "                </div>
            </div>
        </div>
";
    }

    // line 88
    public function block_popup($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Popup:add_profile_image_popup.html.twig");
        echo "
    ";
        // line 90
        echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Popup:view_profile_image_popup.html.twig", array("navbar" => true));
        echo "
";
    }

    // line 92
    public function block_javascript($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/dropzone/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/dropzone/dropzone-custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/popup/popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/js/fos_message.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jcorp/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jcorp/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrap-confirmation.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/js/profile.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrapselect/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        ";
        // line 106
        echo "        \$(document).ready(function() {
            DropZoneStoreage.initDropZone(
                    \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("profile_image");
        echo "\",
                    \"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("profile_image");
        echo "\"
            );

            handleIvyLeague();
            handleOriginallyFrom('#";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array()), "originallyFrom", array()), "vars", array()), "id", array()), "html", null, true);
        echo "', '#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array()), "originallyFromCity", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
            \$('#profile').show();

        });

        preLoadSlaveFeedback = function(slaveBlock){
            \$('#connection_user_profile_edit_profile_state').remove();
        }

        loadSlaveFeedback = function(){
            \$('#connection_user_profile_edit_profile_state').selectpicker();
        }

        ";
        // line 127
        echo "        FM.popUp.listen(\"";
        echo $this->env->getExtension('routing')->getPath("update_profile_image");
        echo "\");
        ";
        // line 129
        echo "        ";
        if (((isset($context["tab"]) ? $context["tab"] : null) && (!twig_test_empty((isset($context["tab"]) ? $context["tab"] : null))))) {
            // line 130
            echo "            \$(function(){
                \$(\"#myTab a[href=#";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["tab"]) ? $context["tab"] : null), "html", null, true);
            echo "]\").tab('show');
            });
        ";
        }
        // line 134
        echo "        \$('#myTab a').click(function (e) {
            e.preventDefault()
            \$(this).tab('show')
        });
        FosMessage.init();

        \$('.fm-popup').on('dz.upload.complete', function() {
            location.reload();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 134,  315 => 131,  312 => 130,  309 => 129,  304 => 127,  286 => 113,  279 => 109,  275 => 108,  271 => 106,  266 => 103,  262 => 102,  258 => 101,  254 => 100,  250 => 99,  246 => 98,  242 => 97,  238 => 96,  234 => 95,  230 => 94,  225 => 93,  222 => 92,  216 => 90,  211 => 89,  208 => 88,  201 => 84,  195 => 81,  192 => 80,  189 => 79,  183 => 76,  180 => 75,  178 => 74,  173 => 72,  168 => 69,  163 => 67,  160 => 66,  154 => 64,  152 => 63,  145 => 58,  141 => 56,  138 => 55,  134 => 53,  132 => 52,  123 => 45,  119 => 43,  115 => 41,  113 => 40,  107 => 36,  100 => 31,  94 => 29,  92 => 28,  86 => 24,  83 => 23,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  60 => 16,  57 => 15,  48 => 9,  44 => 7,  41 => 6,  35 => 4,  30 => 2,);
    }
}
