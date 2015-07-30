<?php

/* ConnectionEventBundle:Popup:jcrop_form.html.twig */
class __TwigTemplate_8d4cb50638ddc88c3ce91fc9a5c90380cbf7dbcadad26e1202f26cb68fbf99f5 extends Twig_Template
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
        echo "<div class=\"fm-popup-image-area\">
    <form name=\"jcrop\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("event"), "html", null, true);
        echo "\" id=\"profile-images\" style=\"min-height: 300px;\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        <div class=\"dz-upload-message\" style=\"font-size: 23px;\"><span>Drop file here to upload (or click)</span></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Popup:jcrop_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
