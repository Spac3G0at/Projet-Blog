<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f81fc3eca5f9b2ad928ab43d5c760775bbac29aaf8f5fe36910f6ba6efc5efce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_9092f9e7cc1672e5573081bd9ae36b62475919043d3d3e8ed90a67dff6a8f906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9092f9e7cc1672e5573081bd9ae36b62475919043d3d3e8ed90a67dff6a8f906->enter($__internal_9092f9e7cc1672e5573081bd9ae36b62475919043d3d3e8ed90a67dff6a8f906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_84a350d92f6060d5cbfcb896e8818c0acd67e8df5921bb49f47d9e72f6c4cf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a350d92f6060d5cbfcb896e8818c0acd67e8df5921bb49f47d9e72f6c4cf29->enter($__internal_84a350d92f6060d5cbfcb896e8818c0acd67e8df5921bb49f47d9e72f6c4cf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9092f9e7cc1672e5573081bd9ae36b62475919043d3d3e8ed90a67dff6a8f906->leave($__internal_9092f9e7cc1672e5573081bd9ae36b62475919043d3d3e8ed90a67dff6a8f906_prof);

        
        $__internal_84a350d92f6060d5cbfcb896e8818c0acd67e8df5921bb49f47d9e72f6c4cf29->leave($__internal_84a350d92f6060d5cbfcb896e8818c0acd67e8df5921bb49f47d9e72f6c4cf29_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ec9b706e24a3b2dcd2b7dbd452b0935c7565ca26869b8ef54423b194b4e583d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec9b706e24a3b2dcd2b7dbd452b0935c7565ca26869b8ef54423b194b4e583d->enter($__internal_4ec9b706e24a3b2dcd2b7dbd452b0935c7565ca26869b8ef54423b194b4e583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da51a4980dac8256e0da28e678ef7e5fd245ea25da9af53e7cc31e3289e96f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da51a4980dac8256e0da28e678ef7e5fd245ea25da9af53e7cc31e3289e96f9e->enter($__internal_da51a4980dac8256e0da28e678ef7e5fd245ea25da9af53e7cc31e3289e96f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_da51a4980dac8256e0da28e678ef7e5fd245ea25da9af53e7cc31e3289e96f9e->leave($__internal_da51a4980dac8256e0da28e678ef7e5fd245ea25da9af53e7cc31e3289e96f9e_prof);

        
        $__internal_4ec9b706e24a3b2dcd2b7dbd452b0935c7565ca26869b8ef54423b194b4e583d->leave($__internal_4ec9b706e24a3b2dcd2b7dbd452b0935c7565ca26869b8ef54423b194b4e583d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
