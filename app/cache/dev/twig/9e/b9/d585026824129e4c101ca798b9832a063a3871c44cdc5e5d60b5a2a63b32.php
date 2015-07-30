<?php

/* ConnectionUserBundle:Registration:extended_register.html.twig */
class __TwigTemplate_9eb9d585026824129e4c101ca798b9832a063a3871c44cdc5e5d60b5a2a63b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionUserBundle::registration_layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionUserBundle::registration_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_theme($context, array $blocks = array())
    {
        echo "create-profile";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if (array_key_exists("form", $context)) {
            // line 6
            echo "    ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "ConnectionUserBundle:Registration:fields.html.twig"));
            // line 7
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register master_slave form-horizontal")));
            echo "
        <div class=\"col-xs-9\">
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-6\">
                    ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-6\">
                    ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "aboutMe", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-6\">
                    ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "interestsAndHobbies", array()), 'row');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-4\">
                    ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "gender", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-4\">
                    ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "seek", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-4 birthdate\">
                    ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "birthdate", array()), 'row');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-4\">
                    <div class=\"master_slave\">
                        <div>
                            ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "country", array()), 'row', array("attr" => array("class" => "selectpicker master")));
            echo "
                        </div>
                        ";
            // line 50
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array(), "any", false, true), "state", array(), "any", true, true)) {
                // line 51
                echo "                            <div class=\"slave_block\">
                                ";
                // line 52
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "state", array()), 'row', array("attr" => array("class" => "selectpicker slave")));
                echo "
                            </div>
                        ";
            }
            // line 55
            echo "                    </div>
                </div>
                <div class=\"col-xs-4\">
                    <div>
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "city", array()), 'row');
            echo "
                    </div>
                </div>
                <div class=\"col-xs-4\">
                    <div>
                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "zip", array()), 'row');
            echo "
                    </div>
                </div>
                <div class=\"col-xs-4\" style=\"margin-top:7px;\">
                        <div>
                            ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "originallyFrom", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                        </div>
                </div>
                <div class=\"col-xs-4\" style=\"margin-top:7px;\">
                        <div>
                            ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "originallyFromCity", array()), 'row');
            echo "
                        </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "seek", array()), 'row');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-4\">
                    ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "lookingFor", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-4\">
                    ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "maritalStatus", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-4\">
                    ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "languages", array()), 'row', array("attr" => array("class" => "two-columns")));
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "height", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "bodyType", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "eyeColor", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "hairColor", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    ";
            // line 110
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "smoking", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
            // line 113
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "drinking", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "income", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
\t\t\t\t</div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    ";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "education", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-4\">
                    ";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "educationIvyLeague", array()), 'row');
            echo "
                </div>
                <div class=\"col-xs-3 ivy-league-text hidden\">
                    ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "ivyLeagueUniversity", array()), 'row');
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    ";
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "profession", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-4\">
                    ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "haveChildren", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-4\">
                    ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "wantChildren", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    ";
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "livesWithChildren", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-6\">
                    ";
            // line 146
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "openToPersonWithKids", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                    ";
            // line 151
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "religion", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "ethnicity", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "zodiac", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
                </div>
            </div>
            ";
            // line 165
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <div class=\"row\">
                        ";
            // line 168
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agree", array()), 'row');
            echo "
                    </div>
                </div>
            </div><br/><br/>
            <div class=\"row\">
                <div class=\"col-xs-3\">
                </div>
                <div class=\"col-xs-9\">
                    ";
            // line 176
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn-gradient"), "label" => "register"));
            echo "
                </div>
            </div>
            <div class=\"col-xs-5\"></div>
            ";
            // line 180
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registrationType", array()), 'row', array("value" => "extended"));
            echo "
            ";
            // line 181
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
        </div>
    ";
        }
        // line 184
        echo "
    <script type=\"text/javascript\">
        window.onload = function(){
           handleIvyLeague();
           handleOriginallyFrom('#";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "originallyFrom", array()), "vars", array()), "id", array()), "html", null, true);
        echo "', '#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "originallyFromCity", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
        }

        preLoadSlaveFeedback = function(slaveBlock){
            if(slaveBlock.length){
                \$(slaveBlock).html('');
            }
        }

        loadSlaveFeedback = function(){
            \$('#fos_user_registration_form_profile_state').selectpicker();
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Registration:extended_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 188,  350 => 184,  344 => 181,  340 => 180,  333 => 176,  322 => 168,  317 => 165,  311 => 157,  305 => 154,  299 => 151,  291 => 146,  285 => 143,  277 => 138,  271 => 135,  265 => 132,  257 => 127,  251 => 124,  245 => 121,  237 => 116,  231 => 113,  225 => 110,  217 => 105,  211 => 102,  205 => 99,  199 => 96,  191 => 91,  185 => 88,  179 => 85,  171 => 80,  162 => 74,  154 => 69,  146 => 64,  138 => 59,  132 => 55,  126 => 52,  123 => 51,  121 => 50,  116 => 48,  106 => 41,  100 => 38,  94 => 35,  86 => 30,  80 => 27,  72 => 22,  66 => 19,  58 => 14,  52 => 11,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
