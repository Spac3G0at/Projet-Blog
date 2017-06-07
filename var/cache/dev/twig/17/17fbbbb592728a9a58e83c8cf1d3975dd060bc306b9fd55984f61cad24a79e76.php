<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_008eae649966787d9111c4efca06a368effbc6c14ffd260232578dcc58e824c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1815ea9f4c019e4e75e29885c3c64f47a51d142e695f4f3ad830bbb4cf47fff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1815ea9f4c019e4e75e29885c3c64f47a51d142e695f4f3ad830bbb4cf47fff1->enter($__internal_1815ea9f4c019e4e75e29885c3c64f47a51d142e695f4f3ad830bbb4cf47fff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_adbba0bb5d63b511fb97c121826c1a6ea06c2b2a513f32fbc6ffb7053b026711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbba0bb5d63b511fb97c121826c1a6ea06c2b2a513f32fbc6ffb7053b026711->enter($__internal_adbba0bb5d63b511fb97c121826c1a6ea06c2b2a513f32fbc6ffb7053b026711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1815ea9f4c019e4e75e29885c3c64f47a51d142e695f4f3ad830bbb4cf47fff1->leave($__internal_1815ea9f4c019e4e75e29885c3c64f47a51d142e695f4f3ad830bbb4cf47fff1_prof);

        
        $__internal_adbba0bb5d63b511fb97c121826c1a6ea06c2b2a513f32fbc6ffb7053b026711->leave($__internal_adbba0bb5d63b511fb97c121826c1a6ea06c2b2a513f32fbc6ffb7053b026711_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_656c825c60e3cf776af0f2adfd251b8c00901ab05d0d8b02711b6aa71d19eb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656c825c60e3cf776af0f2adfd251b8c00901ab05d0d8b02711b6aa71d19eb98->enter($__internal_656c825c60e3cf776af0f2adfd251b8c00901ab05d0d8b02711b6aa71d19eb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_239a06193b563bd89421dd07187bf2e0b6c312dcd39a4f26590cf450a2ef4a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239a06193b563bd89421dd07187bf2e0b6c312dcd39a4f26590cf450a2ef4a34->enter($__internal_239a06193b563bd89421dd07187bf2e0b6c312dcd39a4f26590cf450a2ef4a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_239a06193b563bd89421dd07187bf2e0b6c312dcd39a4f26590cf450a2ef4a34->leave($__internal_239a06193b563bd89421dd07187bf2e0b6c312dcd39a4f26590cf450a2ef4a34_prof);

        
        $__internal_656c825c60e3cf776af0f2adfd251b8c00901ab05d0d8b02711b6aa71d19eb98->leave($__internal_656c825c60e3cf776af0f2adfd251b8c00901ab05d0d8b02711b6aa71d19eb98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
