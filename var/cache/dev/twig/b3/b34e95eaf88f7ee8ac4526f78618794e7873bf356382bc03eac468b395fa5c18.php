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
        $__internal_388b08623ad77571a5160ab43ded01aa5d0af9a743319a44152709fc6d093e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388b08623ad77571a5160ab43ded01aa5d0af9a743319a44152709fc6d093e16->enter($__internal_388b08623ad77571a5160ab43ded01aa5d0af9a743319a44152709fc6d093e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ec2a707e76f0984dd2359944902f0686e55fb065aa1d87d90d3b2e69f79c9251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2a707e76f0984dd2359944902f0686e55fb065aa1d87d90d3b2e69f79c9251->enter($__internal_ec2a707e76f0984dd2359944902f0686e55fb065aa1d87d90d3b2e69f79c9251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_388b08623ad77571a5160ab43ded01aa5d0af9a743319a44152709fc6d093e16->leave($__internal_388b08623ad77571a5160ab43ded01aa5d0af9a743319a44152709fc6d093e16_prof);

        
        $__internal_ec2a707e76f0984dd2359944902f0686e55fb065aa1d87d90d3b2e69f79c9251->leave($__internal_ec2a707e76f0984dd2359944902f0686e55fb065aa1d87d90d3b2e69f79c9251_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ec691a0806565fda0d11ba51c060c3db58b4ca5197d4a5cf5d2bfda98826544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec691a0806565fda0d11ba51c060c3db58b4ca5197d4a5cf5d2bfda98826544->enter($__internal_4ec691a0806565fda0d11ba51c060c3db58b4ca5197d4a5cf5d2bfda98826544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4bca9165d2f9b01b28bae634e16d0b7fa43cbd94d7089cf78aa3cef1587fad9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bca9165d2f9b01b28bae634e16d0b7fa43cbd94d7089cf78aa3cef1587fad9b->enter($__internal_4bca9165d2f9b01b28bae634e16d0b7fa43cbd94d7089cf78aa3cef1587fad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4bca9165d2f9b01b28bae634e16d0b7fa43cbd94d7089cf78aa3cef1587fad9b->leave($__internal_4bca9165d2f9b01b28bae634e16d0b7fa43cbd94d7089cf78aa3cef1587fad9b_prof);

        
        $__internal_4ec691a0806565fda0d11ba51c060c3db58b4ca5197d4a5cf5d2bfda98826544->leave($__internal_4ec691a0806565fda0d11ba51c060c3db58b4ca5197d4a5cf5d2bfda98826544_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05e0680598a1e987b503e364e7d91bf4e9f298c7964e472c618e31922fedb3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e0680598a1e987b503e364e7d91bf4e9f298c7964e472c618e31922fedb3f8->enter($__internal_05e0680598a1e987b503e364e7d91bf4e9f298c7964e472c618e31922fedb3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4d5a1b24d826e27e92d24f93202314726409ed3891816e4f07f0ecdfc069b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d5a1b24d826e27e92d24f93202314726409ed3891816e4f07f0ecdfc069b0d->enter($__internal_e4d5a1b24d826e27e92d24f93202314726409ed3891816e4f07f0ecdfc069b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e4d5a1b24d826e27e92d24f93202314726409ed3891816e4f07f0ecdfc069b0d->leave($__internal_e4d5a1b24d826e27e92d24f93202314726409ed3891816e4f07f0ecdfc069b0d_prof);

        
        $__internal_05e0680598a1e987b503e364e7d91bf4e9f298c7964e472c618e31922fedb3f8->leave($__internal_05e0680598a1e987b503e364e7d91bf4e9f298c7964e472c618e31922fedb3f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffe114537a14f372ce1d9c217129a3022068991ef7001f8a077f6686465fbc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe114537a14f372ce1d9c217129a3022068991ef7001f8a077f6686465fbc3b->enter($__internal_ffe114537a14f372ce1d9c217129a3022068991ef7001f8a077f6686465fbc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c32c8629246ef703d913cc96261a93e09e780fd3a6cf4dc07d63142b158bc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c32c8629246ef703d913cc96261a93e09e780fd3a6cf4dc07d63142b158bc65->enter($__internal_2c32c8629246ef703d913cc96261a93e09e780fd3a6cf4dc07d63142b158bc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2c32c8629246ef703d913cc96261a93e09e780fd3a6cf4dc07d63142b158bc65->leave($__internal_2c32c8629246ef703d913cc96261a93e09e780fd3a6cf4dc07d63142b158bc65_prof);

        
        $__internal_ffe114537a14f372ce1d9c217129a3022068991ef7001f8a077f6686465fbc3b->leave($__internal_ffe114537a14f372ce1d9c217129a3022068991ef7001f8a077f6686465fbc3b_prof);

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
