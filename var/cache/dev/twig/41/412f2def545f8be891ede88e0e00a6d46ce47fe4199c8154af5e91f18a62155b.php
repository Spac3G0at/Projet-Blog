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
        $__internal_50761e2e29b1f3fb1ec0243db829576e59818038d5c12c84c8401a50d0f53532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50761e2e29b1f3fb1ec0243db829576e59818038d5c12c84c8401a50d0f53532->enter($__internal_50761e2e29b1f3fb1ec0243db829576e59818038d5c12c84c8401a50d0f53532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a64046108e231b26cbbafa471f23d56856abc923ca58dc70ef5de9de51a65779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64046108e231b26cbbafa471f23d56856abc923ca58dc70ef5de9de51a65779->enter($__internal_a64046108e231b26cbbafa471f23d56856abc923ca58dc70ef5de9de51a65779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50761e2e29b1f3fb1ec0243db829576e59818038d5c12c84c8401a50d0f53532->leave($__internal_50761e2e29b1f3fb1ec0243db829576e59818038d5c12c84c8401a50d0f53532_prof);

        
        $__internal_a64046108e231b26cbbafa471f23d56856abc923ca58dc70ef5de9de51a65779->leave($__internal_a64046108e231b26cbbafa471f23d56856abc923ca58dc70ef5de9de51a65779_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61862312c569ddb27ebaf8b8668745c92715042fdde543f19d4ac30025d8ded1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61862312c569ddb27ebaf8b8668745c92715042fdde543f19d4ac30025d8ded1->enter($__internal_61862312c569ddb27ebaf8b8668745c92715042fdde543f19d4ac30025d8ded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c0102e1172bc4f4a35dac4243e02a063634ee9682afe88edc0e63f8af2ee81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0102e1172bc4f4a35dac4243e02a063634ee9682afe88edc0e63f8af2ee81c->enter($__internal_8c0102e1172bc4f4a35dac4243e02a063634ee9682afe88edc0e63f8af2ee81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c0102e1172bc4f4a35dac4243e02a063634ee9682afe88edc0e63f8af2ee81c->leave($__internal_8c0102e1172bc4f4a35dac4243e02a063634ee9682afe88edc0e63f8af2ee81c_prof);

        
        $__internal_61862312c569ddb27ebaf8b8668745c92715042fdde543f19d4ac30025d8ded1->leave($__internal_61862312c569ddb27ebaf8b8668745c92715042fdde543f19d4ac30025d8ded1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aed48a5bbf86a4275d99ee5af34c154e34ad3592e24355d64b07b91b5c1e3ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed48a5bbf86a4275d99ee5af34c154e34ad3592e24355d64b07b91b5c1e3ccd->enter($__internal_aed48a5bbf86a4275d99ee5af34c154e34ad3592e24355d64b07b91b5c1e3ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d52d798c577ed66b6c040e367d276f5fe27139b862559c365b7252e69785fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d52d798c577ed66b6c040e367d276f5fe27139b862559c365b7252e69785fb3->enter($__internal_5d52d798c577ed66b6c040e367d276f5fe27139b862559c365b7252e69785fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d52d798c577ed66b6c040e367d276f5fe27139b862559c365b7252e69785fb3->leave($__internal_5d52d798c577ed66b6c040e367d276f5fe27139b862559c365b7252e69785fb3_prof);

        
        $__internal_aed48a5bbf86a4275d99ee5af34c154e34ad3592e24355d64b07b91b5c1e3ccd->leave($__internal_aed48a5bbf86a4275d99ee5af34c154e34ad3592e24355d64b07b91b5c1e3ccd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebb1f68de292862a0760ea12297b2e8e1e46952645f9fa0b9510c20d244dc485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb1f68de292862a0760ea12297b2e8e1e46952645f9fa0b9510c20d244dc485->enter($__internal_ebb1f68de292862a0760ea12297b2e8e1e46952645f9fa0b9510c20d244dc485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_703c4b0cb9507fabebd14347c363aaaed0f4fd2b63185fde8c1c1d7d0fffbdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703c4b0cb9507fabebd14347c363aaaed0f4fd2b63185fde8c1c1d7d0fffbdbc->enter($__internal_703c4b0cb9507fabebd14347c363aaaed0f4fd2b63185fde8c1c1d7d0fffbdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_703c4b0cb9507fabebd14347c363aaaed0f4fd2b63185fde8c1c1d7d0fffbdbc->leave($__internal_703c4b0cb9507fabebd14347c363aaaed0f4fd2b63185fde8c1c1d7d0fffbdbc_prof);

        
        $__internal_ebb1f68de292862a0760ea12297b2e8e1e46952645f9fa0b9510c20d244dc485->leave($__internal_ebb1f68de292862a0760ea12297b2e8e1e46952645f9fa0b9510c20d244dc485_prof);

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
