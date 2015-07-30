<?php

/* ConnectionWebBundle:Frontend:index.html.twig */
class __TwigTemplate_0b65437dd5051628a36d1653dd20dfd2b1819f7d1401d82049a2ca4353aae4e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'background' => array($this, 'block_background'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_theme($context, array $blocks = array())
    {
        echo "homepage";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/search.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_background($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionWebBundle:Frontend:background"));
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"row main-block\">
            <div class=\"col-xs-7\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
        // line 17
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 18
            echo "                        <li><a href=\"#registration\" role=\"tab\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-time\"></span> Quick Free Registration</a></li>
                    ";
        }
        // line 20
        echo "                    <li class=\"active\"><a href=\"#search\" role=\"tab\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-search\"></span> Quick Search</a></li>
                </ul>
                <div class=\"tab-content\" id=\"quick-tab\" style=\"display: none;\">
                    ";
        // line 23
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 24
            echo "                        <div class=\"tab-pane\" id=\"registration\">
                            ";
            // line 25
            echo twig_include($this->env, $context, "FOSUserBundle:Registration:register_content.html.twig", array("form" => (isset($context["registrationForm"]) ? $context["registrationForm"] : null)));
            echo "

                        </div>
                    ";
        }
        // line 29
        echo "                    <div class=\"tab-pane active\" id=\"search\">
                        ";
        // line 30
        echo twig_include($this->env, $context, "ConnectionUserBundle:Search:quick.html.twig", array("form" => (isset($context["searchForm"]) ? $context["searchForm"] : null)));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-5\">
                ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionUserBundle:User:latest"));
        echo "
            </div>
        </div>
    </div>

";
    }

    // line 42
    public function block_javascript($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/jquery.watermark.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        window.onload = function() {
            \$('#quick-tab').show();
            \$('.selectpicker-container select').selectpicker();
            preLoadSlaveFeedback = function (slaveBlock) {
                if (slaveBlock.length) {
                    \$(slaveBlock).html('');
                }
            }
            loadSlaveFeedback = function () {
                \$('#connection_search_state').selectpicker();
                \$('#fos_user_registration_form_profile_state').selectpicker();
            }
        }
     </script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  117 => 43,  114 => 42,  104 => 35,  96 => 30,  93 => 29,  86 => 25,  83 => 24,  81 => 23,  76 => 20,  72 => 18,  70 => 17,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  46 => 7,  41 => 6,  38 => 5,  32 => 3,);
    }
}
