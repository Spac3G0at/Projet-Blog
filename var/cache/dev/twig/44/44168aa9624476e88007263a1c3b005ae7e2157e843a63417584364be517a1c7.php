<?php

/* FOSUserBundle:Registration/Modal:confirmed.html.twig */
class __TwigTemplate_8bab47eeed8a6f61d0d42938812c8d9c7b0ed860e9cf87ac83f7aa2525fa8ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration/Modal:confirmed.html.twig", 1);
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
        $__internal_1b8677311bdf446c092761e22f49a73f141db7c31ca34ac85b866a55c3b43888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8677311bdf446c092761e22f49a73f141db7c31ca34ac85b866a55c3b43888->enter($__internal_1b8677311bdf446c092761e22f49a73f141db7c31ca34ac85b866a55c3b43888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $__internal_653e82e08e8f49eed9de02c02d3d19d56b4a4c7b8e11d60b8753f78255bb5748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653e82e08e8f49eed9de02c02d3d19d56b4a4c7b8e11d60b8753f78255bb5748->enter($__internal_653e82e08e8f49eed9de02c02d3d19d56b4a4c7b8e11d60b8753f78255bb5748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8677311bdf446c092761e22f49a73f141db7c31ca34ac85b866a55c3b43888->leave($__internal_1b8677311bdf446c092761e22f49a73f141db7c31ca34ac85b866a55c3b43888_prof);

        
        $__internal_653e82e08e8f49eed9de02c02d3d19d56b4a4c7b8e11d60b8753f78255bb5748->leave($__internal_653e82e08e8f49eed9de02c02d3d19d56b4a4c7b8e11d60b8753f78255bb5748_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b638a2e816b8e3e854b75ec3e82ac804d1a8a1b1ac82ba7401b790c433b0a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b638a2e816b8e3e854b75ec3e82ac804d1a8a1b1ac82ba7401b790c433b0a28->enter($__internal_2b638a2e816b8e3e854b75ec3e82ac804d1a8a1b1ac82ba7401b790c433b0a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_011dbeb9d4dd050ee5ae612babcbf2b898f09d899c3c53c82d6bc6b746c303d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011dbeb9d4dd050ee5ae612babcbf2b898f09d899c3c53c82d6bc6b746c303d5->enter($__internal_011dbeb9d4dd050ee5ae612babcbf2b898f09d899c3c53c82d6bc6b746c303d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_011dbeb9d4dd050ee5ae612babcbf2b898f09d899c3c53c82d6bc6b746c303d5->leave($__internal_011dbeb9d4dd050ee5ae612babcbf2b898f09d899c3c53c82d6bc6b746c303d5_prof);

        
        $__internal_2b638a2e816b8e3e854b75ec3e82ac804d1a8a1b1ac82ba7401b790c433b0a28->leave($__internal_2b638a2e816b8e3e854b75ec3e82ac804d1a8a1b1ac82ba7401b790c433b0a28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration/Modal:confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/confirmed.html.twig");
    }
}
