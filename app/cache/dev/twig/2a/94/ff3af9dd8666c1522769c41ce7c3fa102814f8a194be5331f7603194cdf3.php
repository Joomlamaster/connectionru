<?php

/* ConnectionAdminBundle:Event:commentsView.html.twig */
class __TwigTemplate_2a94ff3af9dd8666c1522769c41ce7c3fa102814f8a194be5331f7603194cdf3 extends Twig_Template
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
            <th>Author</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>#</th>
        </tr>
        ";
        // line 16
        if ((array_key_exists("comments", $context) && (!twig_test_empty((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))))) {
            // line 17
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 18
                echo "                <tr>
                    <td>";
                // line 19
                echo twig_escape_filter($this->env, (($this->getAttribute($context["comment"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["comment"], "id", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 20
                echo twig_escape_filter($this->env, (($this->getAttribute($context["comment"], "author", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["comment"], "author", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, (($this->getAttribute($context["comment"], "comment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["comment"], "comment", array()), "")) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array())), ""), "html", null, true);
                echo "</td>
                    <td>
                        <ul class=\"nav nav-pills\">
                            <li class=\"dropdown\">
                                <a id=\"drop5\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">Action <span class=\"caret\"></span></a>
                                <ul id=\"menu2\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop5\">
                                    <li role=\"presentation\"><a role=\"menuitem\" target=\"_blank\" tabindex=\"-1\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "event", array()), "id", array()))), "html", null, true);
                echo "\">View</a></li>
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </table>
";
    }

    // line 40
    public function block_javascript($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ConnectionAdminBundle:Event:commentsView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  109 => 40,  104 => 37,  101 => 36,  88 => 29,  84 => 28,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  55 => 17,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
