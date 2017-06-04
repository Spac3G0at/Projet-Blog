<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_78ea7682410c82f11a53f68624d7f5de4da22e689be40b284b614b366ab6d00a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_d2e03883652a52d2fa596cf17c03e48adc06204c768e846d1fb0a03a49fd7079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e03883652a52d2fa596cf17c03e48adc06204c768e846d1fb0a03a49fd7079->enter($__internal_d2e03883652a52d2fa596cf17c03e48adc06204c768e846d1fb0a03a49fd7079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_d52b5efcbc5cdf29c2367661ed2fd5d39ed953cf71e323162dafa75f039674bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52b5efcbc5cdf29c2367661ed2fd5d39ed953cf71e323162dafa75f039674bb->enter($__internal_d52b5efcbc5cdf29c2367661ed2fd5d39ed953cf71e323162dafa75f039674bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e03883652a52d2fa596cf17c03e48adc06204c768e846d1fb0a03a49fd7079->leave($__internal_d2e03883652a52d2fa596cf17c03e48adc06204c768e846d1fb0a03a49fd7079_prof);

        
        $__internal_d52b5efcbc5cdf29c2367661ed2fd5d39ed953cf71e323162dafa75f039674bb->leave($__internal_d52b5efcbc5cdf29c2367661ed2fd5d39ed953cf71e323162dafa75f039674bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_371c94a8bee67e22dfa9036466bd6878b3a21de6addb5c3acc993ace0899de40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371c94a8bee67e22dfa9036466bd6878b3a21de6addb5c3acc993ace0899de40->enter($__internal_371c94a8bee67e22dfa9036466bd6878b3a21de6addb5c3acc993ace0899de40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_663e8cc7e5da4321b12f556039480777715c557f2fb0f0b7809cfc9f164cb888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663e8cc7e5da4321b12f556039480777715c557f2fb0f0b7809cfc9f164cb888->enter($__internal_663e8cc7e5da4321b12f556039480777715c557f2fb0f0b7809cfc9f164cb888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_663e8cc7e5da4321b12f556039480777715c557f2fb0f0b7809cfc9f164cb888->leave($__internal_663e8cc7e5da4321b12f556039480777715c557f2fb0f0b7809cfc9f164cb888_prof);

        
        $__internal_371c94a8bee67e22dfa9036466bd6878b3a21de6addb5c3acc993ace0899de40->leave($__internal_371c94a8bee67e22dfa9036466bd6878b3a21de6addb5c3acc993ace0899de40_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
