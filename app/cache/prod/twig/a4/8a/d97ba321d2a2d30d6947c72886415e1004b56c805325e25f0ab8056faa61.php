<?php

/* ConnectionUserBundle:Registration:fields.html.twig */
class __TwigTemplate_a48ad97ba321d2a2d30d6947c72886415e1004b56c805325e25f0ab8056faa61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"clearfix ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "error ";
        }
        echo "form-inline\">

        ";
        // line 6
        $context["type"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array()), 1, array());
        // line 7
        echo "        ";
        if (((isset($context["type"]) ? $context["type"] : null) != "checkbox")) {
            // line 8
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = (isset($context["label"]) ? $context["label"] : null)) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        $context["class"] = "";
        // line 12
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 13
            echo "            ";
            $context["class"] = "error";
            // line 14
            echo "        ";
        }
        // line 15
        echo "        ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 16
            echo "            ";
            $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()));
            // line 17
            echo "        ";
        }
        // line 18
        echo "        ";
        $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " form-control");
        // line 19
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => (isset($context["class"]) ? $context["class"] : null))));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>
";
    }

    // line 25
    public function block_date_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 27
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 29
            echo "            ";
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 30
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget', array("attr" => array("class" => "form-control"))), "{{ month }}" =>             // line 31
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget', array("attr" => array("class" => "form-control"))), "{{ day }}" =>             // line 32
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget', array("attr" => array("class" => "form-control")))));
            // line 33
            echo "
    ";
        }
    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 40
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 42
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        } else {
            // line 46
            echo "            ";
            if (((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) && (!(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : null))) && (!(isset($context["multiple"]) ? $context["multiple"] : null)))) {
                // line 47
                echo "                ";
                $context["required"] = false;
                // line 48
                echo "            ";
            }
            // line 49
            echo "            <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo " multiple=\"multiple\"";
            }
            echo ">
                ";
            // line 50
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
                // line 51
                echo "<option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</option>
                ";
            }
            // line 53
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
                // line 54
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
                // line 55
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                    ";
                // line 56
                if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : null))))) {
                    // line 57
                    echo "                        <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 59
                echo "                ";
            }
            // line 60
            echo "                ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
            // line 61
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            </select>
        ";
        }
        // line 64
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        ob_start();
        // line 69
        echo "        <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"><input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "</label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        ob_start();
        // line 75
        echo "        <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"><input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "</label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Registration:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 75,  242 => 74,  239 => 73,  219 => 69,  216 => 68,  213 => 67,  208 => 64,  202 => 61,  199 => 60,  196 => 59,  190 => 57,  188 => 56,  183 => 55,  181 => 54,  178 => 53,  168 => 51,  166 => 50,  158 => 49,  155 => 48,  152 => 47,  149 => 46,  145 => 44,  136 => 42,  132 => 41,  127 => 40,  124 => 39,  121 => 38,  118 => 37,  112 => 33,  110 => 32,  109 => 31,  108 => 30,  106 => 29,  100 => 27,  97 => 26,  94 => 25,  87 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  48 => 8,  45 => 7,  43 => 6,  35 => 4,  32 => 3,);
    }
}
