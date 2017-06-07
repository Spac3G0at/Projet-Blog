<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_edff58f094915862ed44fcd9415f62653f3e12bbd49bc59e06fc315c554ec6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce955cc3f72c73b9044e568284a178be9c1faa3ff3f3934fbbb94ea420d8c36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce955cc3f72c73b9044e568284a178be9c1faa3ff3f3934fbbb94ea420d8c36d->enter($__internal_ce955cc3f72c73b9044e568284a178be9c1faa3ff3f3934fbbb94ea420d8c36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7ade69cb5f8eaee31c9ca89955aac2cee9ab982a7124ec9005cd300b135eeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ade69cb5f8eaee31c9ca89955aac2cee9ab982a7124ec9005cd300b135eeec->enter($__internal_d7ade69cb5f8eaee31c9ca89955aac2cee9ab982a7124ec9005cd300b135eeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce955cc3f72c73b9044e568284a178be9c1faa3ff3f3934fbbb94ea420d8c36d->leave($__internal_ce955cc3f72c73b9044e568284a178be9c1faa3ff3f3934fbbb94ea420d8c36d_prof);

        
        $__internal_d7ade69cb5f8eaee31c9ca89955aac2cee9ab982a7124ec9005cd300b135eeec->leave($__internal_d7ade69cb5f8eaee31c9ca89955aac2cee9ab982a7124ec9005cd300b135eeec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb9b5f6f6d8a6fabe30118e08081479411d2501c5b1d19effc068a73934740b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9b5f6f6d8a6fabe30118e08081479411d2501c5b1d19effc068a73934740b8->enter($__internal_cb9b5f6f6d8a6fabe30118e08081479411d2501c5b1d19effc068a73934740b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84f6277cbd2d0fc8abcf6746b6dff44b2a452f070dd131dd12c27e236b8963ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f6277cbd2d0fc8abcf6746b6dff44b2a452f070dd131dd12c27e236b8963ca->enter($__internal_84f6277cbd2d0fc8abcf6746b6dff44b2a452f070dd131dd12c27e236b8963ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84f6277cbd2d0fc8abcf6746b6dff44b2a452f070dd131dd12c27e236b8963ca->leave($__internal_84f6277cbd2d0fc8abcf6746b6dff44b2a452f070dd131dd12c27e236b8963ca_prof);

        
        $__internal_cb9b5f6f6d8a6fabe30118e08081479411d2501c5b1d19effc068a73934740b8->leave($__internal_cb9b5f6f6d8a6fabe30118e08081479411d2501c5b1d19effc068a73934740b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b07a4e70183f3d8e5023ae29d9f0bbe9661c4c2c826c735f1b2802866ac757a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b07a4e70183f3d8e5023ae29d9f0bbe9661c4c2c826c735f1b2802866ac757a->enter($__internal_0b07a4e70183f3d8e5023ae29d9f0bbe9661c4c2c826c735f1b2802866ac757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7d3cc1a39688c0019b77eb86a35b8f595e6f6ee84501ef303474339966c455a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d3cc1a39688c0019b77eb86a35b8f595e6f6ee84501ef303474339966c455a->enter($__internal_c7d3cc1a39688c0019b77eb86a35b8f595e6f6ee84501ef303474339966c455a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7d3cc1a39688c0019b77eb86a35b8f595e6f6ee84501ef303474339966c455a->leave($__internal_c7d3cc1a39688c0019b77eb86a35b8f595e6f6ee84501ef303474339966c455a_prof);

        
        $__internal_0b07a4e70183f3d8e5023ae29d9f0bbe9661c4c2c826c735f1b2802866ac757a->leave($__internal_0b07a4e70183f3d8e5023ae29d9f0bbe9661c4c2c826c735f1b2802866ac757a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bb1252fe76d70728bb9bea1ba37a0130e1465d700979da9afa86aa26f93131c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb1252fe76d70728bb9bea1ba37a0130e1465d700979da9afa86aa26f93131c->enter($__internal_9bb1252fe76d70728bb9bea1ba37a0130e1465d700979da9afa86aa26f93131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3f7594325b3603adc16490bf888e5198dc3495255b69558325ad56c354c2018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f7594325b3603adc16490bf888e5198dc3495255b69558325ad56c354c2018->enter($__internal_a3f7594325b3603adc16490bf888e5198dc3495255b69558325ad56c354c2018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3f7594325b3603adc16490bf888e5198dc3495255b69558325ad56c354c2018->leave($__internal_a3f7594325b3603adc16490bf888e5198dc3495255b69558325ad56c354c2018_prof);

        
        $__internal_9bb1252fe76d70728bb9bea1ba37a0130e1465d700979da9afa86aa26f93131c->leave($__internal_9bb1252fe76d70728bb9bea1ba37a0130e1465d700979da9afa86aa26f93131c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
