<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_858b86c008f29f86659c199621d7e9605e5080c834b49a6dc4e54514cfb78917 extends Twig_Template
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
        $__internal_b28ec355a034ca5310ba796a6ae11a9bb3ae27e43c5844ca0ffdf749283af60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28ec355a034ca5310ba796a6ae11a9bb3ae27e43c5844ca0ffdf749283af60e->enter($__internal_b28ec355a034ca5310ba796a6ae11a9bb3ae27e43c5844ca0ffdf749283af60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_d7fdc4e700218de16a3235c1a71c52be87a03d81995f8d4447728dc4daf819ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fdc4e700218de16a3235c1a71c52be87a03d81995f8d4447728dc4daf819ce->enter($__internal_d7fdc4e700218de16a3235c1a71c52be87a03d81995f8d4447728dc4daf819ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_b28ec355a034ca5310ba796a6ae11a9bb3ae27e43c5844ca0ffdf749283af60e->leave($__internal_b28ec355a034ca5310ba796a6ae11a9bb3ae27e43c5844ca0ffdf749283af60e_prof);

        
        $__internal_d7fdc4e700218de16a3235c1a71c52be87a03d81995f8d4447728dc4daf819ce->leave($__internal_d7fdc4e700218de16a3235c1a71c52be87a03d81995f8d4447728dc4daf819ce_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_659dd1b27ee0a574b9e5adfdffaa77c2b63c774b6d8d5b795b3eeb8280baeda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659dd1b27ee0a574b9e5adfdffaa77c2b63c774b6d8d5b795b3eeb8280baeda1->enter($__internal_659dd1b27ee0a574b9e5adfdffaa77c2b63c774b6d8d5b795b3eeb8280baeda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_2af7f713039dc8ed16d9d69ffbc9f176c56e10fe61cbfd66801698995191db88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af7f713039dc8ed16d9d69ffbc9f176c56e10fe61cbfd66801698995191db88->enter($__internal_2af7f713039dc8ed16d9d69ffbc9f176c56e10fe61cbfd66801698995191db88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2af7f713039dc8ed16d9d69ffbc9f176c56e10fe61cbfd66801698995191db88->leave($__internal_2af7f713039dc8ed16d9d69ffbc9f176c56e10fe61cbfd66801698995191db88_prof);

        
        $__internal_659dd1b27ee0a574b9e5adfdffaa77c2b63c774b6d8d5b795b3eeb8280baeda1->leave($__internal_659dd1b27ee0a574b9e5adfdffaa77c2b63c774b6d8d5b795b3eeb8280baeda1_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_021f3683e67f36e4fbefce47a2daae054974c09a00b2632bf76cdea93f1bc78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021f3683e67f36e4fbefce47a2daae054974c09a00b2632bf76cdea93f1bc78a->enter($__internal_021f3683e67f36e4fbefce47a2daae054974c09a00b2632bf76cdea93f1bc78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_0c6e2966ed373e06d309cdf10a95991888610818e9d947e421d90016454a2b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e2966ed373e06d309cdf10a95991888610818e9d947e421d90016454a2b32->enter($__internal_0c6e2966ed373e06d309cdf10a95991888610818e9d947e421d90016454a2b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_0c6e2966ed373e06d309cdf10a95991888610818e9d947e421d90016454a2b32->leave($__internal_0c6e2966ed373e06d309cdf10a95991888610818e9d947e421d90016454a2b32_prof);

        
        $__internal_021f3683e67f36e4fbefce47a2daae054974c09a00b2632bf76cdea93f1bc78a->leave($__internal_021f3683e67f36e4fbefce47a2daae054974c09a00b2632bf76cdea93f1bc78a_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_9846fe89cd7135a8762563cd07c613f7023b080b96e1b0ce50420cc973a1ed54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9846fe89cd7135a8762563cd07c613f7023b080b96e1b0ce50420cc973a1ed54->enter($__internal_9846fe89cd7135a8762563cd07c613f7023b080b96e1b0ce50420cc973a1ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_f736eabec14ee44eb4619664871e9479dc452277957403ee0e588d9452a41a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f736eabec14ee44eb4619664871e9479dc452277957403ee0e588d9452a41a99->enter($__internal_f736eabec14ee44eb4619664871e9479dc452277957403ee0e588d9452a41a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f736eabec14ee44eb4619664871e9479dc452277957403ee0e588d9452a41a99->leave($__internal_f736eabec14ee44eb4619664871e9479dc452277957403ee0e588d9452a41a99_prof);

        
        $__internal_9846fe89cd7135a8762563cd07c613f7023b080b96e1b0ce50420cc973a1ed54->leave($__internal_9846fe89cd7135a8762563cd07c613f7023b080b96e1b0ce50420cc973a1ed54_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_b285415399b4a51d7e75c3796d597db9e8362da4385a468bf333bc0f75317c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b285415399b4a51d7e75c3796d597db9e8362da4385a468bf333bc0f75317c12->enter($__internal_b285415399b4a51d7e75c3796d597db9e8362da4385a468bf333bc0f75317c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_5345df8889659b791c7aff9e1a7177918ee4f02297479abe0ed62e72871106f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5345df8889659b791c7aff9e1a7177918ee4f02297479abe0ed62e72871106f7->enter($__internal_5345df8889659b791c7aff9e1a7177918ee4f02297479abe0ed62e72871106f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_5345df8889659b791c7aff9e1a7177918ee4f02297479abe0ed62e72871106f7->leave($__internal_5345df8889659b791c7aff9e1a7177918ee4f02297479abe0ed62e72871106f7_prof);

        
        $__internal_b285415399b4a51d7e75c3796d597db9e8362da4385a468bf333bc0f75317c12->leave($__internal_b285415399b4a51d7e75c3796d597db9e8362da4385a468bf333bc0f75317c12_prof);

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
