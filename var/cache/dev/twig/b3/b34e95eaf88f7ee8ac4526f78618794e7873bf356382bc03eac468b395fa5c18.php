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
        $__internal_195213f01f155b82b3bb77a8a31d6c5e514069125915ba6aebea675aed01cd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195213f01f155b82b3bb77a8a31d6c5e514069125915ba6aebea675aed01cd76->enter($__internal_195213f01f155b82b3bb77a8a31d6c5e514069125915ba6aebea675aed01cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_55f39ecee436a7e0c7992515cb7ca93581b25aff70e77bf90e1cab11ad4ce068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f39ecee436a7e0c7992515cb7ca93581b25aff70e77bf90e1cab11ad4ce068->enter($__internal_55f39ecee436a7e0c7992515cb7ca93581b25aff70e77bf90e1cab11ad4ce068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_195213f01f155b82b3bb77a8a31d6c5e514069125915ba6aebea675aed01cd76->leave($__internal_195213f01f155b82b3bb77a8a31d6c5e514069125915ba6aebea675aed01cd76_prof);

        
        $__internal_55f39ecee436a7e0c7992515cb7ca93581b25aff70e77bf90e1cab11ad4ce068->leave($__internal_55f39ecee436a7e0c7992515cb7ca93581b25aff70e77bf90e1cab11ad4ce068_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19d6b05cf296e91ad2201c9852004a429d7cb5d8d9effbf5f5296c45b066deb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d6b05cf296e91ad2201c9852004a429d7cb5d8d9effbf5f5296c45b066deb2->enter($__internal_19d6b05cf296e91ad2201c9852004a429d7cb5d8d9effbf5f5296c45b066deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_269ab8bcd68de05902fc6dc9132556e23e5bf7f0b38fd62ae9ed4310ad30e6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269ab8bcd68de05902fc6dc9132556e23e5bf7f0b38fd62ae9ed4310ad30e6c5->enter($__internal_269ab8bcd68de05902fc6dc9132556e23e5bf7f0b38fd62ae9ed4310ad30e6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_269ab8bcd68de05902fc6dc9132556e23e5bf7f0b38fd62ae9ed4310ad30e6c5->leave($__internal_269ab8bcd68de05902fc6dc9132556e23e5bf7f0b38fd62ae9ed4310ad30e6c5_prof);

        
        $__internal_19d6b05cf296e91ad2201c9852004a429d7cb5d8d9effbf5f5296c45b066deb2->leave($__internal_19d6b05cf296e91ad2201c9852004a429d7cb5d8d9effbf5f5296c45b066deb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f781e1e8b8866893b9811f468b38dafb8b40af07272dc81e6991ec736f7c517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f781e1e8b8866893b9811f468b38dafb8b40af07272dc81e6991ec736f7c517->enter($__internal_6f781e1e8b8866893b9811f468b38dafb8b40af07272dc81e6991ec736f7c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5acc61243f182b0d2968ccc0bee8c08a5a7ce6aef7f78e300ffd03c5d816f541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acc61243f182b0d2968ccc0bee8c08a5a7ce6aef7f78e300ffd03c5d816f541->enter($__internal_5acc61243f182b0d2968ccc0bee8c08a5a7ce6aef7f78e300ffd03c5d816f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5acc61243f182b0d2968ccc0bee8c08a5a7ce6aef7f78e300ffd03c5d816f541->leave($__internal_5acc61243f182b0d2968ccc0bee8c08a5a7ce6aef7f78e300ffd03c5d816f541_prof);

        
        $__internal_6f781e1e8b8866893b9811f468b38dafb8b40af07272dc81e6991ec736f7c517->leave($__internal_6f781e1e8b8866893b9811f468b38dafb8b40af07272dc81e6991ec736f7c517_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc0d0310199a72b2b3be29c0704903f4ff06347bcb596faab90c2d0ac0d80c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0d0310199a72b2b3be29c0704903f4ff06347bcb596faab90c2d0ac0d80c63->enter($__internal_bc0d0310199a72b2b3be29c0704903f4ff06347bcb596faab90c2d0ac0d80c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_733df70c84be4d479af5a271a2a582420f5e0f7174722467f2289a76b7447d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733df70c84be4d479af5a271a2a582420f5e0f7174722467f2289a76b7447d59->enter($__internal_733df70c84be4d479af5a271a2a582420f5e0f7174722467f2289a76b7447d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_733df70c84be4d479af5a271a2a582420f5e0f7174722467f2289a76b7447d59->leave($__internal_733df70c84be4d479af5a271a2a582420f5e0f7174722467f2289a76b7447d59_prof);

        
        $__internal_bc0d0310199a72b2b3be29c0704903f4ff06347bcb596faab90c2d0ac0d80c63->leave($__internal_bc0d0310199a72b2b3be29c0704903f4ff06347bcb596faab90c2d0ac0d80c63_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
