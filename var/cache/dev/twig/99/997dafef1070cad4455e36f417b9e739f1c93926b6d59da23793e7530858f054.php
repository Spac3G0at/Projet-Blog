<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4e9e70d4b5a40e9b6a7c5b27fabed121a92bc983ddf5f1217597d730a0dda8ce extends Twig_Template
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
        $__internal_f556d45e679545e5f6b757798872cc6ea8e59a8889305a208ba614f7558c0486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f556d45e679545e5f6b757798872cc6ea8e59a8889305a208ba614f7558c0486->enter($__internal_f556d45e679545e5f6b757798872cc6ea8e59a8889305a208ba614f7558c0486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_dd1a047251cf2cd7727dea5b9e1227e082a035ff0beef02ee5727ed93ae60726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1a047251cf2cd7727dea5b9e1227e082a035ff0beef02ee5727ed93ae60726->enter($__internal_dd1a047251cf2cd7727dea5b9e1227e082a035ff0beef02ee5727ed93ae60726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f556d45e679545e5f6b757798872cc6ea8e59a8889305a208ba614f7558c0486->leave($__internal_f556d45e679545e5f6b757798872cc6ea8e59a8889305a208ba614f7558c0486_prof);

        
        $__internal_dd1a047251cf2cd7727dea5b9e1227e082a035ff0beef02ee5727ed93ae60726->leave($__internal_dd1a047251cf2cd7727dea5b9e1227e082a035ff0beef02ee5727ed93ae60726_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbe2962608d8c4f0bf8f91b1d00b3ed3c37d15414e505a65ac8b9dd7bf699f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe2962608d8c4f0bf8f91b1d00b3ed3c37d15414e505a65ac8b9dd7bf699f8e->enter($__internal_fbe2962608d8c4f0bf8f91b1d00b3ed3c37d15414e505a65ac8b9dd7bf699f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_46533f9269a9825c4cdd4b499ea780ad2011584945757894bac050fa9d535470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46533f9269a9825c4cdd4b499ea780ad2011584945757894bac050fa9d535470->enter($__internal_46533f9269a9825c4cdd4b499ea780ad2011584945757894bac050fa9d535470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_46533f9269a9825c4cdd4b499ea780ad2011584945757894bac050fa9d535470->leave($__internal_46533f9269a9825c4cdd4b499ea780ad2011584945757894bac050fa9d535470_prof);

        
        $__internal_fbe2962608d8c4f0bf8f91b1d00b3ed3c37d15414e505a65ac8b9dd7bf699f8e->leave($__internal_fbe2962608d8c4f0bf8f91b1d00b3ed3c37d15414e505a65ac8b9dd7bf699f8e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7b52a60b585fe10bf5959d379bef485cd20c2486e737504cacac9ffe19f680c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b52a60b585fe10bf5959d379bef485cd20c2486e737504cacac9ffe19f680c5->enter($__internal_7b52a60b585fe10bf5959d379bef485cd20c2486e737504cacac9ffe19f680c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5deeff73cc465a7c8cc815d0e51638da2fbd4ba08c79cc70975fd5d6c09a26c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5deeff73cc465a7c8cc815d0e51638da2fbd4ba08c79cc70975fd5d6c09a26c9->enter($__internal_5deeff73cc465a7c8cc815d0e51638da2fbd4ba08c79cc70975fd5d6c09a26c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5deeff73cc465a7c8cc815d0e51638da2fbd4ba08c79cc70975fd5d6c09a26c9->leave($__internal_5deeff73cc465a7c8cc815d0e51638da2fbd4ba08c79cc70975fd5d6c09a26c9_prof);

        
        $__internal_7b52a60b585fe10bf5959d379bef485cd20c2486e737504cacac9ffe19f680c5->leave($__internal_7b52a60b585fe10bf5959d379bef485cd20c2486e737504cacac9ffe19f680c5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_743866a06a2e125d12ffa083230698923a8226f1e9b078ca77ae5f2b1a614c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743866a06a2e125d12ffa083230698923a8226f1e9b078ca77ae5f2b1a614c71->enter($__internal_743866a06a2e125d12ffa083230698923a8226f1e9b078ca77ae5f2b1a614c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_375bf17e1324409fbe3da4d3bc368a354c28b2a590cd0e259dc78dc79ebe6791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375bf17e1324409fbe3da4d3bc368a354c28b2a590cd0e259dc78dc79ebe6791->enter($__internal_375bf17e1324409fbe3da4d3bc368a354c28b2a590cd0e259dc78dc79ebe6791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_375bf17e1324409fbe3da4d3bc368a354c28b2a590cd0e259dc78dc79ebe6791->leave($__internal_375bf17e1324409fbe3da4d3bc368a354c28b2a590cd0e259dc78dc79ebe6791_prof);

        
        $__internal_743866a06a2e125d12ffa083230698923a8226f1e9b078ca77ae5f2b1a614c71->leave($__internal_743866a06a2e125d12ffa083230698923a8226f1e9b078ca77ae5f2b1a614c71_prof);

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
