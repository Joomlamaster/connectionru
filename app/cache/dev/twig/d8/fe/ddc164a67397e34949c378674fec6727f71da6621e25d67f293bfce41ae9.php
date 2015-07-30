<?php

/* ConnectionEventBundle:Event:view_upcoming.html.twig */
class __TwigTemplate_d8feddc164a67397e34949c378674fec6727f71da6621e25d67f293bfce41ae9 extends Twig_Template
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
        echo "view-event";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionevent/css/event.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Event</li>
            <li>Upcoming</li>
        </ul>
    </div>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if ((array_key_exists("upcomingEvents", $context) && (!twig_test_empty((isset($context["upcomingEvents"]) ? $context["upcomingEvents"] : $this->getContext($context, "upcomingEvents")))))) {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["upcomingEvents"]) ? $context["upcomingEvents"] : $this->getContext($context, "upcomingEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 21
                echo "            <div class=\"row\">
                <div class=\"col-xs-8\">
                    <div class=\"row\">
                        <div class=\"col-xs-10\">
                            <h4>";
                // line 25
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "title", array(), "any", true, true)) ? ($this->getAttribute($context["event"], "title", array())) : ("")), "html", null, true);
                echo "</h4>
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">
                                        <img class=\"event-image img-rounded\" width=\"190\" src=\"";
                // line 29
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "image", array(), "any", false, true), "path", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "image", array()), "path", array())) : ("")), "html", null, true);
                echo "\" alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"col-xs-7 details\">
                                    <time>";
                // line 33
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "eventDate", array(), "any", true, true)) ? (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()))) : ("")), "html", null, true);
                echo "</time>
                                    <address>
                                        <strong>Venue</strong><br>
                                        ";
                // line 36
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "country", array(), "any", false, true), "name", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "country", array()), "name", array())) : ("")), "html", null, true);
                echo "<br>
                                        ";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["event"], "state", array(), "any", false, true), "name", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["event"], "state", array()), "name", array())) : ("")), "html", null, true);
                echo "<br>
                                    </address>

                                    <h6>Event Description:</h6>
                                    <em>
                                        ";
                // line 42
                echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "description", array(), "any", true, true)) ? ($this->getAttribute($context["event"], "description", array())) : ("")), "html", null, true);
                echo "
                                    </em>
                                </div>
                            </div>
                        </div>
                        ";
                // line 47
                if (($this->getAttribute($context["event"], "user", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($context["event"], "user", array()))))) {
                    // line 48
                    echo "                            ";
                    $context["owner"] = $this->getAttribute($context["event"], "user", array());
                    // line 49
                    echo "                            <div class=\"col-xs-2 author\">
                                <div class=\"block-title\">Posted:</div>
                                <div class=\"people clearfix\">
                                    <div class=\"face postet-by\">
                                        <p class=\"name\"><a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "profile", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "username", array()), "html", null, true);
                    echo "</a></p>
                                        <img width=\"82px\" src=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "profile", array()), "avatar", array()), "html", null, true);
                    echo "\">
                                    </div>
                                </div>
                                <div class=\"event-stats\">
                                    <div>
                                        view<br/>
                                        ";
                    // line 60
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["event"], "viewed", array(), "any", true, true)) ? ($this->getAttribute($context["event"], "viewed", array())) : ("")), "html", null, true);
                    echo "
                                    </div>
                                    <div>
                                        comment<br/>
                                        ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "countComments", array()), "html", null, true);
                    echo "
                                    </div>
                                    <div>
                                        going<br/>
                                        ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "countParticipants", array()), "html", null, true);
                    echo "
                                    </div>
                                    <div>
                                        interested<br/>
                                        ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "countInteresteds", array()), "html", null, true);
                    echo "
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 77
                echo "                    </div>
                </div>
            </div><hr/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Event:view_upcoming.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  183 => 77,  175 => 72,  168 => 68,  161 => 64,  154 => 60,  145 => 54,  139 => 53,  133 => 49,  130 => 48,  128 => 47,  120 => 42,  112 => 37,  108 => 36,  102 => 33,  95 => 29,  91 => 28,  85 => 25,  79 => 21,  74 => 20,  71 => 19,  68 => 18,  58 => 12,  54 => 10,  51 => 9,  45 => 6,  40 => 5,  37 => 4,  31 => 3,);
    }
}
