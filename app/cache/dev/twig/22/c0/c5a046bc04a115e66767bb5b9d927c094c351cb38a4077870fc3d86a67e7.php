<?php

/* ConnectionUserBundle:Image/Popup:jcrop_form.html.twig */
class __TwigTemplate_22c0c5a046bc04a115e66767bb5b9d927c094c351cb38a4077870fc3d86a67e7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("user"), "html", null, true);
        echo "\" id=\"profile-images\" style=\"min-height: 300px;\">
        <div class=\"fm-top-inventory\">
            <label form=\"profile_default_image\">Set as default profile image
                <input name=\"profile_default_image\" type=\"checkbox\" value=\"1\" checked=\"checked\">
            </label>
        </div>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <div class=\"dz-upload-message\" style=\"font-size: 23px;\"><span>Click here to browse a photo (or drop)</span></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Image/Popup:jcrop_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 2,  19 => 1,);
    }
}
