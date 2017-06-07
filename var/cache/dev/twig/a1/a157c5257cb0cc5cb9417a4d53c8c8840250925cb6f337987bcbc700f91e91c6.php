<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7915ca6531085e54d488f5ed1fc25c802219e6a8a41e6b6171c95e814cf69e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2451186abeeea82b52aca5f5aabb1c0511f3abbab464c47f3bccc4c30c6ea2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2451186abeeea82b52aca5f5aabb1c0511f3abbab464c47f3bccc4c30c6ea2ad->enter($__internal_2451186abeeea82b52aca5f5aabb1c0511f3abbab464c47f3bccc4c30c6ea2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_b7201fc6101ef8b60c7b36996850fd3ea53fb06f00a3076673f8cd9513e43d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7201fc6101ef8b60c7b36996850fd3ea53fb06f00a3076673f8cd9513e43d79->enter($__internal_b7201fc6101ef8b60c7b36996850fd3ea53fb06f00a3076673f8cd9513e43d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2451186abeeea82b52aca5f5aabb1c0511f3abbab464c47f3bccc4c30c6ea2ad->leave($__internal_2451186abeeea82b52aca5f5aabb1c0511f3abbab464c47f3bccc4c30c6ea2ad_prof);

        
        $__internal_b7201fc6101ef8b60c7b36996850fd3ea53fb06f00a3076673f8cd9513e43d79->leave($__internal_b7201fc6101ef8b60c7b36996850fd3ea53fb06f00a3076673f8cd9513e43d79_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b328f125f4202102a69f8f3f6a0be161d82ac103c843b879a4aa9f22a06ae0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b328f125f4202102a69f8f3f6a0be161d82ac103c843b879a4aa9f22a06ae0cf->enter($__internal_b328f125f4202102a69f8f3f6a0be161d82ac103c843b879a4aa9f22a06ae0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74e54b171eb87581b15f68305ca96bf8d6653d8520bcc5eb4136e964eace35cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e54b171eb87581b15f68305ca96bf8d6653d8520bcc5eb4136e964eace35cc->enter($__internal_74e54b171eb87581b15f68305ca96bf8d6653d8520bcc5eb4136e964eace35cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_74e54b171eb87581b15f68305ca96bf8d6653d8520bcc5eb4136e964eace35cc->leave($__internal_74e54b171eb87581b15f68305ca96bf8d6653d8520bcc5eb4136e964eace35cc_prof);

        
        $__internal_b328f125f4202102a69f8f3f6a0be161d82ac103c843b879a4aa9f22a06ae0cf->leave($__internal_b328f125f4202102a69f8f3f6a0be161d82ac103c843b879a4aa9f22a06ae0cf_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3f591048f0b812d045c8a295ca5bb2dc0e07914abfa1b1d952ee1ad76e78589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f591048f0b812d045c8a295ca5bb2dc0e07914abfa1b1d952ee1ad76e78589->enter($__internal_e3f591048f0b812d045c8a295ca5bb2dc0e07914abfa1b1d952ee1ad76e78589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b2ffb218a38afcfac541dad99f4e77a39fa76765e984fc75a7a49ff9716bad16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ffb218a38afcfac541dad99f4e77a39fa76765e984fc75a7a49ff9716bad16->enter($__internal_b2ffb218a38afcfac541dad99f4e77a39fa76765e984fc75a7a49ff9716bad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_b2ffb218a38afcfac541dad99f4e77a39fa76765e984fc75a7a49ff9716bad16->leave($__internal_b2ffb218a38afcfac541dad99f4e77a39fa76765e984fc75a7a49ff9716bad16_prof);

        
        $__internal_e3f591048f0b812d045c8a295ca5bb2dc0e07914abfa1b1d952ee1ad76e78589->leave($__internal_e3f591048f0b812d045c8a295ca5bb2dc0e07914abfa1b1d952ee1ad76e78589_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  66 => 7,  55 => 10,  53 => 7,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% extends 'base.html.twig' %}

{% block body %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}

{% endblock %}", "@FOSUser/Profile/edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
