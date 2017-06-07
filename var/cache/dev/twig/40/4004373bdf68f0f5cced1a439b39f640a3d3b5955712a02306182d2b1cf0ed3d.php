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
        $__internal_08019fe810000adfc92b11b5d866ae3554f7e65140de308f57911ee1e2ffc4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08019fe810000adfc92b11b5d866ae3554f7e65140de308f57911ee1e2ffc4c8->enter($__internal_08019fe810000adfc92b11b5d866ae3554f7e65140de308f57911ee1e2ffc4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_53cd7257abeb21fae80dbbcfcd738b635c40d3da78dde3b120cf1b3c699f436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cd7257abeb21fae80dbbcfcd738b635c40d3da78dde3b120cf1b3c699f436c->enter($__internal_53cd7257abeb21fae80dbbcfcd738b635c40d3da78dde3b120cf1b3c699f436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_08019fe810000adfc92b11b5d866ae3554f7e65140de308f57911ee1e2ffc4c8->leave($__internal_08019fe810000adfc92b11b5d866ae3554f7e65140de308f57911ee1e2ffc4c8_prof);

        
        $__internal_53cd7257abeb21fae80dbbcfcd738b635c40d3da78dde3b120cf1b3c699f436c->leave($__internal_53cd7257abeb21fae80dbbcfcd738b635c40d3da78dde3b120cf1b3c699f436c_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_f22646a503ff860bfc06d049fe2a72df15db80ea13dbd934ce12ee3d638a2fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22646a503ff860bfc06d049fe2a72df15db80ea13dbd934ce12ee3d638a2fa4->enter($__internal_f22646a503ff860bfc06d049fe2a72df15db80ea13dbd934ce12ee3d638a2fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_51d00c893de2a7de5ef37840dbd62631ac81b2260ab0239617d184f68acf988e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d00c893de2a7de5ef37840dbd62631ac81b2260ab0239617d184f68acf988e->enter($__internal_51d00c893de2a7de5ef37840dbd62631ac81b2260ab0239617d184f68acf988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_51d00c893de2a7de5ef37840dbd62631ac81b2260ab0239617d184f68acf988e->leave($__internal_51d00c893de2a7de5ef37840dbd62631ac81b2260ab0239617d184f68acf988e_prof);

        
        $__internal_f22646a503ff860bfc06d049fe2a72df15db80ea13dbd934ce12ee3d638a2fa4->leave($__internal_f22646a503ff860bfc06d049fe2a72df15db80ea13dbd934ce12ee3d638a2fa4_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_7be4f487c61fce632dc4d619d7c9ef394fdce4f91cad1a8599ae2068368812f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be4f487c61fce632dc4d619d7c9ef394fdce4f91cad1a8599ae2068368812f5->enter($__internal_7be4f487c61fce632dc4d619d7c9ef394fdce4f91cad1a8599ae2068368812f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_f4df5f6230b267bbb2f84a735b767f18cc2400ba479383d6218077d35b655e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4df5f6230b267bbb2f84a735b767f18cc2400ba479383d6218077d35b655e41->enter($__internal_f4df5f6230b267bbb2f84a735b767f18cc2400ba479383d6218077d35b655e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_f4df5f6230b267bbb2f84a735b767f18cc2400ba479383d6218077d35b655e41->leave($__internal_f4df5f6230b267bbb2f84a735b767f18cc2400ba479383d6218077d35b655e41_prof);

        
        $__internal_7be4f487c61fce632dc4d619d7c9ef394fdce4f91cad1a8599ae2068368812f5->leave($__internal_7be4f487c61fce632dc4d619d7c9ef394fdce4f91cad1a8599ae2068368812f5_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_a2c26f83c21da9c801bb37f5c156e35f2ef68a6c533ae566a5e87e2fb8e0bd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c26f83c21da9c801bb37f5c156e35f2ef68a6c533ae566a5e87e2fb8e0bd6b->enter($__internal_a2c26f83c21da9c801bb37f5c156e35f2ef68a6c533ae566a5e87e2fb8e0bd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_b2c7cd65c7213a6e08339555c725bd149f38c866225253188daa7a56071c0e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c7cd65c7213a6e08339555c725bd149f38c866225253188daa7a56071c0e2c->enter($__internal_b2c7cd65c7213a6e08339555c725bd149f38c866225253188daa7a56071c0e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b2c7cd65c7213a6e08339555c725bd149f38c866225253188daa7a56071c0e2c->leave($__internal_b2c7cd65c7213a6e08339555c725bd149f38c866225253188daa7a56071c0e2c_prof);

        
        $__internal_a2c26f83c21da9c801bb37f5c156e35f2ef68a6c533ae566a5e87e2fb8e0bd6b->leave($__internal_a2c26f83c21da9c801bb37f5c156e35f2ef68a6c533ae566a5e87e2fb8e0bd6b_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_413bde9d66d844f6785ce2f0c71ff9a2d6238347eefc14b0676f81c679b5515c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413bde9d66d844f6785ce2f0c71ff9a2d6238347eefc14b0676f81c679b5515c->enter($__internal_413bde9d66d844f6785ce2f0c71ff9a2d6238347eefc14b0676f81c679b5515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_7e02436d070d8afab557bedc5120ed7ace757def33419cac810728dfebdeeec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e02436d070d8afab557bedc5120ed7ace757def33419cac810728dfebdeeec4->enter($__internal_7e02436d070d8afab557bedc5120ed7ace757def33419cac810728dfebdeeec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_7e02436d070d8afab557bedc5120ed7ace757def33419cac810728dfebdeeec4->leave($__internal_7e02436d070d8afab557bedc5120ed7ace757def33419cac810728dfebdeeec4_prof);

        
        $__internal_413bde9d66d844f6785ce2f0c71ff9a2d6238347eefc14b0676f81c679b5515c->leave($__internal_413bde9d66d844f6785ce2f0c71ff9a2d6238347eefc14b0676f81c679b5515c_prof);

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
