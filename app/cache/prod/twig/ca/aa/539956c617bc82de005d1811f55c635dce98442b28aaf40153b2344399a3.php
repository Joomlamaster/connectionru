<?php

/* ConnectionUserBundle:Profile/Part/View:personal_info.html.twig */
class __TwigTemplate_caaa539956c617bc82de005d1811f55c635dce98442b28aaf40153b2344399a3 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-xs-8\">
        <h4>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "userName", array()), "html", null, true);
        echo "</h4>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 8
        if ((!twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastLogin", array())))) {
            // line 9
            echo "            <h6>
                <b>Last login</b>: ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastLogin", array()), "m-d-Y"), "html", null, true);
            echo "
            </h6>
        ";
        }
        // line 13
        echo "\t\t";
        ob_start();
        // line 14
        echo "        <h6>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('user_extension')->userAge($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "birthdate", array())), "html", null, true);
        echo "</span>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "gender", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "gender", array()), "name", array()))) : ("")), "html", null, true);
        echo "</span>
            <span>";
        // line 17
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "city", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "city", array()))))) ? ((", " . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "city", array()))) : ("")), "html", null, true);
        echo "</span>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "state", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "state", array()), "name", array()))) : ("")), "html", null, true);
        echo "</span>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "country", array(), "any", false, true), "name", array(), "any", true, true)) ? ((", " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "country", array()), "name", array()))) : ("")), "html", null, true);
        echo "</span>
        </h6>
        <h6>
            <b>Seeking</b>: <span>";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "seek", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "seek", array(), "any", false, true), "name", array()), "")) : ("")), "html", null, true);
        echo "</span>
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "lookingFor", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lookingFor"]) {
            // line 24
            echo "                <span>";
            echo twig_escape_filter($this->env, (", " . $this->getAttribute($context["lookingFor"], "name", array())), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lookingFor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </h6>
\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 28
        echo "    </div>
    <div class=\"col-md-5\">
        ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "maritalStatus", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "maritalStatus", array()))))) {
            // line 31
            echo "            <h6><b>Marital status</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "maritalStatus", array()), "name", array()), "html", null, true);
            echo "</h6>
        ";
        }
        // line 33
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "religion", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "religion", array()))))) {
            // line 34
            echo "            <h6><b>Religion</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "religion", array()), "name", array()), "html", null, true);
            echo "</h6>
        ";
        }
        // line 36
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "education", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "education", array()))))) {
            // line 37
            echo "            <h6>
\t\t\t\t<b>Education</b>: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "education", array()), "name", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "ivyLeagueUniversity", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "ivyLeagueUniversity", array()))))) {
                // line 40
                echo "\t\t\t\t\t<i class=\"muted\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "ivyLeagueUniversity", array()), "html", null, true);
                echo ")</i>
\t\t\t\t";
            }
            // line 42
            echo "\t\t\t</h6>
        ";
        }
        // line 44
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "profession", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "profession", array()))))) {
            // line 45
            echo "            <h6><b>Profession</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "profession", array()), "name", array()), "html", null, true);
            echo "</h6>
        ";
        }
        // line 47
        echo "    </div>
    <div class=\"col-xs-3\">
        ";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "height", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "height", array()))))) {
            // line 50
            echo "            <h6><b>Height</b>: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('user_extension')->cmToFootViewFormat($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "height", array())), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('user_extension')->cmViewFormat($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "height", array())), "html", null, true);
            echo ")</h6>
        ";
        }
        // line 52
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "languages", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "languages", array()))))) {
            // line 53
            echo "            <h6><b>Languages spoken</b>: ";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "languages", array()), ", "), "html", null, true);
            echo "</h6>
        ";
        }
        // line 55
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "zodiac", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "zodiac", array()))))) {
            // line 56
            echo "            <h6><b>Zodiac Sign</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "zodiac", array()), "name", array()), "html", null, true);
            echo "</h6>
        ";
        }
        // line 58
        echo "    </div>
