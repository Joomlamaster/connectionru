<?php

/* ConnectionAdminBundle:User:index.html.twig */
class __TwigTemplate_d7c272f71181be389066605dcbc3e0e6acb11943b0184cf0b79d321f92c36d51 extends Twig_Template
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
            <th>UserName</th>
            <th>Email</th>
            <th>Last Login</th>
            <th>Active</th>
            <th>Created At</th>
            <th>#</th>
        </tr>
        ";
        // line 18
        if ((array_key_exists("users", $context) && (!twig_test_empty((isset($context["users"]) ? $context["users"] : null))))) {
            // line 19
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 20
                echo "                <tr>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "id", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "username", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "email", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["user"], "lastLogin", array(), "any", true, true) && (!(null === $this->getAttribute($context["user"], "lastLogin", array()))))) ? (twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()))) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo ((($this->getAttribute($context["user"], "enabled", array(), "any", true, true) && $this->getAttribute($context["user"], "enabled", array()))) ? ("Yes") : ("No"));
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array())), ""), "html", null, true);
                echo "</td>
                    <td>
                        <ul class=\"nav nav-pills\">
                            <li class=\"dropdown\">
                                <a id=\"drop5\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">Action <span class=\"caret\"></span></a>
                                <ul id=\"menu2\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop5\">
                                    <li role=\"presentation\"><a role=\"menuitem\" target=\"_blank\" tabindex=\"-1\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "id", array()))), "html", null, true);
                echo "\">View</a></li>
                                    ";
                // line 33
                if (($this->getAttribute($context["user"], "enabled", array(), "any", true, true) && $this->getAttribute($context["user"], "enabled", array()))) {
                    // line 34
                    echo "                                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_ban", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">Disable</a></li>
                                    ";
                } else {
                    // line 36
                    echo "                                        <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unban", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">Enable</a></li>
                                    ";
                }
                // line 38
                echo "                                        <li role=\"presentation\"><a role=\"menuitem\" onclick=\"return confirm('Are you sure?');\" tabindex=\"-1\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        // line 46
        echo "    </table>
";
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  134 => 49,  129 => 46,  126 => 45,  112 => 38,  106 => 36,  100 => 34,  98 => 33,  94 => 32,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  62 => 20,  57 => 19,  55 => 18,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
