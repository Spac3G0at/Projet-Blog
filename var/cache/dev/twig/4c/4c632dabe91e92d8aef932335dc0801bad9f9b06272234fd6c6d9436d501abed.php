<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_946a6bf20e65f0591c64f0f52e332b76a90aef78ff5f67c227a1fd1648263f14 extends Twig_Template
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
        $__internal_99b22e90114e36655b7af5c907fab77dd6c7dde91dae03348f11519e59653bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b22e90114e36655b7af5c907fab77dd6c7dde91dae03348f11519e59653bf9->enter($__internal_99b22e90114e36655b7af5c907fab77dd6c7dde91dae03348f11519e59653bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_534372a4693e3d0f4d6ea13339442a17810e02ccaee21437e4db4050160f1045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534372a4693e3d0f4d6ea13339442a17810e02ccaee21437e4db4050160f1045->enter($__internal_534372a4693e3d0f4d6ea13339442a17810e02ccaee21437e4db4050160f1045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b22e90114e36655b7af5c907fab77dd6c7dde91dae03348f11519e59653bf9->leave($__internal_99b22e90114e36655b7af5c907fab77dd6c7dde91dae03348f11519e59653bf9_prof);

        
        $__internal_534372a4693e3d0f4d6ea13339442a17810e02ccaee21437e4db4050160f1045->leave($__internal_534372a4693e3d0f4d6ea13339442a17810e02ccaee21437e4db4050160f1045_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53e648c8c905dfa8ad19b2c74d5622148fbaf5da0d67f90413f504e18c65ff1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e648c8c905dfa8ad19b2c74d5622148fbaf5da0d67f90413f504e18c65ff1e->enter($__internal_53e648c8c905dfa8ad19b2c74d5622148fbaf5da0d67f90413f504e18c65ff1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_823f0b139c9994cbaa56be2eab637f6bf912e524ff744fd8e2a0ac89243ca12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823f0b139c9994cbaa56be2eab637f6bf912e524ff744fd8e2a0ac89243ca12f->enter($__internal_823f0b139c9994cbaa56be2eab637f6bf912e524ff744fd8e2a0ac89243ca12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_823f0b139c9994cbaa56be2eab637f6bf912e524ff744fd8e2a0ac89243ca12f->leave($__internal_823f0b139c9994cbaa56be2eab637f6bf912e524ff744fd8e2a0ac89243ca12f_prof);

        
        $__internal_53e648c8c905dfa8ad19b2c74d5622148fbaf5da0d67f90413f504e18c65ff1e->leave($__internal_53e648c8c905dfa8ad19b2c74d5622148fbaf5da0d67f90413f504e18c65ff1e_prof);

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
