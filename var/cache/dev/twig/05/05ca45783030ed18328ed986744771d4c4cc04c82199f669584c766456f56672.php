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
        $__internal_b6f4e4ec99e8429b40c935dd09c29b79e85cff67b5beff71b266406bab83d8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f4e4ec99e8429b40c935dd09c29b79e85cff67b5beff71b266406bab83d8fa->enter($__internal_b6f4e4ec99e8429b40c935dd09c29b79e85cff67b5beff71b266406bab83d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_23eb686cd14f6fd93e1d57ba6039fcca1978cd5d9046631120d921c6c41136c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23eb686cd14f6fd93e1d57ba6039fcca1978cd5d9046631120d921c6c41136c7->enter($__internal_23eb686cd14f6fd93e1d57ba6039fcca1978cd5d9046631120d921c6c41136c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_b6f4e4ec99e8429b40c935dd09c29b79e85cff67b5beff71b266406bab83d8fa->leave($__internal_b6f4e4ec99e8429b40c935dd09c29b79e85cff67b5beff71b266406bab83d8fa_prof);

        
        $__internal_23eb686cd14f6fd93e1d57ba6039fcca1978cd5d9046631120d921c6c41136c7->leave($__internal_23eb686cd14f6fd93e1d57ba6039fcca1978cd5d9046631120d921c6c41136c7_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_79ecd3b4d401c735ec02c57dbe77fde25537868bef4be361779e7c40a41a36b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ecd3b4d401c735ec02c57dbe77fde25537868bef4be361779e7c40a41a36b1->enter($__internal_79ecd3b4d401c735ec02c57dbe77fde25537868bef4be361779e7c40a41a36b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_7d5628b7f484b3fb3187b2c0b649aa2e1c4fac8fed6083122566d0ce7bb44e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5628b7f484b3fb3187b2c0b649aa2e1c4fac8fed6083122566d0ce7bb44e2d->enter($__internal_7d5628b7f484b3fb3187b2c0b649aa2e1c4fac8fed6083122566d0ce7bb44e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d5628b7f484b3fb3187b2c0b649aa2e1c4fac8fed6083122566d0ce7bb44e2d->leave($__internal_7d5628b7f484b3fb3187b2c0b649aa2e1c4fac8fed6083122566d0ce7bb44e2d_prof);

        
        $__internal_79ecd3b4d401c735ec02c57dbe77fde25537868bef4be361779e7c40a41a36b1->leave($__internal_79ecd3b4d401c735ec02c57dbe77fde25537868bef4be361779e7c40a41a36b1_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_f7e6bc5242a8fe9f2796a2f045da2d1cbdc09f13a77e59905c94565f59279fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e6bc5242a8fe9f2796a2f045da2d1cbdc09f13a77e59905c94565f59279fe7->enter($__internal_f7e6bc5242a8fe9f2796a2f045da2d1cbdc09f13a77e59905c94565f59279fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_fb5f55445fb0775637bb67ce3dd5d45fac801c796afb4db6156b74431eeff3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5f55445fb0775637bb67ce3dd5d45fac801c796afb4db6156b74431eeff3b3->enter($__internal_fb5f55445fb0775637bb67ce3dd5d45fac801c796afb4db6156b74431eeff3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_fb5f55445fb0775637bb67ce3dd5d45fac801c796afb4db6156b74431eeff3b3->leave($__internal_fb5f55445fb0775637bb67ce3dd5d45fac801c796afb4db6156b74431eeff3b3_prof);

        
        $__internal_f7e6bc5242a8fe9f2796a2f045da2d1cbdc09f13a77e59905c94565f59279fe7->leave($__internal_f7e6bc5242a8fe9f2796a2f045da2d1cbdc09f13a77e59905c94565f59279fe7_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_2587d6ca58b2c3fc549e20e7e1ce84357aa81998bbe3c80c6bb3f7cb4aa9fc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2587d6ca58b2c3fc549e20e7e1ce84357aa81998bbe3c80c6bb3f7cb4aa9fc26->enter($__internal_2587d6ca58b2c3fc549e20e7e1ce84357aa81998bbe3c80c6bb3f7cb4aa9fc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_c213781a8bc54a00c1c98ca9580e5c2f1836a24562a58c494544023c4a019ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c213781a8bc54a00c1c98ca9580e5c2f1836a24562a58c494544023c4a019ed2->enter($__internal_c213781a8bc54a00c1c98ca9580e5c2f1836a24562a58c494544023c4a019ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c213781a8bc54a00c1c98ca9580e5c2f1836a24562a58c494544023c4a019ed2->leave($__internal_c213781a8bc54a00c1c98ca9580e5c2f1836a24562a58c494544023c4a019ed2_prof);

        
        $__internal_2587d6ca58b2c3fc549e20e7e1ce84357aa81998bbe3c80c6bb3f7cb4aa9fc26->leave($__internal_2587d6ca58b2c3fc549e20e7e1ce84357aa81998bbe3c80c6bb3f7cb4aa9fc26_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_740b265f242a44b0bbb30ace6023de8329785d25795e6e92c70499fab75b461a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740b265f242a44b0bbb30ace6023de8329785d25795e6e92c70499fab75b461a->enter($__internal_740b265f242a44b0bbb30ace6023de8329785d25795e6e92c70499fab75b461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_b398fa387e776b4efd5af40832649472641ff41ea24c01f8c3de257f458523d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b398fa387e776b4efd5af40832649472641ff41ea24c01f8c3de257f458523d1->enter($__internal_b398fa387e776b4efd5af40832649472641ff41ea24c01f8c3de257f458523d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_b398fa387e776b4efd5af40832649472641ff41ea24c01f8c3de257f458523d1->leave($__internal_b398fa387e776b4efd5af40832649472641ff41ea24c01f8c3de257f458523d1_prof);

        
        $__internal_740b265f242a44b0bbb30ace6023de8329785d25795e6e92c70499fab75b461a->leave($__internal_740b265f242a44b0bbb30ace6023de8329785d25795e6e92c70499fab75b461a_prof);

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
