<?php

/* ConnectionUserBundle:Profile/Popup:add_profile_image_popup.html.twig */
class __TwigTemplate_0dc5183e1b8397309e910e13a806fba51f5a09a7119781211f7581533f9ec452 extends Twig_Template
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
        echo "<div class=\"fm-popup hidden\" id=\"profile-image\">
    <div class=\"fm-popup-headline\">Upload Profile Image <span class=\"fm-close-popup\"></span></div>
    <div class=\"fm-content\">
        ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionUserBundle:Image:jcropForm"));
        echo "
    </div>
    <div class=\"fm-nav-container\">
        <div class=\"fm-nav\">
            <button class=\"btn btn-success dz-process-queue pull-right\">Upload</button>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Popup:add_profile_image_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
