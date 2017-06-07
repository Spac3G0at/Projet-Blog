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
        $__internal_74dcb14802c1ff730277b66121f611c04b04d69b80dc9e80bfeddc4af7b85296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dcb14802c1ff730277b66121f611c04b04d69b80dc9e80bfeddc4af7b85296->enter($__internal_74dcb14802c1ff730277b66121f611c04b04d69b80dc9e80bfeddc4af7b85296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_7665d53aabe43c6866d3816d3c506c066ca020b8301d7c69e20f95c90939ed87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7665d53aabe43c6866d3816d3c506c066ca020b8301d7c69e20f95c90939ed87->enter($__internal_7665d53aabe43c6866d3816d3c506c066ca020b8301d7c69e20f95c90939ed87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74dcb14802c1ff730277b66121f611c04b04d69b80dc9e80bfeddc4af7b85296->leave($__internal_74dcb14802c1ff730277b66121f611c04b04d69b80dc9e80bfeddc4af7b85296_prof);

        
        $__internal_7665d53aabe43c6866d3816d3c506c066ca020b8301d7c69e20f95c90939ed87->leave($__internal_7665d53aabe43c6866d3816d3c506c066ca020b8301d7c69e20f95c90939ed87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7482dec1728ec26ecb719c2caf464519595f410b3b698a4cc68c47d15db51dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7482dec1728ec26ecb719c2caf464519595f410b3b698a4cc68c47d15db51dc8->enter($__internal_7482dec1728ec26ecb719c2caf464519595f410b3b698a4cc68c47d15db51dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce73d6033cd402b18724f52b87ef225e5ebfbce910f37b27b5356fa1e71d30c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce73d6033cd402b18724f52b87ef225e5ebfbce910f37b27b5356fa1e71d30c8->enter($__internal_ce73d6033cd402b18724f52b87ef225e5ebfbce910f37b27b5356fa1e71d30c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.Firstname", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.Lastname", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
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
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.edit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
\t\t</div>

\t";
        
        $__internal_ce73d6033cd402b18724f52b87ef225e5ebfbce910f37b27b5356fa1e71d30c8->leave($__internal_ce73d6033cd402b18724f52b87ef225e5ebfbce910f37b27b5356fa1e71d30c8_prof);

        
        $__internal_7482dec1728ec26ecb719c2caf464519595f410b3b698a4cc68c47d15db51dc8->leave($__internal_7482dec1728ec26ecb719c2caf464519595f410b3b698a4cc68c47d15db51dc8_prof);

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
        return array (  87 => 14,  81 => 13,  75 => 12,  69 => 11,  63 => 10,  53 => 8,  49 => 6,  40 => 5,  11 => 3,);
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
\t\t\t<p>{{ 'profile.show.Firstname'|trans }} : {{ user.firstName }}</p>
\t\t\t<p>{{ 'profile.show.Lastname'|trans }} : {{ user.lastName }}</p>
\t\t\t<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\">{{ 'profile.show.edit'|trans }}</a>
\t\t</div>

\t{% endblock %}", "@FOSUser/Profile/show_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
