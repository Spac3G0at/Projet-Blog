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
        $__internal_27dd655e3aab08f3c22fe9f4aa0a42c5cf02afdf552b0e6a100ca1b592b22926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27dd655e3aab08f3c22fe9f4aa0a42c5cf02afdf552b0e6a100ca1b592b22926->enter($__internal_27dd655e3aab08f3c22fe9f4aa0a42c5cf02afdf552b0e6a100ca1b592b22926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_88621c5f419fc512a2a08600cade690b1270c338925463c65e1b95c183e35566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88621c5f419fc512a2a08600cade690b1270c338925463c65e1b95c183e35566->enter($__internal_88621c5f419fc512a2a08600cade690b1270c338925463c65e1b95c183e35566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27dd655e3aab08f3c22fe9f4aa0a42c5cf02afdf552b0e6a100ca1b592b22926->leave($__internal_27dd655e3aab08f3c22fe9f4aa0a42c5cf02afdf552b0e6a100ca1b592b22926_prof);

        
        $__internal_88621c5f419fc512a2a08600cade690b1270c338925463c65e1b95c183e35566->leave($__internal_88621c5f419fc512a2a08600cade690b1270c338925463c65e1b95c183e35566_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ee1b3cab531711e6d825227ca08f67a6f730859b29873993f52d50cd9112447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee1b3cab531711e6d825227ca08f67a6f730859b29873993f52d50cd9112447->enter($__internal_0ee1b3cab531711e6d825227ca08f67a6f730859b29873993f52d50cd9112447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13c31e6f1181d6d071f9f7a5327aed5197036852da7984eb98a320c70bb6a811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c31e6f1181d6d071f9f7a5327aed5197036852da7984eb98a320c70bb6a811->enter($__internal_13c31e6f1181d6d071f9f7a5327aed5197036852da7984eb98a320c70bb6a811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13c31e6f1181d6d071f9f7a5327aed5197036852da7984eb98a320c70bb6a811->leave($__internal_13c31e6f1181d6d071f9f7a5327aed5197036852da7984eb98a320c70bb6a811_prof);

        
        $__internal_0ee1b3cab531711e6d825227ca08f67a6f730859b29873993f52d50cd9112447->leave($__internal_0ee1b3cab531711e6d825227ca08f67a6f730859b29873993f52d50cd9112447_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4be18c7e37674dc8c8e8e1e4ad6fa039a240b4aa6ebbe299c7f01d69935995b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4be18c7e37674dc8c8e8e1e4ad6fa039a240b4aa6ebbe299c7f01d69935995b->enter($__internal_e4be18c7e37674dc8c8e8e1e4ad6fa039a240b4aa6ebbe299c7f01d69935995b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f28b9cc5865b3fa56f8df721b3d6e796f22504fc1d6dcdcf17e9dcf6b93bff0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28b9cc5865b3fa56f8df721b3d6e796f22504fc1d6dcdcf17e9dcf6b93bff0e->enter($__internal_f28b9cc5865b3fa56f8df721b3d6e796f22504fc1d6dcdcf17e9dcf6b93bff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f28b9cc5865b3fa56f8df721b3d6e796f22504fc1d6dcdcf17e9dcf6b93bff0e->leave($__internal_f28b9cc5865b3fa56f8df721b3d6e796f22504fc1d6dcdcf17e9dcf6b93bff0e_prof);

        
        $__internal_e4be18c7e37674dc8c8e8e1e4ad6fa039a240b4aa6ebbe299c7f01d69935995b->leave($__internal_e4be18c7e37674dc8c8e8e1e4ad6fa039a240b4aa6ebbe299c7f01d69935995b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6d68a195b9afd6670ef468eab6d786be7d5772a7858d6221e5fc6965182ada3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d68a195b9afd6670ef468eab6d786be7d5772a7858d6221e5fc6965182ada3->enter($__internal_c6d68a195b9afd6670ef468eab6d786be7d5772a7858d6221e5fc6965182ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_281b73188e39494e98322e848ca9981f949ffaca75d2734e440b5b7ff794b112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281b73188e39494e98322e848ca9981f949ffaca75d2734e440b5b7ff794b112->enter($__internal_281b73188e39494e98322e848ca9981f949ffaca75d2734e440b5b7ff794b112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_281b73188e39494e98322e848ca9981f949ffaca75d2734e440b5b7ff794b112->leave($__internal_281b73188e39494e98322e848ca9981f949ffaca75d2734e440b5b7ff794b112_prof);

        
        $__internal_c6d68a195b9afd6670ef468eab6d786be7d5772a7858d6221e5fc6965182ada3->leave($__internal_c6d68a195b9afd6670ef468eab6d786be7d5772a7858d6221e5fc6965182ada3_prof);

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
