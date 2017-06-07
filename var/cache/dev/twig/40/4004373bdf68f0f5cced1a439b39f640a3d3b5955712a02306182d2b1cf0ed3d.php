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
        $__internal_676d70d49d9783e49346a3d36bfada550c786c50fa4c09d4897e2c250c4b0348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676d70d49d9783e49346a3d36bfada550c786c50fa4c09d4897e2c250c4b0348->enter($__internal_676d70d49d9783e49346a3d36bfada550c786c50fa4c09d4897e2c250c4b0348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_32b1efd649facb203d3c0f03bbff53af076358716ff02b328e7557922bdd073f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b1efd649facb203d3c0f03bbff53af076358716ff02b328e7557922bdd073f->enter($__internal_32b1efd649facb203d3c0f03bbff53af076358716ff02b328e7557922bdd073f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_676d70d49d9783e49346a3d36bfada550c786c50fa4c09d4897e2c250c4b0348->leave($__internal_676d70d49d9783e49346a3d36bfada550c786c50fa4c09d4897e2c250c4b0348_prof);

        
        $__internal_32b1efd649facb203d3c0f03bbff53af076358716ff02b328e7557922bdd073f->leave($__internal_32b1efd649facb203d3c0f03bbff53af076358716ff02b328e7557922bdd073f_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_61adb1df093b3287d011b913194e88197ff7067cf002e0de8b834f2e5fddf538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61adb1df093b3287d011b913194e88197ff7067cf002e0de8b834f2e5fddf538->enter($__internal_61adb1df093b3287d011b913194e88197ff7067cf002e0de8b834f2e5fddf538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_68fb36473a0d908f915907a7e2cccdc084afb0a3687904e13cd5c2de663f1f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fb36473a0d908f915907a7e2cccdc084afb0a3687904e13cd5c2de663f1f58->enter($__internal_68fb36473a0d908f915907a7e2cccdc084afb0a3687904e13cd5c2de663f1f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_68fb36473a0d908f915907a7e2cccdc084afb0a3687904e13cd5c2de663f1f58->leave($__internal_68fb36473a0d908f915907a7e2cccdc084afb0a3687904e13cd5c2de663f1f58_prof);

        
        $__internal_61adb1df093b3287d011b913194e88197ff7067cf002e0de8b834f2e5fddf538->leave($__internal_61adb1df093b3287d011b913194e88197ff7067cf002e0de8b834f2e5fddf538_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_14a410224bb1cde1ca556509e5321408eedb3d09ea72288f994ffd441ea554f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a410224bb1cde1ca556509e5321408eedb3d09ea72288f994ffd441ea554f1->enter($__internal_14a410224bb1cde1ca556509e5321408eedb3d09ea72288f994ffd441ea554f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_ff5539b1d6d2319429940b138f32baccd20d210b7792012fc9059e91a810c690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5539b1d6d2319429940b138f32baccd20d210b7792012fc9059e91a810c690->enter($__internal_ff5539b1d6d2319429940b138f32baccd20d210b7792012fc9059e91a810c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_ff5539b1d6d2319429940b138f32baccd20d210b7792012fc9059e91a810c690->leave($__internal_ff5539b1d6d2319429940b138f32baccd20d210b7792012fc9059e91a810c690_prof);

        
        $__internal_14a410224bb1cde1ca556509e5321408eedb3d09ea72288f994ffd441ea554f1->leave($__internal_14a410224bb1cde1ca556509e5321408eedb3d09ea72288f994ffd441ea554f1_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_026f04c25ac2dd55662d357e625aab3b549c6d874fd26cf676ce48c2e0b4b8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026f04c25ac2dd55662d357e625aab3b549c6d874fd26cf676ce48c2e0b4b8dd->enter($__internal_026f04c25ac2dd55662d357e625aab3b549c6d874fd26cf676ce48c2e0b4b8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_a7c57755a5c9bc67842834c918b74a0fd93361bf5db6d41973494feb6a7c24b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c57755a5c9bc67842834c918b74a0fd93361bf5db6d41973494feb6a7c24b0->enter($__internal_a7c57755a5c9bc67842834c918b74a0fd93361bf5db6d41973494feb6a7c24b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a7c57755a5c9bc67842834c918b74a0fd93361bf5db6d41973494feb6a7c24b0->leave($__internal_a7c57755a5c9bc67842834c918b74a0fd93361bf5db6d41973494feb6a7c24b0_prof);

        
        $__internal_026f04c25ac2dd55662d357e625aab3b549c6d874fd26cf676ce48c2e0b4b8dd->leave($__internal_026f04c25ac2dd55662d357e625aab3b549c6d874fd26cf676ce48c2e0b4b8dd_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_26c42fe99663dbe5d7e2c0bdafbe32701a9492f50cc88dfec90b23a54b086d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c42fe99663dbe5d7e2c0bdafbe32701a9492f50cc88dfec90b23a54b086d98->enter($__internal_26c42fe99663dbe5d7e2c0bdafbe32701a9492f50cc88dfec90b23a54b086d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_f56941464eb81ca1ebbfe54963c48514f2158f2ae676dec04e88fd6253b3342f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56941464eb81ca1ebbfe54963c48514f2158f2ae676dec04e88fd6253b3342f->enter($__internal_f56941464eb81ca1ebbfe54963c48514f2158f2ae676dec04e88fd6253b3342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_f56941464eb81ca1ebbfe54963c48514f2158f2ae676dec04e88fd6253b3342f->leave($__internal_f56941464eb81ca1ebbfe54963c48514f2158f2ae676dec04e88fd6253b3342f_prof);

        
        $__internal_26c42fe99663dbe5d7e2c0bdafbe32701a9492f50cc88dfec90b23a54b086d98->leave($__internal_26c42fe99663dbe5d7e2c0bdafbe32701a9492f50cc88dfec90b23a54b086d98_prof);

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
