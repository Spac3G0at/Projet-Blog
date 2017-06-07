<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_39e9bcb8c977b8e303bc877c9972e086ad3b1456c676f3f9f19e2bfcc2e1a0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03583e2112f8631dd2d075bf3bf2bdedabafb924310a6c9baa4b8107b6ca7783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03583e2112f8631dd2d075bf3bf2bdedabafb924310a6c9baa4b8107b6ca7783->enter($__internal_03583e2112f8631dd2d075bf3bf2bdedabafb924310a6c9baa4b8107b6ca7783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_981efa116bb202c4993739f9aeb797772d69ed9ed204155163f80cbb63258f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981efa116bb202c4993739f9aeb797772d69ed9ed204155163f80cbb63258f2b->enter($__internal_981efa116bb202c4993739f9aeb797772d69ed9ed204155163f80cbb63258f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_03583e2112f8631dd2d075bf3bf2bdedabafb924310a6c9baa4b8107b6ca7783->leave($__internal_03583e2112f8631dd2d075bf3bf2bdedabafb924310a6c9baa4b8107b6ca7783_prof);

        
        $__internal_981efa116bb202c4993739f9aeb797772d69ed9ed204155163f80cbb63258f2b->leave($__internal_981efa116bb202c4993739f9aeb797772d69ed9ed204155163f80cbb63258f2b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e43b5af5f0200fd50c4b636f50bac6e732c20c62c5a07259d5486bed13e7a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e43b5af5f0200fd50c4b636f50bac6e732c20c62c5a07259d5486bed13e7a1f->enter($__internal_2e43b5af5f0200fd50c4b636f50bac6e732c20c62c5a07259d5486bed13e7a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b0bd9fb47ad681665cf42fefb8c72e506e86fc93c28c9da8e7f8c3007cf8c837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bd9fb47ad681665cf42fefb8c72e506e86fc93c28c9da8e7f8c3007cf8c837->enter($__internal_b0bd9fb47ad681665cf42fefb8c72e506e86fc93c28c9da8e7f8c3007cf8c837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b0bd9fb47ad681665cf42fefb8c72e506e86fc93c28c9da8e7f8c3007cf8c837->leave($__internal_b0bd9fb47ad681665cf42fefb8c72e506e86fc93c28c9da8e7f8c3007cf8c837_prof);

        
        $__internal_2e43b5af5f0200fd50c4b636f50bac6e732c20c62c5a07259d5486bed13e7a1f->leave($__internal_2e43b5af5f0200fd50c4b636f50bac6e732c20c62c5a07259d5486bed13e7a1f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_104dcfd4ff3aa9841bcf8200fa6242d1575e0bdb351414cadc29e5303917598c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104dcfd4ff3aa9841bcf8200fa6242d1575e0bdb351414cadc29e5303917598c->enter($__internal_104dcfd4ff3aa9841bcf8200fa6242d1575e0bdb351414cadc29e5303917598c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d85a4d8c751d922866370cfc8c510a6e6752085dac5f617e8877e93007c2192c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85a4d8c751d922866370cfc8c510a6e6752085dac5f617e8877e93007c2192c->enter($__internal_d85a4d8c751d922866370cfc8c510a6e6752085dac5f617e8877e93007c2192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d85a4d8c751d922866370cfc8c510a6e6752085dac5f617e8877e93007c2192c->leave($__internal_d85a4d8c751d922866370cfc8c510a6e6752085dac5f617e8877e93007c2192c_prof);

        
        $__internal_104dcfd4ff3aa9841bcf8200fa6242d1575e0bdb351414cadc29e5303917598c->leave($__internal_104dcfd4ff3aa9841bcf8200fa6242d1575e0bdb351414cadc29e5303917598c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_59900e7f78f1fe5ed19f16b2c0e51a88698dd46c342e312ea592a82d9771a205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59900e7f78f1fe5ed19f16b2c0e51a88698dd46c342e312ea592a82d9771a205->enter($__internal_59900e7f78f1fe5ed19f16b2c0e51a88698dd46c342e312ea592a82d9771a205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1d1070a0953ae97280d1b6da87e7aa50791c4dd8865269a818530e9d6728591d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1070a0953ae97280d1b6da87e7aa50791c4dd8865269a818530e9d6728591d->enter($__internal_1d1070a0953ae97280d1b6da87e7aa50791c4dd8865269a818530e9d6728591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1d1070a0953ae97280d1b6da87e7aa50791c4dd8865269a818530e9d6728591d->leave($__internal_1d1070a0953ae97280d1b6da87e7aa50791c4dd8865269a818530e9d6728591d_prof);

        
        $__internal_59900e7f78f1fe5ed19f16b2c0e51a88698dd46c342e312ea592a82d9771a205->leave($__internal_59900e7f78f1fe5ed19f16b2c0e51a88698dd46c342e312ea592a82d9771a205_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
