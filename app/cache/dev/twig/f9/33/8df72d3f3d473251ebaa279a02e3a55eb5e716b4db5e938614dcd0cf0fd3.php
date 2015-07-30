<?php

/* ConnectionEventBundle:Popup:add_event_image_popup.html.twig */
class __TwigTemplate_f9338df72d3f3d473251ebaa279a02e3a55eb5e716b4db5e938614dcd0cf0fd3 extends Twig_Template
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
    <div class=\"fm-popup-headline\">Upload Event Image</div>
    <div class=\"fm-content\">
        ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionEventBundle:Image:jcropForm"));
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
        return "ConnectionEventBundle:Popup:add_event_image_popup.html.twig";
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
