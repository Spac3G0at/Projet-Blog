<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a17f409c226e877607d25c61805475d37e353ca8a41b10c6d6890c319003e228 extends Twig_Template
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
        $__internal_f7a70c11a2ec5bee25bb3442844a58886dc1652046acd7a1d2d0b3f346d4b5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a70c11a2ec5bee25bb3442844a58886dc1652046acd7a1d2d0b3f346d4b5b0->enter($__internal_f7a70c11a2ec5bee25bb3442844a58886dc1652046acd7a1d2d0b3f346d4b5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3c7f33345905926364f8fc94113ea3be46cedc91b87246b12efba6e34db1f7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7f33345905926364f8fc94113ea3be46cedc91b87246b12efba6e34db1f7a9->enter($__internal_3c7f33345905926364f8fc94113ea3be46cedc91b87246b12efba6e34db1f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a70c11a2ec5bee25bb3442844a58886dc1652046acd7a1d2d0b3f346d4b5b0->leave($__internal_f7a70c11a2ec5bee25bb3442844a58886dc1652046acd7a1d2d0b3f346d4b5b0_prof);

        
        $__internal_3c7f33345905926364f8fc94113ea3be46cedc91b87246b12efba6e34db1f7a9->leave($__internal_3c7f33345905926364f8fc94113ea3be46cedc91b87246b12efba6e34db1f7a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5552c9369ad3debc095301914450b7cbb09de8d6bc3d944ac3d3cad9dd4e24e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5552c9369ad3debc095301914450b7cbb09de8d6bc3d944ac3d3cad9dd4e24e7->enter($__internal_5552c9369ad3debc095301914450b7cbb09de8d6bc3d944ac3d3cad9dd4e24e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d36c687fd9573dc22dab67ace0fcd63605ab8fe03e75121f42a21c402aff8db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36c687fd9573dc22dab67ace0fcd63605ab8fe03e75121f42a21c402aff8db4->enter($__internal_d36c687fd9573dc22dab67ace0fcd63605ab8fe03e75121f42a21c402aff8db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d36c687fd9573dc22dab67ace0fcd63605ab8fe03e75121f42a21c402aff8db4->leave($__internal_d36c687fd9573dc22dab67ace0fcd63605ab8fe03e75121f42a21c402aff8db4_prof);

        
        $__internal_5552c9369ad3debc095301914450b7cbb09de8d6bc3d944ac3d3cad9dd4e24e7->leave($__internal_5552c9369ad3debc095301914450b7cbb09de8d6bc3d944ac3d3cad9dd4e24e7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5c4f24996d5e2e5fae8f9825b10d15890e2913ebf06d8c0f4052736a24cc076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c4f24996d5e2e5fae8f9825b10d15890e2913ebf06d8c0f4052736a24cc076->enter($__internal_e5c4f24996d5e2e5fae8f9825b10d15890e2913ebf06d8c0f4052736a24cc076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e36f150a1029245056ef14f84eaab3b06e4b4b1c9f8c2355143695c4dde1720b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36f150a1029245056ef14f84eaab3b06e4b4b1c9f8c2355143695c4dde1720b->enter($__internal_e36f150a1029245056ef14f84eaab3b06e4b4b1c9f8c2355143695c4dde1720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e36f150a1029245056ef14f84eaab3b06e4b4b1c9f8c2355143695c4dde1720b->leave($__internal_e36f150a1029245056ef14f84eaab3b06e4b4b1c9f8c2355143695c4dde1720b_prof);

        
        $__internal_e5c4f24996d5e2e5fae8f9825b10d15890e2913ebf06d8c0f4052736a24cc076->leave($__internal_e5c4f24996d5e2e5fae8f9825b10d15890e2913ebf06d8c0f4052736a24cc076_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2e639a722633b4cc89649b6b9948ff021c48bfab500e60ef2bda8937a2768b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e639a722633b4cc89649b6b9948ff021c48bfab500e60ef2bda8937a2768b6->enter($__internal_d2e639a722633b4cc89649b6b9948ff021c48bfab500e60ef2bda8937a2768b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5207aac81d653be61bcfe3e47a55b20d03a58a9fed4645d79328d3cea857ad0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5207aac81d653be61bcfe3e47a55b20d03a58a9fed4645d79328d3cea857ad0d->enter($__internal_5207aac81d653be61bcfe3e47a55b20d03a58a9fed4645d79328d3cea857ad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5207aac81d653be61bcfe3e47a55b20d03a58a9fed4645d79328d3cea857ad0d->leave($__internal_5207aac81d653be61bcfe3e47a55b20d03a58a9fed4645d79328d3cea857ad0d_prof);

        
        $__internal_d2e639a722633b4cc89649b6b9948ff021c48bfab500e60ef2bda8937a2768b6->leave($__internal_d2e639a722633b4cc89649b6b9948ff021c48bfab500e60ef2bda8937a2768b6_prof);

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
