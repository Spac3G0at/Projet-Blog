<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5cec58c88904cb790ca309cb11ff267b44db2ca529362d7aa464e365cd55b572 extends Twig_Template
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
        $__internal_a2f14fefe68eb412cb82ccd3e5578167d654140839ff11d51dfa0469b75f89b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f14fefe68eb412cb82ccd3e5578167d654140839ff11d51dfa0469b75f89b1->enter($__internal_a2f14fefe68eb412cb82ccd3e5578167d654140839ff11d51dfa0469b75f89b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_37c7e6a1688f55c2bf53dca6508b6f0daf92911270d5f8e7907b410c40fc709a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c7e6a1688f55c2bf53dca6508b6f0daf92911270d5f8e7907b410c40fc709a->enter($__internal_37c7e6a1688f55c2bf53dca6508b6f0daf92911270d5f8e7907b410c40fc709a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a2f14fefe68eb412cb82ccd3e5578167d654140839ff11d51dfa0469b75f89b1->leave($__internal_a2f14fefe68eb412cb82ccd3e5578167d654140839ff11d51dfa0469b75f89b1_prof);

        
        $__internal_37c7e6a1688f55c2bf53dca6508b6f0daf92911270d5f8e7907b410c40fc709a->leave($__internal_37c7e6a1688f55c2bf53dca6508b6f0daf92911270d5f8e7907b410c40fc709a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8ff685d8ae656b5c80013650474cbfa2219834dc7c5148f202a86501311906d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff685d8ae656b5c80013650474cbfa2219834dc7c5148f202a86501311906d6->enter($__internal_8ff685d8ae656b5c80013650474cbfa2219834dc7c5148f202a86501311906d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e106ff7e75fca1dca4f034f6e207e4d0bbcc98e8a615e701ec1027c96ddcdb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e106ff7e75fca1dca4f034f6e207e4d0bbcc98e8a615e701ec1027c96ddcdb2e->enter($__internal_e106ff7e75fca1dca4f034f6e207e4d0bbcc98e8a615e701ec1027c96ddcdb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e106ff7e75fca1dca4f034f6e207e4d0bbcc98e8a615e701ec1027c96ddcdb2e->leave($__internal_e106ff7e75fca1dca4f034f6e207e4d0bbcc98e8a615e701ec1027c96ddcdb2e_prof);

        
        $__internal_8ff685d8ae656b5c80013650474cbfa2219834dc7c5148f202a86501311906d6->leave($__internal_8ff685d8ae656b5c80013650474cbfa2219834dc7c5148f202a86501311906d6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3fc00d5960d8222d453ad5f52ab349290b50e602e216306ee1106dec9347009d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc00d5960d8222d453ad5f52ab349290b50e602e216306ee1106dec9347009d->enter($__internal_3fc00d5960d8222d453ad5f52ab349290b50e602e216306ee1106dec9347009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2d45c793da11d9fb0f6f262d5cd6c4fa75996423b718ea121e68b5e367e0bef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d45c793da11d9fb0f6f262d5cd6c4fa75996423b718ea121e68b5e367e0bef9->enter($__internal_2d45c793da11d9fb0f6f262d5cd6c4fa75996423b718ea121e68b5e367e0bef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d45c793da11d9fb0f6f262d5cd6c4fa75996423b718ea121e68b5e367e0bef9->leave($__internal_2d45c793da11d9fb0f6f262d5cd6c4fa75996423b718ea121e68b5e367e0bef9_prof);

        
        $__internal_3fc00d5960d8222d453ad5f52ab349290b50e602e216306ee1106dec9347009d->leave($__internal_3fc00d5960d8222d453ad5f52ab349290b50e602e216306ee1106dec9347009d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cb1ae510004e8d5516d37696f1fc00949b8363e39188a0c80aee5f5ed20aa7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1ae510004e8d5516d37696f1fc00949b8363e39188a0c80aee5f5ed20aa7f9->enter($__internal_cb1ae510004e8d5516d37696f1fc00949b8363e39188a0c80aee5f5ed20aa7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_96d66edba284b4fe8c690728d71870cb7f0033a39197923880f1b78c778f7cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d66edba284b4fe8c690728d71870cb7f0033a39197923880f1b78c778f7cca->enter($__internal_96d66edba284b4fe8c690728d71870cb7f0033a39197923880f1b78c778f7cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_96d66edba284b4fe8c690728d71870cb7f0033a39197923880f1b78c778f7cca->leave($__internal_96d66edba284b4fe8c690728d71870cb7f0033a39197923880f1b78c778f7cca_prof);

        
        $__internal_cb1ae510004e8d5516d37696f1fc00949b8363e39188a0c80aee5f5ed20aa7f9->leave($__internal_cb1ae510004e8d5516d37696f1fc00949b8363e39188a0c80aee5f5ed20aa7f9_prof);

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
