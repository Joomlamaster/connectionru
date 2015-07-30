<?php

/* ConnectionEventBundle:Event:view.html.twig */
class __TwigTemplate_a04c095b2b8cf559b890f4da50ad21869196a6d4926a96242728d531a1e61c89 extends Twig_Template
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
            'popup' => array($this, 'block_popup'),
            'javascript' => array($this, 'block_javascript'),
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
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionevent/css/google/map.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 10
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Event</li>
            <li>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"row\">
        <div class=\"col-xs-8\">
            <div class=\"row\">
                <div class=\"col-xs-10\">
                    <h4>";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array())) : ("")), "html", null, true);
        echo "</h4>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <img class=\"event-image img-rounded\" width=\"190\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image", array(), "any", false, true), "path", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image", array()), "path", array())) : ("")), "html", null, true);
        echo "\" alt=\"\"/>
                            <strong>Share this event</strong>
                            <div class=\"social-share\">
                                <a id=\"tell-a-friend\" href=\"#\" class=\"btn btn-xs btn-info\" title=\"Share with a friend\">
                                    <span class=\"glyphicon glyphicon-share\"></span>
                                </a>
                                <a href=\"#\">
                                    <div class=\"fb-share-button\" data-type=\"button_count\" data-href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array())), true), "html", null, true);
        echo "\"></div>
                                </a>
                                <a href=\"#\">
                                    ";
        // line 37
        echo $this->env->getExtension('social_extension')->pinterestShareButton($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), (($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image", array(), "any", false, true), "absoluteDir", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image", array()), "absoluteDir", array())) : ("")), (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array())) : ("")));
        echo "
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-7 details\">
                            <time>";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "eventDate", array(), "any", true, true)) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventDate", array()))) : ("")), "html", null, true);
        echo "</time>
                            <address>
                                <strong>Venue</strong><br>
                                ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "html", null, true);
        echo "<br>
                                ";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "country", array(), "any", false, true), "name", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "country", array()), "name", array())) : ("")), "html", null, true);
        echo "<br>
                                ";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "state", array(), "any", false, true), "name", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "state", array()), "name", array())) : ("")), "html", null, true);
        echo "<br>
                                <em><a href=\"#\">Info</a> and <a class=\"show-event-map\" href=\"#\">map</a></em>
                            </address>
                            <a class=\"return\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("event_search");
        echo "\"><div class=\"sprite sprite-return-events\"></div>Return to events</a>

                            <h6>Event Description:</h6>
                            <em>
                                ";
        // line 54
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "description", array(), "any", true, true)) ? ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array())) : ("")), "html", null, true);
        echo "
                            </em>
                            ";
        // line 56
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 57
            echo "                                <div class=\"controls\">
                                    <div class=\"going\">
                                        <input type=\"checkbox\" data-action=\"subscribe\" ";
            // line 59
            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "hasParticipant", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) ? ("checked") : (""));
            echo "/>I'm going
                                    </div>
                                    <div class=\"going\">
                                        <input type=\"checkbox\" data-action=\"interested\" ";
            // line 62
            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "hasInterested", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) ? ("checked") : (""));
            echo "/>Interested
                                    </div>
                                </div>
                            ";
        }
        // line 66
        echo "                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sx-12\">
                            <div class=\"add-comment-container\">
                                ";
        // line 71
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "comments", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "comments", array()))))) {
            // line 72
            echo "                                <div class=\"block-title\"><h4>Comments:</h4></div>
                                <div class=\"comments\">
                                        ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 75
                echo "                                            <div class=\"comment\" >
                                                <div class=\"author\"><a href=\"#\">";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array())), "html", null, true);
                echo "</a></div>
                                                <div class=\"content\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
                echo "</div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                </div>
                                ";
        } else {
            // line 82
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 83
                echo "                                        <div class=\"block-title\"><h4>Comments:</h4></div>
                                    ";
            }
            // line 85
            echo "                                    <div class=\"comments hidden\"></div>
                                ";
        }
        // line 87
        echo "                                ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 88
            echo "                                    <div class=\"add-comment-form\">
                                        ";
            // line 89
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ConnectionEventBundle:Comment:addCommentForm", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))));
            echo "
                                    </div>
                                ";
        }
        // line 92
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 96
        if ((array_key_exists("owner", $context) && (!twig_test_empty((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")))))) {
            // line 97
            echo "                    <div class=\"col-xs-2 author\">
                        <div class=\"block-title\">Posted:</div>
                        <div class=\"people clearfix\">
                            <div class=\"face postet-by\">
                                <p class=\"name\"><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "profile", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "username", array()), "html", null, true);
            echo "</a></p>
                                <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "profile", array()), "id", array()))), "html", null, true);
            echo "\">
                                    <img width=\"82px\" src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "profile", array()), "avatar", array()), "html", null, true);
            echo "\">
                                </a>
                            </div>
                        </div>
                        <div class=\"event-stats\">
                            <div>
                                view<br/>
                                ";
            // line 110
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "viewed", array(), "any", true, true)) ? ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "viewed", array())) : ("")), "html", null, true);
            echo "
                            </div>
                            <div>
                                comment<br/>
                                ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "countComments", array()), "html", null, true);
            echo "
                            </div>
                            <div ";
            // line 116
            echo ((($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "countParticipants", array()) > 0)) ? ("class=\"going-counter ajax-stat\"") : (""));
            echo " >
                                going<br/>
                                ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "countParticipants", array()), "html", null, true);
            echo "
                            </div>
                            <div ";
            // line 120
            echo ((($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "countInteresteds", array()) > 0)) ? ("class=\"interested-counter ajax-stat\"") : (""));
            echo " >
                                interested<br/>
                                ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "countInteresteds", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 127
        echo "            </div>
        </div>
        ";
        // line 129
        if ((array_key_exists("upcomingEvents", $context) && (!twig_test_empty((isset($context["upcomingEvents"]) ? $context["upcomingEvents"] : $this->getContext($context, "upcomingEvents")))))) {
            // line 130
            echo "            ";
            echo twig_include($this->env, $context, "ConnectionEventBundle:Event:upcoming_events.html.twig", array("upcomingEvents" => (isset($context["upcomingEvents"]) ? $context["upcomingEvents"] : $this->getContext($context, "upcomingEvents")), "eventId" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array())));
            echo "
        ";
        }
        // line 132
        echo "    </div>
