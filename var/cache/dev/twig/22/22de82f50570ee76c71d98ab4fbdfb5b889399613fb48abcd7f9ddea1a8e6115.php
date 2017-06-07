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
        $__internal_b643a6637260a58cde595ddcb4aa9fe53a338199713da82b2f807209f2e348d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b643a6637260a58cde595ddcb4aa9fe53a338199713da82b2f807209f2e348d0->enter($__internal_b643a6637260a58cde595ddcb4aa9fe53a338199713da82b2f807209f2e348d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_1664f76c8a359d75f05b78507ecdd84d78d06e276671fd0b26de3543fa6b0c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1664f76c8a359d75f05b78507ecdd84d78d06e276671fd0b26de3543fa6b0c36->enter($__internal_1664f76c8a359d75f05b78507ecdd84d78d06e276671fd0b26de3543fa6b0c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b643a6637260a58cde595ddcb4aa9fe53a338199713da82b2f807209f2e348d0->leave($__internal_b643a6637260a58cde595ddcb4aa9fe53a338199713da82b2f807209f2e348d0_prof);

        
        $__internal_1664f76c8a359d75f05b78507ecdd84d78d06e276671fd0b26de3543fa6b0c36->leave($__internal_1664f76c8a359d75f05b78507ecdd84d78d06e276671fd0b26de3543fa6b0c36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1572a728d0e26c2639e5285153621958998a135f945a52e0a721ef89603f1fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1572a728d0e26c2639e5285153621958998a135f945a52e0a721ef89603f1fe3->enter($__internal_1572a728d0e26c2639e5285153621958998a135f945a52e0a721ef89603f1fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e811fe8db125b99921723cb62ce3cd1296711b96c85c64718bf83d37ce902a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e811fe8db125b99921723cb62ce3cd1296711b96c85c64718bf83d37ce902a6b->enter($__internal_e811fe8db125b99921723cb62ce3cd1296711b96c85c64718bf83d37ce902a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e811fe8db125b99921723cb62ce3cd1296711b96c85c64718bf83d37ce902a6b->leave($__internal_e811fe8db125b99921723cb62ce3cd1296711b96c85c64718bf83d37ce902a6b_prof);

        
        $__internal_1572a728d0e26c2639e5285153621958998a135f945a52e0a721ef89603f1fe3->leave($__internal_1572a728d0e26c2639e5285153621958998a135f945a52e0a721ef89603f1fe3_prof);

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
