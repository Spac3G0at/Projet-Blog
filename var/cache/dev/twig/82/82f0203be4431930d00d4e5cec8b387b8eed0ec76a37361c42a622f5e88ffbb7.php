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
        $__internal_fb51a397ef0b9aa4ec092b0ed9fa4d4a38eae7e8c6ff2a345a6cf7e4b3314329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb51a397ef0b9aa4ec092b0ed9fa4d4a38eae7e8c6ff2a345a6cf7e4b3314329->enter($__internal_fb51a397ef0b9aa4ec092b0ed9fa4d4a38eae7e8c6ff2a345a6cf7e4b3314329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        $__internal_91b65ab19b68c86082090df57e491b6cb49fd829405e7866d5332d015b67bd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b65ab19b68c86082090df57e491b6cb49fd829405e7866d5332d015b67bd03->enter($__internal_91b65ab19b68c86082090df57e491b6cb49fd829405e7866d5332d015b67bd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fb51a397ef0b9aa4ec092b0ed9fa4d4a38eae7e8c6ff2a345a6cf7e4b3314329->leave($__internal_fb51a397ef0b9aa4ec092b0ed9fa4d4a38eae7e8c6ff2a345a6cf7e4b3314329_prof);

        
        $__internal_91b65ab19b68c86082090df57e491b6cb49fd829405e7866d5332d015b67bd03->leave($__internal_91b65ab19b68c86082090df57e491b6cb49fd829405e7866d5332d015b67bd03_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c6da40cf2df1b3d7d413981855e8ede79e56283fca8023cf8b7379f2d1b11bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6da40cf2df1b3d7d413981855e8ede79e56283fca8023cf8b7379f2d1b11bc4->enter($__internal_c6da40cf2df1b3d7d413981855e8ede79e56283fca8023cf8b7379f2d1b11bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bdb88d5655b368f116a87f351ec978d8a921f5eb0fca1d5dfe8d9eb00757e5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb88d5655b368f116a87f351ec978d8a921f5eb0fca1d5dfe8d9eb00757e5fb->enter($__internal_bdb88d5655b368f116a87f351ec978d8a921f5eb0fca1d5dfe8d9eb00757e5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_bdb88d5655b368f116a87f351ec978d8a921f5eb0fca1d5dfe8d9eb00757e5fb->leave($__internal_bdb88d5655b368f116a87f351ec978d8a921f5eb0fca1d5dfe8d9eb00757e5fb_prof);

        
        $__internal_c6da40cf2df1b3d7d413981855e8ede79e56283fca8023cf8b7379f2d1b11bc4->leave($__internal_c6da40cf2df1b3d7d413981855e8ede79e56283fca8023cf8b7379f2d1b11bc4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a1e5d9112473a92c2f2333dd763166cf02b6e7df61995b6a6da2a7078aca18e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e5d9112473a92c2f2333dd763166cf02b6e7df61995b6a6da2a7078aca18e9->enter($__internal_a1e5d9112473a92c2f2333dd763166cf02b6e7df61995b6a6da2a7078aca18e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_599c4a3c403d24bbcc6e7b7eae92b9d480c41cdb79a7008699ec87947900b52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599c4a3c403d24bbcc6e7b7eae92b9d480c41cdb79a7008699ec87947900b52e->enter($__internal_599c4a3c403d24bbcc6e7b7eae92b9d480c41cdb79a7008699ec87947900b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_599c4a3c403d24bbcc6e7b7eae92b9d480c41cdb79a7008699ec87947900b52e->leave($__internal_599c4a3c403d24bbcc6e7b7eae92b9d480c41cdb79a7008699ec87947900b52e_prof);

        
        $__internal_a1e5d9112473a92c2f2333dd763166cf02b6e7df61995b6a6da2a7078aca18e9->leave($__internal_a1e5d9112473a92c2f2333dd763166cf02b6e7df61995b6a6da2a7078aca18e9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_91148e2319d9ab234ab56f47f01dd4dd250f2bfcc6c00b095cdae8c6513828f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91148e2319d9ab234ab56f47f01dd4dd250f2bfcc6c00b095cdae8c6513828f8->enter($__internal_91148e2319d9ab234ab56f47f01dd4dd250f2bfcc6c00b095cdae8c6513828f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ca52d6759fb20603c55d6921902203b074062a3c10c0e1b578f01c9f06fa06f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca52d6759fb20603c55d6921902203b074062a3c10c0e1b578f01c9f06fa06f0->enter($__internal_ca52d6759fb20603c55d6921902203b074062a3c10c0e1b578f01c9f06fa06f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ca52d6759fb20603c55d6921902203b074062a3c10c0e1b578f01c9f06fa06f0->leave($__internal_ca52d6759fb20603c55d6921902203b074062a3c10c0e1b578f01c9f06fa06f0_prof);

        
        $__internal_91148e2319d9ab234ab56f47f01dd4dd250f2bfcc6c00b095cdae8c6513828f8->leave($__internal_91148e2319d9ab234ab56f47f01dd4dd250f2bfcc6c00b095cdae8c6513828f8_prof);

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
