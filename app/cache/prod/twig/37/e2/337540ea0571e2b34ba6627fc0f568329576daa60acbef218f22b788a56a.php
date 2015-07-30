<?php

/* ConnectionAdminBundle:Event:index.html.twig */
class __TwigTemplate_37e2337540ea0571e2b34ba6627fc0f568329576daa60acbef218f22b788a56a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionAdminBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <table class=\"table table-bordered\">
        <tr>
            <th>ID</th>
            <th>Owner</th>
            <th>Comments</th>
            <th>Title</th>
            <th>Contact Email</th>
            <th>Event Date</th>
            <th>Created At</th>
            <th>#</th>
        </tr>
        ";
        // line 19
        if ((array_key_exists("events", $context) && (!twig_test_empty((isset($context["events"]) ? $context["events"] : null))))) {
            // line 20
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 21
                echo "                <tr>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["event"], "id", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "username", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "countComments", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["event"], "countComments", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["event"], "title", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["event"], "email", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array())), ""), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "createdAt", array())), ""), "html", null, true);
                echo "</td>
                    <td>
                        <ul class=\"nav nav-pills\">
                            <li class=\"dropdown\">
                                <a id=\"drop5\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">Action <span class=\"caret\"></span></a>
                                <ul id=\"menu2\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop5\">
                                    <li role=\"presentation\"><a role=\"menuitem\" target=\"_blank\" tabindex=\"-1\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">View</a></li>
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_comments_view", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">View Comments</a></li>
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_delete", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
        }
        // line 44
        echo "    </table>
";
    }

    // line 47
    public function block_javascript($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionAdminBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  128 => 47,  123 => 44,  120 => 43,  107 => 36,  103 => 35,  99 => 34,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  58 => 20,  56 => 19,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
