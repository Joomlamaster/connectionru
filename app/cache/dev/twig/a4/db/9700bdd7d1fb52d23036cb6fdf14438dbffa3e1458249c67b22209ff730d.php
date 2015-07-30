<?php

/* ConnectionUserBundle:Profile/Popup:view_profile_image_popup.html.twig */
class __TwigTemplate_a4db9700bdd7d1fb52d23036cb6fdf14438dbffa3e1458249c67b22209ff730d extends Twig_Template
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
        echo "<div class=\"fm-popup hidden\" id=\"view-profile-image\">
    <span class=\"fm-close-popup\"></span>
    <div class=\"fm-content\"></div>
    ";
        // line 4
        if ((array_key_exists("navbar", $context) && (isset($context["navbar"]) ? $context["navbar"] : $this->getContext($context, "navbar")))) {
            // line 5
            echo "        <div class=\"fm-nav-container\">
            <div class=\"fm-nav\">
                    <button href=\"#\" class=\"btn btn-success pull-right update-profile-image\">Set as profile photo</button>
            </div>
        </div>
    ";
        }
        // line 11
        echo "</div>
<div class=\"view-photo-overlay\"></div>";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Popup:view_profile_image_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}
