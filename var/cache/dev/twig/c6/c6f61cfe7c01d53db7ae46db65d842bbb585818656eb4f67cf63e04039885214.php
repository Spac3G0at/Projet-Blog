<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1a6d2cb9f5a55546455895708bd478f6f56eea27038e71a935864ce10596c783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dbb710cfc50bef45f69069f74f38838416986d0929e65e9829c9c8642f23b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbb710cfc50bef45f69069f74f38838416986d0929e65e9829c9c8642f23b2e->enter($__internal_6dbb710cfc50bef45f69069f74f38838416986d0929e65e9829c9c8642f23b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c02b2c9cb841d014aff2b2ec1e78a482105e74ded82dc89fcc8b8a0eebe97407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02b2c9cb841d014aff2b2ec1e78a482105e74ded82dc89fcc8b8a0eebe97407->enter($__internal_c02b2c9cb841d014aff2b2ec1e78a482105e74ded82dc89fcc8b8a0eebe97407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbb710cfc50bef45f69069f74f38838416986d0929e65e9829c9c8642f23b2e->leave($__internal_6dbb710cfc50bef45f69069f74f38838416986d0929e65e9829c9c8642f23b2e_prof);

        
        $__internal_c02b2c9cb841d014aff2b2ec1e78a482105e74ded82dc89fcc8b8a0eebe97407->leave($__internal_c02b2c9cb841d014aff2b2ec1e78a482105e74ded82dc89fcc8b8a0eebe97407_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_992f1ca5973d0f4bf1e7dcb957655f1be6f6dc31cdede211a6e7cc7babd9c87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992f1ca5973d0f4bf1e7dcb957655f1be6f6dc31cdede211a6e7cc7babd9c87f->enter($__internal_992f1ca5973d0f4bf1e7dcb957655f1be6f6dc31cdede211a6e7cc7babd9c87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e5d13ef70edae5f918e15a0db4011788a9773c7ae22dad1d21f7cdf93c1097e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d13ef70edae5f918e15a0db4011788a9773c7ae22dad1d21f7cdf93c1097e0->enter($__internal_e5d13ef70edae5f918e15a0db4011788a9773c7ae22dad1d21f7cdf93c1097e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e5d13ef70edae5f918e15a0db4011788a9773c7ae22dad1d21f7cdf93c1097e0->leave($__internal_e5d13ef70edae5f918e15a0db4011788a9773c7ae22dad1d21f7cdf93c1097e0_prof);

        
        $__internal_992f1ca5973d0f4bf1e7dcb957655f1be6f6dc31cdede211a6e7cc7babd9c87f->leave($__internal_992f1ca5973d0f4bf1e7dcb957655f1be6f6dc31cdede211a6e7cc7babd9c87f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
