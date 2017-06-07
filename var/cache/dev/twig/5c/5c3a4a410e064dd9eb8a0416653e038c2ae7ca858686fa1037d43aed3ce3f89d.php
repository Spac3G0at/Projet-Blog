<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_911571dbb48ba8a9ffe167fff4193cdf7f2229b11f4bdfb1adc7a5b42c479e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac05557a53b93225fabdf3857efdf243f83a761962f384e27e284bd8f0274279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac05557a53b93225fabdf3857efdf243f83a761962f384e27e284bd8f0274279->enter($__internal_ac05557a53b93225fabdf3857efdf243f83a761962f384e27e284bd8f0274279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_642887f907d463d5f30676da19c18704e14cbe79f99a61e0ead97888cae154ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642887f907d463d5f30676da19c18704e14cbe79f99a61e0ead97888cae154ec->enter($__internal_642887f907d463d5f30676da19c18704e14cbe79f99a61e0ead97888cae154ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac05557a53b93225fabdf3857efdf243f83a761962f384e27e284bd8f0274279->leave($__internal_ac05557a53b93225fabdf3857efdf243f83a761962f384e27e284bd8f0274279_prof);

        
        $__internal_642887f907d463d5f30676da19c18704e14cbe79f99a61e0ead97888cae154ec->leave($__internal_642887f907d463d5f30676da19c18704e14cbe79f99a61e0ead97888cae154ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ea51acf41c1eded96cb12d74aa35fdf396a8eef59030f2b0cd677a51f3a0f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea51acf41c1eded96cb12d74aa35fdf396a8eef59030f2b0cd677a51f3a0f91->enter($__internal_2ea51acf41c1eded96cb12d74aa35fdf396a8eef59030f2b0cd677a51f3a0f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2587ca2707f8650f7e9cdf14959cab79d5a4863f4a6daf3960fde322921e1dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2587ca2707f8650f7e9cdf14959cab79d5a4863f4a6daf3960fde322921e1dcf->enter($__internal_2587ca2707f8650f7e9cdf14959cab79d5a4863f4a6daf3960fde322921e1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2587ca2707f8650f7e9cdf14959cab79d5a4863f4a6daf3960fde322921e1dcf->leave($__internal_2587ca2707f8650f7e9cdf14959cab79d5a4863f4a6daf3960fde322921e1dcf_prof);

        
        $__internal_2ea51acf41c1eded96cb12d74aa35fdf396a8eef59030f2b0cd677a51f3a0f91->leave($__internal_2ea51acf41c1eded96cb12d74aa35fdf396a8eef59030f2b0cd677a51f3a0f91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
