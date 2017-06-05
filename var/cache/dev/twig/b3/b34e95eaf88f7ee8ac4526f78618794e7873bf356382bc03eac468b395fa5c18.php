<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc62bff3a4ad826319368126c22e55279385b5c0ac6662f450f40151c718fc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_662f19a9983ddec5a39b14ab6cb5b4d4f31dfd61006715b808b3b80e17c020f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662f19a9983ddec5a39b14ab6cb5b4d4f31dfd61006715b808b3b80e17c020f0->enter($__internal_662f19a9983ddec5a39b14ab6cb5b4d4f31dfd61006715b808b3b80e17c020f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0343cf28ff43553ecd9669a67ad42d62be66374d10312ed8cc2545645e4cf98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0343cf28ff43553ecd9669a67ad42d62be66374d10312ed8cc2545645e4cf98e->enter($__internal_0343cf28ff43553ecd9669a67ad42d62be66374d10312ed8cc2545645e4cf98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662f19a9983ddec5a39b14ab6cb5b4d4f31dfd61006715b808b3b80e17c020f0->leave($__internal_662f19a9983ddec5a39b14ab6cb5b4d4f31dfd61006715b808b3b80e17c020f0_prof);

        
        $__internal_0343cf28ff43553ecd9669a67ad42d62be66374d10312ed8cc2545645e4cf98e->leave($__internal_0343cf28ff43553ecd9669a67ad42d62be66374d10312ed8cc2545645e4cf98e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3390ed22006d09dad8b18fd955ba687fb2aa257d5399afb5e6cf240e2dcffed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3390ed22006d09dad8b18fd955ba687fb2aa257d5399afb5e6cf240e2dcffed4->enter($__internal_3390ed22006d09dad8b18fd955ba687fb2aa257d5399afb5e6cf240e2dcffed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_633eecf01d222fa333b3187255b3728bfbc00a4cc962955094d722b7c28b15e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633eecf01d222fa333b3187255b3728bfbc00a4cc962955094d722b7c28b15e5->enter($__internal_633eecf01d222fa333b3187255b3728bfbc00a4cc962955094d722b7c28b15e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_633eecf01d222fa333b3187255b3728bfbc00a4cc962955094d722b7c28b15e5->leave($__internal_633eecf01d222fa333b3187255b3728bfbc00a4cc962955094d722b7c28b15e5_prof);

        
        $__internal_3390ed22006d09dad8b18fd955ba687fb2aa257d5399afb5e6cf240e2dcffed4->leave($__internal_3390ed22006d09dad8b18fd955ba687fb2aa257d5399afb5e6cf240e2dcffed4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2d48ac032918a94fffe9d2f9d6c258934e887930a575e120282869395d977d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d48ac032918a94fffe9d2f9d6c258934e887930a575e120282869395d977d9->enter($__internal_d2d48ac032918a94fffe9d2f9d6c258934e887930a575e120282869395d977d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66dd11cc8011dd6698c44826f8e49cda229a9660193df3a1866fb7d9fe3c5145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66dd11cc8011dd6698c44826f8e49cda229a9660193df3a1866fb7d9fe3c5145->enter($__internal_66dd11cc8011dd6698c44826f8e49cda229a9660193df3a1866fb7d9fe3c5145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66dd11cc8011dd6698c44826f8e49cda229a9660193df3a1866fb7d9fe3c5145->leave($__internal_66dd11cc8011dd6698c44826f8e49cda229a9660193df3a1866fb7d9fe3c5145_prof);

        
        $__internal_d2d48ac032918a94fffe9d2f9d6c258934e887930a575e120282869395d977d9->leave($__internal_d2d48ac032918a94fffe9d2f9d6c258934e887930a575e120282869395d977d9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b968ab74682e98baef8cf5d430ba0d896b3cf786a41cae6693c1512503cdc469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b968ab74682e98baef8cf5d430ba0d896b3cf786a41cae6693c1512503cdc469->enter($__internal_b968ab74682e98baef8cf5d430ba0d896b3cf786a41cae6693c1512503cdc469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9eda24fef067f3693eb8d234c59d854bba05f54aad80bc269c771af3a2902f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9eda24fef067f3693eb8d234c59d854bba05f54aad80bc269c771af3a2902f8->enter($__internal_d9eda24fef067f3693eb8d234c59d854bba05f54aad80bc269c771af3a2902f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d9eda24fef067f3693eb8d234c59d854bba05f54aad80bc269c771af3a2902f8->leave($__internal_d9eda24fef067f3693eb8d234c59d854bba05f54aad80bc269c771af3a2902f8_prof);

        
        $__internal_b968ab74682e98baef8cf5d430ba0d896b3cf786a41cae6693c1512503cdc469->leave($__internal_b968ab74682e98baef8cf5d430ba0d896b3cf786a41cae6693c1512503cdc469_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
