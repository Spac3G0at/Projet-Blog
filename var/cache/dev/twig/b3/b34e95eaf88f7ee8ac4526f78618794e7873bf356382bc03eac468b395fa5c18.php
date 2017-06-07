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
        $__internal_320f5703ef5c6be525686ed593368461df0117f0cac80b9e8020c79ca3308762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320f5703ef5c6be525686ed593368461df0117f0cac80b9e8020c79ca3308762->enter($__internal_320f5703ef5c6be525686ed593368461df0117f0cac80b9e8020c79ca3308762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69e16f0e89ac80d8984ac796921d6127e593589812ee525c9c3a087cc237a032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e16f0e89ac80d8984ac796921d6127e593589812ee525c9c3a087cc237a032->enter($__internal_69e16f0e89ac80d8984ac796921d6127e593589812ee525c9c3a087cc237a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320f5703ef5c6be525686ed593368461df0117f0cac80b9e8020c79ca3308762->leave($__internal_320f5703ef5c6be525686ed593368461df0117f0cac80b9e8020c79ca3308762_prof);

        
        $__internal_69e16f0e89ac80d8984ac796921d6127e593589812ee525c9c3a087cc237a032->leave($__internal_69e16f0e89ac80d8984ac796921d6127e593589812ee525c9c3a087cc237a032_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70e9807b1313cbf41212bd7fe6ab89e2959802e773a3c4d47c9170d81971378b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e9807b1313cbf41212bd7fe6ab89e2959802e773a3c4d47c9170d81971378b->enter($__internal_70e9807b1313cbf41212bd7fe6ab89e2959802e773a3c4d47c9170d81971378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6dbda9e31bcd7219a3219302fb92232d5b85caa32931ec3d1c13dc6cca21afc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbda9e31bcd7219a3219302fb92232d5b85caa32931ec3d1c13dc6cca21afc6->enter($__internal_6dbda9e31bcd7219a3219302fb92232d5b85caa32931ec3d1c13dc6cca21afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6dbda9e31bcd7219a3219302fb92232d5b85caa32931ec3d1c13dc6cca21afc6->leave($__internal_6dbda9e31bcd7219a3219302fb92232d5b85caa32931ec3d1c13dc6cca21afc6_prof);

        
        $__internal_70e9807b1313cbf41212bd7fe6ab89e2959802e773a3c4d47c9170d81971378b->leave($__internal_70e9807b1313cbf41212bd7fe6ab89e2959802e773a3c4d47c9170d81971378b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_464d2d0643818c52dc2a9e0edae1c5e8a2c086ee7eb0e9a5c37c4f6c48d1631f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464d2d0643818c52dc2a9e0edae1c5e8a2c086ee7eb0e9a5c37c4f6c48d1631f->enter($__internal_464d2d0643818c52dc2a9e0edae1c5e8a2c086ee7eb0e9a5c37c4f6c48d1631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_726fa71b74ad45e8045e415dcaed5e14a97959dadbfe77537d0441715bd66728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726fa71b74ad45e8045e415dcaed5e14a97959dadbfe77537d0441715bd66728->enter($__internal_726fa71b74ad45e8045e415dcaed5e14a97959dadbfe77537d0441715bd66728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_726fa71b74ad45e8045e415dcaed5e14a97959dadbfe77537d0441715bd66728->leave($__internal_726fa71b74ad45e8045e415dcaed5e14a97959dadbfe77537d0441715bd66728_prof);

        
        $__internal_464d2d0643818c52dc2a9e0edae1c5e8a2c086ee7eb0e9a5c37c4f6c48d1631f->leave($__internal_464d2d0643818c52dc2a9e0edae1c5e8a2c086ee7eb0e9a5c37c4f6c48d1631f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8416e517d09c3ef4523861b92c8d33cf7d1448e6a614eb3a1c3fa18ce7e1f93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8416e517d09c3ef4523861b92c8d33cf7d1448e6a614eb3a1c3fa18ce7e1f93a->enter($__internal_8416e517d09c3ef4523861b92c8d33cf7d1448e6a614eb3a1c3fa18ce7e1f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_022bcc321fee54c1890540810e759797b526d98119e88f3f32cb560b8d090dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022bcc321fee54c1890540810e759797b526d98119e88f3f32cb560b8d090dd1->enter($__internal_022bcc321fee54c1890540810e759797b526d98119e88f3f32cb560b8d090dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_022bcc321fee54c1890540810e759797b526d98119e88f3f32cb560b8d090dd1->leave($__internal_022bcc321fee54c1890540810e759797b526d98119e88f3f32cb560b8d090dd1_prof);

        
        $__internal_8416e517d09c3ef4523861b92c8d33cf7d1448e6a614eb3a1c3fa18ce7e1f93a->leave($__internal_8416e517d09c3ef4523861b92c8d33cf7d1448e6a614eb3a1c3fa18ce7e1f93a_prof);

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
