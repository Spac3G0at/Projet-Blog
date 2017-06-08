<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_911571dbb48ba8a9ffe167fff4193cdf7f2229b11f4bdfb1adc7a5b42c479e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2de59f435f066c79a1676043e2cd7d2a6d10c089d95f6f83bf56cb733c133475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de59f435f066c79a1676043e2cd7d2a6d10c089d95f6f83bf56cb733c133475->enter($__internal_2de59f435f066c79a1676043e2cd7d2a6d10c089d95f6f83bf56cb733c133475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_43b74b0edb08ba3d4bf85786ea392c6b1e85f379a08a71d5675fa5d2e9040d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b74b0edb08ba3d4bf85786ea392c6b1e85f379a08a71d5675fa5d2e9040d45->enter($__internal_43b74b0edb08ba3d4bf85786ea392c6b1e85f379a08a71d5675fa5d2e9040d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de59f435f066c79a1676043e2cd7d2a6d10c089d95f6f83bf56cb733c133475->leave($__internal_2de59f435f066c79a1676043e2cd7d2a6d10c089d95f6f83bf56cb733c133475_prof);

        
        $__internal_43b74b0edb08ba3d4bf85786ea392c6b1e85f379a08a71d5675fa5d2e9040d45->leave($__internal_43b74b0edb08ba3d4bf85786ea392c6b1e85f379a08a71d5675fa5d2e9040d45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9624f6a175c74db3e657f9819573ec907a19b70b0358b07c73355cb6f634ce3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9624f6a175c74db3e657f9819573ec907a19b70b0358b07c73355cb6f634ce3c->enter($__internal_9624f6a175c74db3e657f9819573ec907a19b70b0358b07c73355cb6f634ce3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71f439755bd24122adf54b57fc5759aa1369ded1c25917668b8e9cf2e57fa9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f439755bd24122adf54b57fc5759aa1369ded1c25917668b8e9cf2e57fa9c4->enter($__internal_71f439755bd24122adf54b57fc5759aa1369ded1c25917668b8e9cf2e57fa9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_71f439755bd24122adf54b57fc5759aa1369ded1c25917668b8e9cf2e57fa9c4->leave($__internal_71f439755bd24122adf54b57fc5759aa1369ded1c25917668b8e9cf2e57fa9c4_prof);

        
        $__internal_9624f6a175c74db3e657f9819573ec907a19b70b0358b07c73355cb6f634ce3c->leave($__internal_9624f6a175c74db3e657f9819573ec907a19b70b0358b07c73355cb6f634ce3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
