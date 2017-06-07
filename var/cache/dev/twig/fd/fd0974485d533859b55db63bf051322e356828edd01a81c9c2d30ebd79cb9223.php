<?php

/* FOSUserBundle:Registration/Modal:confirmed.html.twig */
class __TwigTemplate_240028d391a8e01e13feb07e6c878ce04e49424e15f40ca0f6e68a822d3135e4 extends Twig_Template
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
        $__internal_5c887fa433080a50a1f831cd5b069cb5a50152c6c7942c8a25f7879d690fe707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c887fa433080a50a1f831cd5b069cb5a50152c6c7942c8a25f7879d690fe707->enter($__internal_5c887fa433080a50a1f831cd5b069cb5a50152c6c7942c8a25f7879d690fe707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $__internal_b27a34ca8970c10358e711c8613e1c17f66e7dc4af54b551b0770489ca914c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27a34ca8970c10358e711c8613e1c17f66e7dc4af54b551b0770489ca914c68->enter($__internal_b27a34ca8970c10358e711c8613e1c17f66e7dc4af54b551b0770489ca914c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c887fa433080a50a1f831cd5b069cb5a50152c6c7942c8a25f7879d690fe707->leave($__internal_5c887fa433080a50a1f831cd5b069cb5a50152c6c7942c8a25f7879d690fe707_prof);

        
        $__internal_b27a34ca8970c10358e711c8613e1c17f66e7dc4af54b551b0770489ca914c68->leave($__internal_b27a34ca8970c10358e711c8613e1c17f66e7dc4af54b551b0770489ca914c68_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16619f5b816960fb1054df12e854260fe33cc450c011623a0490edeee565ce63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16619f5b816960fb1054df12e854260fe33cc450c011623a0490edeee565ce63->enter($__internal_16619f5b816960fb1054df12e854260fe33cc450c011623a0490edeee565ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bae0956f143fc82b4c43c82c92a05a11f62ce1c4cb539103e4d4dbd97fe402de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae0956f143fc82b4c43c82c92a05a11f62ce1c4cb539103e4d4dbd97fe402de->enter($__internal_bae0956f143fc82b4c43c82c92a05a11f62ce1c4cb539103e4d4dbd97fe402de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bae0956f143fc82b4c43c82c92a05a11f62ce1c4cb539103e4d4dbd97fe402de->leave($__internal_bae0956f143fc82b4c43c82c92a05a11f62ce1c4cb539103e4d4dbd97fe402de_prof);

        
        $__internal_16619f5b816960fb1054df12e854260fe33cc450c011623a0490edeee565ce63->leave($__internal_16619f5b816960fb1054df12e854260fe33cc450c011623a0490edeee565ce63_prof);

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
