<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9d5a422cc01142c8e4f399c4532d4e0236a0813dbdfd3cc346b20e9c98c649fa extends Twig_Template
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
        $__internal_efd275169109f00c7e39014917cb4f1ff9fffd800164e9ffb2b22bf99bdbafa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd275169109f00c7e39014917cb4f1ff9fffd800164e9ffb2b22bf99bdbafa7->enter($__internal_efd275169109f00c7e39014917cb4f1ff9fffd800164e9ffb2b22bf99bdbafa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_bd016ffc1cc3bf9077439665aeb7226a1820b1dfa02a687ff198a65e94bef22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd016ffc1cc3bf9077439665aeb7226a1820b1dfa02a687ff198a65e94bef22a->enter($__internal_bd016ffc1cc3bf9077439665aeb7226a1820b1dfa02a687ff198a65e94bef22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd275169109f00c7e39014917cb4f1ff9fffd800164e9ffb2b22bf99bdbafa7->leave($__internal_efd275169109f00c7e39014917cb4f1ff9fffd800164e9ffb2b22bf99bdbafa7_prof);

        
        $__internal_bd016ffc1cc3bf9077439665aeb7226a1820b1dfa02a687ff198a65e94bef22a->leave($__internal_bd016ffc1cc3bf9077439665aeb7226a1820b1dfa02a687ff198a65e94bef22a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aee002417297c1d587828dd1f30b55ea942fd8c5ab69265a9e780e35198b0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aee002417297c1d587828dd1f30b55ea942fd8c5ab69265a9e780e35198b0ed->enter($__internal_1aee002417297c1d587828dd1f30b55ea942fd8c5ab69265a9e780e35198b0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f49d792331bb5e20dd8bc358d7b956927e0a1dc9ea331f0d79c678c9d3cbd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f49d792331bb5e20dd8bc358d7b956927e0a1dc9ea331f0d79c678c9d3cbd21->enter($__internal_2f49d792331bb5e20dd8bc358d7b956927e0a1dc9ea331f0d79c678c9d3cbd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f49d792331bb5e20dd8bc358d7b956927e0a1dc9ea331f0d79c678c9d3cbd21->leave($__internal_2f49d792331bb5e20dd8bc358d7b956927e0a1dc9ea331f0d79c678c9d3cbd21_prof);

        
        $__internal_1aee002417297c1d587828dd1f30b55ea942fd8c5ab69265a9e780e35198b0ed->leave($__internal_1aee002417297c1d587828dd1f30b55ea942fd8c5ab69265a9e780e35198b0ed_prof);

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
