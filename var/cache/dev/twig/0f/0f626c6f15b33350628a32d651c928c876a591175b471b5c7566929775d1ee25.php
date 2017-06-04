<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_933b4d1f5e988d6592596d5179df778549945594f5ffb12300ecfa9f5e938821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_e7e1485d2ee6130b8e143c814e36beff5f23e4cc74d66677283b6b0f44f2d601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e1485d2ee6130b8e143c814e36beff5f23e4cc74d66677283b6b0f44f2d601->enter($__internal_e7e1485d2ee6130b8e143c814e36beff5f23e4cc74d66677283b6b0f44f2d601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8a414a2c6ab04fcf71b787c48086165ae5da7ea7196119c117e7cff57b5cc369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a414a2c6ab04fcf71b787c48086165ae5da7ea7196119c117e7cff57b5cc369->enter($__internal_8a414a2c6ab04fcf71b787c48086165ae5da7ea7196119c117e7cff57b5cc369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e1485d2ee6130b8e143c814e36beff5f23e4cc74d66677283b6b0f44f2d601->leave($__internal_e7e1485d2ee6130b8e143c814e36beff5f23e4cc74d66677283b6b0f44f2d601_prof);

        
        $__internal_8a414a2c6ab04fcf71b787c48086165ae5da7ea7196119c117e7cff57b5cc369->leave($__internal_8a414a2c6ab04fcf71b787c48086165ae5da7ea7196119c117e7cff57b5cc369_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1b1625f0cbe19810901498fc7438976b26fb61fda909a91da4fcebe2c44df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b1625f0cbe19810901498fc7438976b26fb61fda909a91da4fcebe2c44df7f->enter($__internal_a1b1625f0cbe19810901498fc7438976b26fb61fda909a91da4fcebe2c44df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cacb6ced8b9c99deb9b44aec8721a77b4cd992c7718cf9b285ff8e7ea1e581b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacb6ced8b9c99deb9b44aec8721a77b4cd992c7718cf9b285ff8e7ea1e581b5->enter($__internal_cacb6ced8b9c99deb9b44aec8721a77b4cd992c7718cf9b285ff8e7ea1e581b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cacb6ced8b9c99deb9b44aec8721a77b4cd992c7718cf9b285ff8e7ea1e581b5->leave($__internal_cacb6ced8b9c99deb9b44aec8721a77b4cd992c7718cf9b285ff8e7ea1e581b5_prof);

        
        $__internal_a1b1625f0cbe19810901498fc7438976b26fb61fda909a91da4fcebe2c44df7f->leave($__internal_a1b1625f0cbe19810901498fc7438976b26fb61fda909a91da4fcebe2c44df7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
