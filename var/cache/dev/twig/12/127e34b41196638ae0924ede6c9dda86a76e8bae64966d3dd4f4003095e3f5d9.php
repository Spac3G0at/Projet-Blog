<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e6744eeaf163b2b4c8f18e680f8ce33a000cd79e5350c960cf34f057c98e8aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f89b974d4683eb42ad2f9c5980fc89f650883c0fadf29602dcba57c1dcaaec66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89b974d4683eb42ad2f9c5980fc89f650883c0fadf29602dcba57c1dcaaec66->enter($__internal_f89b974d4683eb42ad2f9c5980fc89f650883c0fadf29602dcba57c1dcaaec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c73f565daca22bbf638fa1e0adcd310722eedc98ab7c24b2e1d656881ee4ed80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73f565daca22bbf638fa1e0adcd310722eedc98ab7c24b2e1d656881ee4ed80->enter($__internal_c73f565daca22bbf638fa1e0adcd310722eedc98ab7c24b2e1d656881ee4ed80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89b974d4683eb42ad2f9c5980fc89f650883c0fadf29602dcba57c1dcaaec66->leave($__internal_f89b974d4683eb42ad2f9c5980fc89f650883c0fadf29602dcba57c1dcaaec66_prof);

        
        $__internal_c73f565daca22bbf638fa1e0adcd310722eedc98ab7c24b2e1d656881ee4ed80->leave($__internal_c73f565daca22bbf638fa1e0adcd310722eedc98ab7c24b2e1d656881ee4ed80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52e5df9e990a12966aa91bd4d49efaa8e0fbd417281ed122f38ec0d459590332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e5df9e990a12966aa91bd4d49efaa8e0fbd417281ed122f38ec0d459590332->enter($__internal_52e5df9e990a12966aa91bd4d49efaa8e0fbd417281ed122f38ec0d459590332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bdb8d088e2e6b39da5ee80b7291c05d7606d1d2e3469a842e33e06c0f441d27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb8d088e2e6b39da5ee80b7291c05d7606d1d2e3469a842e33e06c0f441d27b->enter($__internal_bdb8d088e2e6b39da5ee80b7291c05d7606d1d2e3469a842e33e06c0f441d27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bdb8d088e2e6b39da5ee80b7291c05d7606d1d2e3469a842e33e06c0f441d27b->leave($__internal_bdb8d088e2e6b39da5ee80b7291c05d7606d1d2e3469a842e33e06c0f441d27b_prof);

        
        $__internal_52e5df9e990a12966aa91bd4d49efaa8e0fbd417281ed122f38ec0d459590332->leave($__internal_52e5df9e990a12966aa91bd4d49efaa8e0fbd417281ed122f38ec0d459590332_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
