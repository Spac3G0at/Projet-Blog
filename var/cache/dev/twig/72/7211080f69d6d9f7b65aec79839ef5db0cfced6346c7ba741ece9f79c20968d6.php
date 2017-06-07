<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1bbe03c8b93e638aa4c8295f9cd73781434698185b649da0a803f3579d7498e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b2b99bddecb585cbc0d5c5246e8252fb8a95a401c5f9c661825e7b857daed29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b99bddecb585cbc0d5c5246e8252fb8a95a401c5f9c661825e7b857daed29c->enter($__internal_b2b99bddecb585cbc0d5c5246e8252fb8a95a401c5f9c661825e7b857daed29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_893670360f385f9859886b186c4549b8856b32d19eec18112aff577f6b542d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893670360f385f9859886b186c4549b8856b32d19eec18112aff577f6b542d84->enter($__internal_893670360f385f9859886b186c4549b8856b32d19eec18112aff577f6b542d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b99bddecb585cbc0d5c5246e8252fb8a95a401c5f9c661825e7b857daed29c->leave($__internal_b2b99bddecb585cbc0d5c5246e8252fb8a95a401c5f9c661825e7b857daed29c_prof);

        
        $__internal_893670360f385f9859886b186c4549b8856b32d19eec18112aff577f6b542d84->leave($__internal_893670360f385f9859886b186c4549b8856b32d19eec18112aff577f6b542d84_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_546d5621b75e151e311006f888e2dc9bea01c4b7d83315f25f87666c4b3ae270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546d5621b75e151e311006f888e2dc9bea01c4b7d83315f25f87666c4b3ae270->enter($__internal_546d5621b75e151e311006f888e2dc9bea01c4b7d83315f25f87666c4b3ae270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82dcd8fc6b372445abdffa95f66aa9556f13840a93be97516bdd039991c1a43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dcd8fc6b372445abdffa95f66aa9556f13840a93be97516bdd039991c1a43a->enter($__internal_82dcd8fc6b372445abdffa95f66aa9556f13840a93be97516bdd039991c1a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_82dcd8fc6b372445abdffa95f66aa9556f13840a93be97516bdd039991c1a43a->leave($__internal_82dcd8fc6b372445abdffa95f66aa9556f13840a93be97516bdd039991c1a43a_prof);

        
        $__internal_546d5621b75e151e311006f888e2dc9bea01c4b7d83315f25f87666c4b3ae270->leave($__internal_546d5621b75e151e311006f888e2dc9bea01c4b7d83315f25f87666c4b3ae270_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
