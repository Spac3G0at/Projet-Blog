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
        $__internal_5a94d38267028c72d97ef976c0b10ef2dd17fc42ef69cd104ac6f10ffb1bf2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a94d38267028c72d97ef976c0b10ef2dd17fc42ef69cd104ac6f10ffb1bf2d1->enter($__internal_5a94d38267028c72d97ef976c0b10ef2dd17fc42ef69cd104ac6f10ffb1bf2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7dfa7d30fb1b663f613897b42a4d5756c93cb7f01162b9cb76c549ff76b181bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfa7d30fb1b663f613897b42a4d5756c93cb7f01162b9cb76c549ff76b181bc->enter($__internal_7dfa7d30fb1b663f613897b42a4d5756c93cb7f01162b9cb76c549ff76b181bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a94d38267028c72d97ef976c0b10ef2dd17fc42ef69cd104ac6f10ffb1bf2d1->leave($__internal_5a94d38267028c72d97ef976c0b10ef2dd17fc42ef69cd104ac6f10ffb1bf2d1_prof);

        
        $__internal_7dfa7d30fb1b663f613897b42a4d5756c93cb7f01162b9cb76c549ff76b181bc->leave($__internal_7dfa7d30fb1b663f613897b42a4d5756c93cb7f01162b9cb76c549ff76b181bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_145a8f566002456256630b19ab7ca3449bff4ed5f7b4fb41587024084992656c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145a8f566002456256630b19ab7ca3449bff4ed5f7b4fb41587024084992656c->enter($__internal_145a8f566002456256630b19ab7ca3449bff4ed5f7b4fb41587024084992656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_789afb347b2726c38f5b5f62d8081c03d750bdaca1afee4f4a3e85f6ae4b4e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789afb347b2726c38f5b5f62d8081c03d750bdaca1afee4f4a3e85f6ae4b4e6f->enter($__internal_789afb347b2726c38f5b5f62d8081c03d750bdaca1afee4f4a3e85f6ae4b4e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_789afb347b2726c38f5b5f62d8081c03d750bdaca1afee4f4a3e85f6ae4b4e6f->leave($__internal_789afb347b2726c38f5b5f62d8081c03d750bdaca1afee4f4a3e85f6ae4b4e6f_prof);

        
        $__internal_145a8f566002456256630b19ab7ca3449bff4ed5f7b4fb41587024084992656c->leave($__internal_145a8f566002456256630b19ab7ca3449bff4ed5f7b4fb41587024084992656c_prof);

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
