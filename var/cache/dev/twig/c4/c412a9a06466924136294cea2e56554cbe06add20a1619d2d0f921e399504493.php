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
        $__internal_814d670f9f51b5d770b9c389a2299e74ee878ac501f272677cf1f4a828bcf766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814d670f9f51b5d770b9c389a2299e74ee878ac501f272677cf1f4a828bcf766->enter($__internal_814d670f9f51b5d770b9c389a2299e74ee878ac501f272677cf1f4a828bcf766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f10a16c5f10ff8c8122a706bd435c26585bb6fcdeec002edf5839e1f11c9ae8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10a16c5f10ff8c8122a706bd435c26585bb6fcdeec002edf5839e1f11c9ae8b->enter($__internal_f10a16c5f10ff8c8122a706bd435c26585bb6fcdeec002edf5839e1f11c9ae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814d670f9f51b5d770b9c389a2299e74ee878ac501f272677cf1f4a828bcf766->leave($__internal_814d670f9f51b5d770b9c389a2299e74ee878ac501f272677cf1f4a828bcf766_prof);

        
        $__internal_f10a16c5f10ff8c8122a706bd435c26585bb6fcdeec002edf5839e1f11c9ae8b->leave($__internal_f10a16c5f10ff8c8122a706bd435c26585bb6fcdeec002edf5839e1f11c9ae8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2db1889c08fe8a11f7e5d3f7667edfcadcdcb728dd530d3944aec79adb41b6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db1889c08fe8a11f7e5d3f7667edfcadcdcb728dd530d3944aec79adb41b6af->enter($__internal_2db1889c08fe8a11f7e5d3f7667edfcadcdcb728dd530d3944aec79adb41b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e3daaa72bfda085fa5db1c1c1ceedbc1bbaaa1e844cf7d098cdde263755efd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3daaa72bfda085fa5db1c1c1ceedbc1bbaaa1e844cf7d098cdde263755efd78->enter($__internal_e3daaa72bfda085fa5db1c1c1ceedbc1bbaaa1e844cf7d098cdde263755efd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e3daaa72bfda085fa5db1c1c1ceedbc1bbaaa1e844cf7d098cdde263755efd78->leave($__internal_e3daaa72bfda085fa5db1c1c1ceedbc1bbaaa1e844cf7d098cdde263755efd78_prof);

        
        $__internal_2db1889c08fe8a11f7e5d3f7667edfcadcdcb728dd530d3944aec79adb41b6af->leave($__internal_2db1889c08fe8a11f7e5d3f7667edfcadcdcb728dd530d3944aec79adb41b6af_prof);

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
