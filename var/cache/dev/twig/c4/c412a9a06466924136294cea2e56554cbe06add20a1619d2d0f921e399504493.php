<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_978a8899ad1b167d35ce37d93ad12d38f99a34bc6c6c5f2d250758d153c18796 extends Twig_Template
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
        $__internal_62b48762f007a7d8010b8344fba62820ad26b23d0be2c2359dd44c85845b5392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b48762f007a7d8010b8344fba62820ad26b23d0be2c2359dd44c85845b5392->enter($__internal_62b48762f007a7d8010b8344fba62820ad26b23d0be2c2359dd44c85845b5392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_52f176a9607adf386d2a0035b5a5d8e3bc02d6b97df7293defaecbbb12094b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f176a9607adf386d2a0035b5a5d8e3bc02d6b97df7293defaecbbb12094b74->enter($__internal_52f176a9607adf386d2a0035b5a5d8e3bc02d6b97df7293defaecbbb12094b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b48762f007a7d8010b8344fba62820ad26b23d0be2c2359dd44c85845b5392->leave($__internal_62b48762f007a7d8010b8344fba62820ad26b23d0be2c2359dd44c85845b5392_prof);

        
        $__internal_52f176a9607adf386d2a0035b5a5d8e3bc02d6b97df7293defaecbbb12094b74->leave($__internal_52f176a9607adf386d2a0035b5a5d8e3bc02d6b97df7293defaecbbb12094b74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51bfa6526bc93e8ca84e190dea403eb1611b945bfff4ee10b922abbdce7f406a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bfa6526bc93e8ca84e190dea403eb1611b945bfff4ee10b922abbdce7f406a->enter($__internal_51bfa6526bc93e8ca84e190dea403eb1611b945bfff4ee10b922abbdce7f406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c045142590f1ab85315eed42f678d2100c6326779f9cc69d9dee1b86b8c69dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c045142590f1ab85315eed42f678d2100c6326779f9cc69d9dee1b86b8c69dfc->enter($__internal_c045142590f1ab85315eed42f678d2100c6326779f9cc69d9dee1b86b8c69dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c045142590f1ab85315eed42f678d2100c6326779f9cc69d9dee1b86b8c69dfc->leave($__internal_c045142590f1ab85315eed42f678d2100c6326779f9cc69d9dee1b86b8c69dfc_prof);

        
        $__internal_51bfa6526bc93e8ca84e190dea403eb1611b945bfff4ee10b922abbdce7f406a->leave($__internal_51bfa6526bc93e8ca84e190dea403eb1611b945bfff4ee10b922abbdce7f406a_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
