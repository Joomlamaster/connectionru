<?php

/* ConnectionEventBundle:Event:manage.html.twig */
class __TwigTemplate_ced0ecdbf7c8c818b7d5cd1a0e0daf05b18e909c0ea233243777c258d83fb2c1 extends Twig_Template
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
        echo "manage-event";
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
            <li>Add an event</li>
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
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionevent/css/google/map.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/dropzone/css/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/profile.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jcorp/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <h4>ADD AN EVENT:</h4>
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("event_manage", array("id" => (isset($context["id"]) ? $context["id"] : null))), "attr" => array("class" => "fos_user_registration_register master_slave gmap event")));
        echo "
        <div class=\"row\">
            <div class=\"col-xs-1\"></div>
            <div class=\"col-xs-3\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'row');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eventDate", array()), 'row', array("attr" => array("class" => "datepicker input-append date")));
        echo "
            </div>
            <div class=\"col-xs-3\">
                <div class=\"master_slave\">
                    <div>
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'row', array("attr" => array("class" => "selectpicker master")));
        echo "
                    </div>
                    ";
        // line 37
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array(), "any", true, true)) {
            // line 38
            echo "                        <div class=\"slave_block\" style=\"margin-top:8px;\">
                            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array()), 'row', array("attr" => array("class" => "selectpicker slave")));
            echo "
                        </div>
                    ";
        }
        // line 42
        echo "                </div>
            </div>
            <div class=\"col-xs-3\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactName", array()), 'row');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
";
        // line 48
        echo "            </div>
            <div class=\"col-xs-2\">
                <div class=\"clearfix form-inline\">
                    <div class=\"fm-show-popup\" data-target_popup=\"profile-image\">
                        <div id=\"add-photo\">
                            ";
        // line 53
        if (($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image", array(), "any", false, true), "path", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image", array()), "path", array()))))) {
            // line 54
            echo "                                <img class=\"img-rounded\" width=\"140px\" height=\"190\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image", array()), "path", array()), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 56
            echo "                                <div class=\"msg\">
                                    <div class=\"sprite sprite-add-photo\"></div>
                                    + Add photo
                                </div>
                            ";
        }
        // line 61
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-1\"></div>
            <div class=\"col-xs-3\">
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "venue", array()), 'row');
        echo "
            </div>
            <div class=\"col-xs-6\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-1\"></div>
            <div class=\"col-xs-9\">
                <div id=\"map_canvas\"></div>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lat", array()), 'row');
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lng", array()), 'row');
        echo "
            </div>
            <div class=\"col-xs-2\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-5\"></div>
            <div class=\"col-xs-3\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row', array("attr" => array("class" => "btn-gradient")));
        echo "
            </div>
            <div class=\"col-xs-4\"></div>
        </div>
    <input id=\"image_id\" type=\"hidden\" name=\"image_id\">

    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => false));
        echo "

";
    }

    // line 98
    public function block_popup($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        echo twig_include($this->env, $context, "ConnectionEventBundle:Popup:add_event_image_popup.html.twig");
        echo "
";
    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/dropzone/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/dropzone/dropzone-custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/popup/popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jcorp/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jcorp/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionevent/js/google/map.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        ";
        // line 112
        echo "        \$(document).ready(function() {
            DropZoneStoreage.initDropZone(
                    \"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("profile_image");
        echo "\",
                    \"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("profile_image");
        echo "\"
            );
            \$.datepicker.setDefaults({
                dateFormat: \"mm/dd/yy\"
            });
            \$('#";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eventDate", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').datepicker({
                dateFormat: \"mm/dd/yy\"
            });
            preLoadSlaveFeedback = function(slaveBlock){
                if(slaveBlock.length){
                    \$(slaveBlock).html('');
                }
            }
            loadSlaveFeedback = function(){
                \$('#connection_event_type_state').selectpicker();
                MAP.listen();
                MAP.update(10);
            }
        });
        ";
        // line 135
        echo "        FM.popUp.listen(\"";
        echo $this->env->getExtension('routing')->getPath("update_profile_image");
        echo "\");
        ";
        // line 137
        echo "        \$('#profile-tabs a').click(function (e) {
            e.preventDefault();
            \$(this).tab('show');
        })

        \$('.fm-popup').on('dz.upload.complete', function (e, file) {
            \$(\"#image_id\").val(file.id);
            \$(\"#add-photo\").html(
                    \$('<img />', { id: file.id, src: file.name, width: \"140px\", height: \"190px\"})
            );
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Event:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 137,  300 => 135,  283 => 120,  275 => 115,  271 => 114,  267 => 112,  262 => 109,  257 => 107,  253 => 106,  249 => 105,  245 => 104,  241 => 103,  236 => 102,  233 => 101,  226 => 99,  223 => 98,  216 => 95,  212 => 94,  203 => 88,  193 => 81,  189 => 80,  179 => 73,  173 => 70,  169 => 69,  159 => 61,  152 => 56,  146 => 54,  144 => 53,  137 => 48,  133 => 46,  129 => 45,  124 => 42,  118 => 39,  115 => 38,  113 => 37,  108 => 35,  100 => 30,  96 => 29,  89 => 25,  86 => 24,  83 => 23,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  60 => 16,  57 => 15,  48 => 9,  44 => 7,  41 => 6,  35 => 4,  30 => 2,);
    }
}
