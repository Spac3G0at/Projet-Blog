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
        $__internal_6108933e014d6b344c54d6df446cdff42c8c51d238892c9a1b5592a11ca43456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6108933e014d6b344c54d6df446cdff42c8c51d238892c9a1b5592a11ca43456->enter($__internal_6108933e014d6b344c54d6df446cdff42c8c51d238892c9a1b5592a11ca43456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_11462fe32f5c722b8dfd75982ed91e5d49f1e808062329425217733b5e16d457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11462fe32f5c722b8dfd75982ed91e5d49f1e808062329425217733b5e16d457->enter($__internal_11462fe32f5c722b8dfd75982ed91e5d49f1e808062329425217733b5e16d457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6108933e014d6b344c54d6df446cdff42c8c51d238892c9a1b5592a11ca43456->leave($__internal_6108933e014d6b344c54d6df446cdff42c8c51d238892c9a1b5592a11ca43456_prof);

        
        $__internal_11462fe32f5c722b8dfd75982ed91e5d49f1e808062329425217733b5e16d457->leave($__internal_11462fe32f5c722b8dfd75982ed91e5d49f1e808062329425217733b5e16d457_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c53843e077c2a1449296f465db4f12f6d63762e8c1ea3510f1936b8b6f7df1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c53843e077c2a1449296f465db4f12f6d63762e8c1ea3510f1936b8b6f7df1d->enter($__internal_5c53843e077c2a1449296f465db4f12f6d63762e8c1ea3510f1936b8b6f7df1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2116f389fcbed96267e1c8abc31f460d10d9d021db97d1193cb44ba42315c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2116f389fcbed96267e1c8abc31f460d10d9d021db97d1193cb44ba42315c8e->enter($__internal_e2116f389fcbed96267e1c8abc31f460d10d9d021db97d1193cb44ba42315c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t<p>First name : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
\t\t\t<p>Last name : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit</a>
\t\t</div>

\t";
        
        $__internal_e2116f389fcbed96267e1c8abc31f460d10d9d021db97d1193cb44ba42315c8e->leave($__internal_e2116f389fcbed96267e1c8abc31f460d10d9d021db97d1193cb44ba42315c8e_prof);

        
        $__internal_5c53843e077c2a1449296f465db4f12f6d63762e8c1ea3510f1936b8b6f7df1d->leave($__internal_5c53843e077c2a1449296f465db4f12f6d63762e8c1ea3510f1936b8b6f7df1d_prof);

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
        return array (  83 => 14,  77 => 13,  73 => 12,  69 => 11,  63 => 10,  53 => 8,  49 => 6,  40 => 5,  11 => 3,);
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
\t\t\t<p>First name : {{ user.firstName }}</p>
\t\t\t<p>Last name : {{ user.lastName }}</p>
\t\t\t<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\">Edit</a>
\t\t</div>

\t{% endblock %}", "@FOSUser/Profile/show_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
