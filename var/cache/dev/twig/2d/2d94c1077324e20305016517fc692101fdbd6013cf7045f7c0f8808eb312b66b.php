<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_76cc03ecf9bd13ab9dfd66a0c252768f3004203fa40318d9104b4477ea0623a5 extends Twig_Template
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
        $__internal_cdc977f236eea3125b298f8c218c5e66b8fa024c63853c95fe35a5e80f3ebeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc977f236eea3125b298f8c218c5e66b8fa024c63853c95fe35a5e80f3ebeb7->enter($__internal_cdc977f236eea3125b298f8c218c5e66b8fa024c63853c95fe35a5e80f3ebeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c3e65bca1d73aa408b4c0fcebf0378bff3659aeed83d0191d091283bb1fae5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e65bca1d73aa408b4c0fcebf0378bff3659aeed83d0191d091283bb1fae5fc->enter($__internal_c3e65bca1d73aa408b4c0fcebf0378bff3659aeed83d0191d091283bb1fae5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cdc977f236eea3125b298f8c218c5e66b8fa024c63853c95fe35a5e80f3ebeb7->leave($__internal_cdc977f236eea3125b298f8c218c5e66b8fa024c63853c95fe35a5e80f3ebeb7_prof);

        
        $__internal_c3e65bca1d73aa408b4c0fcebf0378bff3659aeed83d0191d091283bb1fae5fc->leave($__internal_c3e65bca1d73aa408b4c0fcebf0378bff3659aeed83d0191d091283bb1fae5fc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_837f9a776b79b35034df5770c99d515d06b1ab7f46fad4377a7d514b3071b196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837f9a776b79b35034df5770c99d515d06b1ab7f46fad4377a7d514b3071b196->enter($__internal_837f9a776b79b35034df5770c99d515d06b1ab7f46fad4377a7d514b3071b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_dfaa35855f9bd81614d22a4e36f3a0951ce92049d80a15094bddbba1f2afef3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfaa35855f9bd81614d22a4e36f3a0951ce92049d80a15094bddbba1f2afef3e->enter($__internal_dfaa35855f9bd81614d22a4e36f3a0951ce92049d80a15094bddbba1f2afef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_dfaa35855f9bd81614d22a4e36f3a0951ce92049d80a15094bddbba1f2afef3e->leave($__internal_dfaa35855f9bd81614d22a4e36f3a0951ce92049d80a15094bddbba1f2afef3e_prof);

        
        $__internal_837f9a776b79b35034df5770c99d515d06b1ab7f46fad4377a7d514b3071b196->leave($__internal_837f9a776b79b35034df5770c99d515d06b1ab7f46fad4377a7d514b3071b196_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fa6ed5a5f98c3c63f049efd64aff80bfa9e0861d7d390cbb2b6e51e01897a8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6ed5a5f98c3c63f049efd64aff80bfa9e0861d7d390cbb2b6e51e01897a8d1->enter($__internal_fa6ed5a5f98c3c63f049efd64aff80bfa9e0861d7d390cbb2b6e51e01897a8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9d08815419db2986b8118a5196f04b305501df8ffb1361b5848110d9d0b84f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d08815419db2986b8118a5196f04b305501df8ffb1361b5848110d9d0b84f8e->enter($__internal_9d08815419db2986b8118a5196f04b305501df8ffb1361b5848110d9d0b84f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9d08815419db2986b8118a5196f04b305501df8ffb1361b5848110d9d0b84f8e->leave($__internal_9d08815419db2986b8118a5196f04b305501df8ffb1361b5848110d9d0b84f8e_prof);

        
        $__internal_fa6ed5a5f98c3c63f049efd64aff80bfa9e0861d7d390cbb2b6e51e01897a8d1->leave($__internal_fa6ed5a5f98c3c63f049efd64aff80bfa9e0861d7d390cbb2b6e51e01897a8d1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9f881e8d828391f6e369b9c0029fadea958fd90be39ddbad98eb7f818c8355da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f881e8d828391f6e369b9c0029fadea958fd90be39ddbad98eb7f818c8355da->enter($__internal_9f881e8d828391f6e369b9c0029fadea958fd90be39ddbad98eb7f818c8355da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4048a5af42d4d525c375a0cf7f3aceb9306f2340fde5ce6bfac2593a9db3e982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4048a5af42d4d525c375a0cf7f3aceb9306f2340fde5ce6bfac2593a9db3e982->enter($__internal_4048a5af42d4d525c375a0cf7f3aceb9306f2340fde5ce6bfac2593a9db3e982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4048a5af42d4d525c375a0cf7f3aceb9306f2340fde5ce6bfac2593a9db3e982->leave($__internal_4048a5af42d4d525c375a0cf7f3aceb9306f2340fde5ce6bfac2593a9db3e982_prof);

        
        $__internal_9f881e8d828391f6e369b9c0029fadea958fd90be39ddbad98eb7f818c8355da->leave($__internal_9f881e8d828391f6e369b9c0029fadea958fd90be39ddbad98eb7f818c8355da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