";
    }

    // line 134
    public function block_popup($context, array $blocks = array())
    {
        // line 135
        echo "    ";
        $this->displayParentBlock("popup", $context, $blocks);
        echo "
    <div class=\"event-map hidden\">
        ";
        // line 137
        echo twig_include($this->env, $context, "ConnectionEventBundle:Popup:google_map.html.twig");
        echo "
    </div>
    <div class=\"going-interested hidden\"></div>
";
    }

    // line 141
    public function block_javascript($context, array $blocks = array())
    {
        // line 142
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionevent/js/event.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            EM.social.share.facebook();
            EM.user.init(\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_ajax_going", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_ajax_interested", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\");
            EM.subscriber.init(
                    \"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_subscribe", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\",
                    \"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_unsubscribe", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\",
                    \"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_interested", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\",
                    \"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_not_interested", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\"
            );
            EM.comment.init(\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("add_event_comment");
        echo "\");
            google.maps.event.addDomListener(window, 'load', EM.map.init(\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lat", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lng", array()), "html", null, true);
        echo "\"));
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionEventBundle:Event:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 157,  373 => 156,  368 => 154,  364 => 153,  360 => 152,  356 => 151,  349 => 149,  342 => 145,  335 => 142,  332 => 141,  324 => 137,  318 => 135,  315 => 134,  310 => 132,  304 => 130,  302 => 129,  298 => 127,  290 => 122,  285 => 120,  280 => 118,  275 => 116,  270 => 114,  263 => 110,  253 => 103,  249 => 102,  243 => 101,  237 => 97,  235 => 96,  229 => 92,  223 => 89,  220 => 88,  217 => 87,  213 => 85,  209 => 83,  206 => 82,  202 => 80,  193 => 77,  187 => 76,  184 => 75,  180 => 74,  176 => 72,  174 => 71,  167 => 66,  160 => 62,  154 => 59,  150 => 57,  148 => 56,  143 => 54,  136 => 50,  130 => 47,  126 => 46,  122 => 45,  116 => 42,  108 => 37,  102 => 34,  92 => 27,  86 => 24,  80 => 20,  77 => 19,  69 => 15,  64 => 13,  60 => 11,  57 => 10,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,);
    }
}
