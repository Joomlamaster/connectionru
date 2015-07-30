<?php

/* ConnectionAdminBundle:Settings:background.html.twig */
class __TwigTemplate_99289dc137f0f981d676ad3aa82509a0b2cdb66b955b688db01daa9d40c1af28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionAdminBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionadmin/js/dropzone/css/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionadmin/css/background.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"row\" id=\"dropzone\">
        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("admin"), "html", null, true);
        echo "\" class=\"dropzone dz-clickable\" id=\"admin_settings_background\">
            <div class=\"dz-default dz-message\"><span>Drop files here to upload</span></div>
        </form>
    </div>
    <div class=\"row\">
        ";
        // line 16
        if ((array_key_exists("images", $context) && (!twig_test_empty((isset($context["images"]) ? $context["images"] : null))))) {
            // line 17
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 18
                echo "                <div class=\"image-container ";
                echo (($this->getAttribute($context["image"], "isDefault", array())) ? ("default") : (""));
                echo "\">
                    <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\" class=\"img-thumbnail\">
                    <div class=\"toolbar\">
                        <div class=\"dropdown pull-right\">
                            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-cog\"></span>
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_settings_background_set", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\">
                                        Set as default background
                                    </a>
                                </li>
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_settings_background_delete", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        // line 43
        echo "    </div>
";
    }

    // line 46
    public function block_javascript($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionadmin/js/dropzone/dropzone.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionAdminBundle:Settings:background.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  120 => 47,  117 => 46,  112 => 43,  109 => 42,  94 => 33,  86 => 28,  74 => 19,  69 => 18,  64 => 17,  62 => 16,  54 => 11,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
