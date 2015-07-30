<?php

/* ConnectionWebBundle:Frontend/Parts:_header.html.twig */
class __TwigTemplate_9eac5dc64be9a9ef500bce38fd4cf7ba60777f9a18f8050477925c64c8d98882 extends Twig_Template
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
        echo "<div class=\"navbar navbar-first\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
                ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 6
            echo "                ";
        } else {
            // line 7
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionUserBundle:Facebook:facebookLoginButton"));
            echo "
                    ";
            // line 8
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionUserBundle:Twitter:twitterLoginButton"));
            echo "
                ";
        }
        // line 10
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 13
            echo "                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"dropdown search-item\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"glyphicon glyphicon-user\"></span> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("edit_user_profile");
            echo "\">My Profile</a></li>
                            <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("edit_user_profile_edit");
            echo "\">Edit Profile</a></li>
                           ";
            // line 25
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <p style=\"color: #ffffff; padding: 7px 20px 0px 0px;\" class=\"navbar-form navbar-right\">
                    <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("message_inbox");
            echo "\">Messages
                        <span class=\"badge ";
            // line 31
            echo ((($this->env->getExtension('fos_message')->getNbUnread() > 0)) ? ("color-red") : (""));
            echo "\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
            echo "
                        </span>
                    </a>
                </p>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 37
            echo "                ";
            $this->env->loadTemplate("ConnectionUserBundle:Default:login_form.html.twig")->display($context);
            // line 38
            echo "            ";
        }
        // line 39
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend/Parts:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  93 => 38,  90 => 37,  82 => 32,  78 => 31,  74 => 30,  65 => 25,  61 => 21,  57 => 20,  50 => 16,  45 => 13,  43 => 12,  39 => 10,  34 => 8,  29 => 7,  26 => 6,  24 => 5,  19 => 2,);
    }
}
