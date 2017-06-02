<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8d5acc2dca9d79ab4171740fbecb8d0482f8b83af192b14f15b52d255179c0ad extends Twig_Template
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
        $__internal_f7d5358d0955cb98349afa77d1fbaa8178c207e90f2170a42b4eb6a61a6b6f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d5358d0955cb98349afa77d1fbaa8178c207e90f2170a42b4eb6a61a6b6f2e->enter($__internal_f7d5358d0955cb98349afa77d1fbaa8178c207e90f2170a42b4eb6a61a6b6f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_7d286a7740d440f4dcc73aa6921a2da48f596c259d88639652ba24bbdc361689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d286a7740d440f4dcc73aa6921a2da48f596c259d88639652ba24bbdc361689->enter($__internal_7d286a7740d440f4dcc73aa6921a2da48f596c259d88639652ba24bbdc361689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d5358d0955cb98349afa77d1fbaa8178c207e90f2170a42b4eb6a61a6b6f2e->leave($__internal_f7d5358d0955cb98349afa77d1fbaa8178c207e90f2170a42b4eb6a61a6b6f2e_prof);

        
        $__internal_7d286a7740d440f4dcc73aa6921a2da48f596c259d88639652ba24bbdc361689->leave($__internal_7d286a7740d440f4dcc73aa6921a2da48f596c259d88639652ba24bbdc361689_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86f90c672de6e99cf52b45086f283a9a9c5c100a0dd31fd6aac8553a9845eab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f90c672de6e99cf52b45086f283a9a9c5c100a0dd31fd6aac8553a9845eab7->enter($__internal_86f90c672de6e99cf52b45086f283a9a9c5c100a0dd31fd6aac8553a9845eab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b14b1083b02fbd50922326ae9b4fda0cbf8ede21373ac9acb5b9770bd86f013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b14b1083b02fbd50922326ae9b4fda0cbf8ede21373ac9acb5b9770bd86f013->enter($__internal_0b14b1083b02fbd50922326ae9b4fda0cbf8ede21373ac9acb5b9770bd86f013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0b14b1083b02fbd50922326ae9b4fda0cbf8ede21373ac9acb5b9770bd86f013->leave($__internal_0b14b1083b02fbd50922326ae9b4fda0cbf8ede21373ac9acb5b9770bd86f013_prof);

        
        $__internal_86f90c672de6e99cf52b45086f283a9a9c5c100a0dd31fd6aac8553a9845eab7->leave($__internal_86f90c672de6e99cf52b45086f283a9a9c5c100a0dd31fd6aac8553a9845eab7_prof);

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
