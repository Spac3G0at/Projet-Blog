<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1e22f1756bf1780a41d06260cb71ec3b0b77d3c3b2cee49a379178f1a5af113e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d5f6c7f346b3a826c84e34de87cc36c5c42d308401a864e5bd9bd9b7d0eae103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f6c7f346b3a826c84e34de87cc36c5c42d308401a864e5bd9bd9b7d0eae103->enter($__internal_d5f6c7f346b3a826c84e34de87cc36c5c42d308401a864e5bd9bd9b7d0eae103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2e6aebde08d99477a1e40fdaf07fb3b27f8dbb5b43c01287801d24558aff5972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6aebde08d99477a1e40fdaf07fb3b27f8dbb5b43c01287801d24558aff5972->enter($__internal_2e6aebde08d99477a1e40fdaf07fb3b27f8dbb5b43c01287801d24558aff5972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f6c7f346b3a826c84e34de87cc36c5c42d308401a864e5bd9bd9b7d0eae103->leave($__internal_d5f6c7f346b3a826c84e34de87cc36c5c42d308401a864e5bd9bd9b7d0eae103_prof);

        
        $__internal_2e6aebde08d99477a1e40fdaf07fb3b27f8dbb5b43c01287801d24558aff5972->leave($__internal_2e6aebde08d99477a1e40fdaf07fb3b27f8dbb5b43c01287801d24558aff5972_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec1fb98714758a52c95cd5c360930152f435490863f95760564a57ea66bba738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1fb98714758a52c95cd5c360930152f435490863f95760564a57ea66bba738->enter($__internal_ec1fb98714758a52c95cd5c360930152f435490863f95760564a57ea66bba738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79f2980156bf9053dcddd4da658f6f8dc22340b682e3125aa106a7f781184f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f2980156bf9053dcddd4da658f6f8dc22340b682e3125aa106a7f781184f93->enter($__internal_79f2980156bf9053dcddd4da658f6f8dc22340b682e3125aa106a7f781184f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_79f2980156bf9053dcddd4da658f6f8dc22340b682e3125aa106a7f781184f93->leave($__internal_79f2980156bf9053dcddd4da658f6f8dc22340b682e3125aa106a7f781184f93_prof);

        
        $__internal_ec1fb98714758a52c95cd5c360930152f435490863f95760564a57ea66bba738->leave($__internal_ec1fb98714758a52c95cd5c360930152f435490863f95760564a57ea66bba738_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
