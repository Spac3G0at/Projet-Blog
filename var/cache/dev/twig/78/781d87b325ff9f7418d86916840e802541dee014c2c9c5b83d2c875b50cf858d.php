<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bc037492c4970148099630a5379c51b5f6173595447c6bf4f073d651c025a729 extends Twig_Template
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
        $__internal_6dc85f3d5e2d4b59e557df9aa4cd408ba7c083e6c432da710cd29e55975c4ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc85f3d5e2d4b59e557df9aa4cd408ba7c083e6c432da710cd29e55975c4ca3->enter($__internal_6dc85f3d5e2d4b59e557df9aa4cd408ba7c083e6c432da710cd29e55975c4ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6d0e4d37e44c799e9765a4e71dc7f6b553578425b94ef4da32dd7488a1760cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0e4d37e44c799e9765a4e71dc7f6b553578425b94ef4da32dd7488a1760cb8->enter($__internal_6d0e4d37e44c799e9765a4e71dc7f6b553578425b94ef4da32dd7488a1760cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc85f3d5e2d4b59e557df9aa4cd408ba7c083e6c432da710cd29e55975c4ca3->leave($__internal_6dc85f3d5e2d4b59e557df9aa4cd408ba7c083e6c432da710cd29e55975c4ca3_prof);

        
        $__internal_6d0e4d37e44c799e9765a4e71dc7f6b553578425b94ef4da32dd7488a1760cb8->leave($__internal_6d0e4d37e44c799e9765a4e71dc7f6b553578425b94ef4da32dd7488a1760cb8_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ad7786c9c600690db691310a368c6be4cae75745abf4d099b1093f6203404e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad7786c9c600690db691310a368c6be4cae75745abf4d099b1093f6203404e9->enter($__internal_8ad7786c9c600690db691310a368c6be4cae75745abf4d099b1093f6203404e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_adc91c8605c4d5c0a27c56551b80f96bbd77a53414c6791509bba15798456af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc91c8605c4d5c0a27c56551b80f96bbd77a53414c6791509bba15798456af2->enter($__internal_adc91c8605c4d5c0a27c56551b80f96bbd77a53414c6791509bba15798456af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_adc91c8605c4d5c0a27c56551b80f96bbd77a53414c6791509bba15798456af2->leave($__internal_adc91c8605c4d5c0a27c56551b80f96bbd77a53414c6791509bba15798456af2_prof);

        
        $__internal_8ad7786c9c600690db691310a368c6be4cae75745abf4d099b1093f6203404e9->leave($__internal_8ad7786c9c600690db691310a368c6be4cae75745abf4d099b1093f6203404e9_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
