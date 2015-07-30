<?php

/* ConnectionEventBundle:Search:search.html.twig */
class __TwigTemplate_d8c03b63b913fb465ddc8a1c8cdf3f92a45423d976d5ead6aab2cbf7cf5e59ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_theme($context, array $blocks = array())
    {
        echo "search-event";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/search.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/jquery-ui-1.11.1/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 10
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"container breadcrumbs\">
        <div class=\"col-xs-6\">
            <ul class=\"col-xs-6\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
                <li>Search Event</li>
            </ul>
        </div>
        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 19
            echo "            <div class=\"col-xs-6\">
                <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("event_manage");
            echo "\" class=\"btn btn-info pull-right\" style=\"margin-top: 5px;\">
                    <span class=\"glyphicon glyphicon-plus-sign\"></span> Add Event
                </a>
            </div>
        ";
        }
        // line 25
        echo "    </div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <h4>Search</h4>
    <div class=\"row\">
        <div class=\"search-form\">
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "search", array()), 'widget');
        echo "
                <div class=\"form-inline\">
                    <div class=\"select-inline\">
                        <label>Event Date:</label>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eventDatePeriod", array()), 'widget', array("attr" => array("class" => "selectpicker event-date")));
        echo " or
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eventDateFrom", array()), 'widget');
        echo "-
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eventDateTo", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-inline\">
                    <div class=\"form-group\">
                        <label class=\"control-label required\">Category:</label>
                        <div class=\"checkbox-inline\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-inline text-center\">
                    <button type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span> Search</button>
                </div>
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"row filters\">
        ";
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        // line 59
        echo "        ";
        // line 60
        echo "        ";
        // line 61
        echo "        ";
        // line 62
        echo "        <div><a class=\"clear-filter filter\" href=\"";
        echo $this->env->getExtension('routing')->getPath("event_search");
        echo "\">Clear all filters</a></div>
    </div>
    <div class=\"row results-line\"><span>results found</span></div>
    ";
        // line 65
        if ((array_key_exists("topEvents", $context) && (!twig_test_empty((isset($context["topEvents"]) ? $context["topEvents"] : null))))) {
            // line 66
            echo "    <div class=\"row found-1\">
        ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topEvents"]) ? $context["topEvents"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 68
                echo "            <div class=\"col-xs-2\">
                <div class=\"event-small\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <a class=\"title\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 73
                if ($this->getAttribute($context["event"], "image", array())) {
                    // line 74
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "image", array()), "path", array()), "html", null, true);
                    echo "\" alt=\"\"/>
                                ";
                } else {
                    // line 76
                    echo "                                    <div class=\"no-image-event\"></div>
                                ";
                }
                // line 78
                echo "                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <time>";
                // line 82
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array())), "html", null, true);
                echo "</time>
                        <a class=\"title\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
                // line 84
                if (call_user_func_array($this->env->getTest('ownedByCurrentUser')->getCallable(), array($context["event"]))) {
                    // line 85
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_manage", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-gradient\" title=\"Edit this event\">Edit</a>
\t\t\t\t\t\t";
                }
                // line 87
                echo "                        <br/>
                        ";
                // line 88
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "profile", array(), "any", false, true), "id", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "username", array(), "any", true, true))) {
                    // line 89
                    echo "                            <em>Posted:</em>
                            <time>";
                    // line 90
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "createdAt", array(), "any", true, true)) ? (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "createdAt", array()))) : ("")), "html", null, true);
                    echo "</time>
                            <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "user", array()), "profile", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "user", array()), "username", array()), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 93
                echo "
                    </div>

                </div>

            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "    </div>
    ";
        }
        // line 102
        echo "    <div class=\"found-2\">
        <div class=\"row\">
            ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 105
            echo "                <div class=\"col-xs-4 event-small\">
                    <div class=\"event-small\">
                        ";
            // line 107
            if ($this->getAttribute($context["event"], "image", array())) {
                // line 108
                echo "                            <div class=\"col-xs-4\">
                                <img src=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"\"/>
                            </div>
                        ";
            }
            // line 112
            echo "                        <div class=\"col-xs-8\">
                            <time>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array())), "html", null, true);
            echo "</time>
                            <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-gradient\">View</a>
\t\t\t\t\t\t\t";
            // line 115
            if (call_user_func_array($this->env->getTest('ownedByCurrentUser')->getCallable(), array($context["event"]))) {
                // line 116
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_manage", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-gradient\" title=\"Edit this event\">Edit</a>
\t\t\t\t\t\t\t";
            }
            // line 118
            echo "                            <br/>
                            ";
            // line 119
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "profile", array(), "any", false, true), "id", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["event"], "user", array(), "any", false, true), "username", array(), "any", true, true))) {
                // line 120
                echo "                                <em>Posted:</em>
                                <time>";
                // line 121
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "createdAt", array(), "any", true, true)) ? (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "createdAt", array()))) : ("")), "html", null, true);
                echo "</time>
                                <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "user", array()), "profile", array()), "id", array()))), "html", null, true);
                echo "\" class=\"name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "user", array()), "username", array()), "html", null, true);
                echo "</a>
                            ";
            }
            // line 124
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "        </div>
     </div>
    ";
        // line 130
        if (((array_key_exists("pages", $context) && ((isset($context["pages"]) ? $context["pages"] : null) > 1)) && array_key_exists("currentPage", $context))) {
            // line 131
            echo "        <div class=\"row\">
            <div class=\"paginator\">
                ";
            // line 133
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 134
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_search", array("page" => $context["page"])), "html", null, true);
                echo "\" ";
                echo ((($context["page"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("class='page current'") : (""));
                echo " >";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Search:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 136,  333 => 134,  329 => 133,  325 => 131,  323 => 130,  319 => 128,  310 => 124,  303 => 122,  299 => 121,  296 => 120,  294 => 119,  291 => 118,  285 => 116,  283 => 115,  279 => 114,  275 => 113,  272 => 112,  266 => 109,  263 => 108,  261 => 107,  257 => 105,  253 => 104,  249 => 102,  245 => 100,  233 => 93,  226 => 91,  222 => 90,  219 => 89,  217 => 88,  214 => 87,  208 => 85,  206 => 84,  200 => 83,  196 => 82,  190 => 78,  186 => 76,  180 => 74,  178 => 73,  174 => 72,  168 => 68,  164 => 67,  161 => 66,  159 => 65,  152 => 62,  150 => 61,  148 => 60,  146 => 59,  144 => 58,  142 => 57,  135 => 52,  125 => 45,  115 => 38,  111 => 37,  107 => 36,  100 => 32,  96 => 31,  91 => 28,  88 => 27,  83 => 25,  75 => 20,  72 => 19,  70 => 18,  63 => 14,  58 => 11,  55 => 10,  49 => 7,  45 => 6,  40 => 5,  37 => 4,  31 => 3,);
    }
}
