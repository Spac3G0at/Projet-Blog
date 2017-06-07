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
        $__internal_92cb19b079e6965a4eb85dacb399dd7c04ccf165b99f5eb13d3fe4a63eff03d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cb19b079e6965a4eb85dacb399dd7c04ccf165b99f5eb13d3fe4a63eff03d2->enter($__internal_92cb19b079e6965a4eb85dacb399dd7c04ccf165b99f5eb13d3fe4a63eff03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d4d4a4c54a79fe2a6d5680aaea396e7bec84506f5481abd0e5d6b930a43bff70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d4a4c54a79fe2a6d5680aaea396e7bec84506f5481abd0e5d6b930a43bff70->enter($__internal_d4d4a4c54a79fe2a6d5680aaea396e7bec84506f5481abd0e5d6b930a43bff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92cb19b079e6965a4eb85dacb399dd7c04ccf165b99f5eb13d3fe4a63eff03d2->leave($__internal_92cb19b079e6965a4eb85dacb399dd7c04ccf165b99f5eb13d3fe4a63eff03d2_prof);

        
        $__internal_d4d4a4c54a79fe2a6d5680aaea396e7bec84506f5481abd0e5d6b930a43bff70->leave($__internal_d4d4a4c54a79fe2a6d5680aaea396e7bec84506f5481abd0e5d6b930a43bff70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fdf388c74630093e86897ce42e33683a2d9dcc434f0b187bac4b43970a6c87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdf388c74630093e86897ce42e33683a2d9dcc434f0b187bac4b43970a6c87d->enter($__internal_0fdf388c74630093e86897ce42e33683a2d9dcc434f0b187bac4b43970a6c87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8656b72f36e6c9a9bc452a8beaa28be445e71396c1837c7ed8cd2a6fc2054a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8656b72f36e6c9a9bc452a8beaa28be445e71396c1837c7ed8cd2a6fc2054a9->enter($__internal_e8656b72f36e6c9a9bc452a8beaa28be445e71396c1837c7ed8cd2a6fc2054a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8656b72f36e6c9a9bc452a8beaa28be445e71396c1837c7ed8cd2a6fc2054a9->leave($__internal_e8656b72f36e6c9a9bc452a8beaa28be445e71396c1837c7ed8cd2a6fc2054a9_prof);

        
        $__internal_0fdf388c74630093e86897ce42e33683a2d9dcc434f0b187bac4b43970a6c87d->leave($__internal_0fdf388c74630093e86897ce42e33683a2d9dcc434f0b187bac4b43970a6c87d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc630ec46e97b924857fce46ba168b438bef1bf28657521689132f8de4e9d7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc630ec46e97b924857fce46ba168b438bef1bf28657521689132f8de4e9d7a2->enter($__internal_bc630ec46e97b924857fce46ba168b438bef1bf28657521689132f8de4e9d7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac405f820d7b96d4c1c2104cd5a67b1930f5fddefcf4145570aa4cdd90a3ba5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac405f820d7b96d4c1c2104cd5a67b1930f5fddefcf4145570aa4cdd90a3ba5e->enter($__internal_ac405f820d7b96d4c1c2104cd5a67b1930f5fddefcf4145570aa4cdd90a3ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac405f820d7b96d4c1c2104cd5a67b1930f5fddefcf4145570aa4cdd90a3ba5e->leave($__internal_ac405f820d7b96d4c1c2104cd5a67b1930f5fddefcf4145570aa4cdd90a3ba5e_prof);

        
        $__internal_bc630ec46e97b924857fce46ba168b438bef1bf28657521689132f8de4e9d7a2->leave($__internal_bc630ec46e97b924857fce46ba168b438bef1bf28657521689132f8de4e9d7a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b03aabf0b305ca90850ae32655eb51bf74cb72452c620c49bffdb9e902fde5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03aabf0b305ca90850ae32655eb51bf74cb72452c620c49bffdb9e902fde5f9->enter($__internal_b03aabf0b305ca90850ae32655eb51bf74cb72452c620c49bffdb9e902fde5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_490eb7e9de09e649654bcf9b43d40025453e1703403c216a0e392ae5e09bee1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490eb7e9de09e649654bcf9b43d40025453e1703403c216a0e392ae5e09bee1c->enter($__internal_490eb7e9de09e649654bcf9b43d40025453e1703403c216a0e392ae5e09bee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_490eb7e9de09e649654bcf9b43d40025453e1703403c216a0e392ae5e09bee1c->leave($__internal_490eb7e9de09e649654bcf9b43d40025453e1703403c216a0e392ae5e09bee1c_prof);

        
        $__internal_b03aabf0b305ca90850ae32655eb51bf74cb72452c620c49bffdb9e902fde5f9->leave($__internal_b03aabf0b305ca90850ae32655eb51bf74cb72452c620c49bffdb9e902fde5f9_prof);

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
