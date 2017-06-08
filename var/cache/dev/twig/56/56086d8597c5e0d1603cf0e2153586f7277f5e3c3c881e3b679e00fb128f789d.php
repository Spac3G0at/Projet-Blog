<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e1142ced0fc5b854f71f213c120194fb6309b1663b6de7401fecc4b66bb276e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_8bcb13544fac7af4bc15eefc307dae245b1fa5081d09288e6cea77bdb8052410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcb13544fac7af4bc15eefc307dae245b1fa5081d09288e6cea77bdb8052410->enter($__internal_8bcb13544fac7af4bc15eefc307dae245b1fa5081d09288e6cea77bdb8052410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_135e8c573006311f525fb39fa488b07a30678fb51282e36f2efeb35dfa508d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135e8c573006311f525fb39fa488b07a30678fb51282e36f2efeb35dfa508d0a->enter($__internal_135e8c573006311f525fb39fa488b07a30678fb51282e36f2efeb35dfa508d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bcb13544fac7af4bc15eefc307dae245b1fa5081d09288e6cea77bdb8052410->leave($__internal_8bcb13544fac7af4bc15eefc307dae245b1fa5081d09288e6cea77bdb8052410_prof);

        
        $__internal_135e8c573006311f525fb39fa488b07a30678fb51282e36f2efeb35dfa508d0a->leave($__internal_135e8c573006311f525fb39fa488b07a30678fb51282e36f2efeb35dfa508d0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6422d41aeeb2ff3669617cc7ba5efe092e73819e13c0e00b87b97aad7d95f2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6422d41aeeb2ff3669617cc7ba5efe092e73819e13c0e00b87b97aad7d95f2ce->enter($__internal_6422d41aeeb2ff3669617cc7ba5efe092e73819e13c0e00b87b97aad7d95f2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f57d8226d4ffe8f8626f7925099888dc86f5b3357e918ecc30cd1207a4ea1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f57d8226d4ffe8f8626f7925099888dc86f5b3357e918ecc30cd1207a4ea1ab->enter($__internal_7f57d8226d4ffe8f8626f7925099888dc86f5b3357e918ecc30cd1207a4ea1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7f57d8226d4ffe8f8626f7925099888dc86f5b3357e918ecc30cd1207a4ea1ab->leave($__internal_7f57d8226d4ffe8f8626f7925099888dc86f5b3357e918ecc30cd1207a4ea1ab_prof);

        
        $__internal_6422d41aeeb2ff3669617cc7ba5efe092e73819e13c0e00b87b97aad7d95f2ce->leave($__internal_6422d41aeeb2ff3669617cc7ba5efe092e73819e13c0e00b87b97aad7d95f2ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
