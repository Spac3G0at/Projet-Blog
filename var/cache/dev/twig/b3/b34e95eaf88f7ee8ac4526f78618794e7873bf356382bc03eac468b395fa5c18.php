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
        $__internal_34c56b4ddca149cf4ec75e063fe965a65f3deb1901895bcf304ef8c962d73e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c56b4ddca149cf4ec75e063fe965a65f3deb1901895bcf304ef8c962d73e70->enter($__internal_34c56b4ddca149cf4ec75e063fe965a65f3deb1901895bcf304ef8c962d73e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_20f9031433939e3858682d4269f8fed8d1dca544f74a94923e896ae6ad3aeb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f9031433939e3858682d4269f8fed8d1dca544f74a94923e896ae6ad3aeb6e->enter($__internal_20f9031433939e3858682d4269f8fed8d1dca544f74a94923e896ae6ad3aeb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c56b4ddca149cf4ec75e063fe965a65f3deb1901895bcf304ef8c962d73e70->leave($__internal_34c56b4ddca149cf4ec75e063fe965a65f3deb1901895bcf304ef8c962d73e70_prof);

        
        $__internal_20f9031433939e3858682d4269f8fed8d1dca544f74a94923e896ae6ad3aeb6e->leave($__internal_20f9031433939e3858682d4269f8fed8d1dca544f74a94923e896ae6ad3aeb6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28c9659048848c94b6925d48a782db6c336af6007b8dc18521dc0d1ad711a08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c9659048848c94b6925d48a782db6c336af6007b8dc18521dc0d1ad711a08d->enter($__internal_28c9659048848c94b6925d48a782db6c336af6007b8dc18521dc0d1ad711a08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66a88c88ebfed6084624addac98630345db6bf84f92a2bfb0bfb710ac73799da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a88c88ebfed6084624addac98630345db6bf84f92a2bfb0bfb710ac73799da->enter($__internal_66a88c88ebfed6084624addac98630345db6bf84f92a2bfb0bfb710ac73799da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_66a88c88ebfed6084624addac98630345db6bf84f92a2bfb0bfb710ac73799da->leave($__internal_66a88c88ebfed6084624addac98630345db6bf84f92a2bfb0bfb710ac73799da_prof);

        
        $__internal_28c9659048848c94b6925d48a782db6c336af6007b8dc18521dc0d1ad711a08d->leave($__internal_28c9659048848c94b6925d48a782db6c336af6007b8dc18521dc0d1ad711a08d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8969293e8dbfbd98d88c15617f064d9304f519ca64fa15fb87cb41d5a5697f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8969293e8dbfbd98d88c15617f064d9304f519ca64fa15fb87cb41d5a5697f7a->enter($__internal_8969293e8dbfbd98d88c15617f064d9304f519ca64fa15fb87cb41d5a5697f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b9e646ea9dcf231943e5ca459e987650017cb82c9721d4bfb54ef623af9b68d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e646ea9dcf231943e5ca459e987650017cb82c9721d4bfb54ef623af9b68d5->enter($__internal_b9e646ea9dcf231943e5ca459e987650017cb82c9721d4bfb54ef623af9b68d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b9e646ea9dcf231943e5ca459e987650017cb82c9721d4bfb54ef623af9b68d5->leave($__internal_b9e646ea9dcf231943e5ca459e987650017cb82c9721d4bfb54ef623af9b68d5_prof);

        
        $__internal_8969293e8dbfbd98d88c15617f064d9304f519ca64fa15fb87cb41d5a5697f7a->leave($__internal_8969293e8dbfbd98d88c15617f064d9304f519ca64fa15fb87cb41d5a5697f7a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ed0857e87d6b6615cc6bfd8924ffe53c1a2c5dce287237401994faefafe761a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed0857e87d6b6615cc6bfd8924ffe53c1a2c5dce287237401994faefafe761a->enter($__internal_6ed0857e87d6b6615cc6bfd8924ffe53c1a2c5dce287237401994faefafe761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88dc2de03dad3e71034ab6b0f61000918613200766429f37c29e42a798e1c57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dc2de03dad3e71034ab6b0f61000918613200766429f37c29e42a798e1c57e->enter($__internal_88dc2de03dad3e71034ab6b0f61000918613200766429f37c29e42a798e1c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_88dc2de03dad3e71034ab6b0f61000918613200766429f37c29e42a798e1c57e->leave($__internal_88dc2de03dad3e71034ab6b0f61000918613200766429f37c29e42a798e1c57e_prof);

        
        $__internal_6ed0857e87d6b6615cc6bfd8924ffe53c1a2c5dce287237401994faefafe761a->leave($__internal_6ed0857e87d6b6615cc6bfd8924ffe53c1a2c5dce287237401994faefafe761a_prof);

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
