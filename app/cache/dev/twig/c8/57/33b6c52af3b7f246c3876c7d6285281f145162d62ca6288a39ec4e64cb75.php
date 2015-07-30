<?php

/* ConnectionUserBundle:Profile/Part/Edit:favorites.html.twig */
class __TwigTemplate_c85733b6c52af3b7f246c3876c7d6285281f145162d62ca6288a39ec4e64cb75 extends Twig_Template
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
        echo "<div class=\"row favorite-gallery\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favorites"]) ? $context["favorites"] : $this->getContext($context, "favorites")));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 3
            echo "    <div class=\"favorite-image-box\">
        <div>
        <a class=\"title\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["favorite"], "profile", array()), "id", array()))), "html", null, true);
            echo "\">
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["favorite"], "profile", array(), "any", false, true), "avatar", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["favorite"], "profile", array()), "avatar", array())) : ("")), "html", null, true);
            echo "\" alt=\"\"/>
        </a>
        </div>
        <div class=\"text-center favorite-image-buttons\">
            ";
            // line 10
            echo twig_include($this->env, $context, "ConnectionUserBundle:Profile/Part/View:action_buttons.html.twig", array("user" => $this->getAttribute($this->getAttribute($context["favorite"], "profile", array()), "user", array())));
            echo "
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/Edit:favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  41 => 10,  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
