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
        $__internal_29b631fb68dc8cee60bcef8e0c07a68eb7b14e9a81f9e3520d253a6025cf7fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b631fb68dc8cee60bcef8e0c07a68eb7b14e9a81f9e3520d253a6025cf7fa4->enter($__internal_29b631fb68dc8cee60bcef8e0c07a68eb7b14e9a81f9e3520d253a6025cf7fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_727629ec3f01630fdb14055844bfc8c9d573aa53988d4a8dad0d942467447d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727629ec3f01630fdb14055844bfc8c9d573aa53988d4a8dad0d942467447d55->enter($__internal_727629ec3f01630fdb14055844bfc8c9d573aa53988d4a8dad0d942467447d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b631fb68dc8cee60bcef8e0c07a68eb7b14e9a81f9e3520d253a6025cf7fa4->leave($__internal_29b631fb68dc8cee60bcef8e0c07a68eb7b14e9a81f9e3520d253a6025cf7fa4_prof);

        
        $__internal_727629ec3f01630fdb14055844bfc8c9d573aa53988d4a8dad0d942467447d55->leave($__internal_727629ec3f01630fdb14055844bfc8c9d573aa53988d4a8dad0d942467447d55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b98a220ee736739fc10e80611210b4d85e11cf3f0ce6552a5ae185dbc4ed0caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98a220ee736739fc10e80611210b4d85e11cf3f0ce6552a5ae185dbc4ed0caa->enter($__internal_b98a220ee736739fc10e80611210b4d85e11cf3f0ce6552a5ae185dbc4ed0caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af82bd962457573cb324b5288a8f7fc951d2ea85511f35ec5b52b7558a9c0408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af82bd962457573cb324b5288a8f7fc951d2ea85511f35ec5b52b7558a9c0408->enter($__internal_af82bd962457573cb324b5288a8f7fc951d2ea85511f35ec5b52b7558a9c0408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_af82bd962457573cb324b5288a8f7fc951d2ea85511f35ec5b52b7558a9c0408->leave($__internal_af82bd962457573cb324b5288a8f7fc951d2ea85511f35ec5b52b7558a9c0408_prof);

        
        $__internal_b98a220ee736739fc10e80611210b4d85e11cf3f0ce6552a5ae185dbc4ed0caa->leave($__internal_b98a220ee736739fc10e80611210b4d85e11cf3f0ce6552a5ae185dbc4ed0caa_prof);

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
