<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cf5a43fdd39d648b07dfe23513329b8871c20421e775b1b2b89662f7946ad032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a49de1235e4df77755221da9807401351dd6a4e44980783617b186f311cd449a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49de1235e4df77755221da9807401351dd6a4e44980783617b186f311cd449a->enter($__internal_a49de1235e4df77755221da9807401351dd6a4e44980783617b186f311cd449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_e5b0ea595c51d63985e321340e12aedf4c8f38192a05a9365654d44d4051426f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b0ea595c51d63985e321340e12aedf4c8f38192a05a9365654d44d4051426f->enter($__internal_e5b0ea595c51d63985e321340e12aedf4c8f38192a05a9365654d44d4051426f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49de1235e4df77755221da9807401351dd6a4e44980783617b186f311cd449a->leave($__internal_a49de1235e4df77755221da9807401351dd6a4e44980783617b186f311cd449a_prof);

        
        $__internal_e5b0ea595c51d63985e321340e12aedf4c8f38192a05a9365654d44d4051426f->leave($__internal_e5b0ea595c51d63985e321340e12aedf4c8f38192a05a9365654d44d4051426f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85555f2e185fdf1200774650a685b5be0d1273c4f3198dc70c538c6266c5996d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85555f2e185fdf1200774650a685b5be0d1273c4f3198dc70c538c6266c5996d->enter($__internal_85555f2e185fdf1200774650a685b5be0d1273c4f3198dc70c538c6266c5996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0d545a4aa20b3cd55da17454e814f2728bc07f5dec7c078655da00ca14f6ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d545a4aa20b3cd55da17454e814f2728bc07f5dec7c078655da00ca14f6ceb->enter($__internal_a0d545a4aa20b3cd55da17454e814f2728bc07f5dec7c078655da00ca14f6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_a0d545a4aa20b3cd55da17454e814f2728bc07f5dec7c078655da00ca14f6ceb->leave($__internal_a0d545a4aa20b3cd55da17454e814f2728bc07f5dec7c078655da00ca14f6ceb_prof);

        
        $__internal_85555f2e185fdf1200774650a685b5be0d1273c4f3198dc70c538c6266c5996d->leave($__internal_85555f2e185fdf1200774650a685b5be0d1273c4f3198dc70c538c6266c5996d_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a5ea1ce47f2d7d13e167c8c5d0a73c48e46bcce9e378cd6c189997edd69966f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5ea1ce47f2d7d13e167c8c5d0a73c48e46bcce9e378cd6c189997edd69966f->enter($__internal_7a5ea1ce47f2d7d13e167c8c5d0a73c48e46bcce9e378cd6c189997edd69966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2fcf6f2de64d33ca7f42430b11be39edf0de45ef55d9d2718877b220ce8d6ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcf6f2de64d33ca7f42430b11be39edf0de45ef55d9d2718877b220ce8d6ab3->enter($__internal_2fcf6f2de64d33ca7f42430b11be39edf0de45ef55d9d2718877b220ce8d6ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_2fcf6f2de64d33ca7f42430b11be39edf0de45ef55d9d2718877b220ce8d6ab3->leave($__internal_2fcf6f2de64d33ca7f42430b11be39edf0de45ef55d9d2718877b220ce8d6ab3_prof);

        
        $__internal_7a5ea1ce47f2d7d13e167c8c5d0a73c48e46bcce9e378cd6c189997edd69966f->leave($__internal_7a5ea1ce47f2d7d13e167c8c5d0a73c48e46bcce9e378cd6c189997edd69966f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  66 => 7,  55 => 10,  53 => 7,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% extends 'base.html.twig' %}

{% block body %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}

{% endblock %}", "@FOSUser/Profile/edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
