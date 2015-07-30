<?php

/* ConnectionUserBundle:Search:fields.html.twig */
class __TwigTemplate_e9e4328b721abfedf486169778b90aa5c073e9392cac06871e05e1de6fa4bddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'choice_widget' => array($this, 'block_choice_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_options' => array($this, 'block_choice_widget_options'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'number_widget' => array($this, 'block_number_widget'),
                'integer_widget' => array($this, 'block_integer_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'url_widget' => array($this, 'block_url_widget'),
                'search_widget' => array($this, 'block_search_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'password_widget' => array($this, 'block_password_widget'),
                'hidden_widget' => array($this, 'block_hidden_widget'),
                'email_widget' => array($this, 'block_email_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'submit_widget' => array($this, 'block_submit_widget'),
                'reset_widget' => array($this, 'block_reset_widget'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_label' => array($this, 'block_form_label'),
                'button_label' => array($this, 'block_button_label'),
                'repeated_row' => array($this, 'block_repeated_row'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_group' => array($this, 'block_form_input_group'),
                'form_help' => array($this, 'block_form_help'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form' => array($this, 'block_form'),
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_enctype' => array($this, 'block_form_enctype'),
                'global_form_errors' => array($this, 'block_global_form_errors'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_rest' => array($this, 'block_form_rest'),
                'form_rows' => array($this, 'block_form_rows'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
                'button_attributes' => array($this, 'block_button_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('file_widget', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 298
        echo "
";
        // line 299
        $this->displayBlock('radio_row', $context, $blocks);
        // line 365
        echo "
";
        // line 366
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 371
        echo "
";
        // line 372
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 377
        echo "
";
        // line 378
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 393
        echo "
";
        // line 394
        $this->displayBlock('date_widget', $context, $blocks);
        // line 410
        echo "
";
        // line 411
        $this->displayBlock('time_widget', $context, $blocks);
        // line 426
        echo "
";
        // line 427
        $this->displayBlock('number_widget', $context, $blocks);
        // line 434
        echo "
";
        // line 435
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 441
        echo "
";
        // line 442
        $this->displayBlock('money_widget', $context, $blocks);
        // line 453
        echo "
";
        // line 454
        $this->displayBlock('url_widget', $context, $blocks);
        // line 460
        echo "
";
        // line 461
        $this->displayBlock('search_widget', $context, $blocks);
        // line 467
        echo "
";
        // line 468
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 477
        echo "
";
        // line 478
        $this->displayBlock('password_widget', $context, $blocks);
        // line 484
        echo "
";
        // line 485
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 491
        echo "
";
        // line 492
        $this->displayBlock('email_widget', $context, $blocks);
        // line 498
        echo "
";
        // line 499
        $this->displayBlock('button_widget', $context, $blocks);
        // line 512
        echo "
";
        // line 513
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 519
        echo "
";
        // line 520
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 526
        echo "
";
        // line 527
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 532
        echo "
";
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('form_label', $context, $blocks);
        // line 577
        echo "
";
        // line 578
        $this->displayBlock('button_label', $context, $blocks);
        // line 579
        echo "
";
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 591
        echo "
";
        // line 592
        $this->displayBlock('form_row', $context, $blocks);
        // line 635
        echo "
";
        // line 636
        $this->displayBlock('form_input_group', $context, $blocks);
        // line 670
        echo "
";
        // line 671
        $this->displayBlock('form_help', $context, $blocks);
        // line 682
        echo "
";
        // line 683
        $this->displayBlock('button_row', $context, $blocks);
        // line 717
        echo "
";
        // line 718
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 721
        echo "
";
        // line 722
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 725
        echo "
";
        // line 727
        echo "
";
        // line 728
        $this->displayBlock('form', $context, $blocks);
        // line 735
        echo "
";
        // line 736
        $this->displayBlock('form_start', $context, $blocks);
        // line 780
        echo "
";
        // line 781
        $this->displayBlock('form_end', $context, $blocks);
        // line 804
        echo "
";
        // line 805
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 810
        echo "
";
        // line 811
        $this->displayBlock('global_form_errors', $context, $blocks);
        // line 817
        echo "
";
        // line 818
        $this->displayBlock('form_errors', $context, $blocks);
        // line 842
        echo "
";
        // line 843
        $this->displayBlock('form_rest', $context, $blocks);
        // line 852
        echo "
";
        // line 854
        echo "
";
        // line 855
        $this->displayBlock('form_rows', $context, $blocks);
        // line 878
        echo "
";
        // line 879
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 885
        echo "
";
        // line 886
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 896
        echo "
";
        // line 897
        $this->displayBlock('button_attributes', $context, $blocks);
    }

    // line 5
    public function block_form_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 8
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 12
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 18
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 19
        echo "
        ";
        // line 20
        if (((!array_key_exists("simple_col", $context)) && $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol())) {
            // line 21
            echo "            ";
            $context["simple_col"] = $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol();
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array()))))) {
            // line 24
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 27
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()))))) {
            // line 30
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ((array_key_exists("simple_col", $context) && (isset($context["simple_col"]) ? $context["simple_col"] : null))) {
            // line 34
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 38
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        echo "
        ";
        // line 40
        if (((((isset($context["style"]) ? $context["style"] : null) == "inline") && ((!$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder", array(), "any", true, true)) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder", array())))) && ((isset($context["label"]) ? $context["label"] : null) != false))) {
            // line 41
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 42
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("placeholder" => $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null))));
                // line 43
                echo "            ";
            } else {
                // line 44
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("placeholder" => (isset($context["label"]) ? $context["label"] : null)));
                // line 45
                echo "            ";
            }
            // line 46
            echo "        ";
        }
        // line 47
        echo "
        <input type=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo ">

        ";
        // line 50
        if (array_key_exists("simple_col", $context)) {
            // line 51
            echo "            </div>
        ";
        }
        // line 53
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        ob_start();
        // line 58
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 59
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 60
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 62
        echo "            ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 68
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        ob_start();
        // line 70
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 71
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')));
            // line 72
            echo "        ";
        }
        // line 73
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 77
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        ob_start();
        // line 79
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 80
            echo "            ";
            $context["prototype_vars"] = array();
            // line 81
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 82
                echo "                ";
                $context["prototype_vars"] = twig_array_merge((isset($context["prototype_vars"]) ? $context["prototype_vars"] : null), array("style" => (isset($context["style"]) ? $context["style"] : null)));
                // line 83
                echo "            ";
            }
            // line 84
            echo "            ";
            $context["prototype_html"] = (((("<div class=\"col-xs-" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "sub_widget_col", array())) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'widget', (isset($context["prototype_vars"]) ? $context["prototype_vars"] : null))) . "</div>");
            // line 85
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_delete", array())) {
                // line 86
                echo "                ";
                $context["prototype_html"] = ((((((isset($context["prototype_html"]) ? $context["prototype_html"] : null) . "<div class=\"col-xs-") . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "button_col", array())) . "\"><a href=\"#\" class=\"btn btn-danger btn-small\" data-removefield=\"collection\" data-field=\"__id__\">") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))) . "</a></div>");
                // line 87
                echo "            ";
            }
            // line 88
            echo "            ";
            $context["prototype_html"] = (("<div class=\"row\">" . (isset($context["prototype_html"]) ? $context["prototype_html"] : null)) . "</div>");
            // line 89
            echo "
            ";
            // line 90
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => (isset($context["prototype_html"]) ? $context["prototype_html"] : null)));
            // line 91
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype-name" => (isset($context["prototype_name"]) ? $context["prototype_name"] : null)));
            // line 92
            echo "        ";
        }
        // line 93
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bc-collection list-unstyled\">
                ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 96
            echo "                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "sub_widget_col", array()), "html", null, true);
            echo "\">
                                ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
                                ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                            </div>
                            ";
            // line 102
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_delete", array())) {
                // line 103
                echo "                                <div class=\"col-xs-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "button_col", array()), "html", null, true);
                echo "\">
                                    <a href=\"#\" class=\"btn btn-danger btn-small\" data-removefield=\"collection\" data-field=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</a>
                                </div>
                            ";
            }
            // line 107
            echo "                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            </ul>
            ";
        // line 111
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_add", array())) {
            // line 112
            echo "                <a href=\"#\" class=\"btn btn-primary btn-small\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) ? $context["prototype_name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "add_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</a>
            ";
        }
        // line 114
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 118
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        ob_start();
        // line 120
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 121
        echo "
        ";
        // line 122
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array()))))) {
            // line 123
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array());
            // line 124
            echo "        ";
        }
        // line 125
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 126
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 127
            echo "        ";
        }
        // line 128
        echo "
        ";
        // line 129
        if (array_key_exists("simple_col", $context)) {
            // line 130
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 132
        echo "
        ";
        // line 133
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 134
        echo "
        <textarea ";
        // line 135
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>

        ";
        // line 137
        if (array_key_exists("simple_col", $context)) {
            // line 138
            echo "            </div>
        ";
        }
        // line 140
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 143
    public function block_file_widget($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        ob_start();
        // line 145
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 146
        echo "
        ";
        // line 147
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array()))))) {
            // line 148
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array());
            // line 149
            echo "        ";
        }
        // line 150
        echo "
        ";
        // line 151
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 152
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (array_key_exists("simple_col", $context)) {
            // line 156
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 158
        echo "
        <input type=\"file\" ";
        // line 159
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo ">

        ";
        // line 161
        if (array_key_exists("simple_col", $context)) {
            // line 162
            echo "            </div>
        ";
        }
        // line 164
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 167
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 168
        echo "    ";
        ob_start();
        // line 169
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 170
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 172
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 174
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 177
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 178
        echo "    ";
        ob_start();
        // line 179
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 181
            echo "                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "multiple", array(), "any", true, true)) {
                // line 182
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array()))));
                echo "
                ";
            } else {
                // line 184
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array()))));
                echo "
                ";
            }
            // line 186
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 192
        echo "    ";
        ob_start();
        // line 193
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 194
        echo "
        <select ";
        // line 195
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 196
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
            // line 197
            echo "                <option ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
            }
            echo " value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
            ";
        }
        // line 199
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 200
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 201
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 202
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : null))))) {
                // line 203
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
                ";
            }
            // line 205
            echo "            ";
        }
        // line 206
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 207
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 212
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 213
        echo "    ";
        ob_start();
        // line 214
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 215
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 216
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\">
                    ";
                // line 217
                $context["options"] = $context["choice"];
                // line 218
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 221
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</option>
            ";
            }
            // line 223
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 227
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 228
        echo "    ";
        ob_start();
        // line 229
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 230
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 231
        echo "
        ";
        // line 232
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array()))))) {
            // line 233
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 234
            echo "        ";
        }
        // line 235
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array()))))) {
            // line 236
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 237
            echo "        ";
        }
        // line 238
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 239
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 240
            echo "        ";
        }
        // line 241
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()))))) {
            // line 242
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 243
            echo "        ";
        }
        // line 244
        echo "
        ";
        // line 245
        $context["class"] = "";
        // line 246
        echo "        ";
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 247
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 248
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 249
            echo "            ";
            $context["class"] = ((((((("col-" . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : null)) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : null));
            // line 250
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
        ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 253
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 255
        echo "
        ";
        // line 256
        ob_start();
        // line 257
        echo "        ";
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 258
            echo "            ";
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 259
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 260
                echo "            ";
            }
            // line 261
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
                // line 262
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " checkbox-inline"))));
                // line 263
                echo "            ";
            }
            // line 264
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 265
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 266
                echo "            ";
            }
            // line 267
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 268
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 269
                echo "            ";
            }
            // line 270
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 271
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
            ";
            // line 272
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "
            </label>
        ";
        } else {
            // line 275
            echo "            ";
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
        ";
        }
        // line 277
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        $context["checkboxdata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 279
        echo "
        ";
        // line 280
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
            // line 281
            echo "            ";
            echo (isset($context["checkboxdata"]) ? $context["checkboxdata"] : null);
            echo "
        ";
        } else {
            // line 283
            echo "            <div class=\"checkbox\">";
            echo (isset($context["checkboxdata"]) ? $context["checkboxdata"] : null);
            echo "</div>
        ";
        }
        // line 285
        echo "
        ";
        // line 286
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 288
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 289
            echo "            </div>
            </div>
        ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 292
            echo "            </div>
        ";
        }
        // line 294
        echo "
        ";
        // line 295
        if (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
            echo "&nbsp;";
        }
        // line 296
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 299
    public function block_radio_row($context, array $blocks = array())
    {
        // line 300
        echo "    ";
        ob_start();
        // line 301
        echo "        ";
        $context["class"] = "";
        // line 302
        echo "
        ";
        // line 303
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 304
        echo "
        ";
        // line 305
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array()))))) {
            // line 306
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 307
            echo "        ";
        }
        // line 308
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array()))))) {
            // line 309
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 310
            echo "        ";
        }
        // line 311
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 312
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 313
            echo "        ";
        }
        // line 314
        echo "
        ";
        // line 315
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 316
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 317
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 318
            echo "            ";
            $context["class"] = (((((((" col-" . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : null)) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : null));
            // line 319
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 320
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
        ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 322
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 324
        echo "
        ";
        // line 325
        ob_start();
        // line 326
        echo "        ";
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 327
            echo "            ";
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 328
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 329
                echo "            ";
            }
            // line 330
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
                // line 331
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " radio-inline"))));
                // line 332
                echo "            ";
            }
            // line 333
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 334
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 335
                echo "            ";
            }
            // line 336
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 337
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 338
                echo "            ";
            }
            // line 339
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 340
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
            // line 341
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "
            </label>
        ";
        } else {
            // line 344
            echo "            ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
        ";
        }
        // line 346
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        $context["radiodata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 348
        echo "
        ";
        // line 349
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
            // line 350
            echo "            ";
            echo (isset($context["radiodata"]) ? $context["radiodata"] : null);
            echo "
        ";
        } else {
            // line 352
            echo "            <div class=\"radio\">";
            echo (isset($context["radiodata"]) ? $context["radiodata"] : null);
            echo "</div>
        ";
        }
        // line 354
        echo "
        ";
        // line 355
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 357
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 358
            echo "            </div>
            </div>
        ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 361
            echo "            </div>
        ";
        }
        // line 363
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 366
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 367
        echo "    ";
        ob_start();
        // line 368
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 372
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 373
        echo "    ";
        ob_start();
        // line 374
        echo "        <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 378
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 379
        echo "    ";
        ob_start();
        // line 380
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 381
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 383
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-datetime"));
            // line 384
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 385
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            echo "
                ";
            // line 386
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget');
            echo "
                ";
            // line 387
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
                ";
            // line 388
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            echo "
            </div>
        ";
        }
        // line 391
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 394
    public function block_date_widget($context, array $blocks = array())
    {
        // line 395
        echo "    ";
        ob_start();
        // line 396
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 397
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 399
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-date"));
            // line 400
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 401
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 402
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 403
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 404
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 405
            echo "
            </div>
        ";
        }
        // line 408
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 411
    public function block_time_widget($context, array $blocks = array())
    {
        // line 412
        echo "    ";
        ob_start();
        // line 413
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 414
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 416
            echo "            ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 417
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-time"));
            // line 418
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 419
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo "
                ";
            // line 420
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 421
            echo "                ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 422
            echo "            </div>
        ";
        }
        // line 424
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 427
    public function block_number_widget($context, array $blocks = array())
    {
        // line 428
        echo "    ";
        ob_start();
        // line 429
        echo "        ";
        // line 430
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 431
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 435
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 436
        echo "    ";
        ob_start();
        // line 437
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 438
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 442
    public function block_money_widget($context, array $blocks = array())
    {
        // line 443
        echo "    ";
        ob_start();
        // line 444
        echo "        <div class=\"input-group\">
            ";
        // line 445
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 449
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 454
    public function block_url_widget($context, array $blocks = array())
    {
        // line 455
        echo "    ";
        ob_start();
        // line 456
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 457
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 461
    public function block_search_widget($context, array $blocks = array())
    {
        // line 462
        echo "    ";
        ob_start();
        // line 463
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "search")) : ("search"));
        // line 464
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 468
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 469
        echo "    ";
        ob_start();
        // line 470
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 471
        echo "        <div class=\"input-group\">
            ";
        // line 472
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 478
    public function block_password_widget($context, array $blocks = array())
    {
        // line 479
        echo "    ";
        ob_start();
        // line 480
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "password")) : ("password"));
        // line 481
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 485
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 486
        echo "    ";
        ob_start();
        // line 487
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 488
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 492
    public function block_email_widget($context, array $blocks = array())
    {
        // line 493
        echo "    ";
        ob_start();
        // line 494
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "email")) : ("email"));
        // line 495
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 499
    public function block_button_widget($context, array $blocks = array())
    {
        // line 500
        echo "    ";
        ob_start();
        // line 501
        echo "        ";
        if ((twig_test_empty((isset($context["label"]) ? $context["label"] : null)) && (!((isset($context["label"]) ? $context["label"] : null) === false)))) {
            // line 502
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 503
            echo "        ";
        }
        // line 504
        echo "        ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "submit"))) {
            // line 505
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "type", array()), "primary")) : ("primary"))))));
            // line 506
            echo "        ";
        } else {
            // line 507
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "type", array()), "default")) : ("default"))))));
            // line 508
            echo "        ";
        }
        // line 509
        echo "        <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 513
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 514
        echo "    ";
        ob_start();
        // line 515
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 516
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 520
    public function block_reset_widget($context, array $blocks = array())
    {
        // line 521
        echo "    ";
        ob_start();
        // line 522
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "reset")) : ("reset"));
        // line 523
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 527
    public function block_form_actions_widget($context, array $blocks = array())
    {
        // line 528
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 529
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 530
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 535
    public function block_form_label($context, array $blocks = array())
    {
        // line 536
        echo "    ";
        ob_start();
        // line 537
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 538
        echo "
        ";
        // line 539
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array()))))) {
            // line 540
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 541
            echo "        ";
        }
        // line 542
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array()))))) {
            // line 543
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 544
            echo "        ";
        }
        // line 545
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 546
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 547
            echo "        ";
        }
        // line 548
        echo "
        ";
        // line 549
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 550
            echo "            ";
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
            // line 551
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 552
            echo "
            ";
            // line 553
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()))))) {
                // line 554
                echo "                ";
                $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
                // line 555
                echo "            ";
            }
            // line 556
            echo "
            ";
            // line 557
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 558
            echo "            ";
            if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
                // line 559
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim((((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["label_col"]) ? $context["label_col"] : null)))));
                // line 560
                echo "            ";
            } elseif (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
                // line 561
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " sr-only"))));
                // line 562
                echo "            ";
            }
            // line 563
            echo "
            ";
            // line 564
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 565
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 566
                echo "            ";
            }
            // line 567
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 568
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 569
                echo "            ";
            }
            // line 570
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 571
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 572
                echo "            ";
            }
            // line 573
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "</label>
        ";
        }
        // line 575
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 578
    public function block_button_label($context, array $blocks = array())
    {
    }

    // line 582
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 583
        echo "    ";
        ob_start();
        // line 584
        echo "        ";
        // line 588
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 592
    public function block_form_row($context, array $blocks = array())
    {
        // line 593
        echo "    ";
        ob_start();
        // line 594
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 595
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 596
        echo "
        ";
        // line 597
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array()))))) {
            // line 598
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 599
            echo "        ";
        }
        // line 600
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array()))))) {
            // line 601
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 602
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : null) === false) && array_key_exists("label_col", $context))) {
                // line 603
                echo "                ";
                $context["widget_col"] = ((isset($context["widget_col"]) ? $context["widget_col"] : null) + (isset($context["label_col"]) ? $context["label_col"] : null));
                // line 604
                echo "            ";
            }
            // line 605
            echo "        ";
        }
        // line 606
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 607
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 608
            echo "        ";
        }
        // line 609
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()))))) {
            // line 610
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 611
            echo "        ";
        }
        // line 612
        echo "
        ";
        // line 613
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 614
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 615
        echo "
        <div class=\"form-group";
        // line 616
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 617
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 618
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
                <div class=\"col-";
            // line 619
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : null), "html", null, true);
            echo "\">
                    ";
            // line 620
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                    ";
            // line 621
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                    ";
            // line 622
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                </div>
            ";
        } else {
            // line 625
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
                ";
            // line 626
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 627
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 628
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            ";
        }
        // line 630
        echo "        </div>

        ";
        // line 632
        if (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
            echo "&nbsp;";
        }
        // line 633
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 636
    public function block_form_input_group($context, array $blocks = array())
    {
        // line 637
        echo "    ";
        ob_start();
        // line 638
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array()))))) {
            // line 639
            echo "            ";
            $context["input_group"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array());
            // line 640
            echo "        ";
        }
        // line 641
        echo "        ";
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter((isset($context["input_group"]) ? $context["input_group"] : null), array())) : (array()));
        // line 642
        echo "        ";
        if ((!twig_test_empty((isset($context["input_group"]) ? $context["input_group"] : null)))) {
            // line 643
            echo "            ";
            $context["ig_size_class"] = "";
            // line 644
            echo "            ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array()) == "large"))) {
                // line 645
                echo "                ";
                $context["ig_size_class"] = " input-group-lg";
                // line 646
                echo "            ";
            }
            // line 647
            echo "            ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array()) == "small"))) {
                // line 648
                echo "                ";
                $context["ig_size_class"] = " input-group-sm";
                // line 649
                echo "            ";
            }
            // line 650
            echo "            <div class=\"input-group";
            echo twig_escape_filter($this->env, (isset($context["ig_size_class"]) ? $context["ig_size_class"] : null), "html", null, true);
            echo "\">
                ";
            // line 651
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array()))))) {
                // line 652
                echo "                    <span class=\"input-group-addon\">";
                echo $this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array());
                echo "</span>
                ";
            }
            // line 654
            echo "                ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_prepend", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_prepend", array()))))) {
                // line 655
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input_group_button_prepend"]) ? $context["input_group_button_prepend"] : null), 'widget');
                echo "</span>
                ";
            }
            // line 657
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                ";
            // line 658
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_append", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_append", array()))))) {
                // line 659
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input_group_button_append"]) ? $context["input_group_button_append"] : null), 'widget');
                echo "</span>
                ";
            }
            // line 661
            echo "                ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array()))))) {
                // line 662
                echo "                    <span class=\"input-group-addon\">";
                echo $this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array());
                echo "</span>
                ";
            }
            // line 664
            echo "            </div>
        ";
        } else {
            // line 666
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
        ";
        }
        // line 668
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 671
    public function block_form_help($context, array $blocks = array())
    {
        // line 672
        echo "    ";
        ob_start();
        // line 673
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array()))))) {
            // line 674
            echo "            ";
            $context["help_text"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array());
            // line 675
            echo "        ";
        }
        // line 676
        echo "        ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter((isset($context["help_text"]) ? $context["help_text"] : null), "")) : (""));
        // line 677
        echo "        ";
        if ((!twig_test_empty((isset($context["help_text"]) ? $context["help_text"] : null)))) {
            // line 678
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_text"]) ? $context["help_text"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</span>
        ";
        }
        // line 680
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 683
    public function block_button_row($context, array $blocks = array())
    {
        // line 684
        echo "    ";
        ob_start();
        // line 685
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 686
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 687
        echo "
        ";
        // line 688
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array()))))) {
            // line 689
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 690
            echo "        ";
        }
        // line 691
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array()))))) {
            // line 692
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 693
            echo "        ";
        }
        // line 694
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array()))))) {
            // line 695
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 696
            echo "        ";
        }
        // line 697
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()))))) {
            // line 698
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 699
            echo "        ";
        }
        // line 700
        echo "
        ";
        // line 701
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 702
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 703
        echo "
        ";
        // line 704
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 705
            echo "            <div class=\"form-group\">
            <div class=\"col-";
            // line 706
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-offset-";
            echo twig_escape_filter($this->env, (isset($context["label_col"]) ? $context["label_col"] : null), "html", null, true);
            echo " col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 708
        echo "
        ";
        // line 709
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

        ";
        // line 711
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 712
            echo "            </div>
            </div>
        ";
        }
        // line 715
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 718
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 719
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 722
    public function block_form_actions_row($context, array $blocks = array())
    {
        // line 723
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 728
    public function block_form($context, array $blocks = array())
    {
        // line 729
        echo "    ";
        ob_start();
        // line 730
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 731
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 732
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 736
    public function block_form_start($context, array $blocks = array())
    {
        // line 737
        echo "    ";
        ob_start();
        // line 738
        echo "        ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 739
        echo "        ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 740
            echo "            ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
            // line 741
            echo "        ";
        } else {
            // line 742
            echo "            ";
            $context["form_method"] = "POST";
            // line 743
            echo "        ";
        }
        // line 744
        echo "
        ";
        // line 745
        if (array_key_exists("style", $context)) {
            // line 746
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-") . (isset($context["style"]) ? $context["style"] : null)))));
            // line 747
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle((isset($context["style"]) ? $context["style"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 749
        echo "
        ";
        // line 750
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
            // line 751
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " has-global-errors"))));
            // line 752
            echo "        ";
        }
        // line 753
        echo "
        ";
        // line 754
        if (array_key_exists("col_size", $context)) {
            // line 755
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize((isset($context["col_size"]) ? $context["col_size"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 757
        echo "
        ";
        // line 758
        if (array_key_exists("widget_col", $context)) {
            // line 759
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol((isset($context["widget_col"]) ? $context["widget_col"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 761
        echo "
        ";
        // line 762
        if (array_key_exists("label_col", $context)) {
            // line 763
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol((isset($context["label_col"]) ? $context["label_col"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 765
        echo "
        ";
        // line 766
        if (array_key_exists("simple_col", $context)) {
            // line 767
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol((isset($context["simple_col"]) ? $context["simple_col"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 769
        echo "
        ";
        // line 770
        if (((!$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array(), "any", true, true)) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array())))) {
            // line 771
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("role" => "form"));
            // line 772
            echo "        ";
        }
        // line 773
        echo "
        <form  name=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 775
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 776
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
        ";
        }
        // line 778
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 781
    public function block_form_end($context, array $blocks = array())
    {
        // line 782
        echo "    ";
        ob_start();
        // line 783
        echo "        ";
        if (((!array_key_exists("render_rest", $context)) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 784
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
        ";
        }
        // line 786
        echo "        </form>
        ";
        // line 787
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()) {
            // line 788
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle(""), "html", null, true);
            echo "
        ";
        }
        // line 790
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()) {
            // line 791
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize("lg"), "html", null, true);
            echo "
        ";
        }
        // line 793
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()) {
            // line 794
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol(10), "html", null, true);
            echo "
        ";
        }
        // line 796
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()) {
            // line 797
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol(2), "html", null, true);
            echo "
        ";
        }
        // line 799
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol()) {
            // line 800
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol(false), "html", null, true);
            echo "
        ";
        }
        // line 802
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 805
    public function block_form_enctype($context, array $blocks = array())
    {
        // line 806
        echo "    ";
        ob_start();
        // line 807
        echo "        ";
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 808
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 811
    public function block_global_form_errors($context, array $blocks = array())
    {
        // line 812
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 813
            echo "        ";
            $context["global_errors"] = true;
            // line 814
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
    }

    // line 818
    public function block_form_errors($context, array $blocks = array())
    {
        // line 819
        echo "    ";
        ob_start();
        // line 820
        echo "        ";
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter((isset($context["global_errors"]) ? $context["global_errors"] : null), false)) : (false));
        // line 821
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 822
        echo "
        ";
        // line 823
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()))))) {
            // line 824
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 825
            echo "        ";
        }
        // line 826
        echo "
        ";
        // line 827
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 828
            echo "            ";
            if ((isset($context["global_errors"]) ? $context["global_errors"] : null)) {
                // line 829
                echo "                <div class=\"alert alert-danger\">
            ";
            }
            // line 831
            echo "            <ul";
            if ((!(isset($context["global_errors"]) ? $context["global_errors"] : null))) {
                echo " class=\"help-block\"";
            }
            echo ">
                ";
            // line 832
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 833
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 835
            echo "            </ul>
            ";
            // line 836
            if (((isset($context["global_errors"]) ? $context["global_errors"] : null) == true)) {
                // line 837
                echo "                </div>
            ";
            }
            // line 839
            echo "        ";
        }
        // line 840
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 843
    public function block_form_rest($context, array $blocks = array())
    {
        // line 844
        echo "    ";
        ob_start();
        // line 845
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 846
            echo "            ";
            if ((!$this->getAttribute($context["child"], "rendered", array()))) {
                // line 847
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 849
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 855
    public function block_form_rows($context, array $blocks = array())
    {
        // line 856
        echo "    ";
        ob_start();
        // line 857
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 858
            echo "            ";
            $context["childAttr"] = array();
            // line 859
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true)) {
                // line 860
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("col_size" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())));
                // line 861
                echo "            ";
            }
            // line 862
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true)) {
                // line 863
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("widget_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())));
                // line 864
                echo "            ";
            }
            // line 865
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true)) {
                // line 866
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("label_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())));
                // line 867
                echo "            ";
            }
            // line 868
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true)) {
                // line 869
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("simple_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array())));
                // line 870
                echo "            ";
            }
            // line 871
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) {
                // line 872
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("style" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())));
                // line 873
                echo "            ";
            }
            // line 874
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', (isset($context["childAttr"]) ? $context["childAttr"] : null));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 876
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 879
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 880
        echo "    ";
        ob_start();
        // line 881
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 882
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter($context["attrname"], array(0 => "input_group"))) {
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 886
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 887
        echo "    ";
        ob_start();
        // line 888
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()) == "inline") || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()) == "horizontal")))) {
            // line 889
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((("form-" . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 890
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("style" => null));
            // line 891
            echo "        ";
        }
        // line 892
        echo "        ";
        if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
        }
        // line 893
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((!(null === $context["attrvalue"]))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 894
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 897
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 898
        echo "    ";
        ob_start();
        // line 899
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 900
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 901
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Search:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2980 => 901,  2967 => 900,  2958 => 899,  2955 => 898,  2952 => 897,  2947 => 894,  2932 => 893,  2925 => 892,  2922 => 891,  2919 => 890,  2916 => 889,  2913 => 888,  2910 => 887,  2907 => 886,  2902 => 883,  2881 => 882,  2856 => 881,  2853 => 880,  2850 => 879,  2845 => 876,  2836 => 874,  2833 => 873,  2830 => 872,  2827 => 871,  2824 => 870,  2821 => 869,  2818 => 868,  2815 => 867,  2812 => 866,  2809 => 865,  2806 => 864,  2803 => 863,  2800 => 862,  2797 => 861,  2794 => 860,  2791 => 859,  2788 => 858,  2783 => 857,  2780 => 856,  2777 => 855,  2772 => 850,  2766 => 849,  2760 => 847,  2757 => 846,  2752 => 845,  2749 => 844,  2746 => 843,  2741 => 840,  2738 => 839,  2734 => 837,  2732 => 836,  2729 => 835,  2720 => 833,  2716 => 832,  2709 => 831,  2705 => 829,  2702 => 828,  2700 => 827,  2697 => 826,  2694 => 825,  2691 => 824,  2689 => 823,  2686 => 822,  2683 => 821,  2680 => 820,  2677 => 819,  2674 => 818,  2666 => 814,  2663 => 813,  2660 => 812,  2657 => 811,  2652 => 808,  2647 => 807,  2644 => 806,  2641 => 805,  2636 => 802,  2630 => 800,  2627 => 799,  2621 => 797,  2618 => 796,  2612 => 794,  2609 => 793,  2603 => 791,  2600 => 790,  2594 => 788,  2592 => 787,  2589 => 786,  2583 => 784,  2580 => 783,  2577 => 782,  2574 => 781,  2569 => 778,  2563 => 776,  2561 => 775,  2537 => 774,  2534 => 773,  2531 => 772,  2528 => 771,  2526 => 770,  2523 => 769,  2517 => 767,  2515 => 766,  2512 => 765,  2506 => 763,  2504 => 762,  2501 => 761,  2495 => 759,  2493 => 758,  2490 => 757,  2484 => 755,  2482 => 754,  2479 => 753,  2476 => 752,  2473 => 751,  2471 => 750,  2468 => 749,  2462 => 747,  2459 => 746,  2457 => 745,  2454 => 744,  2451 => 743,  2448 => 742,  2445 => 741,  2442 => 740,  2439 => 739,  2436 => 738,  2433 => 737,  2430 => 736,  2423 => 732,  2419 => 731,  2414 => 730,  2411 => 729,  2408 => 728,  2401 => 723,  2398 => 722,  2391 => 719,  2388 => 718,  2383 => 715,  2378 => 712,  2376 => 711,  2371 => 709,  2368 => 708,  2357 => 706,  2354 => 705,  2352 => 704,  2349 => 703,  2346 => 702,  2344 => 701,  2341 => 700,  2338 => 699,  2335 => 698,  2332 => 697,  2329 => 696,  2326 => 695,  2323 => 694,  2320 => 693,  2317 => 692,  2314 => 691,  2311 => 690,  2308 => 689,  2306 => 688,  2303 => 687,  2300 => 686,  2297 => 685,  2294 => 684,  2291 => 683,  2286 => 680,  2280 => 678,  2277 => 677,  2274 => 676,  2271 => 675,  2268 => 674,  2265 => 673,  2262 => 672,  2259 => 671,  2254 => 668,  2248 => 666,  2244 => 664,  2238 => 662,  2235 => 661,  2229 => 659,  2227 => 658,  2222 => 657,  2216 => 655,  2213 => 654,  2207 => 652,  2205 => 651,  2200 => 650,  2197 => 649,  2194 => 648,  2191 => 647,  2188 => 646,  2185 => 645,  2182 => 644,  2179 => 643,  2176 => 642,  2173 => 641,  2170 => 640,  2167 => 639,  2164 => 638,  2161 => 637,  2158 => 636,  2153 => 633,  2149 => 632,  2145 => 630,  2140 => 628,  2136 => 627,  2132 => 626,  2127 => 625,  2121 => 622,  2117 => 621,  2113 => 620,  2107 => 619,  2102 => 618,  2100 => 617,  2094 => 616,  2091 => 615,  2088 => 614,  2086 => 613,  2083 => 612,  2080 => 611,  2077 => 610,  2074 => 609,  2071 => 608,  2068 => 607,  2065 => 606,  2062 => 605,  2059 => 604,  2056 => 603,  2053 => 602,  2050 => 601,  2047 => 600,  2044 => 599,  2041 => 598,  2039 => 597,  2036 => 596,  2033 => 595,  2030 => 594,  2027 => 593,  2024 => 592,  2016 => 588,  2014 => 584,  2011 => 583,  2008 => 582,  2003 => 578,  1998 => 575,  1979 => 573,  1976 => 572,  1973 => 571,  1970 => 570,  1967 => 569,  1964 => 568,  1961 => 567,  1958 => 566,  1955 => 565,  1953 => 564,  1950 => 563,  1947 => 562,  1944 => 561,  1941 => 560,  1938 => 559,  1935 => 558,  1933 => 557,  1930 => 556,  1927 => 555,  1924 => 554,  1922 => 553,  1919 => 552,  1916 => 551,  1913 => 550,  1911 => 549,  1908 => 548,  1905 => 547,  1902 => 546,  1899 => 545,  1896 => 544,  1893 => 543,  1890 => 542,  1887 => 541,  1884 => 540,  1882 => 539,  1879 => 538,  1876 => 537,  1873 => 536,  1870 => 535,  1862 => 530,  1858 => 529,  1853 => 528,  1850 => 527,  1842 => 523,  1839 => 522,  1836 => 521,  1833 => 520,  1825 => 516,  1822 => 515,  1819 => 514,  1816 => 513,  1804 => 509,  1801 => 508,  1798 => 507,  1795 => 506,  1792 => 505,  1789 => 504,  1786 => 503,  1783 => 502,  1780 => 501,  1777 => 500,  1774 => 499,  1766 => 495,  1763 => 494,  1760 => 493,  1757 => 492,  1749 => 488,  1746 => 487,  1743 => 486,  1740 => 485,  1732 => 481,  1729 => 480,  1726 => 479,  1723 => 478,  1714 => 472,  1711 => 471,  1708 => 470,  1705 => 469,  1702 => 468,  1694 => 464,  1691 => 463,  1688 => 462,  1685 => 461,  1677 => 457,  1674 => 456,  1671 => 455,  1668 => 454,  1661 => 449,  1659 => 445,  1656 => 444,  1653 => 443,  1650 => 442,  1642 => 438,  1639 => 437,  1636 => 436,  1633 => 435,  1625 => 431,  1622 => 430,  1620 => 429,  1617 => 428,  1614 => 427,  1609 => 424,  1605 => 422,  1599 => 421,  1594 => 420,  1590 => 419,  1585 => 418,  1582 => 417,  1579 => 416,  1573 => 414,  1570 => 413,  1567 => 412,  1564 => 411,  1559 => 408,  1554 => 405,  1552 => 404,  1551 => 403,  1550 => 402,  1549 => 401,  1544 => 400,  1541 => 399,  1535 => 397,  1532 => 396,  1529 => 395,  1526 => 394,  1521 => 391,  1515 => 388,  1511 => 387,  1507 => 386,  1503 => 385,  1498 => 384,  1495 => 383,  1489 => 381,  1486 => 380,  1483 => 379,  1480 => 378,  1464 => 374,  1461 => 373,  1458 => 372,  1442 => 368,  1439 => 367,  1436 => 366,  1431 => 363,  1427 => 361,  1422 => 358,  1420 => 357,  1415 => 355,  1412 => 354,  1406 => 352,  1400 => 350,  1398 => 349,  1395 => 348,  1389 => 346,  1383 => 344,  1377 => 341,  1373 => 340,  1357 => 339,  1354 => 338,  1351 => 337,  1348 => 336,  1345 => 335,  1342 => 334,  1339 => 333,  1336 => 332,  1333 => 331,  1330 => 330,  1327 => 329,  1324 => 328,  1321 => 327,  1318 => 326,  1316 => 325,  1313 => 324,  1305 => 322,  1300 => 320,  1293 => 319,  1290 => 318,  1287 => 317,  1284 => 316,  1282 => 315,  1279 => 314,  1276 => 313,  1273 => 312,  1270 => 311,  1267 => 310,  1264 => 309,  1261 => 308,  1258 => 307,  1255 => 306,  1253 => 305,  1250 => 304,  1248 => 303,  1245 => 302,  1242 => 301,  1239 => 300,  1236 => 299,  1231 => 296,  1227 => 295,  1224 => 294,  1220 => 292,  1215 => 289,  1213 => 288,  1208 => 286,  1205 => 285,  1199 => 283,  1193 => 281,  1191 => 280,  1188 => 279,  1182 => 277,  1176 => 275,  1170 => 272,  1166 => 271,  1150 => 270,  1147 => 269,  1144 => 268,  1141 => 267,  1138 => 266,  1135 => 265,  1132 => 264,  1129 => 263,  1126 => 262,  1123 => 261,  1120 => 260,  1117 => 259,  1114 => 258,  1111 => 257,  1109 => 256,  1106 => 255,  1098 => 253,  1093 => 251,  1086 => 250,  1083 => 249,  1080 => 248,  1077 => 247,  1074 => 246,  1072 => 245,  1069 => 244,  1066 => 243,  1063 => 242,  1060 => 241,  1057 => 240,  1054 => 239,  1051 => 238,  1048 => 237,  1045 => 236,  1042 => 235,  1039 => 234,  1036 => 233,  1034 => 232,  1031 => 231,  1028 => 230,  1025 => 229,  1022 => 228,  1019 => 227,  1014 => 224,  1000 => 223,  988 => 221,  981 => 218,  979 => 217,  974 => 216,  971 => 215,  953 => 214,  950 => 213,  947 => 212,  938 => 207,  935 => 206,  932 => 205,  926 => 203,  924 => 202,  919 => 201,  916 => 200,  913 => 199,  900 => 197,  898 => 196,  891 => 195,  888 => 194,  885 => 193,  882 => 192,  879 => 191,  873 => 187,  867 => 186,  861 => 184,  855 => 182,  852 => 181,  848 => 180,  843 => 179,  840 => 178,  837 => 177,  832 => 174,  826 => 172,  820 => 170,  817 => 169,  814 => 168,  811 => 167,  806 => 164,  802 => 162,  800 => 161,  789 => 159,  786 => 158,  778 => 156,  776 => 155,  773 => 154,  770 => 153,  767 => 152,  765 => 151,  762 => 150,  759 => 149,  756 => 148,  754 => 147,  751 => 146,  748 => 145,  745 => 144,  742 => 143,  737 => 140,  733 => 138,  731 => 137,  724 => 135,  721 => 134,  719 => 133,  716 => 132,  708 => 130,  706 => 129,  703 => 128,  700 => 127,  697 => 126,  694 => 125,  691 => 124,  688 => 123,  686 => 122,  683 => 121,  680 => 120,  677 => 119,  674 => 118,  668 => 114,  658 => 112,  656 => 111,  653 => 110,  645 => 107,  637 => 104,  632 => 103,  630 => 102,  625 => 100,  621 => 99,  617 => 98,  613 => 96,  609 => 95,  603 => 93,  600 => 92,  597 => 91,  595 => 90,  592 => 89,  589 => 88,  586 => 87,  583 => 86,  580 => 85,  577 => 84,  574 => 83,  571 => 82,  568 => 81,  565 => 80,  562 => 79,  559 => 78,  556 => 77,  548 => 73,  545 => 72,  542 => 71,  539 => 70,  536 => 69,  533 => 68,  525 => 63,  520 => 62,  514 => 60,  512 => 59,  507 => 58,  504 => 57,  501 => 56,  496 => 53,  492 => 51,  490 => 50,  477 => 48,  474 => 47,  471 => 46,  468 => 45,  465 => 44,  462 => 43,  459 => 42,  456 => 41,  454 => 40,  451 => 39,  448 => 38,  446 => 37,  443 => 36,  435 => 34,  433 => 33,  430 => 32,  427 => 31,  424 => 30,  421 => 29,  418 => 28,  415 => 27,  412 => 26,  409 => 25,  406 => 24,  403 => 23,  400 => 22,  397 => 21,  395 => 20,  392 => 19,  389 => 18,  386 => 17,  383 => 16,  380 => 15,  375 => 12,  369 => 10,  363 => 8,  360 => 7,  357 => 6,  354 => 5,  350 => 897,  347 => 896,  345 => 886,  342 => 885,  340 => 879,  337 => 878,  335 => 855,  332 => 854,  329 => 852,  327 => 843,  324 => 842,  322 => 818,  319 => 817,  317 => 811,  314 => 810,  312 => 805,  309 => 804,  307 => 781,  304 => 780,  302 => 736,  299 => 735,  297 => 728,  294 => 727,  291 => 725,  289 => 722,  286 => 721,  284 => 718,  281 => 717,  279 => 683,  276 => 682,  274 => 671,  271 => 670,  269 => 636,  266 => 635,  264 => 592,  261 => 591,  259 => 582,  256 => 581,  253 => 579,  251 => 578,  248 => 577,  246 => 535,  243 => 534,  240 => 532,  238 => 527,  235 => 526,  233 => 520,  230 => 519,  228 => 513,  225 => 512,  223 => 499,  220 => 498,  218 => 492,  215 => 491,  213 => 485,  210 => 484,  208 => 478,  205 => 477,  203 => 468,  200 => 467,  198 => 461,  195 => 460,  193 => 454,  190 => 453,  188 => 442,  185 => 441,  183 => 435,  180 => 434,  178 => 427,  175 => 426,  173 => 411,  170 => 410,  168 => 394,  165 => 393,  163 => 378,  160 => 377,  158 => 372,  155 => 371,  153 => 366,  150 => 365,  148 => 299,  145 => 298,  143 => 227,  140 => 226,  138 => 212,  135 => 211,  133 => 191,  130 => 190,  128 => 177,  125 => 176,  123 => 167,  120 => 166,  118 => 143,  115 => 142,  113 => 118,  110 => 117,  108 => 77,  105 => 76,  103 => 68,  100 => 67,  98 => 56,  95 => 55,  93 => 15,  90 => 14,  88 => 5,  85 => 4,  82 => 2,  14 => 1,);
    }
}
