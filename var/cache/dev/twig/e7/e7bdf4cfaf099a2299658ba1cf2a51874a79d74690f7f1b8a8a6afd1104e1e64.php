<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f3319a2cf0432e82f6ab36f45324019befa44bc3c9afc9d3cfbafcb491e63c3c extends Twig_Template
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
        $__internal_fcffafacd214b74fbc8a59ff03730877619ae0a93e06f7b6329f33993c2cec35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcffafacd214b74fbc8a59ff03730877619ae0a93e06f7b6329f33993c2cec35->enter($__internal_fcffafacd214b74fbc8a59ff03730877619ae0a93e06f7b6329f33993c2cec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8d119f4ae141619b0d6e1f9ece0ae61b809d160643db5ce891c1bb08e476e7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d119f4ae141619b0d6e1f9ece0ae61b809d160643db5ce891c1bb08e476e7e9->enter($__internal_8d119f4ae141619b0d6e1f9ece0ae61b809d160643db5ce891c1bb08e476e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcffafacd214b74fbc8a59ff03730877619ae0a93e06f7b6329f33993c2cec35->leave($__internal_fcffafacd214b74fbc8a59ff03730877619ae0a93e06f7b6329f33993c2cec35_prof);

        
        $__internal_8d119f4ae141619b0d6e1f9ece0ae61b809d160643db5ce891c1bb08e476e7e9->leave($__internal_8d119f4ae141619b0d6e1f9ece0ae61b809d160643db5ce891c1bb08e476e7e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca9cfdc797466cb46b802576b58c2809ed5d490d2c5c53803e95b39e01d32eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9cfdc797466cb46b802576b58c2809ed5d490d2c5c53803e95b39e01d32eb2->enter($__internal_ca9cfdc797466cb46b802576b58c2809ed5d490d2c5c53803e95b39e01d32eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a779a186a83a85a41e64e1601aef05da0750910a8887b834c09278f74abbc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a779a186a83a85a41e64e1601aef05da0750910a8887b834c09278f74abbc8a->enter($__internal_6a779a186a83a85a41e64e1601aef05da0750910a8887b834c09278f74abbc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6a779a186a83a85a41e64e1601aef05da0750910a8887b834c09278f74abbc8a->leave($__internal_6a779a186a83a85a41e64e1601aef05da0750910a8887b834c09278f74abbc8a_prof);

        
        $__internal_ca9cfdc797466cb46b802576b58c2809ed5d490d2c5c53803e95b39e01d32eb2->leave($__internal_ca9cfdc797466cb46b802576b58c2809ed5d490d2c5c53803e95b39e01d32eb2_prof);

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
