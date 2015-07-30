<?php

/* ConnectionUserBundle:Profile/Part/Edit:personal_info.html.twig */
class __TwigTemplate_d260335316a0ecf0c343f9c3e20e6912b51933b08110a2725886448c7ad46fab extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "ConnectionUserBundle:Registration:fields.html.twig"));
        // line 2
        echo "
";
        // line 3
        if (array_key_exists("form", $context)) {
            // line 4
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("edit_user_profile_edit"), "method" => "POST", "attr" => array("class" => "master_slave edit-personal-info")));
            echo "
    <div class=\"row\">
        <div class=\"col-xs-6\">
            ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "aboutMe", array()), 'row');
            echo "
        </div>
        <div class=\"col-xs-6\">
            ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "interestsAndHobbies", array()), 'row');
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-4\">
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "gender", array()), 'row');
            echo "
        </div>
        <div class=\"col-xs-4\">
            ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "seek", array()), 'row');
            echo "
        </div>
        <div class=\"col-xs-4 birthdate\">
            ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "birthdate", array()), 'row');
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-4\">
            <div class=\"master_slave\">
                <div>
                    ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "country", array()), 'row', array("attr" => array("class" => "selectpicker master")));
            echo "
                </div>
                ";
            // line 30
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array(), "any", false, true), "state", array(), "any", true, true)) {
                // line 31
                echo "                    <div class=\"slave_block\" style=\"margin-top:4px;\">
                        ";
                // line 32
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "state", array()), 'row', array("attr" => array("class" => "selectpicker slave")));
                echo "
                    </div>
                ";
            }
            // line 35
            echo "            </div>
        </div>
         <div class=\"col-xs-4\">
            <div>
                ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "city", array()), 'row');
            echo "
            </div>
        </div>
        <div class=\"col-xs-4\">
            <div>
                ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "zip", array()), 'row');
            echo "
            </div>
        </div>
        <div class=\"col-xs-4\">
            <div>
                ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "originallyFrom", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
            </div>
        </div>
        <div class=\"col-xs-4\">
            <div>
                ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "originallyFromCity", array()), 'row');
            echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-4\">
            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "lookingFor", array()), 'row', array("attr" => array("style" => "max-width: 125px;")));
            echo "
        </div>
        <div class=\"col-xs-4\">
            ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "maritalStatus", array()), 'row', array("attr" => array("style" => "max-width: 125px;")));
            echo "
        </div>
        <div class=\"col-xs-4 multi-column-select\">
            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "languages", array()), 'row');
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-3\">
            ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "height", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "bodyType", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "eyeColor", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "hairColor", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-3\">
            ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "smoking", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "drinking", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-4\">
            ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "education", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-4\">
            ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "educationIvyLeague", array()), 'row', array("attr" => array("class" => "selectpicker ivy-league-checkbox")));
            echo "
        </div>
        <div class=\"col-xs-4 ivy-league-text hidden\">
            ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "ivyLeagueUniversity", array()), 'row');
            echo "
    </div>
    <div class=\"row\">
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "profession", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "income", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6\">
            ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "haveChildren", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-6\">
            ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "wantChildren", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6\">
            ";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "livesWithChildren", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-6\">
            ";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "openToPersonWithKids", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-3\">
            ";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "religion", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "ethnicity", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
        <div class=\"col-xs-3\">
            ";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "zodiac", array()), 'row', array("attr" => array("class" => "selectpicker")));
            echo "
        </div>
    </div><br/><br/>
    <div class=\"row\">
        <div class=\"col-xs-3\">
        </div>
        <div class=\"col-xs-9\">
            ";
            // line 141
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn-gradient"), "label" => "update"));
            echo "
        </div>
    </div>
    <div class=\"col-xs-5\"></div>
    ";
            // line 145
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
    <div class=\"row\">
        <div class=\"col-xs-12 profile-visibility\">
            ";
            // line 148
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "hide", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hide", array()))) {
                // line 149
                echo "                <p>To show my profile for other users please click here (<a href=\"";
                echo $this->env->getExtension('routing')->getPath("profile_visibility_show");
                echo "\">Click here</a>).<br>
            ";
            } else {
                // line 151
                echo "                <p>To hide my profile from other users please click here (<a href=\"";
                echo $this->env->getExtension('routing')->getPath("profile_visibility_hide");
                echo "\">Click here</a>), Hiding your profile will remove you from all searches.<br>
            ";
            }
            // line 153
            echo "            To remove your profile completely please click here (<a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_delete");
            echo "\">Click here</a>).
            </p>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/Edit:personal_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 153,  289 => 151,  283 => 149,  281 => 148,  275 => 145,  268 => 141,  258 => 134,  252 => 131,  246 => 128,  238 => 123,  232 => 120,  224 => 115,  218 => 112,  210 => 107,  204 => 104,  196 => 99,  190 => 96,  184 => 93,  176 => 88,  170 => 85,  162 => 80,  156 => 77,  150 => 74,  144 => 71,  136 => 66,  130 => 63,  124 => 60,  115 => 54,  107 => 49,  99 => 44,  91 => 39,  85 => 35,  79 => 32,  76 => 31,  74 => 30,  69 => 28,  59 => 21,  53 => 18,  47 => 15,  39 => 10,  33 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
