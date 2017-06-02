<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_cb0be1582b10bae0a93b2ab72823ac593e34c64ced823c10e2b586db54ec1502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3913d40271f3456d5bc011b255ed8a8ad9b0fa5981980eead9eb63e564a418cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3913d40271f3456d5bc011b255ed8a8ad9b0fa5981980eead9eb63e564a418cf->enter($__internal_3913d40271f3456d5bc011b255ed8a8ad9b0fa5981980eead9eb63e564a418cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_bf839835ee4fc4b4dc8f34695893a7d5d52be02c5cf4ef43c772e8d90e12e2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf839835ee4fc4b4dc8f34695893a7d5d52be02c5cf4ef43c772e8d90e12e2ae->enter($__internal_bf839835ee4fc4b4dc8f34695893a7d5d52be02c5cf4ef43c772e8d90e12e2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_3913d40271f3456d5bc011b255ed8a8ad9b0fa5981980eead9eb63e564a418cf->leave($__internal_3913d40271f3456d5bc011b255ed8a8ad9b0fa5981980eead9eb63e564a418cf_prof);

        
        $__internal_bf839835ee4fc4b4dc8f34695893a7d5d52be02c5cf4ef43c772e8d90e12e2ae->leave($__internal_bf839835ee4fc4b4dc8f34695893a7d5d52be02c5cf4ef43c772e8d90e12e2ae_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6c7b95c9b46e5c686f4c6a2d1e98db8cbb9ff9c234380610571efcc61eab853d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7b95c9b46e5c686f4c6a2d1e98db8cbb9ff9c234380610571efcc61eab853d->enter($__internal_6c7b95c9b46e5c686f4c6a2d1e98db8cbb9ff9c234380610571efcc61eab853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6ff6c6bf10e8e68d0ec871d49ac8c0bec7ffc65956b462ae6402718c296a7561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff6c6bf10e8e68d0ec871d49ac8c0bec7ffc65956b462ae6402718c296a7561->enter($__internal_6ff6c6bf10e8e68d0ec871d49ac8c0bec7ffc65956b462ae6402718c296a7561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6ff6c6bf10e8e68d0ec871d49ac8c0bec7ffc65956b462ae6402718c296a7561->leave($__internal_6ff6c6bf10e8e68d0ec871d49ac8c0bec7ffc65956b462ae6402718c296a7561_prof);

        
        $__internal_6c7b95c9b46e5c686f4c6a2d1e98db8cbb9ff9c234380610571efcc61eab853d->leave($__internal_6c7b95c9b46e5c686f4c6a2d1e98db8cbb9ff9c234380610571efcc61eab853d_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_acdbf7a3e19fc6454c0b9ace690446cdc0ff8dbf7b14f24049394714bf2a6e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdbf7a3e19fc6454c0b9ace690446cdc0ff8dbf7b14f24049394714bf2a6e47->enter($__internal_acdbf7a3e19fc6454c0b9ace690446cdc0ff8dbf7b14f24049394714bf2a6e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1d8124283bdfb3c0344d9b967f6e33d1d709096e1eb131d9660f116c8b6987a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8124283bdfb3c0344d9b967f6e33d1d709096e1eb131d9660f116c8b6987a4->enter($__internal_1d8124283bdfb3c0344d9b967f6e33d1d709096e1eb131d9660f116c8b6987a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_1d8124283bdfb3c0344d9b967f6e33d1d709096e1eb131d9660f116c8b6987a4->leave($__internal_1d8124283bdfb3c0344d9b967f6e33d1d709096e1eb131d9660f116c8b6987a4_prof);

        
        $__internal_acdbf7a3e19fc6454c0b9ace690446cdc0ff8dbf7b14f24049394714bf2a6e47->leave($__internal_acdbf7a3e19fc6454c0b9ace690446cdc0ff8dbf7b14f24049394714bf2a6e47_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c88699f9146a18c9ff4bdb38fc3443bf41b76386f6e631342567d0008c999e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88699f9146a18c9ff4bdb38fc3443bf41b76386f6e631342567d0008c999e21->enter($__internal_c88699f9146a18c9ff4bdb38fc3443bf41b76386f6e631342567d0008c999e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ebcadce8faf9d353bd76dc491a8206794b1387666d20515383d0040dd5acdcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcadce8faf9d353bd76dc491a8206794b1387666d20515383d0040dd5acdcd2->enter($__internal_ebcadce8faf9d353bd76dc491a8206794b1387666d20515383d0040dd5acdcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ebcadce8faf9d353bd76dc491a8206794b1387666d20515383d0040dd5acdcd2->leave($__internal_ebcadce8faf9d353bd76dc491a8206794b1387666d20515383d0040dd5acdcd2_prof);

        
        $__internal_c88699f9146a18c9ff4bdb38fc3443bf41b76386f6e631342567d0008c999e21->leave($__internal_c88699f9146a18c9ff4bdb38fc3443bf41b76386f6e631342567d0008c999e21_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ac1f360cfd45cea405222a00fddc0db19548ba7ea0a7927ea2918f6578410894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1f360cfd45cea405222a00fddc0db19548ba7ea0a7927ea2918f6578410894->enter($__internal_ac1f360cfd45cea405222a00fddc0db19548ba7ea0a7927ea2918f6578410894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_336e4e739c3904f7c2d4a2e41cbcc3e9cf1a16492cb00b6b079479fff71a7604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336e4e739c3904f7c2d4a2e41cbcc3e9cf1a16492cb00b6b079479fff71a7604->enter($__internal_336e4e739c3904f7c2d4a2e41cbcc3e9cf1a16492cb00b6b079479fff71a7604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_8930f9b11004ed3ba233be4d58a82a1fa2539e29be49560ee64ae2553f02c65a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d935b8fdfe3f4c41ab5f8f7a29553c55faf5cdcaebb994089f2d83f0c1fde33f = "{{") && ('' === $__internal_d935b8fdfe3f4c41ab5f8f7a29553c55faf5cdcaebb994089f2d83f0c1fde33f || 0 === strpos($__internal_8930f9b11004ed3ba233be4d58a82a1fa2539e29be49560ee64ae2553f02c65a, $__internal_d935b8fdfe3f4c41ab5f8f7a29553c55faf5cdcaebb994089f2d83f0c1fde33f)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_336e4e739c3904f7c2d4a2e41cbcc3e9cf1a16492cb00b6b079479fff71a7604->leave($__internal_336e4e739c3904f7c2d4a2e41cbcc3e9cf1a16492cb00b6b079479fff71a7604_prof);

        
        $__internal_ac1f360cfd45cea405222a00fddc0db19548ba7ea0a7927ea2918f6578410894->leave($__internal_ac1f360cfd45cea405222a00fddc0db19548ba7ea0a7927ea2918f6578410894_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_eb89fe80cb84fc3d9e2fe0fe01ec5809b6129412e5c5d92ddefdbe03f82829e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb89fe80cb84fc3d9e2fe0fe01ec5809b6129412e5c5d92ddefdbe03f82829e4->enter($__internal_eb89fe80cb84fc3d9e2fe0fe01ec5809b6129412e5c5d92ddefdbe03f82829e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4d7cb1e48378aa1434397a67cc22c8f876038966835db708af7d225fa011a0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7cb1e48378aa1434397a67cc22c8f876038966835db708af7d225fa011a0bc->enter($__internal_4d7cb1e48378aa1434397a67cc22c8f876038966835db708af7d225fa011a0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4d7cb1e48378aa1434397a67cc22c8f876038966835db708af7d225fa011a0bc->leave($__internal_4d7cb1e48378aa1434397a67cc22c8f876038966835db708af7d225fa011a0bc_prof);

        
        $__internal_eb89fe80cb84fc3d9e2fe0fe01ec5809b6129412e5c5d92ddefdbe03f82829e4->leave($__internal_eb89fe80cb84fc3d9e2fe0fe01ec5809b6129412e5c5d92ddefdbe03f82829e4_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_432e2872db8060132ddb928a01d1c850fca3db5bed62fb61150feff8899d1c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432e2872db8060132ddb928a01d1c850fca3db5bed62fb61150feff8899d1c00->enter($__internal_432e2872db8060132ddb928a01d1c850fca3db5bed62fb61150feff8899d1c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4bb620dc5ab284d8e7a9b8f97897f937d450b45a725f54b5ae1e0f1346357b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb620dc5ab284d8e7a9b8f97897f937d450b45a725f54b5ae1e0f1346357b44->enter($__internal_4bb620dc5ab284d8e7a9b8f97897f937d450b45a725f54b5ae1e0f1346357b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_4bb620dc5ab284d8e7a9b8f97897f937d450b45a725f54b5ae1e0f1346357b44->leave($__internal_4bb620dc5ab284d8e7a9b8f97897f937d450b45a725f54b5ae1e0f1346357b44_prof);

        
        $__internal_432e2872db8060132ddb928a01d1c850fca3db5bed62fb61150feff8899d1c00->leave($__internal_432e2872db8060132ddb928a01d1c850fca3db5bed62fb61150feff8899d1c00_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ed0ede513229898c0665abb59c41d31db55bc8aca36eb556241b9dca957a2fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0ede513229898c0665abb59c41d31db55bc8aca36eb556241b9dca957a2fea->enter($__internal_ed0ede513229898c0665abb59c41d31db55bc8aca36eb556241b9dca957a2fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_33f53359aef5fba2291235d35ebb7c3ce4dd6b1c78640d37bb9ffbe7ad091440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f53359aef5fba2291235d35ebb7c3ce4dd6b1c78640d37bb9ffbe7ad091440->enter($__internal_33f53359aef5fba2291235d35ebb7c3ce4dd6b1c78640d37bb9ffbe7ad091440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_33f53359aef5fba2291235d35ebb7c3ce4dd6b1c78640d37bb9ffbe7ad091440->leave($__internal_33f53359aef5fba2291235d35ebb7c3ce4dd6b1c78640d37bb9ffbe7ad091440_prof);

        
        $__internal_ed0ede513229898c0665abb59c41d31db55bc8aca36eb556241b9dca957a2fea->leave($__internal_ed0ede513229898c0665abb59c41d31db55bc8aca36eb556241b9dca957a2fea_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7a886b8f170fb2014bbc93eeca07fd174cb7bd9f5b8f8fcf7f773adc112ece5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a886b8f170fb2014bbc93eeca07fd174cb7bd9f5b8f8fcf7f773adc112ece5a->enter($__internal_7a886b8f170fb2014bbc93eeca07fd174cb7bd9f5b8f8fcf7f773adc112ece5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_68d761c96dc965378a194430f6cc766996b1d5965e80ffbb5376d585858a0220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d761c96dc965378a194430f6cc766996b1d5965e80ffbb5376d585858a0220->enter($__internal_68d761c96dc965378a194430f6cc766996b1d5965e80ffbb5376d585858a0220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_68d761c96dc965378a194430f6cc766996b1d5965e80ffbb5376d585858a0220->leave($__internal_68d761c96dc965378a194430f6cc766996b1d5965e80ffbb5376d585858a0220_prof);

        
        $__internal_7a886b8f170fb2014bbc93eeca07fd174cb7bd9f5b8f8fcf7f773adc112ece5a->leave($__internal_7a886b8f170fb2014bbc93eeca07fd174cb7bd9f5b8f8fcf7f773adc112ece5a_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_dac9a1cdf66b6f7db8a0447a305edbda6a2a9b607eef7930593df4c3bce718fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac9a1cdf66b6f7db8a0447a305edbda6a2a9b607eef7930593df4c3bce718fe->enter($__internal_dac9a1cdf66b6f7db8a0447a305edbda6a2a9b607eef7930593df4c3bce718fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a6a66b4a8e09a5538ef191dff781a2bb48a10bbe61e0834ad41a6a83f59f997c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a66b4a8e09a5538ef191dff781a2bb48a10bbe61e0834ad41a6a83f59f997c->enter($__internal_a6a66b4a8e09a5538ef191dff781a2bb48a10bbe61e0834ad41a6a83f59f997c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_a6a66b4a8e09a5538ef191dff781a2bb48a10bbe61e0834ad41a6a83f59f997c->leave($__internal_a6a66b4a8e09a5538ef191dff781a2bb48a10bbe61e0834ad41a6a83f59f997c_prof);

        
        $__internal_dac9a1cdf66b6f7db8a0447a305edbda6a2a9b607eef7930593df4c3bce718fe->leave($__internal_dac9a1cdf66b6f7db8a0447a305edbda6a2a9b607eef7930593df4c3bce718fe_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_396137488cca84df9b042188ec69493c81b4f7789bc7cf92d5afa2538edfde53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396137488cca84df9b042188ec69493c81b4f7789bc7cf92d5afa2538edfde53->enter($__internal_396137488cca84df9b042188ec69493c81b4f7789bc7cf92d5afa2538edfde53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3a029679eb837c64a77277ddf2b5f1ae3873c78ca7787b30e620d968526d6264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a029679eb837c64a77277ddf2b5f1ae3873c78ca7787b30e620d968526d6264->enter($__internal_3a029679eb837c64a77277ddf2b5f1ae3873c78ca7787b30e620d968526d6264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_3a029679eb837c64a77277ddf2b5f1ae3873c78ca7787b30e620d968526d6264->leave($__internal_3a029679eb837c64a77277ddf2b5f1ae3873c78ca7787b30e620d968526d6264_prof);

        
        $__internal_396137488cca84df9b042188ec69493c81b4f7789bc7cf92d5afa2538edfde53->leave($__internal_396137488cca84df9b042188ec69493c81b4f7789bc7cf92d5afa2538edfde53_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d0f41315f8e11e67503171397dc9a90b1cf930e46a9685f2c038bd63c93683f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f41315f8e11e67503171397dc9a90b1cf930e46a9685f2c038bd63c93683f2->enter($__internal_d0f41315f8e11e67503171397dc9a90b1cf930e46a9685f2c038bd63c93683f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_feda91b539d36cd28803db1bf4b882feda14544d395493584bfb8075951c879d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feda91b539d36cd28803db1bf4b882feda14544d395493584bfb8075951c879d->enter($__internal_feda91b539d36cd28803db1bf4b882feda14544d395493584bfb8075951c879d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_feda91b539d36cd28803db1bf4b882feda14544d395493584bfb8075951c879d->leave($__internal_feda91b539d36cd28803db1bf4b882feda14544d395493584bfb8075951c879d_prof);

        
        $__internal_d0f41315f8e11e67503171397dc9a90b1cf930e46a9685f2c038bd63c93683f2->leave($__internal_d0f41315f8e11e67503171397dc9a90b1cf930e46a9685f2c038bd63c93683f2_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a22a080800cfb8ebea46a6d97d84a3334f15fba8071207e7bd6120709924f580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22a080800cfb8ebea46a6d97d84a3334f15fba8071207e7bd6120709924f580->enter($__internal_a22a080800cfb8ebea46a6d97d84a3334f15fba8071207e7bd6120709924f580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d7ac028ad7ddc742917153a33bd7fa45705da27e0f4c5845288ac9331cead7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ac028ad7ddc742917153a33bd7fa45705da27e0f4c5845288ac9331cead7ce->enter($__internal_d7ac028ad7ddc742917153a33bd7fa45705da27e0f4c5845288ac9331cead7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_d7ac028ad7ddc742917153a33bd7fa45705da27e0f4c5845288ac9331cead7ce->leave($__internal_d7ac028ad7ddc742917153a33bd7fa45705da27e0f4c5845288ac9331cead7ce_prof);

        
        $__internal_a22a080800cfb8ebea46a6d97d84a3334f15fba8071207e7bd6120709924f580->leave($__internal_a22a080800cfb8ebea46a6d97d84a3334f15fba8071207e7bd6120709924f580_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4f09452398413cd0eb79a4f1247594d6a0c215dc6a957e7efe84951ecabe6e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f09452398413cd0eb79a4f1247594d6a0c215dc6a957e7efe84951ecabe6e0d->enter($__internal_4f09452398413cd0eb79a4f1247594d6a0c215dc6a957e7efe84951ecabe6e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_91b47a3bf71b75459b1b114d9abd2e3710664c500043528e257936f93b745de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b47a3bf71b75459b1b114d9abd2e3710664c500043528e257936f93b745de8->enter($__internal_91b47a3bf71b75459b1b114d9abd2e3710664c500043528e257936f93b745de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_91b47a3bf71b75459b1b114d9abd2e3710664c500043528e257936f93b745de8->leave($__internal_91b47a3bf71b75459b1b114d9abd2e3710664c500043528e257936f93b745de8_prof);

        
        $__internal_4f09452398413cd0eb79a4f1247594d6a0c215dc6a957e7efe84951ecabe6e0d->leave($__internal_4f09452398413cd0eb79a4f1247594d6a0c215dc6a957e7efe84951ecabe6e0d_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5087b3bb161b2f245220dfca7bae6675a6e221fadca3e9447d0e6f26a6328152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5087b3bb161b2f245220dfca7bae6675a6e221fadca3e9447d0e6f26a6328152->enter($__internal_5087b3bb161b2f245220dfca7bae6675a6e221fadca3e9447d0e6f26a6328152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1109f5a5785ccbaa083bb8ae8af042260ef526c57222d3d2e6da500fca4c2dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1109f5a5785ccbaa083bb8ae8af042260ef526c57222d3d2e6da500fca4c2dc6->enter($__internal_1109f5a5785ccbaa083bb8ae8af042260ef526c57222d3d2e6da500fca4c2dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1109f5a5785ccbaa083bb8ae8af042260ef526c57222d3d2e6da500fca4c2dc6->leave($__internal_1109f5a5785ccbaa083bb8ae8af042260ef526c57222d3d2e6da500fca4c2dc6_prof);

        
        $__internal_5087b3bb161b2f245220dfca7bae6675a6e221fadca3e9447d0e6f26a6328152->leave($__internal_5087b3bb161b2f245220dfca7bae6675a6e221fadca3e9447d0e6f26a6328152_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_4ac30751612bb192e67d7b1898de4ee7abd37545a4e7ed815c03532f1c2b9ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac30751612bb192e67d7b1898de4ee7abd37545a4e7ed815c03532f1c2b9ade->enter($__internal_4ac30751612bb192e67d7b1898de4ee7abd37545a4e7ed815c03532f1c2b9ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9a9b75603ba69bd418214f657b4e17a4a5a460331829e695ddf1480fdb43fe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9b75603ba69bd418214f657b4e17a4a5a460331829e695ddf1480fdb43fe9e->enter($__internal_9a9b75603ba69bd418214f657b4e17a4a5a460331829e695ddf1480fdb43fe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9a9b75603ba69bd418214f657b4e17a4a5a460331829e695ddf1480fdb43fe9e->leave($__internal_9a9b75603ba69bd418214f657b4e17a4a5a460331829e695ddf1480fdb43fe9e_prof);

        
        $__internal_4ac30751612bb192e67d7b1898de4ee7abd37545a4e7ed815c03532f1c2b9ade->leave($__internal_4ac30751612bb192e67d7b1898de4ee7abd37545a4e7ed815c03532f1c2b9ade_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ca9d8bcb0a44caae114a06fb78eabd1e767adf0465ff980f02d8e99a822a0beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9d8bcb0a44caae114a06fb78eabd1e767adf0465ff980f02d8e99a822a0beb->enter($__internal_ca9d8bcb0a44caae114a06fb78eabd1e767adf0465ff980f02d8e99a822a0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6e7e34c57493928dafe2e02c70d32a0f3a2a6c968355361545250e555280790c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7e34c57493928dafe2e02c70d32a0f3a2a6c968355361545250e555280790c->enter($__internal_6e7e34c57493928dafe2e02c70d32a0f3a2a6c968355361545250e555280790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6e7e34c57493928dafe2e02c70d32a0f3a2a6c968355361545250e555280790c->leave($__internal_6e7e34c57493928dafe2e02c70d32a0f3a2a6c968355361545250e555280790c_prof);

        
        $__internal_ca9d8bcb0a44caae114a06fb78eabd1e767adf0465ff980f02d8e99a822a0beb->leave($__internal_ca9d8bcb0a44caae114a06fb78eabd1e767adf0465ff980f02d8e99a822a0beb_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f05ec7159e8d646efa87e1f102c48e06d91cd0d3a6e1b1afb6760f0d751db6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05ec7159e8d646efa87e1f102c48e06d91cd0d3a6e1b1afb6760f0d751db6fd->enter($__internal_f05ec7159e8d646efa87e1f102c48e06d91cd0d3a6e1b1afb6760f0d751db6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_abdfa88a1723ab0a9766228c6dfbaeabcd532eeaf88fa3da85ea1b62d0efada9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdfa88a1723ab0a9766228c6dfbaeabcd532eeaf88fa3da85ea1b62d0efada9->enter($__internal_abdfa88a1723ab0a9766228c6dfbaeabcd532eeaf88fa3da85ea1b62d0efada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_abdfa88a1723ab0a9766228c6dfbaeabcd532eeaf88fa3da85ea1b62d0efada9->leave($__internal_abdfa88a1723ab0a9766228c6dfbaeabcd532eeaf88fa3da85ea1b62d0efada9_prof);

        
        $__internal_f05ec7159e8d646efa87e1f102c48e06d91cd0d3a6e1b1afb6760f0d751db6fd->leave($__internal_f05ec7159e8d646efa87e1f102c48e06d91cd0d3a6e1b1afb6760f0d751db6fd_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f2e202eaec7ff4f3ea718faeac163eb2ca0e23f9dac0a12fc8137369abd6f49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e202eaec7ff4f3ea718faeac163eb2ca0e23f9dac0a12fc8137369abd6f49a->enter($__internal_f2e202eaec7ff4f3ea718faeac163eb2ca0e23f9dac0a12fc8137369abd6f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_74ba6e4e781f8cfa1da0506512a7c0e6593705f98cd6992d0beda52f667af6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ba6e4e781f8cfa1da0506512a7c0e6593705f98cd6992d0beda52f667af6c6->enter($__internal_74ba6e4e781f8cfa1da0506512a7c0e6593705f98cd6992d0beda52f667af6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_74ba6e4e781f8cfa1da0506512a7c0e6593705f98cd6992d0beda52f667af6c6->leave($__internal_74ba6e4e781f8cfa1da0506512a7c0e6593705f98cd6992d0beda52f667af6c6_prof);

        
        $__internal_f2e202eaec7ff4f3ea718faeac163eb2ca0e23f9dac0a12fc8137369abd6f49a->leave($__internal_f2e202eaec7ff4f3ea718faeac163eb2ca0e23f9dac0a12fc8137369abd6f49a_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b5fc4d15c294f5db7cd30aac22b47d69dea626b47fa359e99f139981538978de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fc4d15c294f5db7cd30aac22b47d69dea626b47fa359e99f139981538978de->enter($__internal_b5fc4d15c294f5db7cd30aac22b47d69dea626b47fa359e99f139981538978de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ead155b51cc2be359b30882be690be744e6e5bca6b6c2744c2a6fd1c3d7f26f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead155b51cc2be359b30882be690be744e6e5bca6b6c2744c2a6fd1c3d7f26f3->enter($__internal_ead155b51cc2be359b30882be690be744e6e5bca6b6c2744c2a6fd1c3d7f26f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_ead155b51cc2be359b30882be690be744e6e5bca6b6c2744c2a6fd1c3d7f26f3->leave($__internal_ead155b51cc2be359b30882be690be744e6e5bca6b6c2744c2a6fd1c3d7f26f3_prof);

        
        $__internal_b5fc4d15c294f5db7cd30aac22b47d69dea626b47fa359e99f139981538978de->leave($__internal_b5fc4d15c294f5db7cd30aac22b47d69dea626b47fa359e99f139981538978de_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c123985a42a252992385cb245643838bb16820bac8912cb12a706fa315fde698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c123985a42a252992385cb245643838bb16820bac8912cb12a706fa315fde698->enter($__internal_c123985a42a252992385cb245643838bb16820bac8912cb12a706fa315fde698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_50378f53acde45c1eebfd7c69b4cad791bbc7da38b1e03d3dd4473903c2e8ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50378f53acde45c1eebfd7c69b4cad791bbc7da38b1e03d3dd4473903c2e8ef6->enter($__internal_50378f53acde45c1eebfd7c69b4cad791bbc7da38b1e03d3dd4473903c2e8ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_50378f53acde45c1eebfd7c69b4cad791bbc7da38b1e03d3dd4473903c2e8ef6->leave($__internal_50378f53acde45c1eebfd7c69b4cad791bbc7da38b1e03d3dd4473903c2e8ef6_prof);

        
        $__internal_c123985a42a252992385cb245643838bb16820bac8912cb12a706fa315fde698->leave($__internal_c123985a42a252992385cb245643838bb16820bac8912cb12a706fa315fde698_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a91d51b7c18900f2a4daadeee8e7d37fbaf93d0b7d593a7426b0998b49775e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91d51b7c18900f2a4daadeee8e7d37fbaf93d0b7d593a7426b0998b49775e32->enter($__internal_a91d51b7c18900f2a4daadeee8e7d37fbaf93d0b7d593a7426b0998b49775e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2fef6859a63980d7cda2b29efcd279412e8bc479110343114c66ed1265b9ecaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fef6859a63980d7cda2b29efcd279412e8bc479110343114c66ed1265b9ecaa->enter($__internal_2fef6859a63980d7cda2b29efcd279412e8bc479110343114c66ed1265b9ecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2fef6859a63980d7cda2b29efcd279412e8bc479110343114c66ed1265b9ecaa->leave($__internal_2fef6859a63980d7cda2b29efcd279412e8bc479110343114c66ed1265b9ecaa_prof);

        
        $__internal_a91d51b7c18900f2a4daadeee8e7d37fbaf93d0b7d593a7426b0998b49775e32->leave($__internal_a91d51b7c18900f2a4daadeee8e7d37fbaf93d0b7d593a7426b0998b49775e32_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9ea1e76094fb1fc46d53aee7647d761f6d94c52652b50abeecb57e8166c79c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea1e76094fb1fc46d53aee7647d761f6d94c52652b50abeecb57e8166c79c94->enter($__internal_9ea1e76094fb1fc46d53aee7647d761f6d94c52652b50abeecb57e8166c79c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2b18ebf6c76929023195af485f2051d2a3744aa1c83f84f197ec18c512153313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b18ebf6c76929023195af485f2051d2a3744aa1c83f84f197ec18c512153313->enter($__internal_2b18ebf6c76929023195af485f2051d2a3744aa1c83f84f197ec18c512153313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2b18ebf6c76929023195af485f2051d2a3744aa1c83f84f197ec18c512153313->leave($__internal_2b18ebf6c76929023195af485f2051d2a3744aa1c83f84f197ec18c512153313_prof);

        
        $__internal_9ea1e76094fb1fc46d53aee7647d761f6d94c52652b50abeecb57e8166c79c94->leave($__internal_9ea1e76094fb1fc46d53aee7647d761f6d94c52652b50abeecb57e8166c79c94_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3230b95e40d5e116721a69923d7baceb8961f101f41940364117b03cef479576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3230b95e40d5e116721a69923d7baceb8961f101f41940364117b03cef479576->enter($__internal_3230b95e40d5e116721a69923d7baceb8961f101f41940364117b03cef479576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_fae4870817d39dbeb236d5fbe2d1e0d7ade5d32d4e5a64894081fddf8f75c4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae4870817d39dbeb236d5fbe2d1e0d7ade5d32d4e5a64894081fddf8f75c4b3->enter($__internal_fae4870817d39dbeb236d5fbe2d1e0d7ade5d32d4e5a64894081fddf8f75c4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fae4870817d39dbeb236d5fbe2d1e0d7ade5d32d4e5a64894081fddf8f75c4b3->leave($__internal_fae4870817d39dbeb236d5fbe2d1e0d7ade5d32d4e5a64894081fddf8f75c4b3_prof);

        
        $__internal_3230b95e40d5e116721a69923d7baceb8961f101f41940364117b03cef479576->leave($__internal_3230b95e40d5e116721a69923d7baceb8961f101f41940364117b03cef479576_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_275aeb4ea0f6b58ba53faa2768d5115f394edab378b49574035f2eb689a2b6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275aeb4ea0f6b58ba53faa2768d5115f394edab378b49574035f2eb689a2b6c7->enter($__internal_275aeb4ea0f6b58ba53faa2768d5115f394edab378b49574035f2eb689a2b6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_06f5e8b1e30631ab36b3595ea837c4b5d724565974209db641849604ef2fad1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f5e8b1e30631ab36b3595ea837c4b5d724565974209db641849604ef2fad1d->enter($__internal_06f5e8b1e30631ab36b3595ea837c4b5d724565974209db641849604ef2fad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_06f5e8b1e30631ab36b3595ea837c4b5d724565974209db641849604ef2fad1d->leave($__internal_06f5e8b1e30631ab36b3595ea837c4b5d724565974209db641849604ef2fad1d_prof);

        
        $__internal_275aeb4ea0f6b58ba53faa2768d5115f394edab378b49574035f2eb689a2b6c7->leave($__internal_275aeb4ea0f6b58ba53faa2768d5115f394edab378b49574035f2eb689a2b6c7_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_185e39815ab3ce335ad32280980c119754fdb7b30a4ddb08ac24868cb73be134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185e39815ab3ce335ad32280980c119754fdb7b30a4ddb08ac24868cb73be134->enter($__internal_185e39815ab3ce335ad32280980c119754fdb7b30a4ddb08ac24868cb73be134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5a2283f491bc9e0a13aa53381998d9a4cd61807848ff197fcdf4860c6d91471d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2283f491bc9e0a13aa53381998d9a4cd61807848ff197fcdf4860c6d91471d->enter($__internal_5a2283f491bc9e0a13aa53381998d9a4cd61807848ff197fcdf4860c6d91471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_5a2283f491bc9e0a13aa53381998d9a4cd61807848ff197fcdf4860c6d91471d->leave($__internal_5a2283f491bc9e0a13aa53381998d9a4cd61807848ff197fcdf4860c6d91471d_prof);

        
        $__internal_185e39815ab3ce335ad32280980c119754fdb7b30a4ddb08ac24868cb73be134->leave($__internal_185e39815ab3ce335ad32280980c119754fdb7b30a4ddb08ac24868cb73be134_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_fd91ebdf17ffd42a6224eafcc35b3bef6c35831d2be82f49d43484824707d656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd91ebdf17ffd42a6224eafcc35b3bef6c35831d2be82f49d43484824707d656->enter($__internal_fd91ebdf17ffd42a6224eafcc35b3bef6c35831d2be82f49d43484824707d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_39ff847c94d59d3ad637ee8d35d295a669eaad04eb0eb2bdd5db0d6b1c9b3f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ff847c94d59d3ad637ee8d35d295a669eaad04eb0eb2bdd5db0d6b1c9b3f79->enter($__internal_39ff847c94d59d3ad637ee8d35d295a669eaad04eb0eb2bdd5db0d6b1c9b3f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_39ff847c94d59d3ad637ee8d35d295a669eaad04eb0eb2bdd5db0d6b1c9b3f79->leave($__internal_39ff847c94d59d3ad637ee8d35d295a669eaad04eb0eb2bdd5db0d6b1c9b3f79_prof);

        
        $__internal_fd91ebdf17ffd42a6224eafcc35b3bef6c35831d2be82f49d43484824707d656->leave($__internal_fd91ebdf17ffd42a6224eafcc35b3bef6c35831d2be82f49d43484824707d656_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d3bc32a0a58987981c5acd230c3e7cf37a201fbb4df56fb2838848a2cc0c56b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bc32a0a58987981c5acd230c3e7cf37a201fbb4df56fb2838848a2cc0c56b5->enter($__internal_d3bc32a0a58987981c5acd230c3e7cf37a201fbb4df56fb2838848a2cc0c56b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_dd0475df026f78acfc69c4f842d44e7e4f2df00d80e24aa0099da2a63ba59344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0475df026f78acfc69c4f842d44e7e4f2df00d80e24aa0099da2a63ba59344->enter($__internal_dd0475df026f78acfc69c4f842d44e7e4f2df00d80e24aa0099da2a63ba59344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_dd0475df026f78acfc69c4f842d44e7e4f2df00d80e24aa0099da2a63ba59344->leave($__internal_dd0475df026f78acfc69c4f842d44e7e4f2df00d80e24aa0099da2a63ba59344_prof);

        
        $__internal_d3bc32a0a58987981c5acd230c3e7cf37a201fbb4df56fb2838848a2cc0c56b5->leave($__internal_d3bc32a0a58987981c5acd230c3e7cf37a201fbb4df56fb2838848a2cc0c56b5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
