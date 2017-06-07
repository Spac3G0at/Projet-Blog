<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1a5beb6b09b2656fc7c75241ac24a24c26c178ddc939076f27d537475c3824b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2d23dfaaffe19be3e9fdacb94cbcb0880a4a534e7748ada6800e8d8db9aa06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d23dfaaffe19be3e9fdacb94cbcb0880a4a534e7748ada6800e8d8db9aa06e->enter($__internal_b2d23dfaaffe19be3e9fdacb94cbcb0880a4a534e7748ada6800e8d8db9aa06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9a7cb2d97c7fe997144c87e0e0693bbdd15032b1e99ee7a079d21f52a9b5c2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7cb2d97c7fe997144c87e0e0693bbdd15032b1e99ee7a079d21f52a9b5c2a6->enter($__internal_9a7cb2d97c7fe997144c87e0e0693bbdd15032b1e99ee7a079d21f52a9b5c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d23dfaaffe19be3e9fdacb94cbcb0880a4a534e7748ada6800e8d8db9aa06e->leave($__internal_b2d23dfaaffe19be3e9fdacb94cbcb0880a4a534e7748ada6800e8d8db9aa06e_prof);

        
        $__internal_9a7cb2d97c7fe997144c87e0e0693bbdd15032b1e99ee7a079d21f52a9b5c2a6->leave($__internal_9a7cb2d97c7fe997144c87e0e0693bbdd15032b1e99ee7a079d21f52a9b5c2a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4ab3b581b881e5342227cc24219ea9a02dbe7893ea800a57a95ef99613bcf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ab3b581b881e5342227cc24219ea9a02dbe7893ea800a57a95ef99613bcf18->enter($__internal_f4ab3b581b881e5342227cc24219ea9a02dbe7893ea800a57a95ef99613bcf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83ea1bc6c90bb14c2ec756ae76a5f791cc58a86badb4e56341840b5aeedac9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ea1bc6c90bb14c2ec756ae76a5f791cc58a86badb4e56341840b5aeedac9c6->enter($__internal_83ea1bc6c90bb14c2ec756ae76a5f791cc58a86badb4e56341840b5aeedac9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_83ea1bc6c90bb14c2ec756ae76a5f791cc58a86badb4e56341840b5aeedac9c6->leave($__internal_83ea1bc6c90bb14c2ec756ae76a5f791cc58a86badb4e56341840b5aeedac9c6_prof);

        
        $__internal_f4ab3b581b881e5342227cc24219ea9a02dbe7893ea800a57a95ef99613bcf18->leave($__internal_f4ab3b581b881e5342227cc24219ea9a02dbe7893ea800a57a95ef99613bcf18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
