<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_fab972357fa050f3a39d4a37893383b46c36809c641b14378f43e6ec4d4da8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b0b0f92c8012696712c39376f6334f3f906fa97ea93e681832bb9846943be56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0b0f92c8012696712c39376f6334f3f906fa97ea93e681832bb9846943be56->enter($__internal_7b0b0f92c8012696712c39376f6334f3f906fa97ea93e681832bb9846943be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        $__internal_98b7643270a5654e581f2bed65eb5fab72e5a8bb41fa3f1060c63448d745b5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b7643270a5654e581f2bed65eb5fab72e5a8bb41fa3f1060c63448d745b5bd->enter($__internal_98b7643270a5654e581f2bed65eb5fab72e5a8bb41fa3f1060c63448d745b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_7b0b0f92c8012696712c39376f6334f3f906fa97ea93e681832bb9846943be56->leave($__internal_7b0b0f92c8012696712c39376f6334f3f906fa97ea93e681832bb9846943be56_prof);

        
        $__internal_98b7643270a5654e581f2bed65eb5fab72e5a8bb41fa3f1060c63448d745b5bd->leave($__internal_98b7643270a5654e581f2bed65eb5fab72e5a8bb41fa3f1060c63448d745b5bd_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_022a5f0527b84fe021e3104f4f3a897f1b4b0b3e7aee53f1a84dd1d45d762e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022a5f0527b84fe021e3104f4f3a897f1b4b0b3e7aee53f1a84dd1d45d762e64->enter($__internal_022a5f0527b84fe021e3104f4f3a897f1b4b0b3e7aee53f1a84dd1d45d762e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        $__internal_5ec8c745e908eb88687dda84cd3396ec86090c6508ef07d208116362213d10c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec8c745e908eb88687dda84cd3396ec86090c6508ef07d208116362213d10c2->enter($__internal_5ec8c745e908eb88687dda84cd3396ec86090c6508ef07d208116362213d10c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((($context["enable"] ?? $this->getContext($context, "enable")) &&  !($context["async"] ?? $this->getContext($context, "async")))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5ec8c745e908eb88687dda84cd3396ec86090c6508ef07d208116362213d10c2->leave($__internal_5ec8c745e908eb88687dda84cd3396ec86090c6508ef07d208116362213d10c2_prof);

        
        $__internal_022a5f0527b84fe021e3104f4f3a897f1b4b0b3e7aee53f1a84dd1d45d762e64->leave($__internal_022a5f0527b84fe021e3104f4f3a897f1b4b0b3e7aee53f1a84dd1d45d762e64_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_9af8464a8c17992278ce4adc3c23cc1000db49162d636c3c3b90a6c39a4a494d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af8464a8c17992278ce4adc3c23cc1000db49162d636c3c3b90a6c39a4a494d->enter($__internal_9af8464a8c17992278ce4adc3c23cc1000db49162d636c3c3b90a6c39a4a494d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        $__internal_1c52d2d23f0b83bb7fb12c9fb04ecfae1b6b86dc3adc4722e179d9d934198c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c52d2d23f0b83bb7fb12c9fb04ecfae1b6b86dc3adc4722e179d9d934198c2a->enter($__internal_1c52d2d23f0b83bb7fb12c9fb04ecfae1b6b86dc3adc4722e179d9d934198c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if ((($context["enable"] ?? $this->getContext($context, "enable")) && ($context["async"] ?? $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_1c52d2d23f0b83bb7fb12c9fb04ecfae1b6b86dc3adc4722e179d9d934198c2a->leave($__internal_1c52d2d23f0b83bb7fb12c9fb04ecfae1b6b86dc3adc4722e179d9d934198c2a_prof);

        
        $__internal_9af8464a8c17992278ce4adc3c23cc1000db49162d636c3c3b90a6c39a4a494d->leave($__internal_9af8464a8c17992278ce4adc3c23cc1000db49162d636c3c3b90a6c39a4a494d_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_d566064659c3b0a67eb9018f0dd4b11d380460c6aabcd247ef00b5a500e2e73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d566064659c3b0a67eb9018f0dd4b11d380460c6aabcd247ef00b5a500e2e73e->enter($__internal_d566064659c3b0a67eb9018f0dd4b11d380460c6aabcd247ef00b5a500e2e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        $__internal_b16c0490d13c1e3349fbc36838e18015a347cc5c16f045ceb8d8dbddd4152520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16c0490d13c1e3349fbc36838e18015a347cc5c16f045ceb8d8dbddd4152520->enter($__internal_b16c0490d13c1e3349fbc36838e18015a347cc5c16f045ceb8d8dbddd4152520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if (($context["autoload"] ?? $this->getContext($context, "autoload"))) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath(($context["base_path"] ?? $this->getContext($context, "base_path")));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["js_path"] ?? $this->getContext($context, "js_path")));
            echo "\"></script>
        ";
            // line 21
            if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["jquery_path"] ?? $this->getContext($context, "jquery_path")));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if (($context["require_js"] ?? $this->getContext($context, "require_js"))) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy(($context["id"] ?? $this->getContext($context, "id")));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? $this->getContext($context, "styles")));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget(($context["id"] ?? $this->getContext($context, "id")), ($context["config"] ?? $this->getContext($context, "config")), array("auto_inline" =>         // line 51
($context["auto_inline"] ?? $this->getContext($context, "auto_inline")), "inline" =>         // line 52
($context["inline"] ?? $this->getContext($context, "inline")), "input_sync" =>         // line 53
($context["input_sync"] ?? $this->getContext($context, "input_sync")), "filebrowsers" =>         // line 54
($context["filebrowsers"] ?? $this->getContext($context, "filebrowsers"))));
        // line 55
        echo "

        ";
        // line 57
        if (($context["require_js"] ?? $this->getContext($context, "require_js"))) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_b16c0490d13c1e3349fbc36838e18015a347cc5c16f045ceb8d8dbddd4152520->leave($__internal_b16c0490d13c1e3349fbc36838e18015a347cc5c16f045ceb8d8dbddd4152520_prof);

        
        $__internal_d566064659c3b0a67eb9018f0dd4b11d380460c6aabcd247ef00b5a500e2e73e->leave($__internal_d566064659c3b0a67eb9018f0dd4b11d380460c6aabcd247ef00b5a500e2e73e_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_cec16fac8687cd4a2feb27292bb62e5bd5cb5e6cf4d6d8245d4d0c45170c2297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec16fac8687cd4a2feb27292bb62e5bd5cb5e6cf4d6d8245d4d0c45170c2297->enter($__internal_cec16fac8687cd4a2feb27292bb62e5bd5cb5e6cf4d6d8245d4d0c45170c2297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        $__internal_13583fd95df8b3560a79affbd1d4d095bd588fcebca8762e0edfd7af7d197b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13583fd95df8b3560a79affbd1d4d095bd588fcebca8762e0edfd7af7d197b72->enter($__internal_13583fd95df8b3560a79affbd1d4d095bd588fcebca8762e0edfd7af7d197b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_13583fd95df8b3560a79affbd1d4d095bd588fcebca8762e0edfd7af7d197b72->leave($__internal_13583fd95df8b3560a79affbd1d4d095bd588fcebca8762e0edfd7af7d197b72_prof);

        
        $__internal_cec16fac8687cd4a2feb27292bb62e5bd5cb5e6cf4d6d8245d4d0c45170c2297->leave($__internal_cec16fac8687cd4a2feb27292bb62e5bd5cb5e6cf4d6d8245d4d0c45170c2297_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 48,  247 => 64,  243 => 62,  241 => 61,  238 => 60,  234 => 58,  232 => 57,  228 => 55,  226 => 54,  225 => 53,  224 => 52,  223 => 51,  222 => 50,  219 => 49,  217 => 48,  214 => 47,  205 => 45,  201 => 44,  198 => 43,  189 => 41,  185 => 40,  182 => 39,  173 => 37,  169 => 36,  164 => 34,  161 => 33,  157 => 31,  155 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  140 => 24,  134 => 22,  132 => 21,  128 => 20,  123 => 18,  120 => 17,  117 => 16,  108 => 15,  94 => 11,  91 => 10,  82 => 9,  68 => 5,  66 => 4,  58 => 2,  49 => 1,  39 => 15,  36 => 14,  34 => 9,  31 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable and not async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block ckeditor_javascript %}
    {% if enable and async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block _ckeditor_javascript %}
    {% if autoload %}
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
        </script>
        <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
        {% if jquery %}
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
        {% endif %}
    {% endif %}
    <script type=\"text/javascript\">
        {% if jquery %}
            \$(function () {
        {% endif %}

        {% if require_js %}
            require(['ckeditor'], function() {
        {% endif %}

        {{ ckeditor_destroy(id) }}

        {% for plugin_name, plugin in plugins %}
            {{ ckeditor_plugin(plugin_name, plugin) }}
        {% endfor %}

        {% for style_name, style in styles %}
            {{ ckeditor_styles_set(style_name, style) }}
        {% endfor %}

        {% for template_name, template in templates %}
            {{ ckeditor_template(template_name, template) }}
        {% endfor %}

        {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}

        {{ ckeditor_widget(id, config, {
            auto_inline: auto_inline,
            inline: inline,
            input_sync: input_sync,
            filebrowsers: filebrowsers
        }) }}

        {% if require_js %}
            });
        {% endif %}

        {% if jquery %}
            });
        {% endif %}
    </script>
{% endblock %}
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
