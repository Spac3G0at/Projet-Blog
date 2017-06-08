<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7915ca6531085e54d488f5ed1fc25c802219e6a8a41e6b6171c95e814cf69e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 3);
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
        $__internal_d806358fefc7ac3d278809c6e4328b592e8236e06edd7e5db12e1ceb25c77469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d806358fefc7ac3d278809c6e4328b592e8236e06edd7e5db12e1ceb25c77469->enter($__internal_d806358fefc7ac3d278809c6e4328b592e8236e06edd7e5db12e1ceb25c77469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4f54fd3a79ebf257c6f81072d10df3dc3e462a58330642f4f19c4b7367abd3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f54fd3a79ebf257c6f81072d10df3dc3e462a58330642f4f19c4b7367abd3a5->enter($__internal_4f54fd3a79ebf257c6f81072d10df3dc3e462a58330642f4f19c4b7367abd3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d806358fefc7ac3d278809c6e4328b592e8236e06edd7e5db12e1ceb25c77469->leave($__internal_d806358fefc7ac3d278809c6e4328b592e8236e06edd7e5db12e1ceb25c77469_prof);

        
        $__internal_4f54fd3a79ebf257c6f81072d10df3dc3e462a58330642f4f19c4b7367abd3a5->leave($__internal_4f54fd3a79ebf257c6f81072d10df3dc3e462a58330642f4f19c4b7367abd3a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_808aa570f70109c4ff6fc31a99a0e87e4d09d3010a9733ca1f53e20a6f490221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808aa570f70109c4ff6fc31a99a0e87e4d09d3010a9733ca1f53e20a6f490221->enter($__internal_808aa570f70109c4ff6fc31a99a0e87e4d09d3010a9733ca1f53e20a6f490221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9dbfa29f7df74a356d2aa57c2692420efdcfc004d4a777aed00bc6cb0aaa7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dbfa29f7df74a356d2aa57c2692420efdcfc004d4a777aed00bc6cb0aaa7af->enter($__internal_a9dbfa29f7df74a356d2aa57c2692420efdcfc004d4a777aed00bc6cb0aaa7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_a9dbfa29f7df74a356d2aa57c2692420efdcfc004d4a777aed00bc6cb0aaa7af->leave($__internal_a9dbfa29f7df74a356d2aa57c2692420efdcfc004d4a777aed00bc6cb0aaa7af_prof);

        
        $__internal_808aa570f70109c4ff6fc31a99a0e87e4d09d3010a9733ca1f53e20a6f490221->leave($__internal_808aa570f70109c4ff6fc31a99a0e87e4d09d3010a9733ca1f53e20a6f490221_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e4611360eed15a4f6ebb09ec536755fa2227c0622a12b14ba0906555c346998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4611360eed15a4f6ebb09ec536755fa2227c0622a12b14ba0906555c346998->enter($__internal_3e4611360eed15a4f6ebb09ec536755fa2227c0622a12b14ba0906555c346998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac707f32602674c5e7822c43e27ff68fb136ff178534d473b09c2c226f4d056b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac707f32602674c5e7822c43e27ff68fb136ff178534d473b09c2c226f4d056b->enter($__internal_ac707f32602674c5e7822c43e27ff68fb136ff178534d473b09c2c226f4d056b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_ac707f32602674c5e7822c43e27ff68fb136ff178534d473b09c2c226f4d056b->leave($__internal_ac707f32602674c5e7822c43e27ff68fb136ff178534d473b09c2c226f4d056b_prof);

        
        $__internal_3e4611360eed15a4f6ebb09ec536755fa2227c0622a12b14ba0906555c346998->leave($__internal_3e4611360eed15a4f6ebb09ec536755fa2227c0622a12b14ba0906555c346998_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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

{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
