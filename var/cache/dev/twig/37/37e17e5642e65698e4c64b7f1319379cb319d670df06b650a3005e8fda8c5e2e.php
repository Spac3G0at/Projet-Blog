<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_e5a214546351368808c8d50011b8294e9a129df0dcca2298dc3f745a99406fed extends Twig_Template
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
        $__internal_c9ae82ccb8cfef680479dc8232b6b74a9338ba2c385b0596f4ece8b8c0371f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ae82ccb8cfef680479dc8232b6b74a9338ba2c385b0596f4ece8b8c0371f57->enter($__internal_c9ae82ccb8cfef680479dc8232b6b74a9338ba2c385b0596f4ece8b8c0371f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_f243715bb261c29f3eaddcac8a728fc2a9d6d69894cf770ca4857c20d50c0533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f243715bb261c29f3eaddcac8a728fc2a9d6d69894cf770ca4857c20d50c0533->enter($__internal_f243715bb261c29f3eaddcac8a728fc2a9d6d69894cf770ca4857c20d50c0533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ae82ccb8cfef680479dc8232b6b74a9338ba2c385b0596f4ece8b8c0371f57->leave($__internal_c9ae82ccb8cfef680479dc8232b6b74a9338ba2c385b0596f4ece8b8c0371f57_prof);

        
        $__internal_f243715bb261c29f3eaddcac8a728fc2a9d6d69894cf770ca4857c20d50c0533->leave($__internal_f243715bb261c29f3eaddcac8a728fc2a9d6d69894cf770ca4857c20d50c0533_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_704a0981f2eb398d473d1528c458c330421233d0f6bfaedc60548d3d87a457e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704a0981f2eb398d473d1528c458c330421233d0f6bfaedc60548d3d87a457e2->enter($__internal_704a0981f2eb398d473d1528c458c330421233d0f6bfaedc60548d3d87a457e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eb58b56dd445517a436f7c43e55280f056f7b6f20e7407075977db70bec2699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb58b56dd445517a436f7c43e55280f056f7b6f20e7407075977db70bec2699->enter($__internal_7eb58b56dd445517a436f7c43e55280f056f7b6f20e7407075977db70bec2699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t\t<div class=\"fos_user_user_show\">
\t\t\t<img class=\"img-responsive\" style=\"width: 200px;\" src=\"";
        // line 8
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "avatar", array()) == "default.png")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default.png"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/avatars/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "avatar", array()), "html", null, true);
        }
        echo "\">

\t\t\t<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit</a>
\t\t</div>

\t";
        
        $__internal_7eb58b56dd445517a436f7c43e55280f056f7b6f20e7407075977db70bec2699->leave($__internal_7eb58b56dd445517a436f7c43e55280f056f7b6f20e7407075977db70bec2699_prof);

        
        $__internal_704a0981f2eb398d473d1528c458c330421233d0f6bfaedc60548d3d87a457e2->leave($__internal_704a0981f2eb398d473d1528c458c330421233d0f6bfaedc60548d3d87a457e2_prof);

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
        return array (  75 => 12,  69 => 11,  63 => 10,  53 => 8,  49 => 6,  40 => 5,  11 => 3,);
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

\t{% extends 'base.html.twig' %}

\t{% block body %}

\t\t<div class=\"fos_user_user_show\">
\t\t\t<img class=\"img-responsive\" style=\"width: 200px;\" src=\"{% if user.avatar == \"default.png\" %}{{ asset(\"img/default.png\") }}{% else %}{{ asset(\"uploads/avatars/\") }}{{ user.avatar }}{% endif %}\">

\t\t\t<p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
\t\t\t<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\">Edit</a>
\t\t</div>

\t{% endblock %}", "@FOSUser/Profile/show_content.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
