<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b156f8d2fa7fab6c6e5d478c62d25a2591622dc8c4619ca3aeb0740c30f9562b extends Twig_Template
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
        $__internal_ee1439e0b0b29b3dafe6092b5d7454f24a50bab3d133a66a51b98f753b1d628c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1439e0b0b29b3dafe6092b5d7454f24a50bab3d133a66a51b98f753b1d628c->enter($__internal_ee1439e0b0b29b3dafe6092b5d7454f24a50bab3d133a66a51b98f753b1d628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c25c421f3d77d6471670f6d7f330f10e44dd4f48ac44766add753dc8b5b04490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25c421f3d77d6471670f6d7f330f10e44dd4f48ac44766add753dc8b5b04490->enter($__internal_c25c421f3d77d6471670f6d7f330f10e44dd4f48ac44766add753dc8b5b04490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1439e0b0b29b3dafe6092b5d7454f24a50bab3d133a66a51b98f753b1d628c->leave($__internal_ee1439e0b0b29b3dafe6092b5d7454f24a50bab3d133a66a51b98f753b1d628c_prof);

        
        $__internal_c25c421f3d77d6471670f6d7f330f10e44dd4f48ac44766add753dc8b5b04490->leave($__internal_c25c421f3d77d6471670f6d7f330f10e44dd4f48ac44766add753dc8b5b04490_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64c44c812938b1a1ffc8ca44384bdb8bb435cf31f48dd1160a46f6117f11791c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c44c812938b1a1ffc8ca44384bdb8bb435cf31f48dd1160a46f6117f11791c->enter($__internal_64c44c812938b1a1ffc8ca44384bdb8bb435cf31f48dd1160a46f6117f11791c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d2a3f0f818fb0f229189ad4df12dc53d167d7438a86ae9e2f00b97b1d3158c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2a3f0f818fb0f229189ad4df12dc53d167d7438a86ae9e2f00b97b1d3158c5->enter($__internal_3d2a3f0f818fb0f229189ad4df12dc53d167d7438a86ae9e2f00b97b1d3158c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d2a3f0f818fb0f229189ad4df12dc53d167d7438a86ae9e2f00b97b1d3158c5->leave($__internal_3d2a3f0f818fb0f229189ad4df12dc53d167d7438a86ae9e2f00b97b1d3158c5_prof);

        
        $__internal_64c44c812938b1a1ffc8ca44384bdb8bb435cf31f48dd1160a46f6117f11791c->leave($__internal_64c44c812938b1a1ffc8ca44384bdb8bb435cf31f48dd1160a46f6117f11791c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4239cd936386eefb7bfb255ce1df20abdec9dcf90c0c71b924ff8c19950b1a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4239cd936386eefb7bfb255ce1df20abdec9dcf90c0c71b924ff8c19950b1a92->enter($__internal_4239cd936386eefb7bfb255ce1df20abdec9dcf90c0c71b924ff8c19950b1a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5feec3272616fb339d65b6d1e31fb52217030def6cfa0f38efbc3115a70759cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5feec3272616fb339d65b6d1e31fb52217030def6cfa0f38efbc3115a70759cb->enter($__internal_5feec3272616fb339d65b6d1e31fb52217030def6cfa0f38efbc3115a70759cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5feec3272616fb339d65b6d1e31fb52217030def6cfa0f38efbc3115a70759cb->leave($__internal_5feec3272616fb339d65b6d1e31fb52217030def6cfa0f38efbc3115a70759cb_prof);

        
        $__internal_4239cd936386eefb7bfb255ce1df20abdec9dcf90c0c71b924ff8c19950b1a92->leave($__internal_4239cd936386eefb7bfb255ce1df20abdec9dcf90c0c71b924ff8c19950b1a92_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30b63c2a2b58aa043b71c776cf3b4e6e0bc0322ecf69a763f1fc02de5429a071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b63c2a2b58aa043b71c776cf3b4e6e0bc0322ecf69a763f1fc02de5429a071->enter($__internal_30b63c2a2b58aa043b71c776cf3b4e6e0bc0322ecf69a763f1fc02de5429a071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d25e98f1ab7ab302be9707ed669ba726dbe491f9dae84d51ded251fafcd55a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25e98f1ab7ab302be9707ed669ba726dbe491f9dae84d51ded251fafcd55a46->enter($__internal_d25e98f1ab7ab302be9707ed669ba726dbe491f9dae84d51ded251fafcd55a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d25e98f1ab7ab302be9707ed669ba726dbe491f9dae84d51ded251fafcd55a46->leave($__internal_d25e98f1ab7ab302be9707ed669ba726dbe491f9dae84d51ded251fafcd55a46_prof);

        
        $__internal_30b63c2a2b58aa043b71c776cf3b4e6e0bc0322ecf69a763f1fc02de5429a071->leave($__internal_30b63c2a2b58aa043b71c776cf3b4e6e0bc0322ecf69a763f1fc02de5429a071_prof);

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
