<?php

/* FOSUserBundle:Registration/Modal:email.txt.twig */
class __TwigTemplate_3312ecddedce4caa1ee862778a743681b45fe99f0de3fe1a9f62f39e0a5d35e4 extends Twig_Template
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
        $__internal_6627130c04d684fa006697dcae602f4bdb465e6fd7fce9b33150e705315d02ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6627130c04d684fa006697dcae602f4bdb465e6fd7fce9b33150e705315d02ac->enter($__internal_6627130c04d684fa006697dcae602f4bdb465e6fd7fce9b33150e705315d02ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        $__internal_78d9678e9778dc2f40fadd5c0dc4b3696291e631f4a2829bba3295c860b270e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d9678e9778dc2f40fadd5c0dc4b3696291e631f4a2829bba3295c860b270e6->enter($__internal_78d9678e9778dc2f40fadd5c0dc4b3696291e631f4a2829bba3295c860b270e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6627130c04d684fa006697dcae602f4bdb465e6fd7fce9b33150e705315d02ac->leave($__internal_6627130c04d684fa006697dcae602f4bdb465e6fd7fce9b33150e705315d02ac_prof);

        
        $__internal_78d9678e9778dc2f40fadd5c0dc4b3696291e631f4a2829bba3295c860b270e6->leave($__internal_78d9678e9778dc2f40fadd5c0dc4b3696291e631f4a2829bba3295c860b270e6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_847f1239e4cfed04d69dd5dc7dc37b6af7102d6db017c6f244ad2f67e5cd4c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847f1239e4cfed04d69dd5dc7dc37b6af7102d6db017c6f244ad2f67e5cd4c97->enter($__internal_847f1239e4cfed04d69dd5dc7dc37b6af7102d6db017c6f244ad2f67e5cd4c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2379db336e493b0da040647470e3d49f879c4d10d08a38565d6f2293339aed0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2379db336e493b0da040647470e3d49f879c4d10d08a38565d6f2293339aed0f->enter($__internal_2379db336e493b0da040647470e3d49f879c4d10d08a38565d6f2293339aed0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2379db336e493b0da040647470e3d49f879c4d10d08a38565d6f2293339aed0f->leave($__internal_2379db336e493b0da040647470e3d49f879c4d10d08a38565d6f2293339aed0f_prof);

        
        $__internal_847f1239e4cfed04d69dd5dc7dc37b6af7102d6db017c6f244ad2f67e5cd4c97->leave($__internal_847f1239e4cfed04d69dd5dc7dc37b6af7102d6db017c6f244ad2f67e5cd4c97_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_24662d8fd4b33c65e922370a5da8896f00d8149e6e28d09b40d89a703a347427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24662d8fd4b33c65e922370a5da8896f00d8149e6e28d09b40d89a703a347427->enter($__internal_24662d8fd4b33c65e922370a5da8896f00d8149e6e28d09b40d89a703a347427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_45e71c0e93275169cddde97b9239f2b947f0a2aac720e48abf69a9cdc6dfd8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e71c0e93275169cddde97b9239f2b947f0a2aac720e48abf69a9cdc6dfd8b3->enter($__internal_45e71c0e93275169cddde97b9239f2b947f0a2aac720e48abf69a9cdc6dfd8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_45e71c0e93275169cddde97b9239f2b947f0a2aac720e48abf69a9cdc6dfd8b3->leave($__internal_45e71c0e93275169cddde97b9239f2b947f0a2aac720e48abf69a9cdc6dfd8b3_prof);

        
        $__internal_24662d8fd4b33c65e922370a5da8896f00d8149e6e28d09b40d89a703a347427->leave($__internal_24662d8fd4b33c65e922370a5da8896f00d8149e6e28d09b40d89a703a347427_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ca8328ca21623701272965b040d5be5521b8fb2a6f02510ed354610c0395badc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8328ca21623701272965b040d5be5521b8fb2a6f02510ed354610c0395badc->enter($__internal_ca8328ca21623701272965b040d5be5521b8fb2a6f02510ed354610c0395badc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9dc1d214ad83dea7d20d75bd12e1093203e4aba4cbdf9721615151640688477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc1d214ad83dea7d20d75bd12e1093203e4aba4cbdf9721615151640688477a->enter($__internal_9dc1d214ad83dea7d20d75bd12e1093203e4aba4cbdf9721615151640688477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9dc1d214ad83dea7d20d75bd12e1093203e4aba4cbdf9721615151640688477a->leave($__internal_9dc1d214ad83dea7d20d75bd12e1093203e4aba4cbdf9721615151640688477a_prof);

        
        $__internal_ca8328ca21623701272965b040d5be5521b8fb2a6f02510ed354610c0395badc->leave($__internal_ca8328ca21623701272965b040d5be5521b8fb2a6f02510ed354610c0395badc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:email.txt.twig";
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
", "FOSUserBundle:Registration/Modal:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/email.txt.twig");
    }
}
