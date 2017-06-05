<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_b1e72786efb7cbeaa8887b6929b99a52e47ad2a875f07aa91a11426619f64c8c extends Twig_Template
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
        $__internal_0e24241774f382ece136821d322e1d85a7b12d32ee597e0e30242f4cf0b31410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e24241774f382ece136821d322e1d85a7b12d32ee597e0e30242f4cf0b31410->enter($__internal_0e24241774f382ece136821d322e1d85a7b12d32ee597e0e30242f4cf0b31410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        $__internal_ffad53535eabad16b837bcaaa85c248d733a59e0c23b5cda0cc38509a68e9467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffad53535eabad16b837bcaaa85c248d733a59e0c23b5cda0cc38509a68e9467->enter($__internal_ffad53535eabad16b837bcaaa85c248d733a59e0c23b5cda0cc38509a68e9467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

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
        
        $__internal_0e24241774f382ece136821d322e1d85a7b12d32ee597e0e30242f4cf0b31410->leave($__internal_0e24241774f382ece136821d322e1d85a7b12d32ee597e0e30242f4cf0b31410_prof);

        
        $__internal_ffad53535eabad16b837bcaaa85c248d733a59e0c23b5cda0cc38509a68e9467->leave($__internal_ffad53535eabad16b837bcaaa85c248d733a59e0c23b5cda0cc38509a68e9467_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_669ff7406f3eb9c0af82242b926a6d918e1bb4c2bc5a13b5a7f446105c102dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669ff7406f3eb9c0af82242b926a6d918e1bb4c2bc5a13b5a7f446105c102dff->enter($__internal_669ff7406f3eb9c0af82242b926a6d918e1bb4c2bc5a13b5a7f446105c102dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        $__internal_51b189baec5bec16bce253f5839f14743085976dfccb5503c67ec225c38e89c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b189baec5bec16bce253f5839f14743085976dfccb5503c67ec225c38e89c0->enter($__internal_51b189baec5bec16bce253f5839f14743085976dfccb5503c67ec225c38e89c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

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
        
        $__internal_51b189baec5bec16bce253f5839f14743085976dfccb5503c67ec225c38e89c0->leave($__internal_51b189baec5bec16bce253f5839f14743085976dfccb5503c67ec225c38e89c0_prof);

        
        $__internal_669ff7406f3eb9c0af82242b926a6d918e1bb4c2bc5a13b5a7f446105c102dff->leave($__internal_669ff7406f3eb9c0af82242b926a6d918e1bb4c2bc5a13b5a7f446105c102dff_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_3467b6efaffa360e6ba3e99fce44225b3711846f7af430a3235681288fca4c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3467b6efaffa360e6ba3e99fce44225b3711846f7af430a3235681288fca4c77->enter($__internal_3467b6efaffa360e6ba3e99fce44225b3711846f7af430a3235681288fca4c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        $__internal_4f08f2a5ddb98f463b5a70589142184ae57c46d5a002aee59bc945f352aa3318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f08f2a5ddb98f463b5a70589142184ae57c46d5a002aee59bc945f352aa3318->enter($__internal_4f08f2a5ddb98f463b5a70589142184ae57c46d5a002aee59bc945f352aa3318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if ((($context["enable"] ?? $this->getContext($context, "enable")) && ($context["async"] ?? $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4f08f2a5ddb98f463b5a70589142184ae57c46d5a002aee59bc945f352aa3318->leave($__internal_4f08f2a5ddb98f463b5a70589142184ae57c46d5a002aee59bc945f352aa3318_prof);

        
        $__internal_3467b6efaffa360e6ba3e99fce44225b3711846f7af430a3235681288fca4c77->leave($__internal_3467b6efaffa360e6ba3e99fce44225b3711846f7af430a3235681288fca4c77_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_4185e9934700fe35c77a41e3fb52c3bc59a8ce0459c66b4ae0dcd3bad006c39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4185e9934700fe35c77a41e3fb52c3bc59a8ce0459c66b4ae0dcd3bad006c39c->enter($__internal_4185e9934700fe35c77a41e3fb52c3bc59a8ce0459c66b4ae0dcd3bad006c39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        $__internal_6dbf8b9023e6429b166eed4f1e7d6eaf179cad513ce492945c5fc3d0d460e3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbf8b9023e6429b166eed4f1e7d6eaf179cad513ce492945c5fc3d0d460e3b7->enter($__internal_6dbf8b9023e6429b166eed4f1e7d6eaf179cad513ce492945c5fc3d0d460e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

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
        
        $__internal_6dbf8b9023e6429b166eed4f1e7d6eaf179cad513ce492945c5fc3d0d460e3b7->leave($__internal_6dbf8b9023e6429b166eed4f1e7d6eaf179cad513ce492945c5fc3d0d460e3b7_prof);

        
        $__internal_4185e9934700fe35c77a41e3fb52c3bc59a8ce0459c66b4ae0dcd3bad006c39c->leave($__internal_4185e9934700fe35c77a41e3fb52c3bc59a8ce0459c66b4ae0dcd3bad006c39c_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_1698047ffada432232fedb329397a62bab5999a6a44d8c91e78aca647a837aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1698047ffada432232fedb329397a62bab5999a6a44d8c91e78aca647a837aea->enter($__internal_1698047ffada432232fedb329397a62bab5999a6a44d8c91e78aca647a837aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        $__internal_d53fc43a960d25c7992ab616c14f5aa54a07faf55f8113b78a66391cf9a96d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53fc43a960d25c7992ab616c14f5aa54a07faf55f8113b78a66391cf9a96d5f->enter($__internal_d53fc43a960d25c7992ab616c14f5aa54a07faf55f8113b78a66391cf9a96d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_d53fc43a960d25c7992ab616c14f5aa54a07faf55f8113b78a66391cf9a96d5f->leave($__internal_d53fc43a960d25c7992ab616c14f5aa54a07faf55f8113b78a66391cf9a96d5f_prof);

        
        $__internal_1698047ffada432232fedb329397a62bab5999a6a44d8c91e78aca647a837aea->leave($__internal_1698047ffada432232fedb329397a62bab5999a6a44d8c91e78aca647a837aea_prof);

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
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
