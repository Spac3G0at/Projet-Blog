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
        $__internal_8f7de0a5389e3c7468e61526f3e5f73d3f982a5b01f7255f022abc2f510ee0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7de0a5389e3c7468e61526f3e5f73d3f982a5b01f7255f022abc2f510ee0c0->enter($__internal_8f7de0a5389e3c7468e61526f3e5f73d3f982a5b01f7255f022abc2f510ee0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbe7860489d5e428fcc6d57336863fd22a26dd0cd7499caa3190bfe967f84a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe7860489d5e428fcc6d57336863fd22a26dd0cd7499caa3190bfe967f84a48->enter($__internal_dbe7860489d5e428fcc6d57336863fd22a26dd0cd7499caa3190bfe967f84a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f7de0a5389e3c7468e61526f3e5f73d3f982a5b01f7255f022abc2f510ee0c0->leave($__internal_8f7de0a5389e3c7468e61526f3e5f73d3f982a5b01f7255f022abc2f510ee0c0_prof);

        
        $__internal_dbe7860489d5e428fcc6d57336863fd22a26dd0cd7499caa3190bfe967f84a48->leave($__internal_dbe7860489d5e428fcc6d57336863fd22a26dd0cd7499caa3190bfe967f84a48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79a2b259a504e577fe5fe25b0f07d45cb21df9d628d49cb25ec5c65c5af86559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a2b259a504e577fe5fe25b0f07d45cb21df9d628d49cb25ec5c65c5af86559->enter($__internal_79a2b259a504e577fe5fe25b0f07d45cb21df9d628d49cb25ec5c65c5af86559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d88a3e9a1bd9e9fa049b12063b3b047cd01c6f2a60b431d3b4328d85ee85aefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88a3e9a1bd9e9fa049b12063b3b047cd01c6f2a60b431d3b4328d85ee85aefe->enter($__internal_d88a3e9a1bd9e9fa049b12063b3b047cd01c6f2a60b431d3b4328d85ee85aefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d88a3e9a1bd9e9fa049b12063b3b047cd01c6f2a60b431d3b4328d85ee85aefe->leave($__internal_d88a3e9a1bd9e9fa049b12063b3b047cd01c6f2a60b431d3b4328d85ee85aefe_prof);

        
        $__internal_79a2b259a504e577fe5fe25b0f07d45cb21df9d628d49cb25ec5c65c5af86559->leave($__internal_79a2b259a504e577fe5fe25b0f07d45cb21df9d628d49cb25ec5c65c5af86559_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46bc1070deb2df91839fd05fb4a71062852a32a3215d5b1f14eb66ce5a0ebc34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bc1070deb2df91839fd05fb4a71062852a32a3215d5b1f14eb66ce5a0ebc34->enter($__internal_46bc1070deb2df91839fd05fb4a71062852a32a3215d5b1f14eb66ce5a0ebc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_613655baeb7f5fb224c3400ace92d9c77aad24e1f5e17f172272e77bc08bb212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613655baeb7f5fb224c3400ace92d9c77aad24e1f5e17f172272e77bc08bb212->enter($__internal_613655baeb7f5fb224c3400ace92d9c77aad24e1f5e17f172272e77bc08bb212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_613655baeb7f5fb224c3400ace92d9c77aad24e1f5e17f172272e77bc08bb212->leave($__internal_613655baeb7f5fb224c3400ace92d9c77aad24e1f5e17f172272e77bc08bb212_prof);

        
        $__internal_46bc1070deb2df91839fd05fb4a71062852a32a3215d5b1f14eb66ce5a0ebc34->leave($__internal_46bc1070deb2df91839fd05fb4a71062852a32a3215d5b1f14eb66ce5a0ebc34_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d88a6d2c68351de564536c0a1610a320988a98c98b48f9f46bb798b0cccab0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88a6d2c68351de564536c0a1610a320988a98c98b48f9f46bb798b0cccab0cb->enter($__internal_d88a6d2c68351de564536c0a1610a320988a98c98b48f9f46bb798b0cccab0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fac3036497f29c1d1a7d5222f3443a602df8cde881cd7f6c48a503c3916d9632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac3036497f29c1d1a7d5222f3443a602df8cde881cd7f6c48a503c3916d9632->enter($__internal_fac3036497f29c1d1a7d5222f3443a602df8cde881cd7f6c48a503c3916d9632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fac3036497f29c1d1a7d5222f3443a602df8cde881cd7f6c48a503c3916d9632->leave($__internal_fac3036497f29c1d1a7d5222f3443a602df8cde881cd7f6c48a503c3916d9632_prof);

        
        $__internal_d88a6d2c68351de564536c0a1610a320988a98c98b48f9f46bb798b0cccab0cb->leave($__internal_d88a6d2c68351de564536c0a1610a320988a98c98b48f9f46bb798b0cccab0cb_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
