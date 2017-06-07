<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f81fc3eca5f9b2ad928ab43d5c760775bbac29aaf8f5fe36910f6ba6efc5efce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a946946e99c36e7f4d9d6b274a1fd52692e1438e5bc8010d39c2e28e081886dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a946946e99c36e7f4d9d6b274a1fd52692e1438e5bc8010d39c2e28e081886dd->enter($__internal_a946946e99c36e7f4d9d6b274a1fd52692e1438e5bc8010d39c2e28e081886dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_dbd30f2b57b30aec8b84528c2e9b1608dda23085fe81389e575dd543027ca2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd30f2b57b30aec8b84528c2e9b1608dda23085fe81389e575dd543027ca2e7->enter($__internal_dbd30f2b57b30aec8b84528c2e9b1608dda23085fe81389e575dd543027ca2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a946946e99c36e7f4d9d6b274a1fd52692e1438e5bc8010d39c2e28e081886dd->leave($__internal_a946946e99c36e7f4d9d6b274a1fd52692e1438e5bc8010d39c2e28e081886dd_prof);

        
        $__internal_dbd30f2b57b30aec8b84528c2e9b1608dda23085fe81389e575dd543027ca2e7->leave($__internal_dbd30f2b57b30aec8b84528c2e9b1608dda23085fe81389e575dd543027ca2e7_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f138133872efd6d5e0b48ec2a30953be5173cb26704823e98e6838ecc5b7776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f138133872efd6d5e0b48ec2a30953be5173cb26704823e98e6838ecc5b7776->enter($__internal_3f138133872efd6d5e0b48ec2a30953be5173cb26704823e98e6838ecc5b7776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f79bd6c2e82d3b1a8da953c623e83042889584d667b31e61a5161b9420e4a75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79bd6c2e82d3b1a8da953c623e83042889584d667b31e61a5161b9420e4a75b->enter($__internal_f79bd6c2e82d3b1a8da953c623e83042889584d667b31e61a5161b9420e4a75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f79bd6c2e82d3b1a8da953c623e83042889584d667b31e61a5161b9420e4a75b->leave($__internal_f79bd6c2e82d3b1a8da953c623e83042889584d667b31e61a5161b9420e4a75b_prof);

        
        $__internal_3f138133872efd6d5e0b48ec2a30953be5173cb26704823e98e6838ecc5b7776->leave($__internal_3f138133872efd6d5e0b48ec2a30953be5173cb26704823e98e6838ecc5b7776_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
