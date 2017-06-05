<?php

/* FOSUserBundle:Registration/Modal:email.txt.twig */
class __TwigTemplate_d15ea9f5ef05aeab38ccebc501d03729b4eb29924db7542260a32d0b061bdb10 extends Twig_Template
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
        $__internal_e871f46a32c725e41f4370f480feac511cc7f6d2e45bc45619b6a099a8d36c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e871f46a32c725e41f4370f480feac511cc7f6d2e45bc45619b6a099a8d36c5e->enter($__internal_e871f46a32c725e41f4370f480feac511cc7f6d2e45bc45619b6a099a8d36c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        $__internal_5c5282aa426b1c9c075d19215cc34456d24532118435ef28c0d18ea4c5194130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5282aa426b1c9c075d19215cc34456d24532118435ef28c0d18ea4c5194130->enter($__internal_5c5282aa426b1c9c075d19215cc34456d24532118435ef28c0d18ea4c5194130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e871f46a32c725e41f4370f480feac511cc7f6d2e45bc45619b6a099a8d36c5e->leave($__internal_e871f46a32c725e41f4370f480feac511cc7f6d2e45bc45619b6a099a8d36c5e_prof);

        
        $__internal_5c5282aa426b1c9c075d19215cc34456d24532118435ef28c0d18ea4c5194130->leave($__internal_5c5282aa426b1c9c075d19215cc34456d24532118435ef28c0d18ea4c5194130_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c1beadf9f6db296dff01fd43517613ee8b621664d4e770d71b32e9d67a58b6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1beadf9f6db296dff01fd43517613ee8b621664d4e770d71b32e9d67a58b6a4->enter($__internal_c1beadf9f6db296dff01fd43517613ee8b621664d4e770d71b32e9d67a58b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_13c90bcf1f92c4c8399cce3eda8abbc4db95a5574e98d03514e6c809612ead73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c90bcf1f92c4c8399cce3eda8abbc4db95a5574e98d03514e6c809612ead73->enter($__internal_13c90bcf1f92c4c8399cce3eda8abbc4db95a5574e98d03514e6c809612ead73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_13c90bcf1f92c4c8399cce3eda8abbc4db95a5574e98d03514e6c809612ead73->leave($__internal_13c90bcf1f92c4c8399cce3eda8abbc4db95a5574e98d03514e6c809612ead73_prof);

        
        $__internal_c1beadf9f6db296dff01fd43517613ee8b621664d4e770d71b32e9d67a58b6a4->leave($__internal_c1beadf9f6db296dff01fd43517613ee8b621664d4e770d71b32e9d67a58b6a4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_af9235c9d6761df60e2e8b62a01e26a19fb2552f6e09d2fb205bf9c2104eccca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9235c9d6761df60e2e8b62a01e26a19fb2552f6e09d2fb205bf9c2104eccca->enter($__internal_af9235c9d6761df60e2e8b62a01e26a19fb2552f6e09d2fb205bf9c2104eccca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_43b53d8583bb3c9589dd252e0dc2617034c26baf2278cb6a49bd314931528c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b53d8583bb3c9589dd252e0dc2617034c26baf2278cb6a49bd314931528c31->enter($__internal_43b53d8583bb3c9589dd252e0dc2617034c26baf2278cb6a49bd314931528c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_43b53d8583bb3c9589dd252e0dc2617034c26baf2278cb6a49bd314931528c31->leave($__internal_43b53d8583bb3c9589dd252e0dc2617034c26baf2278cb6a49bd314931528c31_prof);

        
        $__internal_af9235c9d6761df60e2e8b62a01e26a19fb2552f6e09d2fb205bf9c2104eccca->leave($__internal_af9235c9d6761df60e2e8b62a01e26a19fb2552f6e09d2fb205bf9c2104eccca_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1566c5d119efc38dcb882dedd2efef5f0363f22edfa9b668d0e8542cdb8c3836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1566c5d119efc38dcb882dedd2efef5f0363f22edfa9b668d0e8542cdb8c3836->enter($__internal_1566c5d119efc38dcb882dedd2efef5f0363f22edfa9b668d0e8542cdb8c3836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_68c3ff07aeb089b413181bf89d3d7cbc9a2e7cf0c9ddf2ef19db1890b8f7407a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c3ff07aeb089b413181bf89d3d7cbc9a2e7cf0c9ddf2ef19db1890b8f7407a->enter($__internal_68c3ff07aeb089b413181bf89d3d7cbc9a2e7cf0c9ddf2ef19db1890b8f7407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_68c3ff07aeb089b413181bf89d3d7cbc9a2e7cf0c9ddf2ef19db1890b8f7407a->leave($__internal_68c3ff07aeb089b413181bf89d3d7cbc9a2e7cf0c9ddf2ef19db1890b8f7407a_prof);

        
        $__internal_1566c5d119efc38dcb882dedd2efef5f0363f22edfa9b668d0e8542cdb8c3836->leave($__internal_1566c5d119efc38dcb882dedd2efef5f0363f22edfa9b668d0e8542cdb8c3836_prof);

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
