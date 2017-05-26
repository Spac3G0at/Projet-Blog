<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
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
        $__internal_a5db97837921104e05166c19fe0d570e69c2278195d1c6566da0ef68d696ffc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5db97837921104e05166c19fe0d570e69c2278195d1c6566da0ef68d696ffc9->enter($__internal_a5db97837921104e05166c19fe0d570e69c2278195d1c6566da0ef68d696ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_16216045321d4b2cbbe7cc28d92bfd9aca3092efaeff8385e0050eeb369f4b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16216045321d4b2cbbe7cc28d92bfd9aca3092efaeff8385e0050eeb369f4b7d->enter($__internal_16216045321d4b2cbbe7cc28d92bfd9aca3092efaeff8385e0050eeb369f4b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5db97837921104e05166c19fe0d570e69c2278195d1c6566da0ef68d696ffc9->leave($__internal_a5db97837921104e05166c19fe0d570e69c2278195d1c6566da0ef68d696ffc9_prof);

        
        $__internal_16216045321d4b2cbbe7cc28d92bfd9aca3092efaeff8385e0050eeb369f4b7d->leave($__internal_16216045321d4b2cbbe7cc28d92bfd9aca3092efaeff8385e0050eeb369f4b7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_625be6fc3a50bf9ae9d98c7d07ecccbbdcfbcb61fba58cf87b53dda77db9b960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625be6fc3a50bf9ae9d98c7d07ecccbbdcfbcb61fba58cf87b53dda77db9b960->enter($__internal_625be6fc3a50bf9ae9d98c7d07ecccbbdcfbcb61fba58cf87b53dda77db9b960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35bbb5fab73b1e71215281723c8a9556757f0c36cb03770e77eece63ba4e5352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bbb5fab73b1e71215281723c8a9556757f0c36cb03770e77eece63ba4e5352->enter($__internal_35bbb5fab73b1e71215281723c8a9556757f0c36cb03770e77eece63ba4e5352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_35bbb5fab73b1e71215281723c8a9556757f0c36cb03770e77eece63ba4e5352->leave($__internal_35bbb5fab73b1e71215281723c8a9556757f0c36cb03770e77eece63ba4e5352_prof);

        
        $__internal_625be6fc3a50bf9ae9d98c7d07ecccbbdcfbcb61fba58cf87b53dda77db9b960->leave($__internal_625be6fc3a50bf9ae9d98c7d07ecccbbdcfbcb61fba58cf87b53dda77db9b960_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fe900e4fbb1dce8e273e0100b6da72bbb334a611fb3173f697574dd9fa30c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe900e4fbb1dce8e273e0100b6da72bbb334a611fb3173f697574dd9fa30c0d->enter($__internal_5fe900e4fbb1dce8e273e0100b6da72bbb334a611fb3173f697574dd9fa30c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8090f7a8192b70f0adad199f4009afa072255fb2470231708f3c6a2304bd1566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8090f7a8192b70f0adad199f4009afa072255fb2470231708f3c6a2304bd1566->enter($__internal_8090f7a8192b70f0adad199f4009afa072255fb2470231708f3c6a2304bd1566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8090f7a8192b70f0adad199f4009afa072255fb2470231708f3c6a2304bd1566->leave($__internal_8090f7a8192b70f0adad199f4009afa072255fb2470231708f3c6a2304bd1566_prof);

        
        $__internal_5fe900e4fbb1dce8e273e0100b6da72bbb334a611fb3173f697574dd9fa30c0d->leave($__internal_5fe900e4fbb1dce8e273e0100b6da72bbb334a611fb3173f697574dd9fa30c0d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4bce785f60d0d2d09e010c9b55288b6f5a719becf8d4345aa2e36cd346928b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bce785f60d0d2d09e010c9b55288b6f5a719becf8d4345aa2e36cd346928b2->enter($__internal_a4bce785f60d0d2d09e010c9b55288b6f5a719becf8d4345aa2e36cd346928b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7face3461574f9026bc532a391147420cea307dda0361cdc1497333a60e0733b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7face3461574f9026bc532a391147420cea307dda0361cdc1497333a60e0733b->enter($__internal_7face3461574f9026bc532a391147420cea307dda0361cdc1497333a60e0733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7face3461574f9026bc532a391147420cea307dda0361cdc1497333a60e0733b->leave($__internal_7face3461574f9026bc532a391147420cea307dda0361cdc1497333a60e0733b_prof);

        
        $__internal_a4bce785f60d0d2d09e010c9b55288b6f5a719becf8d4345aa2e36cd346928b2->leave($__internal_a4bce785f60d0d2d09e010c9b55288b6f5a719becf8d4345aa2e36cd346928b2_prof);

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
