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
        $__internal_5af300f7cfba04c47dbc42c9366529a996a7949965260f64124bf4952f4789ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af300f7cfba04c47dbc42c9366529a996a7949965260f64124bf4952f4789ee->enter($__internal_5af300f7cfba04c47dbc42c9366529a996a7949965260f64124bf4952f4789ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a0bf232fdfabbdfcd3218330c44ff4cf0b6fac88e84f7b6fb88ecb9cced2c2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0bf232fdfabbdfcd3218330c44ff4cf0b6fac88e84f7b6fb88ecb9cced2c2f4->enter($__internal_a0bf232fdfabbdfcd3218330c44ff4cf0b6fac88e84f7b6fb88ecb9cced2c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af300f7cfba04c47dbc42c9366529a996a7949965260f64124bf4952f4789ee->leave($__internal_5af300f7cfba04c47dbc42c9366529a996a7949965260f64124bf4952f4789ee_prof);

        
        $__internal_a0bf232fdfabbdfcd3218330c44ff4cf0b6fac88e84f7b6fb88ecb9cced2c2f4->leave($__internal_a0bf232fdfabbdfcd3218330c44ff4cf0b6fac88e84f7b6fb88ecb9cced2c2f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c799fca8476ef8cb793e8fa9474f3c2d10b1b4b8a7ac23c1ea0984d64540cd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c799fca8476ef8cb793e8fa9474f3c2d10b1b4b8a7ac23c1ea0984d64540cd63->enter($__internal_c799fca8476ef8cb793e8fa9474f3c2d10b1b4b8a7ac23c1ea0984d64540cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_12c510b593029394cc29987837ddf79b6666931d904822f8122c1e0c58234975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c510b593029394cc29987837ddf79b6666931d904822f8122c1e0c58234975->enter($__internal_12c510b593029394cc29987837ddf79b6666931d904822f8122c1e0c58234975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12c510b593029394cc29987837ddf79b6666931d904822f8122c1e0c58234975->leave($__internal_12c510b593029394cc29987837ddf79b6666931d904822f8122c1e0c58234975_prof);

        
        $__internal_c799fca8476ef8cb793e8fa9474f3c2d10b1b4b8a7ac23c1ea0984d64540cd63->leave($__internal_c799fca8476ef8cb793e8fa9474f3c2d10b1b4b8a7ac23c1ea0984d64540cd63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e736f0509ecd244b17ae86bf0edab4a3b5f0105a3473b54c2436eaae969018f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e736f0509ecd244b17ae86bf0edab4a3b5f0105a3473b54c2436eaae969018f->enter($__internal_1e736f0509ecd244b17ae86bf0edab4a3b5f0105a3473b54c2436eaae969018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3422a0e858eeb6a92001ff465f58ae1467626fe0ff0c3002e02c122e3edd7cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3422a0e858eeb6a92001ff465f58ae1467626fe0ff0c3002e02c122e3edd7cf7->enter($__internal_3422a0e858eeb6a92001ff465f58ae1467626fe0ff0c3002e02c122e3edd7cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3422a0e858eeb6a92001ff465f58ae1467626fe0ff0c3002e02c122e3edd7cf7->leave($__internal_3422a0e858eeb6a92001ff465f58ae1467626fe0ff0c3002e02c122e3edd7cf7_prof);

        
        $__internal_1e736f0509ecd244b17ae86bf0edab4a3b5f0105a3473b54c2436eaae969018f->leave($__internal_1e736f0509ecd244b17ae86bf0edab4a3b5f0105a3473b54c2436eaae969018f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4ec6411fe5d63c861a6382dc9b603edf4e80bb0f6f4c1a0ec1b7750bfed031f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ec6411fe5d63c861a6382dc9b603edf4e80bb0f6f4c1a0ec1b7750bfed031f->enter($__internal_e4ec6411fe5d63c861a6382dc9b603edf4e80bb0f6f4c1a0ec1b7750bfed031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_59f329fa03248ee06aab0796b5eada1a0b1d9155dcd4f38c83b96fafae0a4c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f329fa03248ee06aab0796b5eada1a0b1d9155dcd4f38c83b96fafae0a4c54->enter($__internal_59f329fa03248ee06aab0796b5eada1a0b1d9155dcd4f38c83b96fafae0a4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59f329fa03248ee06aab0796b5eada1a0b1d9155dcd4f38c83b96fafae0a4c54->leave($__internal_59f329fa03248ee06aab0796b5eada1a0b1d9155dcd4f38c83b96fafae0a4c54_prof);

        
        $__internal_e4ec6411fe5d63c861a6382dc9b603edf4e80bb0f6f4c1a0ec1b7750bfed031f->leave($__internal_e4ec6411fe5d63c861a6382dc9b603edf4e80bb0f6f4c1a0ec1b7750bfed031f_prof);

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
