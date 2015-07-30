<?php

/* ConnectionUserBundle:Search:result.html.twig */
class __TwigTemplate_d9bee453b03a3ba9919ff4495cfdb98a3edcf6343279834bf9d4765d1a27695f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "ConnectionUserBundle:Search:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_theme($context, array $blocks = array())
    {
        echo "search-event";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Search</li>
        </ul>
    </div>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/css/search.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/css/bootstrapselect/bootstrap-select.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"";
        // line 22
        if ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchType", array()), "vars", array()), "data", array())) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchType", array()), "vars", array()), "data", array()) == "quick"))) {
            echo "active";
        }
        echo "\">
            <a href=\"#\" role=\"tab\" data-toggle=\"tab\" id=\"quick-search-btn\">Quick Search</a>
        </li>
        <li class=\"";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchType", array()), "vars", array()), "data", array()) == "extended")) {
            echo "active";
        }
        echo "\">
            <a href=\"#\" role=\"tab\" data-toggle=\"tab\" id=\"extended-search-btn\">Extended Search</a>
        </li>
    </ul>


    ";
        // line 32
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("user_search"), "attr" => array("class" => "search-result master_slave", "id" => "search-form")));
        echo "
    <div id=\"search-tab\" class=\"tab-content search-form\" style=\"display: none;\">

        ";
        // line 36
        echo "        <div class=\"tab-pane active\" id=\"quick-search-tab\">
            ";
        // line 38
        echo "            <div class=\"row\">
                <div class=\"col-xs-3\">
                    <div class=\"form-inline\">
                        <div class=\"row\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'row', array("attr" => array("class" => "radio-inline gender")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seek", array()), 'row', array("attr" => array("class" => "radio-inline seek")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-3\">
                    <div class=\"row\" style=\"margin-left:-30px;margin-top:-5px;\">
                        <div class=\"col-xs-6\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageFrom", array()), 'row', array("attr" => array("class" => "select-inline selectpicker", "data-width" => "110px"), "label" => "Age from"));
        echo "
                        </div>
                        <div class=\"col-xs-6\" style=\"margin-left:-8px;\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageTo", array()), 'row', array("attr" => array("class" => "select-inline selectpicker", "data-width" => "110px"), "label" => "to"));
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lookingFor", array()), 'row', array("attr" => array("class" => "select-inline selectpicker", "title" => "Anything")));
        echo "
                    </div>
                </div>
                <div class=\"col-xs-6\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-inline\">
                            <div class=\"row\">
                                <div class=\"master_slave\">
                                    <div>
                                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row', array("attr" => array("class" => "selectpicker master")));
        echo "
                                    </div>
                                    ";
        // line 70
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array(), "any", true, true)) {
            // line 71
            echo "                                        <div class=\"slave_block state\">
                                            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'row', array("attr" => array("class" => "selectpicker slave")));
            echo "
                                        </div>
                                    ";
        }
        // line 75
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-9\">
                        <div class=\"form-inline\">
                            <div class=\"row\">
                                <div style=\"margin-left:12px;\">
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'label');
        echo "
                                </div>
                                <div>
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget', array("attr" => array("class" => "select-inline")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 95
        echo "
        ";
        // line 97
        echo "        <div class=\"tab-pane ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchType", array()), "vars", array()), "data", array()) == "extended")) {
            echo "active";
        }
        echo "\" id=\"extended-search-tab\">
           <div class=\"row\">
                <div class=\"col-xs-4\">
                    <div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "education", array()), 'row', array("attr" => array("class" => "select-inline selectpicker", "data-selected-text-format" => "count>2")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div  class=\"row\">
\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "educationIvyLeague", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
\t\t\t\t\t\t</div>
                        <div class=\"row\">
                            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haveChildren", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wantChildren", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "openToPersonWithKids", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "smoking", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
\t\t\t\t\t\t</div>
                    </div>
                </div>
                <div class=\"col-xs-4\">
                    <div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maritalStatus", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minimumHeight", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bodyType", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
\t\t\t\t\t\t</div>
                        <div class=\"row\">
                            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eyeColor", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hairColor", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "drinking", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-4\">
                    <div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
\t\t\t\t\t\t</div>
                        <div class=\"row\">
                            ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "income", array()), 'row', array("attr" => array("class" => "inline-labels selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "religion", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ethnicity", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                        <div class=\"row\">
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zodiac", array()), 'row', array("attr" => array("class" => "select-inline selectpicker")));
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchType", array()), 'row', array("attr" => array("class" => "search-type")));
        echo "
        </div>
        <div class=\"row\">
            <div class=\"form-inline text-center\">
                <button type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span> Search</button>
                <button type=\"reset\" ><span class=\"glyphicon glyphicon-trash\"></span> Reset</button>
            </div>
        </div>
        ";
        // line 173
        echo "
    </div>
    ";
        // line 175
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    ";
        // line 177
        echo "
    <div class=\"row results-line\"><span>results found</span></div>
    ";
        // line 179
        if ((array_key_exists("users", $context) && (!twig_test_empty((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")))))) {
            // line 180
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 181
                echo "            <div class=\"row search-result-profile\">
                <div class=\"col-xs-12 search-result-profile-container\">
                    <div class=\"col-xs-3 search-result-profile-photo\">
                        <a class=\"title\" href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "id", array()))), "html", null, true);
                echo "\">
                            <img style=\"width: 150px; overflow: hidden;\" src=\"";
                // line 185
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "avatar", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "avatar", array())) : ("")), "html", null, true);
                echo "\" alt=\"\"/>
                        </a>
                    </div>
                    <div class=\"col-xs-9 search-result-profile-info\">
                        <div class=\"col-xs-12\">
                            <div class=\"col-xs-6\">
                                <h4>
                                    <a class=\"title\" href=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "id", array()))), "html", null, true);
                echo "\">
                                        ";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
                echo "
                                    </a>
                                </h4>
\t\t\t\t\t\t\t\t";
                // line 196
                ob_start();
                // line 197
                echo "\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('user_extension')->userAge($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "birthdate", array())), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 199
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "gender", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "gender", array()), "name", array()))) : ("")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 200
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "city", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "city", array()))))) ? ((", " . $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "city", array()))) : ("")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 201
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "state", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "state", array()), "name", array()))) : ("")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 202
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "country", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "country", array()), "name", array()))) : ("")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t<b>Seeking</b>: <span>";
                // line 205
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "seek", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "seek", array(), "any", false, true), "name", array()), "")) : ("")), "html", null, true);
                echo "</span>
                                        ";
                // line 206
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "lookingFor", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["lookingFor"]) {
                    // line 207
                    echo "                                            <span>";
                    echo twig_escape_filter($this->env, (", " . $this->getAttribute($context["lookingFor"], "name", array())), "html", null, true);
                    echo "</span>
                                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 209
                    echo "                                            <span>, Anything</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lookingFor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t";
                // line 212
                if (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "aboutMe", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "aboutMe", array()))))) {
                    // line 213
                    echo "\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 214
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "aboutMe", array())) > 100)) {
                        // line 215
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "aboutMe", array()), 0, 100), "html", null, true);
                        echo " <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("id" => $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "id", array()))), "html", null, true);
                        echo "\"><span class=\"see-more-link\">>></span></a>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "aboutMe", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t";
                }
                // line 221
                echo "\t\t\t\t\t\t\t\t";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 222
                echo "                            </div>
                            <div class=\"col-xs-6\">
                                ";
                // line 224
                if (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "religion", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "religion", array()))))) {
                    // line 225
                    echo "                                    <h6><b>Religion</b>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "religion", array()), "name", array()), "html", null, true);
                    echo "</h6>
                                ";
                }
                // line 227
                echo "                                ";
                // line 230
                echo "                                ";
                // line 233
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "education", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "education", array()))))) {
                    // line 234
                    echo "                                    <h6><b>Education</b>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "education", array()), "name", array()), "html", null, true);
                    echo "</h6>
                                ";
                }
                // line 236
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "zodiac", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "zodiac", array()))))) {
                    // line 237
                    echo "                                    <h6><b>Zodiac Sign</b>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "zodiac", array()), "name", array()), "html", null, true);
                    echo "</h6>
                                ";
                }
                // line 239
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["user"], "profile", array(), "any", false, true), "languages", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "languages", array()))))) {
                    // line 240
                    echo "                                    <h6><b>Languages spoken</b>: ";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["user"], "profile", array()), "languages", array()), ", "), "html", null, true);
                    echo "</h6>
                                ";
                }
                // line 242
                echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "    ";
        }
        // line 249
        echo "    <div class=\"row\">
        ";
        // line 250
        if ((array_key_exists("nextPage", $context) && (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")))) {
            // line 251
            echo "            <a class=\"btn btn-info pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_search", array("page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")))), "html", null, true);
            echo "\">Next Page</a>
        ";
        }
        // line 253
        echo "    </div>
