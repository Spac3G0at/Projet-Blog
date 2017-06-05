<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_7b049002f495fb882abb88bfdefa015b2d97f9eb570304c3ab9ff52ee2488725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a3ed74bb4915ebfd2e5ee4485c041fe5903f94cd8dc8ee70952619471d6dd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3ed74bb4915ebfd2e5ee4485c041fe5903f94cd8dc8ee70952619471d6dd90->enter($__internal_1a3ed74bb4915ebfd2e5ee4485c041fe5903f94cd8dc8ee70952619471d6dd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3e253cfb542f9f203ca3ee92fe1e744d6c7d324ce4ccfc6b8213b8368b94bca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e253cfb542f9f203ca3ee92fe1e744d6c7d324ce4ccfc6b8213b8368b94bca7->enter($__internal_3e253cfb542f9f203ca3ee92fe1e744d6c7d324ce4ccfc6b8213b8368b94bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3ed74bb4915ebfd2e5ee4485c041fe5903f94cd8dc8ee70952619471d6dd90->leave($__internal_1a3ed74bb4915ebfd2e5ee4485c041fe5903f94cd8dc8ee70952619471d6dd90_prof);

        
        $__internal_3e253cfb542f9f203ca3ee92fe1e744d6c7d324ce4ccfc6b8213b8368b94bca7->leave($__internal_3e253cfb542f9f203ca3ee92fe1e744d6c7d324ce4ccfc6b8213b8368b94bca7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e46750058dec02d6956c599bfab42628606233414760722e40051c0e185a0c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46750058dec02d6956c599bfab42628606233414760722e40051c0e185a0c98->enter($__internal_e46750058dec02d6956c599bfab42628606233414760722e40051c0e185a0c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b65cdd32e4a82fe67c4479a92c2f7e16c3650d374c313fab34dd58ae7e55225a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65cdd32e4a82fe67c4479a92c2f7e16c3650d374c313fab34dd58ae7e55225a->enter($__internal_b65cdd32e4a82fe67c4479a92c2f7e16c3650d374c313fab34dd58ae7e55225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b65cdd32e4a82fe67c4479a92c2f7e16c3650d374c313fab34dd58ae7e55225a->leave($__internal_b65cdd32e4a82fe67c4479a92c2f7e16c3650d374c313fab34dd58ae7e55225a_prof);

        
        $__internal_e46750058dec02d6956c599bfab42628606233414760722e40051c0e185a0c98->leave($__internal_e46750058dec02d6956c599bfab42628606233414760722e40051c0e185a0c98_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cca408ef9858c66320554a6de9c841bafcf743f6100cf6850a4bb75a49db74ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca408ef9858c66320554a6de9c841bafcf743f6100cf6850a4bb75a49db74ae->enter($__internal_cca408ef9858c66320554a6de9c841bafcf743f6100cf6850a4bb75a49db74ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7929c7df41e923a366f8690c940fa3a841b6cf47792ca31411a7207af83a50ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7929c7df41e923a366f8690c940fa3a841b6cf47792ca31411a7207af83a50ca->enter($__internal_7929c7df41e923a366f8690c940fa3a841b6cf47792ca31411a7207af83a50ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7929c7df41e923a366f8690c940fa3a841b6cf47792ca31411a7207af83a50ca->leave($__internal_7929c7df41e923a366f8690c940fa3a841b6cf47792ca31411a7207af83a50ca_prof);

        
        $__internal_cca408ef9858c66320554a6de9c841bafcf743f6100cf6850a4bb75a49db74ae->leave($__internal_cca408ef9858c66320554a6de9c841bafcf743f6100cf6850a4bb75a49db74ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
