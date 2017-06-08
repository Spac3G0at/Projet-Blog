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
        $__internal_6f0cc33aa8f36ea8a106ac562642a79f072f4f437066e868003ccb5e8b41ee64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0cc33aa8f36ea8a106ac562642a79f072f4f437066e868003ccb5e8b41ee64->enter($__internal_6f0cc33aa8f36ea8a106ac562642a79f072f4f437066e868003ccb5e8b41ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5c032daf1f30208f97b0298ff50fc11a6be5c1ea17ebd1f03a9e18aacd763e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c032daf1f30208f97b0298ff50fc11a6be5c1ea17ebd1f03a9e18aacd763e85->enter($__internal_5c032daf1f30208f97b0298ff50fc11a6be5c1ea17ebd1f03a9e18aacd763e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f0cc33aa8f36ea8a106ac562642a79f072f4f437066e868003ccb5e8b41ee64->leave($__internal_6f0cc33aa8f36ea8a106ac562642a79f072f4f437066e868003ccb5e8b41ee64_prof);

        
        $__internal_5c032daf1f30208f97b0298ff50fc11a6be5c1ea17ebd1f03a9e18aacd763e85->leave($__internal_5c032daf1f30208f97b0298ff50fc11a6be5c1ea17ebd1f03a9e18aacd763e85_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_50ff0c86b762f183390d2313ee0472ea617bd8ed8f1ed7a9abe20052a6970469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ff0c86b762f183390d2313ee0472ea617bd8ed8f1ed7a9abe20052a6970469->enter($__internal_50ff0c86b762f183390d2313ee0472ea617bd8ed8f1ed7a9abe20052a6970469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0332ae5ec19f2df2e9ac870b6ffe8cd04ca1f7477abba17ef8ba56cba554fdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0332ae5ec19f2df2e9ac870b6ffe8cd04ca1f7477abba17ef8ba56cba554fdc7->enter($__internal_0332ae5ec19f2df2e9ac870b6ffe8cd04ca1f7477abba17ef8ba56cba554fdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0332ae5ec19f2df2e9ac870b6ffe8cd04ca1f7477abba17ef8ba56cba554fdc7->leave($__internal_0332ae5ec19f2df2e9ac870b6ffe8cd04ca1f7477abba17ef8ba56cba554fdc7_prof);

        
        $__internal_50ff0c86b762f183390d2313ee0472ea617bd8ed8f1ed7a9abe20052a6970469->leave($__internal_50ff0c86b762f183390d2313ee0472ea617bd8ed8f1ed7a9abe20052a6970469_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e86d1783b98772556c332c8ac1bc5603ae04bad08a0a9224ebaf2deb0a36f7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86d1783b98772556c332c8ac1bc5603ae04bad08a0a9224ebaf2deb0a36f7d0->enter($__internal_e86d1783b98772556c332c8ac1bc5603ae04bad08a0a9224ebaf2deb0a36f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f897ebb4f6486a93c047d7a46e5b5647dc5716268a01b6869c40b2ea907769f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f897ebb4f6486a93c047d7a46e5b5647dc5716268a01b6869c40b2ea907769f1->enter($__internal_f897ebb4f6486a93c047d7a46e5b5647dc5716268a01b6869c40b2ea907769f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f897ebb4f6486a93c047d7a46e5b5647dc5716268a01b6869c40b2ea907769f1->leave($__internal_f897ebb4f6486a93c047d7a46e5b5647dc5716268a01b6869c40b2ea907769f1_prof);

        
        $__internal_e86d1783b98772556c332c8ac1bc5603ae04bad08a0a9224ebaf2deb0a36f7d0->leave($__internal_e86d1783b98772556c332c8ac1bc5603ae04bad08a0a9224ebaf2deb0a36f7d0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d1985c9dca8bafe9fa787add13e3a211635980d0402abb39c57128d9d4cbe853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1985c9dca8bafe9fa787add13e3a211635980d0402abb39c57128d9d4cbe853->enter($__internal_d1985c9dca8bafe9fa787add13e3a211635980d0402abb39c57128d9d4cbe853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_969c076c6549664be89953ab2583a39af94f1a13ef8815df89bb53f77ae37fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969c076c6549664be89953ab2583a39af94f1a13ef8815df89bb53f77ae37fb7->enter($__internal_969c076c6549664be89953ab2583a39af94f1a13ef8815df89bb53f77ae37fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_969c076c6549664be89953ab2583a39af94f1a13ef8815df89bb53f77ae37fb7->leave($__internal_969c076c6549664be89953ab2583a39af94f1a13ef8815df89bb53f77ae37fb7_prof);

        
        $__internal_d1985c9dca8bafe9fa787add13e3a211635980d0402abb39c57128d9d4cbe853->leave($__internal_d1985c9dca8bafe9fa787add13e3a211635980d0402abb39c57128d9d4cbe853_prof);

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