";
    }

    // line 255
    public function block_javascript($context, array $blocks = array())
    {
        // line 256
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionuser/js/search.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/js/bootstrapselect/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        window.onload = function(){
            \$('#search-form').formInit({
                'userGender': '";
        // line 262
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "profile", array(), "any", false, true), "gender", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "profile", array(), "any", false, true), "gender", array(), "any", false, true), "id", array()), "0")) : ("0")), "html", null, true);
        echo "',
                'userSeek': '";
        // line 263
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "profile", array(), "any", false, true), "seek", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "profile", array(), "any", false, true), "seek", array(), "any", false, true), "id", array()), "0")) : ("0")), "html", null, true);
        echo "',
                'userGenderField': '";
        // line 264
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array()), "0")) : ("0")), "html", null, true);
        echo "',
                'userSeekField': '";
        // line 265
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seek", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seek", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array()), "0")) : ("0")), "html", null, true);
        echo "'
            });

            \$('#search-tab').show();

        }

        preLoadSlaveFeedback = function(slaveBlock){
            if(slaveBlock.length){
                \$(slaveBlock).html('');
            }
        }
        loadSlaveFeedback = function(){
            \$('#connection_search_state').selectpicker();
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 265,  567 => 264,  563 => 263,  559 => 262,  552 => 258,  548 => 257,  543 => 256,  540 => 255,  535 => 253,  529 => 251,  527 => 250,  524 => 249,  521 => 248,  510 => 242,  504 => 240,  501 => 239,  495 => 237,  492 => 236,  486 => 234,  483 => 233,  481 => 230,  479 => 227,  473 => 225,  471 => 224,  467 => 222,  464 => 221,  460 => 219,  454 => 217,  446 => 215,  444 => 214,  441 => 213,  439 => 212,  436 => 211,  429 => 209,  421 => 207,  416 => 206,  412 => 205,  406 => 202,  402 => 201,  398 => 200,  394 => 199,  390 => 198,  387 => 197,  385 => 196,  379 => 193,  375 => 192,  365 => 185,  361 => 184,  356 => 181,  351 => 180,  349 => 179,  345 => 177,  341 => 175,  337 => 173,  326 => 164,  317 => 158,  311 => 155,  305 => 152,  299 => 149,  293 => 146,  283 => 139,  277 => 136,  271 => 133,  265 => 130,  259 => 127,  253 => 124,  243 => 117,  237 => 114,  231 => 111,  225 => 108,  219 => 105,  213 => 102,  202 => 97,  199 => 95,  188 => 86,  182 => 83,  172 => 75,  166 => 72,  163 => 71,  161 => 70,  156 => 68,  144 => 59,  137 => 55,  131 => 52,  121 => 45,  115 => 42,  109 => 38,  106 => 36,  99 => 32,  88 => 25,  80 => 22,  77 => 21,  74 => 20,  68 => 17,  64 => 16,  59 => 15,  56 => 14,  47 => 8,  43 => 6,  40 => 5,  34 => 3,  29 => 2,);
    }
}
