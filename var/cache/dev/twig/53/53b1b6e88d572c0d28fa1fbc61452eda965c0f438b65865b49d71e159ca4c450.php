<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_622e39f72f10999feda4a739c44578c7a43bef32c4e39d1223e1e32d4fec341d extends Twig_Template
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
        $__internal_d3e0a327d146429e3204d51457d10cb464ae30fdbedf7433b4f4f2ce662da030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e0a327d146429e3204d51457d10cb464ae30fdbedf7433b4f4f2ce662da030->enter($__internal_d3e0a327d146429e3204d51457d10cb464ae30fdbedf7433b4f4f2ce662da030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ce981f2d5b5cbb03d63e388521d986f17782351034c1cb9a76523b8ca5ef07f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce981f2d5b5cbb03d63e388521d986f17782351034c1cb9a76523b8ca5ef07f8->enter($__internal_ce981f2d5b5cbb03d63e388521d986f17782351034c1cb9a76523b8ca5ef07f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3e0a327d146429e3204d51457d10cb464ae30fdbedf7433b4f4f2ce662da030->leave($__internal_d3e0a327d146429e3204d51457d10cb464ae30fdbedf7433b4f4f2ce662da030_prof);

        
        $__internal_ce981f2d5b5cbb03d63e388521d986f17782351034c1cb9a76523b8ca5ef07f8->leave($__internal_ce981f2d5b5cbb03d63e388521d986f17782351034c1cb9a76523b8ca5ef07f8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_669ac03c8ddfac1bef6a783774073ad2a0965dd873e8c2e0e9f31cf692cac66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669ac03c8ddfac1bef6a783774073ad2a0965dd873e8c2e0e9f31cf692cac66a->enter($__internal_669ac03c8ddfac1bef6a783774073ad2a0965dd873e8c2e0e9f31cf692cac66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7c91b3ed40dc4b16c375d2fcc6f4543dcc593a2e74270b21e23d56563ae5d4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c91b3ed40dc4b16c375d2fcc6f4543dcc593a2e74270b21e23d56563ae5d4d9->enter($__internal_7c91b3ed40dc4b16c375d2fcc6f4543dcc593a2e74270b21e23d56563ae5d4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_7c91b3ed40dc4b16c375d2fcc6f4543dcc593a2e74270b21e23d56563ae5d4d9->leave($__internal_7c91b3ed40dc4b16c375d2fcc6f4543dcc593a2e74270b21e23d56563ae5d4d9_prof);

        
        $__internal_669ac03c8ddfac1bef6a783774073ad2a0965dd873e8c2e0e9f31cf692cac66a->leave($__internal_669ac03c8ddfac1bef6a783774073ad2a0965dd873e8c2e0e9f31cf692cac66a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fcc9e99e42dde15796262c472c9ce23205e06e2ec250bf702c1c8653a6a76309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc9e99e42dde15796262c472c9ce23205e06e2ec250bf702c1c8653a6a76309->enter($__internal_fcc9e99e42dde15796262c472c9ce23205e06e2ec250bf702c1c8653a6a76309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_713570374bcc0a1ee026077fd867281ce560043e4762d41f11afbfa45123719e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713570374bcc0a1ee026077fd867281ce560043e4762d41f11afbfa45123719e->enter($__internal_713570374bcc0a1ee026077fd867281ce560043e4762d41f11afbfa45123719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_713570374bcc0a1ee026077fd867281ce560043e4762d41f11afbfa45123719e->leave($__internal_713570374bcc0a1ee026077fd867281ce560043e4762d41f11afbfa45123719e_prof);

        
        $__internal_fcc9e99e42dde15796262c472c9ce23205e06e2ec250bf702c1c8653a6a76309->leave($__internal_fcc9e99e42dde15796262c472c9ce23205e06e2ec250bf702c1c8653a6a76309_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a1b4499822b23b32ec95fecbf5d72199254fa81dfab39d1f2733339962bd7ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b4499822b23b32ec95fecbf5d72199254fa81dfab39d1f2733339962bd7ea3->enter($__internal_a1b4499822b23b32ec95fecbf5d72199254fa81dfab39d1f2733339962bd7ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2daa60b1b98749559d98ca29dd912a948f386d893c4674427bcc7e603e4d48a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daa60b1b98749559d98ca29dd912a948f386d893c4674427bcc7e603e4d48a5->enter($__internal_2daa60b1b98749559d98ca29dd912a948f386d893c4674427bcc7e603e4d48a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2daa60b1b98749559d98ca29dd912a948f386d893c4674427bcc7e603e4d48a5->leave($__internal_2daa60b1b98749559d98ca29dd912a948f386d893c4674427bcc7e603e4d48a5_prof);

        
        $__internal_a1b4499822b23b32ec95fecbf5d72199254fa81dfab39d1f2733339962bd7ea3->leave($__internal_a1b4499822b23b32ec95fecbf5d72199254fa81dfab39d1f2733339962bd7ea3_prof);

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
