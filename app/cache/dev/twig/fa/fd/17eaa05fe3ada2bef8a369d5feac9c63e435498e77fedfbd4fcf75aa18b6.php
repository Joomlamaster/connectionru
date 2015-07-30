<?php

/* ConnectionUserBundle:User:latest_block.html.twig */
class __TwigTemplate_fafd17eaa05fe3ada2bef8a369d5feac9c63e435498e77fedfbd4fcf75aa18b6 extends Twig_Template
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
        if ((!twig_test_empty((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))))) {
            // line 2
            echo "    <div class=\"people\">
        ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 4
                echo "            <div class=\"face\">
                ";
                // line 5
                if (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "avatar", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "avatar", array()))))) {
                    // line 6
                    echo "                    <img style=\"position: absolute;\" width=\"83px\" height=\"112px\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "avatar", array()), "html", null, true);
                    echo "\">
                ";
                }
                // line 8
                echo "                <div class=\"info redirect\" data-href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "id", array()))), "html", null, true);
                echo "\">
                    <p class=\"name\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
                echo "</p>
                    <p>
\t\t\t\t\t\t";
                // line 11
                ob_start();
                // line 12
                echo "\t\t\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('user_extension')->userAge($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "birthdate", array())), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<span>";
                // line 13
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "gender", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "gender", array()), "name", array()))) : ("")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<span>";
                // line 14
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "state", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "state", array()), "name", array()))) : ("")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 16
                echo "                    </p>
                    ";
                // line 17
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "lookingFor", array(), "any", false, true), "name", array(), "any", true, true)) {
                    // line 18
                    echo "                        <p>Looking for:</p>
                        <p class=\"blue\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "lookingFor", array()), "name", array()), "html", null, true);
                    echo "</p>
                    ";
                }
                // line 21
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "id", array()))), "html", null, true);
                echo "\">see this user</a>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        <a class=\"more pull-right\" href=\"";
            echo $this->env->getExtension('routing')->getPath("user_search");
            echo "\">More ></a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:User:latest_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  78 => 21,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  60 => 14,  56 => 13,  51 => 12,  49 => 11,  44 => 9,  39 => 8,  33 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
