<?php

/* ConnectionMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_297088ab77fb8eddc75b20cb0f385710d1cf92ecbc42bc5e35e6634ea970ec16 extends Twig_Template
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
        echo "<table class=\"table\">

    <thead>
        <tr>
            <th>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("subject", array(), "MessageBundle");
        echo "</th>
            <th>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("starter", array(), "MessageBundle");
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("startdate", array(), "MessageBundle");
        echo "</th>
            <th>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("messages", array(), "MessageBundle");
        echo "</th>
            <th>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("last_message", array(), "MessageBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("actions", array(), "MessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    ";
        // line 16
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 18
                echo "                <tr ";
                echo (($this->env->getExtension('fos_message')->isRead($context["thread"])) ? ("") : ("style=\"font-weight: bold\""));
                echo ">
                <td>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "
                    </a>
                </td>
                <td>
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", array()), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 31
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 34
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 35
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("goto_last", array(), "MessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 38
                    echo $this->env->getExtension('translator')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "MessageBundle");
                    // line 39
                    echo "                        <br />
                        ";
                    // line 40
                    echo $this->env->getExtension('translator')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "MessageBundle");
                    // line 41
                    echo "                    ";
                } else {
                    // line 42
                    echo "                        ----
                    ";
                }
                // line 44
                echo "                </td>
                <td>
                    ";
                // line 46
                if ($this->env->getExtension('fos_message')->canDeleteThread($context["thread"])) {
                    // line 47
                    echo "                        ";
                    if ($this->env->getExtension('fos_message')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 48
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 49
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("undelete", array(), "MessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 50
                        echo "                        ";
                    } else {
                        // line 51
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 52
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete", array(), "MessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                        ";
                    }
                    // line 54
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <input class=\"btn btn-danger\" type=\"submit\" value=\"";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\" />
                        </form>
                    ";
                }
                // line 58
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
        } else {
            // line 62
            echo "        <tr>
            <td colspan=\"6\">
                <em>";
            // line 64
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_thread", array(), "MessageBundle");
            echo "</em>
            </td>
        </tr>
    ";
        }
        // line 68
        echo "
    </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "ConnectionMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 68,  184 => 64,  180 => 62,  177 => 61,  169 => 58,  163 => 55,  158 => 54,  155 => 53,  150 => 52,  145 => 51,  142 => 50,  137 => 49,  132 => 48,  129 => 47,  127 => 46,  123 => 44,  119 => 42,  116 => 41,  114 => 40,  111 => 39,  109 => 38,  98 => 35,  96 => 34,  90 => 31,  84 => 28,  78 => 25,  71 => 21,  67 => 20,  61 => 18,  56 => 17,  54 => 16,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
