<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
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
        $__internal_a81fd742821397a357902abb7f544d39d8e0f6ae0a78132832278600b9b4ff81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81fd742821397a357902abb7f544d39d8e0f6ae0a78132832278600b9b4ff81->enter($__internal_a81fd742821397a357902abb7f544d39d8e0f6ae0a78132832278600b9b4ff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9a7af102c53c6725053e863281e7d2ed1f436441a18a023503e5fec91457f84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7af102c53c6725053e863281e7d2ed1f436441a18a023503e5fec91457f84f->enter($__internal_9a7af102c53c6725053e863281e7d2ed1f436441a18a023503e5fec91457f84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81fd742821397a357902abb7f544d39d8e0f6ae0a78132832278600b9b4ff81->leave($__internal_a81fd742821397a357902abb7f544d39d8e0f6ae0a78132832278600b9b4ff81_prof);

        
        $__internal_9a7af102c53c6725053e863281e7d2ed1f436441a18a023503e5fec91457f84f->leave($__internal_9a7af102c53c6725053e863281e7d2ed1f436441a18a023503e5fec91457f84f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f96ccfc6cebf4d623e72fd03551be212372bda01cd4c9c5774f184506fe0cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f96ccfc6cebf4d623e72fd03551be212372bda01cd4c9c5774f184506fe0cac->enter($__internal_0f96ccfc6cebf4d623e72fd03551be212372bda01cd4c9c5774f184506fe0cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0929efc3e02ffa11d86271d703f4dcdbec0b0bbc2f1b9b014cc07cd83bae834f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0929efc3e02ffa11d86271d703f4dcdbec0b0bbc2f1b9b014cc07cd83bae834f->enter($__internal_0929efc3e02ffa11d86271d703f4dcdbec0b0bbc2f1b9b014cc07cd83bae834f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0929efc3e02ffa11d86271d703f4dcdbec0b0bbc2f1b9b014cc07cd83bae834f->leave($__internal_0929efc3e02ffa11d86271d703f4dcdbec0b0bbc2f1b9b014cc07cd83bae834f_prof);

        
        $__internal_0f96ccfc6cebf4d623e72fd03551be212372bda01cd4c9c5774f184506fe0cac->leave($__internal_0f96ccfc6cebf4d623e72fd03551be212372bda01cd4c9c5774f184506fe0cac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83ecb1caa431531ad757220d985d7b049f9d3cd5d4dc0f23c3ae3a7160d17f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ecb1caa431531ad757220d985d7b049f9d3cd5d4dc0f23c3ae3a7160d17f44->enter($__internal_83ecb1caa431531ad757220d985d7b049f9d3cd5d4dc0f23c3ae3a7160d17f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_273fcf4ea04b0f2becbea66a99d93e5dc22e3004fac72a78bff9780b6f7f535b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273fcf4ea04b0f2becbea66a99d93e5dc22e3004fac72a78bff9780b6f7f535b->enter($__internal_273fcf4ea04b0f2becbea66a99d93e5dc22e3004fac72a78bff9780b6f7f535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_273fcf4ea04b0f2becbea66a99d93e5dc22e3004fac72a78bff9780b6f7f535b->leave($__internal_273fcf4ea04b0f2becbea66a99d93e5dc22e3004fac72a78bff9780b6f7f535b_prof);

        
        $__internal_83ecb1caa431531ad757220d985d7b049f9d3cd5d4dc0f23c3ae3a7160d17f44->leave($__internal_83ecb1caa431531ad757220d985d7b049f9d3cd5d4dc0f23c3ae3a7160d17f44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_548934a462adf72d996b96831717370124621cad511f27f65271e07e5147e7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548934a462adf72d996b96831717370124621cad511f27f65271e07e5147e7e9->enter($__internal_548934a462adf72d996b96831717370124621cad511f27f65271e07e5147e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_321f6fa8aabb31e12e6c96e1f568d6680f7080030024cfe9cc405d8c1d2ff682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321f6fa8aabb31e12e6c96e1f568d6680f7080030024cfe9cc405d8c1d2ff682->enter($__internal_321f6fa8aabb31e12e6c96e1f568d6680f7080030024cfe9cc405d8c1d2ff682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_321f6fa8aabb31e12e6c96e1f568d6680f7080030024cfe9cc405d8c1d2ff682->leave($__internal_321f6fa8aabb31e12e6c96e1f568d6680f7080030024cfe9cc405d8c1d2ff682_prof);

        
        $__internal_548934a462adf72d996b96831717370124621cad511f27f65271e07e5147e7e9->leave($__internal_548934a462adf72d996b96831717370124621cad511f27f65271e07e5147e7e9_prof);

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
