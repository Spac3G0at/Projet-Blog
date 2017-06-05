<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4a5f55114cef2f10fb009ad20a1b45148f9054f26944a68d1294ec7ff13c75a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79eedd2d43ba03b368bf0fdd6857105be4913730222b10fb7ce21cd9c20092e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79eedd2d43ba03b368bf0fdd6857105be4913730222b10fb7ce21cd9c20092e0->enter($__internal_79eedd2d43ba03b368bf0fdd6857105be4913730222b10fb7ce21cd9c20092e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1d6c42048782d88aba696ea25647f781d163153d208e781e1b670a584ec9c917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6c42048782d88aba696ea25647f781d163153d208e781e1b670a584ec9c917->enter($__internal_1d6c42048782d88aba696ea25647f781d163153d208e781e1b670a584ec9c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_79eedd2d43ba03b368bf0fdd6857105be4913730222b10fb7ce21cd9c20092e0->leave($__internal_79eedd2d43ba03b368bf0fdd6857105be4913730222b10fb7ce21cd9c20092e0_prof);

        
        $__internal_1d6c42048782d88aba696ea25647f781d163153d208e781e1b670a584ec9c917->leave($__internal_1d6c42048782d88aba696ea25647f781d163153d208e781e1b670a584ec9c917_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2501ca237f683544d0ed5344b72250f9e828546cdd4a730e7a57a3718d9f12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2501ca237f683544d0ed5344b72250f9e828546cdd4a730e7a57a3718d9f12c->enter($__internal_e2501ca237f683544d0ed5344b72250f9e828546cdd4a730e7a57a3718d9f12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_598bc958f5a42e055dfafe999fae2af56d1ef534a58948fb8e5831053cfb75e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598bc958f5a42e055dfafe999fae2af56d1ef534a58948fb8e5831053cfb75e6->enter($__internal_598bc958f5a42e055dfafe999fae2af56d1ef534a58948fb8e5831053cfb75e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_598bc958f5a42e055dfafe999fae2af56d1ef534a58948fb8e5831053cfb75e6->leave($__internal_598bc958f5a42e055dfafe999fae2af56d1ef534a58948fb8e5831053cfb75e6_prof);

        
        $__internal_e2501ca237f683544d0ed5344b72250f9e828546cdd4a730e7a57a3718d9f12c->leave($__internal_e2501ca237f683544d0ed5344b72250f9e828546cdd4a730e7a57a3718d9f12c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
