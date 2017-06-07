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
        $__internal_a135e2339595141c1d4267bb78def196e24b1b1c9f64bc1752b6d6a128353d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a135e2339595141c1d4267bb78def196e24b1b1c9f64bc1752b6d6a128353d27->enter($__internal_a135e2339595141c1d4267bb78def196e24b1b1c9f64bc1752b6d6a128353d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        $__internal_c14359979f8b31b413ae689134c1df141aefb944fa3ae45d7a0abcbad7110ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14359979f8b31b413ae689134c1df141aefb944fa3ae45d7a0abcbad7110ce1->enter($__internal_c14359979f8b31b413ae689134c1df141aefb944fa3ae45d7a0abcbad7110ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a135e2339595141c1d4267bb78def196e24b1b1c9f64bc1752b6d6a128353d27->leave($__internal_a135e2339595141c1d4267bb78def196e24b1b1c9f64bc1752b6d6a128353d27_prof);

        
        $__internal_c14359979f8b31b413ae689134c1df141aefb944fa3ae45d7a0abcbad7110ce1->leave($__internal_c14359979f8b31b413ae689134c1df141aefb944fa3ae45d7a0abcbad7110ce1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d58c56bcdf80f09c75cc31b4824985cdede42a6a11357caf80c16d8757358935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58c56bcdf80f09c75cc31b4824985cdede42a6a11357caf80c16d8757358935->enter($__internal_d58c56bcdf80f09c75cc31b4824985cdede42a6a11357caf80c16d8757358935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c606042c812217dd4fc975fd4a6cf31ae3f3b7130623ef077330673650c64fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c606042c812217dd4fc975fd4a6cf31ae3f3b7130623ef077330673650c64fac->enter($__internal_c606042c812217dd4fc975fd4a6cf31ae3f3b7130623ef077330673650c64fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c606042c812217dd4fc975fd4a6cf31ae3f3b7130623ef077330673650c64fac->leave($__internal_c606042c812217dd4fc975fd4a6cf31ae3f3b7130623ef077330673650c64fac_prof);

        
        $__internal_d58c56bcdf80f09c75cc31b4824985cdede42a6a11357caf80c16d8757358935->leave($__internal_d58c56bcdf80f09c75cc31b4824985cdede42a6a11357caf80c16d8757358935_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_55eb05f5bb894a25045e7732e01bbe1febe5dd8f556766ef477cb8446e163011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55eb05f5bb894a25045e7732e01bbe1febe5dd8f556766ef477cb8446e163011->enter($__internal_55eb05f5bb894a25045e7732e01bbe1febe5dd8f556766ef477cb8446e163011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_29dd350e8392f8f2664eab6f752d1d6b480f641dca5c6a2bd14a616c8fbfb87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dd350e8392f8f2664eab6f752d1d6b480f641dca5c6a2bd14a616c8fbfb87c->enter($__internal_29dd350e8392f8f2664eab6f752d1d6b480f641dca5c6a2bd14a616c8fbfb87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_29dd350e8392f8f2664eab6f752d1d6b480f641dca5c6a2bd14a616c8fbfb87c->leave($__internal_29dd350e8392f8f2664eab6f752d1d6b480f641dca5c6a2bd14a616c8fbfb87c_prof);

        
        $__internal_55eb05f5bb894a25045e7732e01bbe1febe5dd8f556766ef477cb8446e163011->leave($__internal_55eb05f5bb894a25045e7732e01bbe1febe5dd8f556766ef477cb8446e163011_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9bfee8cf5110eb80a0a47e0f788126c7d8b791105da5196aa6a7ececcdfce245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfee8cf5110eb80a0a47e0f788126c7d8b791105da5196aa6a7ececcdfce245->enter($__internal_9bfee8cf5110eb80a0a47e0f788126c7d8b791105da5196aa6a7ececcdfce245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_05d72ccb50743a6308c77a66ec54e7f0bba5481adbadc0d01cd7999e6e06673e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d72ccb50743a6308c77a66ec54e7f0bba5481adbadc0d01cd7999e6e06673e->enter($__internal_05d72ccb50743a6308c77a66ec54e7f0bba5481adbadc0d01cd7999e6e06673e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_05d72ccb50743a6308c77a66ec54e7f0bba5481adbadc0d01cd7999e6e06673e->leave($__internal_05d72ccb50743a6308c77a66ec54e7f0bba5481adbadc0d01cd7999e6e06673e_prof);

        
        $__internal_9bfee8cf5110eb80a0a47e0f788126c7d8b791105da5196aa6a7ececcdfce245->leave($__internal_9bfee8cf5110eb80a0a47e0f788126c7d8b791105da5196aa6a7ececcdfce245_prof);

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
