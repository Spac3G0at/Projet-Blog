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
        $__internal_f3f9d6719ed4a69a158eae511ae0a57322e900af69084ce9bac786face52f1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f9d6719ed4a69a158eae511ae0a57322e900af69084ce9bac786face52f1c3->enter($__internal_f3f9d6719ed4a69a158eae511ae0a57322e900af69084ce9bac786face52f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_56e4aac1a6704c130c15b866ab4b7090436c84116ab26b87cb7e81f592c4f115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e4aac1a6704c130c15b866ab4b7090436c84116ab26b87cb7e81f592c4f115->enter($__internal_56e4aac1a6704c130c15b866ab4b7090436c84116ab26b87cb7e81f592c4f115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f9d6719ed4a69a158eae511ae0a57322e900af69084ce9bac786face52f1c3->leave($__internal_f3f9d6719ed4a69a158eae511ae0a57322e900af69084ce9bac786face52f1c3_prof);

        
        $__internal_56e4aac1a6704c130c15b866ab4b7090436c84116ab26b87cb7e81f592c4f115->leave($__internal_56e4aac1a6704c130c15b866ab4b7090436c84116ab26b87cb7e81f592c4f115_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_189664825c6f10d6532ff10cb71a8ad38cd00015998ac233c54525d30013237b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189664825c6f10d6532ff10cb71a8ad38cd00015998ac233c54525d30013237b->enter($__internal_189664825c6f10d6532ff10cb71a8ad38cd00015998ac233c54525d30013237b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e0fe440ce88b403501c3377cc15963a9552fee4418cf3a6322182f30d2b96ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0fe440ce88b403501c3377cc15963a9552fee4418cf3a6322182f30d2b96ad->enter($__internal_4e0fe440ce88b403501c3377cc15963a9552fee4418cf3a6322182f30d2b96ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e0fe440ce88b403501c3377cc15963a9552fee4418cf3a6322182f30d2b96ad->leave($__internal_4e0fe440ce88b403501c3377cc15963a9552fee4418cf3a6322182f30d2b96ad_prof);

        
        $__internal_189664825c6f10d6532ff10cb71a8ad38cd00015998ac233c54525d30013237b->leave($__internal_189664825c6f10d6532ff10cb71a8ad38cd00015998ac233c54525d30013237b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdccb6e1317a03532db69a0fc004df8cdc780199e90a3fd1d95458959b0d6a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdccb6e1317a03532db69a0fc004df8cdc780199e90a3fd1d95458959b0d6a24->enter($__internal_bdccb6e1317a03532db69a0fc004df8cdc780199e90a3fd1d95458959b0d6a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ffc55b32ce5e4332fcbb5866697d485c612dfb7b135df201416211bcaa47137e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc55b32ce5e4332fcbb5866697d485c612dfb7b135df201416211bcaa47137e->enter($__internal_ffc55b32ce5e4332fcbb5866697d485c612dfb7b135df201416211bcaa47137e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ffc55b32ce5e4332fcbb5866697d485c612dfb7b135df201416211bcaa47137e->leave($__internal_ffc55b32ce5e4332fcbb5866697d485c612dfb7b135df201416211bcaa47137e_prof);

        
        $__internal_bdccb6e1317a03532db69a0fc004df8cdc780199e90a3fd1d95458959b0d6a24->leave($__internal_bdccb6e1317a03532db69a0fc004df8cdc780199e90a3fd1d95458959b0d6a24_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2bad4c0589924125140e1df49a28878985acd00ad6c7bf97d21c16331506b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bad4c0589924125140e1df49a28878985acd00ad6c7bf97d21c16331506b99->enter($__internal_f2bad4c0589924125140e1df49a28878985acd00ad6c7bf97d21c16331506b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a6237e9d590d5a987c072940fb6dbb753b43c06bd6018e8edae4a8f51aa8495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6237e9d590d5a987c072940fb6dbb753b43c06bd6018e8edae4a8f51aa8495->enter($__internal_1a6237e9d590d5a987c072940fb6dbb753b43c06bd6018e8edae4a8f51aa8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1a6237e9d590d5a987c072940fb6dbb753b43c06bd6018e8edae4a8f51aa8495->leave($__internal_1a6237e9d590d5a987c072940fb6dbb753b43c06bd6018e8edae4a8f51aa8495_prof);

        
        $__internal_f2bad4c0589924125140e1df49a28878985acd00ad6c7bf97d21c16331506b99->leave($__internal_f2bad4c0589924125140e1df49a28878985acd00ad6c7bf97d21c16331506b99_prof);

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