</div><br/><br/>
<div class=\"row\">
    ";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "aboutMe", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "aboutMe", array()))))) {
            // line 62
            echo "        <div class=\"col-xs-6\">
            <h4>About Me:</h4>
            ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "aboutMe", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 67
        echo "</div><br/>
<div class=\"row\">
    ";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "interestsAndHobbies", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "interestsAndHobbies", array()))))) {
            // line 70
            echo "        <div class=\"col-xs-12\">
            <h6><b>Interests and hobbies</b>:</h6>
            ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "interestsAndHobbies", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 75
        echo "</div><br/><br/>
<div class=\"row\">
    <div class=\"col-xs-6\">
            ";
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "bodyType", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "bodyType", array()))))) {
            // line 79
            echo "                <h6><b>Body type</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "bodyType", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 81
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "eyeColor", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "eyeColor", array()))))) {
            // line 82
            echo "                <h6><b>Eye color</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "eyeColor", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 84
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "hairColor", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "hairColor", array()))))) {
            // line 85
            echo "                <h6><b>Hair color</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "hairColor", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 87
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "smoking", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "smoking", array()))))) {
            // line 88
            echo "                <h6><b>Smoking</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "smoking", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 90
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "drinking", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "drinking", array()))))) {
            // line 91
            echo "                <h6><b>Drinking</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "drinking", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 93
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "hasChildren", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "hasChildren", array()))))) {
            // line 94
            echo "                <h6><b>Has children</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "hasChildren", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 96
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "wantChildren", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "wantChildren", array()))))) {
            // line 97
            echo "                <h6><b>Wants children</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "wantChildren", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 99
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "openToPersonWithKids", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "openToPersonWithKids", array()))))) {
            // line 100
            echo "                <h6><b>Is open to dating a person with kids</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "openToPersonWithKids", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 102
        echo "            ";
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "originallyFrom", array())))) {
            // line 103
            echo "                <h6>
                ";
            // line 104
            ob_start();
            // line 105
            echo "                    <b>Originally from</b>:
                    <span>";
            // line 106
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "originallyFromCity", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "originallyFromCity", array()))))) ? (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "originallyFromCity", array()) . ", ")) : ("")), "html", null, true);
            echo "</span>
                    <span>";
            // line 107
            echo twig_escape_filter($this->env, ((((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "originallyFrom", array()))) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "originallyFrom", array()), "name", array()))))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "originallyFrom", array()), "name", array())) : ("")), "html", null, true);
            echo "</span>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 109
            echo "                </h6>
            ";
        }
        // line 111
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array(), "any", false, true), "income", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "income", array()))))) {
            // line 112
            echo "                <h6><b>Income</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile", array()), "income", array()), "name", array()), "html", null, true);
            echo "</h6>
            ";
        }
        // line 114
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/View:personal_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 114,  311 => 112,  308 => 111,  304 => 109,  299 => 107,  295 => 106,  292 => 105,  290 => 104,  287 => 103,  284 => 102,  278 => 100,  275 => 99,  269 => 97,  266 => 96,  260 => 94,  257 => 93,  251 => 91,  248 => 90,  242 => 88,  239 => 87,  233 => 85,  230 => 84,  224 => 82,  221 => 81,  215 => 79,  213 => 78,  208 => 75,  202 => 72,  198 => 70,  196 => 69,  192 => 67,  186 => 64,  182 => 62,  180 => 61,  175 => 58,  169 => 56,  166 => 55,  160 => 53,  157 => 52,  149 => 50,  147 => 49,  143 => 47,  137 => 45,  134 => 44,  130 => 42,  124 => 40,  122 => 39,  118 => 38,  115 => 37,  112 => 36,  106 => 34,  103 => 33,  97 => 31,  95 => 30,  91 => 28,  87 => 26,  78 => 24,  74 => 23,  70 => 22,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  45 => 14,  42 => 13,  36 => 10,  33 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }
}
