<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_4ee05619283200cd0f0e3b04fe8b473b2a4b319bf2ce4cca5fcf30d07df14815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/show_content.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c619730406176ad49eb37c29e28349df67e9aa1d00393e3437953436f2ea8877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c619730406176ad49eb37c29e28349df67e9aa1d00393e3437953436f2ea8877->enter($__internal_c619730406176ad49eb37c29e28349df67e9aa1d00393e3437953436f2ea8877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_b70ba796649e0b75f3abd2f3fa422ce9c229ca3f7aa3d10e85bd7a00e6ef8816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70ba796649e0b75f3abd2f3fa422ce9c229ca3f7aa3d10e85bd7a00e6ef8816->enter($__internal_b70ba796649e0b75f3abd2f3fa422ce9c229ca3f7aa3d10e85bd7a00e6ef8816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c619730406176ad49eb37c29e28349df67e9aa1d00393e3437953436f2ea8877->leave($__internal_c619730406176ad49eb37c29e28349df67e9aa1d00393e3437953436f2ea8877_prof);

        
        $__internal_b70ba796649e0b75f3abd2f3fa422ce9c229ca3f7aa3d10e85bd7a00e6ef8816->leave($__internal_b70ba796649e0b75f3abd2f3fa422ce9c229ca3f7aa3d10e85bd7a00e6ef8816_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d582939837628875c82598ffc18cd7fac94cbf025d2344d27f79f7466215a064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d582939837628875c82598ffc18cd7fac94cbf025d2344d27f79f7466215a064->enter($__internal_d582939837628875c82598ffc18cd7fac94cbf025d2344d27f79f7466215a064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8105b8b3489d0794cd7226b15451a87aa5b0fe09525fac7e2e694b40b95f6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8105b8b3489d0794cd7226b15451a87aa5b0fe09525fac7e2e694b40b95f6ae->enter($__internal_f8105b8b3489d0794cd7226b15451a87aa5b0fe09525fac7e2e694b40b95f6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <a class=\"btn btn-primary\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit</a>
</div>

";
        
        $__internal_f8105b8b3489d0794cd7226b15451a87aa5b0fe09525fac7e2e694b40b95f6ae->leave($__internal_f8105b8b3489d0794cd7226b15451a87aa5b0fe09525fac7e2e694b40b95f6ae_prof);

        
        $__internal_d582939837628875c82598ffc18cd7fac94cbf025d2344d27f79f7466215a064->leave($__internal_d582939837628875c82598ffc18cd7fac94cbf025d2344d27f79f7466215a064_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  53 => 8,  49 => 6,  40 => 5,  11 => 3,);
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

{% extends 'base.html.twig' %}

{% block body %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    <a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\">Edit</a>
</div>

{% endblock %}", "@FOSUser/Profile/show_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
