<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99ea50729fc9bde07bde341ef776eb12486870ab69bb80c023683c1e598b587a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9313d4b7dbedd35679105a7e2374501540b6f04e57b273e99c858da5d0483a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9313d4b7dbedd35679105a7e2374501540b6f04e57b273e99c858da5d0483a0e->enter($__internal_9313d4b7dbedd35679105a7e2374501540b6f04e57b273e99c858da5d0483a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0a4159f6bc7b77f5559b4d757f42412ac81bfcf379d2fa1968cc2bab2ef2c009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4159f6bc7b77f5559b4d757f42412ac81bfcf379d2fa1968cc2bab2ef2c009->enter($__internal_0a4159f6bc7b77f5559b4d757f42412ac81bfcf379d2fa1968cc2bab2ef2c009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9313d4b7dbedd35679105a7e2374501540b6f04e57b273e99c858da5d0483a0e->leave($__internal_9313d4b7dbedd35679105a7e2374501540b6f04e57b273e99c858da5d0483a0e_prof);

        
        $__internal_0a4159f6bc7b77f5559b4d757f42412ac81bfcf379d2fa1968cc2bab2ef2c009->leave($__internal_0a4159f6bc7b77f5559b4d757f42412ac81bfcf379d2fa1968cc2bab2ef2c009_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8ba54b4fa20309e616ed7248b9ca44ec9e75e6fe0f945f948006e0052f8c81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ba54b4fa20309e616ed7248b9ca44ec9e75e6fe0f945f948006e0052f8c81f->enter($__internal_b8ba54b4fa20309e616ed7248b9ca44ec9e75e6fe0f945f948006e0052f8c81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e7d090b0a11b60650a5e3d452270b91d9cdca87b134c3a4e35656ffe38352e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7d090b0a11b60650a5e3d452270b91d9cdca87b134c3a4e35656ffe38352e5->enter($__internal_3e7d090b0a11b60650a5e3d452270b91d9cdca87b134c3a4e35656ffe38352e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3e7d090b0a11b60650a5e3d452270b91d9cdca87b134c3a4e35656ffe38352e5->leave($__internal_3e7d090b0a11b60650a5e3d452270b91d9cdca87b134c3a4e35656ffe38352e5_prof);

        
        $__internal_b8ba54b4fa20309e616ed7248b9ca44ec9e75e6fe0f945f948006e0052f8c81f->leave($__internal_b8ba54b4fa20309e616ed7248b9ca44ec9e75e6fe0f945f948006e0052f8c81f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dc08352b1860384d92286d69175eb6c2563c2f668ca85921f30f9cbd734e47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc08352b1860384d92286d69175eb6c2563c2f668ca85921f30f9cbd734e47f->enter($__internal_7dc08352b1860384d92286d69175eb6c2563c2f668ca85921f30f9cbd734e47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_386e336734f9b30b9684eeadd0e0708ebd962df8a3505e0a8a79ea85effbbf30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386e336734f9b30b9684eeadd0e0708ebd962df8a3505e0a8a79ea85effbbf30->enter($__internal_386e336734f9b30b9684eeadd0e0708ebd962df8a3505e0a8a79ea85effbbf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_386e336734f9b30b9684eeadd0e0708ebd962df8a3505e0a8a79ea85effbbf30->leave($__internal_386e336734f9b30b9684eeadd0e0708ebd962df8a3505e0a8a79ea85effbbf30_prof);

        
        $__internal_7dc08352b1860384d92286d69175eb6c2563c2f668ca85921f30f9cbd734e47f->leave($__internal_7dc08352b1860384d92286d69175eb6c2563c2f668ca85921f30f9cbd734e47f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5cdf325b75c607264f6a80173cb0d16a12c29e5ae29cf219b1e032dfdfcf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5cdf325b75c607264f6a80173cb0d16a12c29e5ae29cf219b1e032dfdfcf3b->enter($__internal_ff5cdf325b75c607264f6a80173cb0d16a12c29e5ae29cf219b1e032dfdfcf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cc37c56c862ee30de3f16745602495ed6555960aefb6ff89c317e3b32beec68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc37c56c862ee30de3f16745602495ed6555960aefb6ff89c317e3b32beec68->enter($__internal_8cc37c56c862ee30de3f16745602495ed6555960aefb6ff89c317e3b32beec68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8cc37c56c862ee30de3f16745602495ed6555960aefb6ff89c317e3b32beec68->leave($__internal_8cc37c56c862ee30de3f16745602495ed6555960aefb6ff89c317e3b32beec68_prof);

        
        $__internal_ff5cdf325b75c607264f6a80173cb0d16a12c29e5ae29cf219b1e032dfdfcf3b->leave($__internal_ff5cdf325b75c607264f6a80173cb0d16a12c29e5ae29cf219b1e032dfdfcf3b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
