<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b156f8d2fa7fab6c6e5d478c62d25a2591622dc8c4619ca3aeb0740c30f9562b extends Twig_Template
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
        $__internal_7be2f923df7c53d71283b4668f00b78092d191238ed4ae5d7da527184d116cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be2f923df7c53d71283b4668f00b78092d191238ed4ae5d7da527184d116cae->enter($__internal_7be2f923df7c53d71283b4668f00b78092d191238ed4ae5d7da527184d116cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_da9cfa2463ec01e6f503aa10f10f62231bef1de47ba125add5a68e4d25147b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9cfa2463ec01e6f503aa10f10f62231bef1de47ba125add5a68e4d25147b13->enter($__internal_da9cfa2463ec01e6f503aa10f10f62231bef1de47ba125add5a68e4d25147b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be2f923df7c53d71283b4668f00b78092d191238ed4ae5d7da527184d116cae->leave($__internal_7be2f923df7c53d71283b4668f00b78092d191238ed4ae5d7da527184d116cae_prof);

        
        $__internal_da9cfa2463ec01e6f503aa10f10f62231bef1de47ba125add5a68e4d25147b13->leave($__internal_da9cfa2463ec01e6f503aa10f10f62231bef1de47ba125add5a68e4d25147b13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88249c6ac444640eaf49e319a89b68e9cb4105dd5d8b4efc129a9c625a6335fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88249c6ac444640eaf49e319a89b68e9cb4105dd5d8b4efc129a9c625a6335fa->enter($__internal_88249c6ac444640eaf49e319a89b68e9cb4105dd5d8b4efc129a9c625a6335fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b09ae3a03c23e329295d0fb404ee986cbb293c4e4009a17331305c562d87df03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09ae3a03c23e329295d0fb404ee986cbb293c4e4009a17331305c562d87df03->enter($__internal_b09ae3a03c23e329295d0fb404ee986cbb293c4e4009a17331305c562d87df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b09ae3a03c23e329295d0fb404ee986cbb293c4e4009a17331305c562d87df03->leave($__internal_b09ae3a03c23e329295d0fb404ee986cbb293c4e4009a17331305c562d87df03_prof);

        
        $__internal_88249c6ac444640eaf49e319a89b68e9cb4105dd5d8b4efc129a9c625a6335fa->leave($__internal_88249c6ac444640eaf49e319a89b68e9cb4105dd5d8b4efc129a9c625a6335fa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e2adad929994394e3a791a1d823c1ac12896e47ce86e77a3373560ac8d924b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2adad929994394e3a791a1d823c1ac12896e47ce86e77a3373560ac8d924b6->enter($__internal_9e2adad929994394e3a791a1d823c1ac12896e47ce86e77a3373560ac8d924b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b38452ebfabb7c144d3b2d25bb714905cdb7248c109c95b90b206ff9fefcb7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38452ebfabb7c144d3b2d25bb714905cdb7248c109c95b90b206ff9fefcb7e4->enter($__internal_b38452ebfabb7c144d3b2d25bb714905cdb7248c109c95b90b206ff9fefcb7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b38452ebfabb7c144d3b2d25bb714905cdb7248c109c95b90b206ff9fefcb7e4->leave($__internal_b38452ebfabb7c144d3b2d25bb714905cdb7248c109c95b90b206ff9fefcb7e4_prof);

        
        $__internal_9e2adad929994394e3a791a1d823c1ac12896e47ce86e77a3373560ac8d924b6->leave($__internal_9e2adad929994394e3a791a1d823c1ac12896e47ce86e77a3373560ac8d924b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_060804dbe5fe0a9875429dbca75f03cb0380627990f513986d8db572896183be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060804dbe5fe0a9875429dbca75f03cb0380627990f513986d8db572896183be->enter($__internal_060804dbe5fe0a9875429dbca75f03cb0380627990f513986d8db572896183be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52de62433ccb5b931ac8b89c4647d4966eb01293434734d051b6a54dd99607a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52de62433ccb5b931ac8b89c4647d4966eb01293434734d051b6a54dd99607a6->enter($__internal_52de62433ccb5b931ac8b89c4647d4966eb01293434734d051b6a54dd99607a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_52de62433ccb5b931ac8b89c4647d4966eb01293434734d051b6a54dd99607a6->leave($__internal_52de62433ccb5b931ac8b89c4647d4966eb01293434734d051b6a54dd99607a6_prof);

        
        $__internal_060804dbe5fe0a9875429dbca75f03cb0380627990f513986d8db572896183be->leave($__internal_060804dbe5fe0a9875429dbca75f03cb0380627990f513986d8db572896183be_prof);

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
