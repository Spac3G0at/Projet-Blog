<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_10c16839550c6cd579057444961476ccfd0eb7d100571bb3626f5426a605f0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_adfed10cb1131b8f8ec613aaf0b912a33437d4d894835a33133a98e6c148c981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfed10cb1131b8f8ec613aaf0b912a33437d4d894835a33133a98e6c148c981->enter($__internal_adfed10cb1131b8f8ec613aaf0b912a33437d4d894835a33133a98e6c148c981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_da96fdd7b0399d2e53b78428d1cc485a1209eb9af6c55b03aa7b0d993d4e4b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da96fdd7b0399d2e53b78428d1cc485a1209eb9af6c55b03aa7b0d993d4e4b07->enter($__internal_da96fdd7b0399d2e53b78428d1cc485a1209eb9af6c55b03aa7b0d993d4e4b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfed10cb1131b8f8ec613aaf0b912a33437d4d894835a33133a98e6c148c981->leave($__internal_adfed10cb1131b8f8ec613aaf0b912a33437d4d894835a33133a98e6c148c981_prof);

        
        $__internal_da96fdd7b0399d2e53b78428d1cc485a1209eb9af6c55b03aa7b0d993d4e4b07->leave($__internal_da96fdd7b0399d2e53b78428d1cc485a1209eb9af6c55b03aa7b0d993d4e4b07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aad750f1c4a41a7a1e51d4851ecfdf7cd5a4fefa1bf2fd2d79b7e8b43452ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aad750f1c4a41a7a1e51d4851ecfdf7cd5a4fefa1bf2fd2d79b7e8b43452ffb->enter($__internal_1aad750f1c4a41a7a1e51d4851ecfdf7cd5a4fefa1bf2fd2d79b7e8b43452ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02eeff2a68cc61b922898d71aa039a6fd3f9d810b02802f8499cf1a1f65589cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02eeff2a68cc61b922898d71aa039a6fd3f9d810b02802f8499cf1a1f65589cc->enter($__internal_02eeff2a68cc61b922898d71aa039a6fd3f9d810b02802f8499cf1a1f65589cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_02eeff2a68cc61b922898d71aa039a6fd3f9d810b02802f8499cf1a1f65589cc->leave($__internal_02eeff2a68cc61b922898d71aa039a6fd3f9d810b02802f8499cf1a1f65589cc_prof);

        
        $__internal_1aad750f1c4a41a7a1e51d4851ecfdf7cd5a4fefa1bf2fd2d79b7e8b43452ffb->leave($__internal_1aad750f1c4a41a7a1e51d4851ecfdf7cd5a4fefa1bf2fd2d79b7e8b43452ffb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
