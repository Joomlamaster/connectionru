<?php

/* ConnectionEventBundle:Event:going_interested.html.twig */
class __TwigTemplate_325de6af86c1b71fc5a96f3df34d967054ea16c92ad32ba1bf3ecb46fd04a6e0 extends Twig_Template
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
        if ((array_key_exists("participants", $context) && (!twig_test_empty((isset($context["participants"]) ? $context["participants"] : null))))) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 3
                echo "        <div class=\"author\">
            <div class=\"people clearfix\">
                <div class=\"face postet-by\">
                    <a target=\"_blank\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["participant"], "profile", array()), "id", array()))), "html", null, true);
                echo "\">
                        <p class=\"name\">";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["participant"], "username", array()), "html", null, true);
                echo "</p>
                        <img width=\"82px\" src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participant"], "profile", array()), "avatar", array()), "html", null, true);
                echo "\">
                    </a>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Event:going_interested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  31 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }
}
