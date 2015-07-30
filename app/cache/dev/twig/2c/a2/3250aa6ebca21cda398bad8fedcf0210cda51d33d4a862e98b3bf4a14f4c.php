<?php

/* ConnectionUserBundle:Search:quick.html.twig */
class __TwigTemplate_2ca23250aa6ebca21cda398bad8fedcf0210cda51d33d4a862e98b3bf4a14f4c extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "ConnectionUserBundle:Registration:fields.html.twig"));
        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("user_search_quick_form"), "attr" => array("class" => "fos_user_registration_register master_slave form-horizontal")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'row', array("attr" => array("class" => "quick-form-element")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seek", array()), 'row', array("attr" => array("class" => "quick-form-element")));
        echo "

    <div class=\"clearfix form-inline\">
        <label for=\"search_age\" class=\"required\">Age</label>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageFrom", array()), 'widget', array("attr" => array("class" => "form-control selectpicker quick-form-element", "data-width" => "65px")));
        echo " - ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageTo", array()), 'widget', array("attr" => array("class" => "form-control selectpicker quick-form-element", "data-width" => "65px")));
        echo "
    </div>

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lookingFor", array()), 'row', array("attr" => array("class" => "selectpicker quick-form-element", "data-width" => "143px", "title" => "Anything")));
        echo "
    <div class=\"master_slave\">
        <div>
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row', array("attr" => array("class" => "selectpicker quick-form-element master", "data-width" => "143px")));
        echo "
        </div>
        ";
        // line 19
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array(), "any", true, true)) {
            // line 20
            echo "            <div class=\"slave_block\">
                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'row', array("attr" => array("class" => "selectpicker quick-form-element slave", "data-width" => "143px")));
            echo "
            </div>
        ";
        }
        // line 24
        echo "    </div>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchType", array()), 'row', array("value" => "quick"));
        echo "
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'row');
        echo "
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Search:quick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  80 => 26,  76 => 25,  73 => 24,  67 => 21,  64 => 20,  62 => 19,  57 => 17,  51 => 14,  43 => 11,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
