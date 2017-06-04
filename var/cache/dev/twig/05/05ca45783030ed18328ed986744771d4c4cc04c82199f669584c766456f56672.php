<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_57cbd7cf682732d5c63f977cb5939c613c94f832ef3c2074c0e13ab61e79b287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c4c0736e6159f77e84dc53342b86db3f827d24b9b168c7861973c944ad2b346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4c0736e6159f77e84dc53342b86db3f827d24b9b168c7861973c944ad2b346->enter($__internal_3c4c0736e6159f77e84dc53342b86db3f827d24b9b168c7861973c944ad2b346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_fe25b352deee9adc128e5d866971030c727246d42a9a4af7efdcb3b275890928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe25b352deee9adc128e5d866971030c727246d42a9a4af7efdcb3b275890928->enter($__internal_fe25b352deee9adc128e5d866971030c727246d42a9a4af7efdcb3b275890928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_3c4c0736e6159f77e84dc53342b86db3f827d24b9b168c7861973c944ad2b346->leave($__internal_3c4c0736e6159f77e84dc53342b86db3f827d24b9b168c7861973c944ad2b346_prof);

        
        $__internal_fe25b352deee9adc128e5d866971030c727246d42a9a4af7efdcb3b275890928->leave($__internal_fe25b352deee9adc128e5d866971030c727246d42a9a4af7efdcb3b275890928_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_a2513529dbee962319ff48d97ad11f432bcc18cbb0560147dd2b0392417abddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2513529dbee962319ff48d97ad11f432bcc18cbb0560147dd2b0392417abddc->enter($__internal_a2513529dbee962319ff48d97ad11f432bcc18cbb0560147dd2b0392417abddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_88738d3a85275caa4ade6c68a6038de275ac3c5d1bcac5ff3850fdb9bfb86744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88738d3a85275caa4ade6c68a6038de275ac3c5d1bcac5ff3850fdb9bfb86744->enter($__internal_88738d3a85275caa4ade6c68a6038de275ac3c5d1bcac5ff3850fdb9bfb86744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_88738d3a85275caa4ade6c68a6038de275ac3c5d1bcac5ff3850fdb9bfb86744->leave($__internal_88738d3a85275caa4ade6c68a6038de275ac3c5d1bcac5ff3850fdb9bfb86744_prof);

        
        $__internal_a2513529dbee962319ff48d97ad11f432bcc18cbb0560147dd2b0392417abddc->leave($__internal_a2513529dbee962319ff48d97ad11f432bcc18cbb0560147dd2b0392417abddc_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_3b2e234b00e6dcd886df1c362d2415794af1c8e989d9f0712d091f49015b8473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2e234b00e6dcd886df1c362d2415794af1c8e989d9f0712d091f49015b8473->enter($__internal_3b2e234b00e6dcd886df1c362d2415794af1c8e989d9f0712d091f49015b8473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_18262fa844bd3234a2d777cd5465591f127c666ceb92aa98907e882bd9349fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18262fa844bd3234a2d777cd5465591f127c666ceb92aa98907e882bd9349fbf->enter($__internal_18262fa844bd3234a2d777cd5465591f127c666ceb92aa98907e882bd9349fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_18262fa844bd3234a2d777cd5465591f127c666ceb92aa98907e882bd9349fbf->leave($__internal_18262fa844bd3234a2d777cd5465591f127c666ceb92aa98907e882bd9349fbf_prof);

        
        $__internal_3b2e234b00e6dcd886df1c362d2415794af1c8e989d9f0712d091f49015b8473->leave($__internal_3b2e234b00e6dcd886df1c362d2415794af1c8e989d9f0712d091f49015b8473_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_9c8f26edd290f8caae94f570f4bc82b700baa84356c371378c5b4067009c1b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8f26edd290f8caae94f570f4bc82b700baa84356c371378c5b4067009c1b56->enter($__internal_9c8f26edd290f8caae94f570f4bc82b700baa84356c371378c5b4067009c1b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_50ebd66e1860419a6e6ff27a445dd5d5c2b0ac1cd58df3c7bd29345948c4d060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ebd66e1860419a6e6ff27a445dd5d5c2b0ac1cd58df3c7bd29345948c4d060->enter($__internal_50ebd66e1860419a6e6ff27a445dd5d5c2b0ac1cd58df3c7bd29345948c4d060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_50ebd66e1860419a6e6ff27a445dd5d5c2b0ac1cd58df3c7bd29345948c4d060->leave($__internal_50ebd66e1860419a6e6ff27a445dd5d5c2b0ac1cd58df3c7bd29345948c4d060_prof);

        
        $__internal_9c8f26edd290f8caae94f570f4bc82b700baa84356c371378c5b4067009c1b56->leave($__internal_9c8f26edd290f8caae94f570f4bc82b700baa84356c371378c5b4067009c1b56_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_4b0b4899a7a22de835527e2d1f78818d080ca541e4f66479f2ef9363f7977e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0b4899a7a22de835527e2d1f78818d080ca541e4f66479f2ef9363f7977e1a->enter($__internal_4b0b4899a7a22de835527e2d1f78818d080ca541e4f66479f2ef9363f7977e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_5e715d77488669a13450d2e7e62d524d65f34c1578726863e3254abd5e630383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e715d77488669a13450d2e7e62d524d65f34c1578726863e3254abd5e630383->enter($__internal_5e715d77488669a13450d2e7e62d524d65f34c1578726863e3254abd5e630383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5e715d77488669a13450d2e7e62d524d65f34c1578726863e3254abd5e630383->leave($__internal_5e715d77488669a13450d2e7e62d524d65f34c1578726863e3254abd5e630383_prof);

        
        $__internal_4b0b4899a7a22de835527e2d1f78818d080ca541e4f66479f2ef9363f7977e1a->leave($__internal_4b0b4899a7a22de835527e2d1f78818d080ca541e4f66479f2ef9363f7977e1a_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
