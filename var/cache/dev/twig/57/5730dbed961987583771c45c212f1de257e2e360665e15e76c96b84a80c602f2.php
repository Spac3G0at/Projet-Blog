<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4b8afa608279f00a7116361b5c13cfd7d0eaaf763616be612f2de4cd2a6ed9d9 extends Twig_Template
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
        $__internal_edeb8bf0c22a6b8522cbb6dc7223928042cb48e5048d03e586043a579f891ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edeb8bf0c22a6b8522cbb6dc7223928042cb48e5048d03e586043a579f891ea7->enter($__internal_edeb8bf0c22a6b8522cbb6dc7223928042cb48e5048d03e586043a579f891ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1cee020ac10a00751b3e5359f8fde5f97ea09afd5e870d01a1c0d39aa6bb89f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cee020ac10a00751b3e5359f8fde5f97ea09afd5e870d01a1c0d39aa6bb89f5->enter($__internal_1cee020ac10a00751b3e5359f8fde5f97ea09afd5e870d01a1c0d39aa6bb89f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edeb8bf0c22a6b8522cbb6dc7223928042cb48e5048d03e586043a579f891ea7->leave($__internal_edeb8bf0c22a6b8522cbb6dc7223928042cb48e5048d03e586043a579f891ea7_prof);

        
        $__internal_1cee020ac10a00751b3e5359f8fde5f97ea09afd5e870d01a1c0d39aa6bb89f5->leave($__internal_1cee020ac10a00751b3e5359f8fde5f97ea09afd5e870d01a1c0d39aa6bb89f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_526bbc0242d5249489f670f67e5c8a2c9e6c17de3dcf4b36b33e0825a2890b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526bbc0242d5249489f670f67e5c8a2c9e6c17de3dcf4b36b33e0825a2890b72->enter($__internal_526bbc0242d5249489f670f67e5c8a2c9e6c17de3dcf4b36b33e0825a2890b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_330bedcb9d636c3943f519e97efe1be972c9b650703c9df2d1c9001033f7d92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330bedcb9d636c3943f519e97efe1be972c9b650703c9df2d1c9001033f7d92e->enter($__internal_330bedcb9d636c3943f519e97efe1be972c9b650703c9df2d1c9001033f7d92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_330bedcb9d636c3943f519e97efe1be972c9b650703c9df2d1c9001033f7d92e->leave($__internal_330bedcb9d636c3943f519e97efe1be972c9b650703c9df2d1c9001033f7d92e_prof);

        
        $__internal_526bbc0242d5249489f670f67e5c8a2c9e6c17de3dcf4b36b33e0825a2890b72->leave($__internal_526bbc0242d5249489f670f67e5c8a2c9e6c17de3dcf4b36b33e0825a2890b72_prof);

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
