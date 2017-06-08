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
        $__internal_186aa5ec093a806d57de6699a9c5b28ce77781c87990d2c86739a3597df35d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186aa5ec093a806d57de6699a9c5b28ce77781c87990d2c86739a3597df35d3f->enter($__internal_186aa5ec093a806d57de6699a9c5b28ce77781c87990d2c86739a3597df35d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9413fad99473d592b947f442392b8c9641e4abd055ba5cedb9ee83e9c5c080a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9413fad99473d592b947f442392b8c9641e4abd055ba5cedb9ee83e9c5c080a0->enter($__internal_9413fad99473d592b947f442392b8c9641e4abd055ba5cedb9ee83e9c5c080a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_186aa5ec093a806d57de6699a9c5b28ce77781c87990d2c86739a3597df35d3f->leave($__internal_186aa5ec093a806d57de6699a9c5b28ce77781c87990d2c86739a3597df35d3f_prof);

        
        $__internal_9413fad99473d592b947f442392b8c9641e4abd055ba5cedb9ee83e9c5c080a0->leave($__internal_9413fad99473d592b947f442392b8c9641e4abd055ba5cedb9ee83e9c5c080a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73ed4cdb5c983be639fea72bcf84f10a1c5db6f2637fef1be5803bdd7178eb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ed4cdb5c983be639fea72bcf84f10a1c5db6f2637fef1be5803bdd7178eb82->enter($__internal_73ed4cdb5c983be639fea72bcf84f10a1c5db6f2637fef1be5803bdd7178eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_14f3304a2d29ff37b2103e347ca855e62c5a4781e3b20c349987cda268dc0f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f3304a2d29ff37b2103e347ca855e62c5a4781e3b20c349987cda268dc0f66->enter($__internal_14f3304a2d29ff37b2103e347ca855e62c5a4781e3b20c349987cda268dc0f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_14f3304a2d29ff37b2103e347ca855e62c5a4781e3b20c349987cda268dc0f66->leave($__internal_14f3304a2d29ff37b2103e347ca855e62c5a4781e3b20c349987cda268dc0f66_prof);

        
        $__internal_73ed4cdb5c983be639fea72bcf84f10a1c5db6f2637fef1be5803bdd7178eb82->leave($__internal_73ed4cdb5c983be639fea72bcf84f10a1c5db6f2637fef1be5803bdd7178eb82_prof);

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
