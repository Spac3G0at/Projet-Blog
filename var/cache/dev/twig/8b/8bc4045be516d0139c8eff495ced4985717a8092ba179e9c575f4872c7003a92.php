<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ea01c2acf86da6a714844303ca8dc11c3eca09eba9c12e114666dcf3bea69055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_018729492f6571c88661e4c8cd8f568ba58adedc58f7f02f77d5b18d01325310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018729492f6571c88661e4c8cd8f568ba58adedc58f7f02f77d5b18d01325310->enter($__internal_018729492f6571c88661e4c8cd8f568ba58adedc58f7f02f77d5b18d01325310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_cd8485f59273c567dfbdbd46874666d2391bb7e2103b9095b6a2f05e59811e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8485f59273c567dfbdbd46874666d2391bb7e2103b9095b6a2f05e59811e38->enter($__internal_cd8485f59273c567dfbdbd46874666d2391bb7e2103b9095b6a2f05e59811e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018729492f6571c88661e4c8cd8f568ba58adedc58f7f02f77d5b18d01325310->leave($__internal_018729492f6571c88661e4c8cd8f568ba58adedc58f7f02f77d5b18d01325310_prof);

        
        $__internal_cd8485f59273c567dfbdbd46874666d2391bb7e2103b9095b6a2f05e59811e38->leave($__internal_cd8485f59273c567dfbdbd46874666d2391bb7e2103b9095b6a2f05e59811e38_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86875142d6a98e14b2c10f9bfcc0d5d769f77d5e468e4098488e60930ce3a155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86875142d6a98e14b2c10f9bfcc0d5d769f77d5e468e4098488e60930ce3a155->enter($__internal_86875142d6a98e14b2c10f9bfcc0d5d769f77d5e468e4098488e60930ce3a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_481836ad8455ad7595d44005da1cb4d1738a7f2160423505954b678f293f974c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481836ad8455ad7595d44005da1cb4d1738a7f2160423505954b678f293f974c->enter($__internal_481836ad8455ad7595d44005da1cb4d1738a7f2160423505954b678f293f974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_481836ad8455ad7595d44005da1cb4d1738a7f2160423505954b678f293f974c->leave($__internal_481836ad8455ad7595d44005da1cb4d1738a7f2160423505954b678f293f974c_prof);

        
        $__internal_86875142d6a98e14b2c10f9bfcc0d5d769f77d5e468e4098488e60930ce3a155->leave($__internal_86875142d6a98e14b2c10f9bfcc0d5d769f77d5e468e4098488e60930ce3a155_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
