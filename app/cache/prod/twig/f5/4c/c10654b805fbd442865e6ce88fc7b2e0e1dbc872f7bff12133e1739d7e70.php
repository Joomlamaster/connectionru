<?php

/* ConnectionUserBundle:Profile/Part/View:action_buttons.html.twig */
class __TwigTemplate_f54cc10654b805fbd442865e6ce88fc7b2e0e1dbc872f7bff12133e1739d7e70 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != (isset($context["user"]) ? $context["user"] : null)))) {
            // line 2
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "hasFavoriteUser", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method")) {
                // line 3
                echo "        <a data-href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile_favorite_user_remove", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-info\" data-toggle=\"confirmation\" data-title=\"Remove user from favorites?\" title=\"Remove user from favorites\">
            <span class=\"glyphicon glyphicon-remove-circle\"></span>
        </a>
    ";
            } else {
                // line 7
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("favorite_user_add", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-info\" title=\"Add user to favorites\">
            <span class=\"glyphicon glyphicon-star\"></span>
        </a>
    ";
            }
            // line 11
            echo "    <a data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajax_message_new", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info fos-message send-message\" title=\"Send message to this user\">
        <span class=\"glyphicon glyphicon-envelope\"></span>
    </a>
    <a id=\"tell-a-friend\" href=\"#\" class=\"btn btn-xs btn-info\" title=\"Share with a friend\">
        <span class=\"glyphicon glyphicon-share\"></span>
    </a>
    <a id=\"send-hi\" data-href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_message_hi", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-info  fos-message hi-message\" title=\"Send 'Hi' message to show interest\">
        <span class=\"glyphicon\">Hi!</span>
    </a>
";
        } else {
            // line 21
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_quick_register");
            echo "\" class=\"btn btn-xs btn-info\" title=\"Add user to favorites\">
        <span class=\"glyphicon glyphicon-star\"></span>
    </a>
    <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_quick_register");
            echo "\" class=\"btn btn-xs btn-info\" title=\"Send message to this user\">
        <span class=\"glyphicon glyphicon-envelope\"></span>
    </a>
    <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_quick_register");
            echo "\" class=\"btn btn-xs btn-info\" title=\"Share with a friend\">
        <span class=\"glyphicon glyphicon-share\"></span>
    </a>
    <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_quick_register");
            echo "\" class=\"btn btn-xs btn-info\" title=\"Send 'Hi' message to show interest\">
        <span class=\"glyphicon\">Hi!</span>
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/View:action_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  70 => 27,  64 => 24,  57 => 21,  50 => 17,  40 => 11,  32 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
