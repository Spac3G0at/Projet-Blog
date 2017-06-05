<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d72c691ac29038994c6e9718eb1012da021e54cb0b1380c83978488c377ad6d extends Twig_Template
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
        $__internal_278436099a3aa2c662dd78a890e415cb00d75e9d885a987bfae21c1d2ac8cb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278436099a3aa2c662dd78a890e415cb00d75e9d885a987bfae21c1d2ac8cb8e->enter($__internal_278436099a3aa2c662dd78a890e415cb00d75e9d885a987bfae21c1d2ac8cb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd0c9f7e291f56d65e5605eadbfcba61a27ffbb3388db08662f2accabfd99e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0c9f7e291f56d65e5605eadbfcba61a27ffbb3388db08662f2accabfd99e1e->enter($__internal_cd0c9f7e291f56d65e5605eadbfcba61a27ffbb3388db08662f2accabfd99e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_278436099a3aa2c662dd78a890e415cb00d75e9d885a987bfae21c1d2ac8cb8e->leave($__internal_278436099a3aa2c662dd78a890e415cb00d75e9d885a987bfae21c1d2ac8cb8e_prof);

        
        $__internal_cd0c9f7e291f56d65e5605eadbfcba61a27ffbb3388db08662f2accabfd99e1e->leave($__internal_cd0c9f7e291f56d65e5605eadbfcba61a27ffbb3388db08662f2accabfd99e1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9ed99bcafc3b5f88c239c21f9b425c4162ed9fad2fc68efaf5d6b550e310ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ed99bcafc3b5f88c239c21f9b425c4162ed9fad2fc68efaf5d6b550e310ec9->enter($__internal_a9ed99bcafc3b5f88c239c21f9b425c4162ed9fad2fc68efaf5d6b550e310ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3ef71ee29624d699eefaee3d768be84958b61fa0c509dde29dfac7f0d8441ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef71ee29624d699eefaee3d768be84958b61fa0c509dde29dfac7f0d8441ab6->enter($__internal_3ef71ee29624d699eefaee3d768be84958b61fa0c509dde29dfac7f0d8441ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ef71ee29624d699eefaee3d768be84958b61fa0c509dde29dfac7f0d8441ab6->leave($__internal_3ef71ee29624d699eefaee3d768be84958b61fa0c509dde29dfac7f0d8441ab6_prof);

        
        $__internal_a9ed99bcafc3b5f88c239c21f9b425c4162ed9fad2fc68efaf5d6b550e310ec9->leave($__internal_a9ed99bcafc3b5f88c239c21f9b425c4162ed9fad2fc68efaf5d6b550e310ec9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7aa9a5b4423150f017ffd2abd54ec733433a17453694fb954b17566e2e7c7ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa9a5b4423150f017ffd2abd54ec733433a17453694fb954b17566e2e7c7ffd->enter($__internal_7aa9a5b4423150f017ffd2abd54ec733433a17453694fb954b17566e2e7c7ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7217acfda39d9db1ec58be7510283d8dea82c3ad96b1aa349bd3adb227e0347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7217acfda39d9db1ec58be7510283d8dea82c3ad96b1aa349bd3adb227e0347->enter($__internal_c7217acfda39d9db1ec58be7510283d8dea82c3ad96b1aa349bd3adb227e0347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7217acfda39d9db1ec58be7510283d8dea82c3ad96b1aa349bd3adb227e0347->leave($__internal_c7217acfda39d9db1ec58be7510283d8dea82c3ad96b1aa349bd3adb227e0347_prof);

        
        $__internal_7aa9a5b4423150f017ffd2abd54ec733433a17453694fb954b17566e2e7c7ffd->leave($__internal_7aa9a5b4423150f017ffd2abd54ec733433a17453694fb954b17566e2e7c7ffd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47985af45af597bd9a53ad631f88a29fad3159ffd59dfbe83460fd5088015513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47985af45af597bd9a53ad631f88a29fad3159ffd59dfbe83460fd5088015513->enter($__internal_47985af45af597bd9a53ad631f88a29fad3159ffd59dfbe83460fd5088015513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89d9d0a72bfddc72098f345fe0a2bf36af1d0d266fdaac1521a6e09610326dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d9d0a72bfddc72098f345fe0a2bf36af1d0d266fdaac1521a6e09610326dd2->enter($__internal_89d9d0a72bfddc72098f345fe0a2bf36af1d0d266fdaac1521a6e09610326dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89d9d0a72bfddc72098f345fe0a2bf36af1d0d266fdaac1521a6e09610326dd2->leave($__internal_89d9d0a72bfddc72098f345fe0a2bf36af1d0d266fdaac1521a6e09610326dd2_prof);

        
        $__internal_47985af45af597bd9a53ad631f88a29fad3159ffd59dfbe83460fd5088015513->leave($__internal_47985af45af597bd9a53ad631f88a29fad3159ffd59dfbe83460fd5088015513_prof);

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
