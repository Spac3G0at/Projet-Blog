<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bbd3ae04474873c92aae96d63d02f554649482848c0554583ca32c8491ac8f71 extends Twig_Template
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
        $__internal_aa04ef3b225a9e75080e450f39eec3e46ca411e05c73346ac12ad763a6b61e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa04ef3b225a9e75080e450f39eec3e46ca411e05c73346ac12ad763a6b61e86->enter($__internal_aa04ef3b225a9e75080e450f39eec3e46ca411e05c73346ac12ad763a6b61e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8de27e3035b7b24dcf7e88e5c9a42b49ddc883e0a1e7ccc69f9d3f9459c833a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de27e3035b7b24dcf7e88e5c9a42b49ddc883e0a1e7ccc69f9d3f9459c833a9->enter($__internal_8de27e3035b7b24dcf7e88e5c9a42b49ddc883e0a1e7ccc69f9d3f9459c833a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa04ef3b225a9e75080e450f39eec3e46ca411e05c73346ac12ad763a6b61e86->leave($__internal_aa04ef3b225a9e75080e450f39eec3e46ca411e05c73346ac12ad763a6b61e86_prof);

        
        $__internal_8de27e3035b7b24dcf7e88e5c9a42b49ddc883e0a1e7ccc69f9d3f9459c833a9->leave($__internal_8de27e3035b7b24dcf7e88e5c9a42b49ddc883e0a1e7ccc69f9d3f9459c833a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6661f8c757e7f2cddf6ffb245f4ff6b5a3884f90dc8e7b098447ff623f23d3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6661f8c757e7f2cddf6ffb245f4ff6b5a3884f90dc8e7b098447ff623f23d3a8->enter($__internal_6661f8c757e7f2cddf6ffb245f4ff6b5a3884f90dc8e7b098447ff623f23d3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7ed7575f44c5c23aa6fb650dbf8d9398a76be68dc6eabc4796cf24fbce6b8d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed7575f44c5c23aa6fb650dbf8d9398a76be68dc6eabc4796cf24fbce6b8d23->enter($__internal_7ed7575f44c5c23aa6fb650dbf8d9398a76be68dc6eabc4796cf24fbce6b8d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7ed7575f44c5c23aa6fb650dbf8d9398a76be68dc6eabc4796cf24fbce6b8d23->leave($__internal_7ed7575f44c5c23aa6fb650dbf8d9398a76be68dc6eabc4796cf24fbce6b8d23_prof);

        
        $__internal_6661f8c757e7f2cddf6ffb245f4ff6b5a3884f90dc8e7b098447ff623f23d3a8->leave($__internal_6661f8c757e7f2cddf6ffb245f4ff6b5a3884f90dc8e7b098447ff623f23d3a8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d41776ff24b51c2e2448cf0284f74d3aa71723955c600d7e7f98b0cfe59276d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41776ff24b51c2e2448cf0284f74d3aa71723955c600d7e7f98b0cfe59276d1->enter($__internal_d41776ff24b51c2e2448cf0284f74d3aa71723955c600d7e7f98b0cfe59276d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d265a663c905329ec337f021059afa80a772bf79257a3a1bb17239d52202b163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d265a663c905329ec337f021059afa80a772bf79257a3a1bb17239d52202b163->enter($__internal_d265a663c905329ec337f021059afa80a772bf79257a3a1bb17239d52202b163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d265a663c905329ec337f021059afa80a772bf79257a3a1bb17239d52202b163->leave($__internal_d265a663c905329ec337f021059afa80a772bf79257a3a1bb17239d52202b163_prof);

        
        $__internal_d41776ff24b51c2e2448cf0284f74d3aa71723955c600d7e7f98b0cfe59276d1->leave($__internal_d41776ff24b51c2e2448cf0284f74d3aa71723955c600d7e7f98b0cfe59276d1_prof);

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
