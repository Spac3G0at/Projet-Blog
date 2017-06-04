<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4a5f55114cef2f10fb009ad20a1b45148f9054f26944a68d1294ec7ff13c75a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8edbff296135177af161d0a6dbe0f778336c19ff0f9abcbfd9ffef251d3763bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edbff296135177af161d0a6dbe0f778336c19ff0f9abcbfd9ffef251d3763bc->enter($__internal_8edbff296135177af161d0a6dbe0f778336c19ff0f9abcbfd9ffef251d3763bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5d899da53f71b32236061fa9f459af15611d10bfbad9ae8eed696161eec2da03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d899da53f71b32236061fa9f459af15611d10bfbad9ae8eed696161eec2da03->enter($__internal_5d899da53f71b32236061fa9f459af15611d10bfbad9ae8eed696161eec2da03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8edbff296135177af161d0a6dbe0f778336c19ff0f9abcbfd9ffef251d3763bc->leave($__internal_8edbff296135177af161d0a6dbe0f778336c19ff0f9abcbfd9ffef251d3763bc_prof);

        
        $__internal_5d899da53f71b32236061fa9f459af15611d10bfbad9ae8eed696161eec2da03->leave($__internal_5d899da53f71b32236061fa9f459af15611d10bfbad9ae8eed696161eec2da03_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_896f31295daca839862862814b2ef19a94f109b60c406113b80c8fd5ed01d176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896f31295daca839862862814b2ef19a94f109b60c406113b80c8fd5ed01d176->enter($__internal_896f31295daca839862862814b2ef19a94f109b60c406113b80c8fd5ed01d176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7351d74b19e3e630b09260bf2bb76a474441724758f5287dd93eaeea11347da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7351d74b19e3e630b09260bf2bb76a474441724758f5287dd93eaeea11347da->enter($__internal_d7351d74b19e3e630b09260bf2bb76a474441724758f5287dd93eaeea11347da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d7351d74b19e3e630b09260bf2bb76a474441724758f5287dd93eaeea11347da->leave($__internal_d7351d74b19e3e630b09260bf2bb76a474441724758f5287dd93eaeea11347da_prof);

        
        $__internal_896f31295daca839862862814b2ef19a94f109b60c406113b80c8fd5ed01d176->leave($__internal_896f31295daca839862862814b2ef19a94f109b60c406113b80c8fd5ed01d176_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
