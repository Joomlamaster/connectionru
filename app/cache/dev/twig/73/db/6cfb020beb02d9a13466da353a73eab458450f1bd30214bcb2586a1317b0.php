<?php

/* ConnectionEventBundle:Event:upcoming_events.html.twig */
class __TwigTemplate_73db6cfb020beb02d9a13466da353a73eab458450f1bd30214bcb2586a1317b0 extends Twig_Template
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
        echo "<div class=\"col-xs-4 upcoming\">
    <div class=\"row\">
        <div class=\"block-title\">Related upcoming events:</div>
    </div>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["upcomingEvents"]) ? $context["upcomingEvents"] : $this->getContext($context, "upcomingEvents")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 6
            echo "    <div class=\"row\">
        <div class=\"event-small\">
            <div class=\"col-xs-4\">
                <a class=\"title\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "image", array(), "any", false, true), "path", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "image", array()), "path", array())) : ("")), "html", null, true);
            echo "\" alt=\"\"/>
                </a>
            </div>
            <div class=\"col-xs-8\">
                <time>";
            // line 14
            echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "eventDate", array(), "any", true, true)) ? (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()))) : ("")), "html", null, true);
            echo "</time>
                <a class=\"title\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "title", array(), "any", true, true)) ? ($this->getAttribute($context["event"], "title", array())) : ("")), "html", null, true);
            echo "</a>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-gradient\">View</a>
                <br/>
                ";
            // line 18
            if ($this->getAttribute($this->getAttribute($context["event"], "getUser", array(), "any", false, true), "getProfile", array(), "any", true, true)) {
                // line 19
                echo "                    <em>Posted:</em>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "user", array()), "profile", array()), "id", array()))), "html", null, true);
                echo "\" class=\"name\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "username", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "user", array()), "username", array())) : ("")), "html", null, true);
                echo "</a>
                ";
            }
            // line 22
            echo "            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <div class=\"row\">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_upcoming_events", array("id" => (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")))), "html", null, true);
        echo "\">
            <div class=\"more\">View all / others</div>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Event:upcoming_events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  81 => 26,  72 => 22,  65 => 20,  62 => 19,  60 => 18,  55 => 16,  49 => 15,  45 => 14,  38 => 10,  34 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }
}
