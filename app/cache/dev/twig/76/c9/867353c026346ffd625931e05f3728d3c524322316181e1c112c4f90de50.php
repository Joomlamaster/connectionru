<?php

/* ConnectionUserBundle:Profile/Part/Edit:events.html.twig */
class __TwigTemplate_76c9867353c026346ffd625931e05f3728d3c524322316181e1c112c4f90de50 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "first", array()), "user", array()))) {
            // line 2
            echo "<div class=\"row event-gallery\">
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 4
                echo "        <div class=\"event-image-box\">
            <a class=\"title\" href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">
                <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "image", array(), "any", false, true), "path", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "image", array()), "path", array())) : ("")), "html", null, true);
                echo "\" alt=\"\"/>
            </a>
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_manage", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-info\" title=\"Edit this event\">
                <span class=\"glyphicon glyphicon-edit\"></span> Edit event
            </a>
            <a data-href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_profile_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\"
               class=\"btn btn-danger\"
               data-toggle=\"confirmation\">Remove</a>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>
";
        } else {
            // line 18
            echo "<div class=\"row event-gallery\">
    ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 20
                echo "        <div class=\"user-event-image-box\">
            <a class=\"title\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">
                <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "image", array(), "any", false, true), "path", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "image", array()), "path", array())) : ("")), "html", null, true);
                echo "\" alt=\"\"/>
            </a>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/Edit:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  75 => 22,  71 => 21,  68 => 20,  64 => 19,  61 => 18,  57 => 16,  46 => 11,  40 => 8,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
