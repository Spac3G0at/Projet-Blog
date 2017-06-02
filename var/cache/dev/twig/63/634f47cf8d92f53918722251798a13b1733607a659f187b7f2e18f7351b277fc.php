<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3cf3281b7d7b08b0190c4b832277fe1596df31797d74c003b481e72564918c11 extends Twig_Template
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
        $__internal_0462cd8004b84a2105228c33351585e00da78de0f4263de41d81475d0dee1953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0462cd8004b84a2105228c33351585e00da78de0f4263de41d81475d0dee1953->enter($__internal_0462cd8004b84a2105228c33351585e00da78de0f4263de41d81475d0dee1953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bccb2d5b10301dca3de100768c87bdd208beeadd3b5872a2861adde7810f448d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccb2d5b10301dca3de100768c87bdd208beeadd3b5872a2861adde7810f448d->enter($__internal_bccb2d5b10301dca3de100768c87bdd208beeadd3b5872a2861adde7810f448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0462cd8004b84a2105228c33351585e00da78de0f4263de41d81475d0dee1953->leave($__internal_0462cd8004b84a2105228c33351585e00da78de0f4263de41d81475d0dee1953_prof);

        
        $__internal_bccb2d5b10301dca3de100768c87bdd208beeadd3b5872a2861adde7810f448d->leave($__internal_bccb2d5b10301dca3de100768c87bdd208beeadd3b5872a2861adde7810f448d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87933dcec70f78ca3051902d97ad2d5c46c8074382d7212f9deec251ee244ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87933dcec70f78ca3051902d97ad2d5c46c8074382d7212f9deec251ee244ba6->enter($__internal_87933dcec70f78ca3051902d97ad2d5c46c8074382d7212f9deec251ee244ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5038af09f97e29eca80480bbd7f8786c4f61595583b1cd3373c9bb941114c030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5038af09f97e29eca80480bbd7f8786c4f61595583b1cd3373c9bb941114c030->enter($__internal_5038af09f97e29eca80480bbd7f8786c4f61595583b1cd3373c9bb941114c030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5038af09f97e29eca80480bbd7f8786c4f61595583b1cd3373c9bb941114c030->leave($__internal_5038af09f97e29eca80480bbd7f8786c4f61595583b1cd3373c9bb941114c030_prof);

        
        $__internal_87933dcec70f78ca3051902d97ad2d5c46c8074382d7212f9deec251ee244ba6->leave($__internal_87933dcec70f78ca3051902d97ad2d5c46c8074382d7212f9deec251ee244ba6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05a018d4d1eecfd8e0e07e0f06013e7e977288e05275c56b8fd9b891e6a411de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a018d4d1eecfd8e0e07e0f06013e7e977288e05275c56b8fd9b891e6a411de->enter($__internal_05a018d4d1eecfd8e0e07e0f06013e7e977288e05275c56b8fd9b891e6a411de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1afbc724e4efcdee2afc1012b7a84f87027d14b43663b36ea98dcb85f972c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1afbc724e4efcdee2afc1012b7a84f87027d14b43663b36ea98dcb85f972c99->enter($__internal_a1afbc724e4efcdee2afc1012b7a84f87027d14b43663b36ea98dcb85f972c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1afbc724e4efcdee2afc1012b7a84f87027d14b43663b36ea98dcb85f972c99->leave($__internal_a1afbc724e4efcdee2afc1012b7a84f87027d14b43663b36ea98dcb85f972c99_prof);

        
        $__internal_05a018d4d1eecfd8e0e07e0f06013e7e977288e05275c56b8fd9b891e6a411de->leave($__internal_05a018d4d1eecfd8e0e07e0f06013e7e977288e05275c56b8fd9b891e6a411de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67c1d48be55e3bc2e00aeed284833f288b1b9da2f781a6b6df7006bea0a359c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c1d48be55e3bc2e00aeed284833f288b1b9da2f781a6b6df7006bea0a359c3->enter($__internal_67c1d48be55e3bc2e00aeed284833f288b1b9da2f781a6b6df7006bea0a359c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92727371ae18bc5a51e3e2fbfb332c0b0a31572ffdd3169f27c6c941a2bcdd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92727371ae18bc5a51e3e2fbfb332c0b0a31572ffdd3169f27c6c941a2bcdd63->enter($__internal_92727371ae18bc5a51e3e2fbfb332c0b0a31572ffdd3169f27c6c941a2bcdd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92727371ae18bc5a51e3e2fbfb332c0b0a31572ffdd3169f27c6c941a2bcdd63->leave($__internal_92727371ae18bc5a51e3e2fbfb332c0b0a31572ffdd3169f27c6c941a2bcdd63_prof);

        
        $__internal_67c1d48be55e3bc2e00aeed284833f288b1b9da2f781a6b6df7006bea0a359c3->leave($__internal_67c1d48be55e3bc2e00aeed284833f288b1b9da2f781a6b6df7006bea0a359c3_prof);

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
