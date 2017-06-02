<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e6d3a470b2bab5f9789e91a49c93b91975c78f5d88ca6815e7c9927db9519a70 extends Twig_Template
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
        $__internal_acb76e4be7d08555a723aeac53c488e336c18e1d88727b76ee8da6468552ae1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb76e4be7d08555a723aeac53c488e336c18e1d88727b76ee8da6468552ae1f->enter($__internal_acb76e4be7d08555a723aeac53c488e336c18e1d88727b76ee8da6468552ae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_fe9909be3fc552aedc4a59c244c76f606659668b30d034dcd7b275ab4fd3483a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9909be3fc552aedc4a59c244c76f606659668b30d034dcd7b275ab4fd3483a->enter($__internal_fe9909be3fc552aedc4a59c244c76f606659668b30d034dcd7b275ab4fd3483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_acb76e4be7d08555a723aeac53c488e336c18e1d88727b76ee8da6468552ae1f->leave($__internal_acb76e4be7d08555a723aeac53c488e336c18e1d88727b76ee8da6468552ae1f_prof);

        
        $__internal_fe9909be3fc552aedc4a59c244c76f606659668b30d034dcd7b275ab4fd3483a->leave($__internal_fe9909be3fc552aedc4a59c244c76f606659668b30d034dcd7b275ab4fd3483a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2da71cef0cecca7bd0e9dde12d03d960efa61c8e55e754174ae36303fe9e457a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da71cef0cecca7bd0e9dde12d03d960efa61c8e55e754174ae36303fe9e457a->enter($__internal_2da71cef0cecca7bd0e9dde12d03d960efa61c8e55e754174ae36303fe9e457a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8694bfc78914647ede17a78cda9c0370fbd273bed69eefacf43bada958eb882c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8694bfc78914647ede17a78cda9c0370fbd273bed69eefacf43bada958eb882c->enter($__internal_8694bfc78914647ede17a78cda9c0370fbd273bed69eefacf43bada958eb882c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8694bfc78914647ede17a78cda9c0370fbd273bed69eefacf43bada958eb882c->leave($__internal_8694bfc78914647ede17a78cda9c0370fbd273bed69eefacf43bada958eb882c_prof);

        
        $__internal_2da71cef0cecca7bd0e9dde12d03d960efa61c8e55e754174ae36303fe9e457a->leave($__internal_2da71cef0cecca7bd0e9dde12d03d960efa61c8e55e754174ae36303fe9e457a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_701b9e36008ca1d7caf0add4e371eae6b113b28b030ebc577c8da2b50b437e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701b9e36008ca1d7caf0add4e371eae6b113b28b030ebc577c8da2b50b437e72->enter($__internal_701b9e36008ca1d7caf0add4e371eae6b113b28b030ebc577c8da2b50b437e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2cc62f5132da88dbe661f40c064a1a34b0b2a1544440c3147dad720802c12029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc62f5132da88dbe661f40c064a1a34b0b2a1544440c3147dad720802c12029->enter($__internal_2cc62f5132da88dbe661f40c064a1a34b0b2a1544440c3147dad720802c12029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2cc62f5132da88dbe661f40c064a1a34b0b2a1544440c3147dad720802c12029->leave($__internal_2cc62f5132da88dbe661f40c064a1a34b0b2a1544440c3147dad720802c12029_prof);

        
        $__internal_701b9e36008ca1d7caf0add4e371eae6b113b28b030ebc577c8da2b50b437e72->leave($__internal_701b9e36008ca1d7caf0add4e371eae6b113b28b030ebc577c8da2b50b437e72_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7654869cb54c5f7149a0262629191b749434e66642d13a0eb181d0bdb375f446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7654869cb54c5f7149a0262629191b749434e66642d13a0eb181d0bdb375f446->enter($__internal_7654869cb54c5f7149a0262629191b749434e66642d13a0eb181d0bdb375f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4f57dd0a3d344f9624e701b91b20b2632661f3ecce0864c8cfcc0d306c49dd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f57dd0a3d344f9624e701b91b20b2632661f3ecce0864c8cfcc0d306c49dd33->enter($__internal_4f57dd0a3d344f9624e701b91b20b2632661f3ecce0864c8cfcc0d306c49dd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f57dd0a3d344f9624e701b91b20b2632661f3ecce0864c8cfcc0d306c49dd33->leave($__internal_4f57dd0a3d344f9624e701b91b20b2632661f3ecce0864c8cfcc0d306c49dd33_prof);

        
        $__internal_7654869cb54c5f7149a0262629191b749434e66642d13a0eb181d0bdb375f446->leave($__internal_7654869cb54c5f7149a0262629191b749434e66642d13a0eb181d0bdb375f446_prof);

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
