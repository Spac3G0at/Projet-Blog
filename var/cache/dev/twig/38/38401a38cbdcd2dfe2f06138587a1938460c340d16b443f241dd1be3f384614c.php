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
        $__internal_5bbdc8552b84baafb71c740c91d699e9ad1c709dda39e3e5b95a4e7ddf26d993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbdc8552b84baafb71c740c91d699e9ad1c709dda39e3e5b95a4e7ddf26d993->enter($__internal_5bbdc8552b84baafb71c740c91d699e9ad1c709dda39e3e5b95a4e7ddf26d993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_cbb362ac4734d4c80acaca61951ac5437173a8c42786568c19483ebedc0c5432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb362ac4734d4c80acaca61951ac5437173a8c42786568c19483ebedc0c5432->enter($__internal_cbb362ac4734d4c80acaca61951ac5437173a8c42786568c19483ebedc0c5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbdc8552b84baafb71c740c91d699e9ad1c709dda39e3e5b95a4e7ddf26d993->leave($__internal_5bbdc8552b84baafb71c740c91d699e9ad1c709dda39e3e5b95a4e7ddf26d993_prof);

        
        $__internal_cbb362ac4734d4c80acaca61951ac5437173a8c42786568c19483ebedc0c5432->leave($__internal_cbb362ac4734d4c80acaca61951ac5437173a8c42786568c19483ebedc0c5432_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_708d50b2ac6c40ff0bd9d35312ce8a76f6ac95be164c570edb060fb8f9eb1cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708d50b2ac6c40ff0bd9d35312ce8a76f6ac95be164c570edb060fb8f9eb1cc6->enter($__internal_708d50b2ac6c40ff0bd9d35312ce8a76f6ac95be164c570edb060fb8f9eb1cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6c98b22361cbc39d8d2b8057554ab50bac4af03fb6ef74451953b446627de2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c98b22361cbc39d8d2b8057554ab50bac4af03fb6ef74451953b446627de2b->enter($__internal_b6c98b22361cbc39d8d2b8057554ab50bac4af03fb6ef74451953b446627de2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6c98b22361cbc39d8d2b8057554ab50bac4af03fb6ef74451953b446627de2b->leave($__internal_b6c98b22361cbc39d8d2b8057554ab50bac4af03fb6ef74451953b446627de2b_prof);

        
        $__internal_708d50b2ac6c40ff0bd9d35312ce8a76f6ac95be164c570edb060fb8f9eb1cc6->leave($__internal_708d50b2ac6c40ff0bd9d35312ce8a76f6ac95be164c570edb060fb8f9eb1cc6_prof);

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
