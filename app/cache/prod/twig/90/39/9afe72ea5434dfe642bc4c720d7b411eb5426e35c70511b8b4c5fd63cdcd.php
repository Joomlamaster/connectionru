<?php

/* ConnectionAdminBundle:Default:contact.html.twig */
class __TwigTemplate_90399afe72ea5434dfe642bc4c720d7b411eb5426e35c70511b8b4c5fd63cdcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if ((array_key_exists("contacts", $context) && (!twig_test_empty((isset($context["contacts"]) ? $context["contacts"] : null))))) {
            // line 4
            echo "        <table class=\"table table-bordered\">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 13
                echo "                <tr>
                    <td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "subject", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "message", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionAdminBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  48 => 13,  44 => 12,  34 => 4,  31 => 3,  28 => 2,);
    }
}
