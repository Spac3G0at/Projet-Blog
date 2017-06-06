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
        $__internal_f3077eb49e31a928f454dd6a6ffd094279258f4d652cd5255a97bcaff6ecf221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3077eb49e31a928f454dd6a6ffd094279258f4d652cd5255a97bcaff6ecf221->enter($__internal_f3077eb49e31a928f454dd6a6ffd094279258f4d652cd5255a97bcaff6ecf221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_37e668267b2b2d1960003f863f8a201df30b9dd4d025fefb77eb7e3924969736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e668267b2b2d1960003f863f8a201df30b9dd4d025fefb77eb7e3924969736->enter($__internal_37e668267b2b2d1960003f863f8a201df30b9dd4d025fefb77eb7e3924969736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3077eb49e31a928f454dd6a6ffd094279258f4d652cd5255a97bcaff6ecf221->leave($__internal_f3077eb49e31a928f454dd6a6ffd094279258f4d652cd5255a97bcaff6ecf221_prof);

        
        $__internal_37e668267b2b2d1960003f863f8a201df30b9dd4d025fefb77eb7e3924969736->leave($__internal_37e668267b2b2d1960003f863f8a201df30b9dd4d025fefb77eb7e3924969736_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_369006548415c09ad67d29644aa338bc4e0893c5c6b2383a0a12afb516fc0f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369006548415c09ad67d29644aa338bc4e0893c5c6b2383a0a12afb516fc0f73->enter($__internal_369006548415c09ad67d29644aa338bc4e0893c5c6b2383a0a12afb516fc0f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d743668b68c440fce4f68aab7370d7109145b3a39f955c960fbde909bca79033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d743668b68c440fce4f68aab7370d7109145b3a39f955c960fbde909bca79033->enter($__internal_d743668b68c440fce4f68aab7370d7109145b3a39f955c960fbde909bca79033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d743668b68c440fce4f68aab7370d7109145b3a39f955c960fbde909bca79033->leave($__internal_d743668b68c440fce4f68aab7370d7109145b3a39f955c960fbde909bca79033_prof);

        
        $__internal_369006548415c09ad67d29644aa338bc4e0893c5c6b2383a0a12afb516fc0f73->leave($__internal_369006548415c09ad67d29644aa338bc4e0893c5c6b2383a0a12afb516fc0f73_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_314e6f23592e78b0ad1d9a4742041b89b10a38cdfb58ce911194a9093aff8f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314e6f23592e78b0ad1d9a4742041b89b10a38cdfb58ce911194a9093aff8f5f->enter($__internal_314e6f23592e78b0ad1d9a4742041b89b10a38cdfb58ce911194a9093aff8f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad8c485a27fb2cc6fac74edd16a3ba00dd9f73ffff169bdc72a5eb9f19af6828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8c485a27fb2cc6fac74edd16a3ba00dd9f73ffff169bdc72a5eb9f19af6828->enter($__internal_ad8c485a27fb2cc6fac74edd16a3ba00dd9f73ffff169bdc72a5eb9f19af6828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad8c485a27fb2cc6fac74edd16a3ba00dd9f73ffff169bdc72a5eb9f19af6828->leave($__internal_ad8c485a27fb2cc6fac74edd16a3ba00dd9f73ffff169bdc72a5eb9f19af6828_prof);

        
        $__internal_314e6f23592e78b0ad1d9a4742041b89b10a38cdfb58ce911194a9093aff8f5f->leave($__internal_314e6f23592e78b0ad1d9a4742041b89b10a38cdfb58ce911194a9093aff8f5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7848956df7e7bbec2c5304cefd4f6b87d25ae3c3cf8f9e605cf40ef930bcc78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7848956df7e7bbec2c5304cefd4f6b87d25ae3c3cf8f9e605cf40ef930bcc78a->enter($__internal_7848956df7e7bbec2c5304cefd4f6b87d25ae3c3cf8f9e605cf40ef930bcc78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1f39c2f7db1f384a68cd56ab6ec909eae81d56c6142337ce5d484c1b3aba5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f39c2f7db1f384a68cd56ab6ec909eae81d56c6142337ce5d484c1b3aba5e2->enter($__internal_c1f39c2f7db1f384a68cd56ab6ec909eae81d56c6142337ce5d484c1b3aba5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1f39c2f7db1f384a68cd56ab6ec909eae81d56c6142337ce5d484c1b3aba5e2->leave($__internal_c1f39c2f7db1f384a68cd56ab6ec909eae81d56c6142337ce5d484c1b3aba5e2_prof);

        
        $__internal_7848956df7e7bbec2c5304cefd4f6b87d25ae3c3cf8f9e605cf40ef930bcc78a->leave($__internal_7848956df7e7bbec2c5304cefd4f6b87d25ae3c3cf8f9e605cf40ef930bcc78a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
