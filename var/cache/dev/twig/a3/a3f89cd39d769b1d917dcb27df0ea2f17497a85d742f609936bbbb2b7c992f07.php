<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7b1bfe980c42297e18c5494983d8222af2ad3a01661a8d42716614f307fb2a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e8382eca6aed868bfd43885c3ba9c1c00995df99db666b86ae73beaa58eafb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8382eca6aed868bfd43885c3ba9c1c00995df99db666b86ae73beaa58eafb4->enter($__internal_9e8382eca6aed868bfd43885c3ba9c1c00995df99db666b86ae73beaa58eafb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ebd838a88f3036b7fe78a82c7e0fe52e5f53a309bde3ae1aa802909a9d502353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd838a88f3036b7fe78a82c7e0fe52e5f53a309bde3ae1aa802909a9d502353->enter($__internal_ebd838a88f3036b7fe78a82c7e0fe52e5f53a309bde3ae1aa802909a9d502353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e8382eca6aed868bfd43885c3ba9c1c00995df99db666b86ae73beaa58eafb4->leave($__internal_9e8382eca6aed868bfd43885c3ba9c1c00995df99db666b86ae73beaa58eafb4_prof);

        
        $__internal_ebd838a88f3036b7fe78a82c7e0fe52e5f53a309bde3ae1aa802909a9d502353->leave($__internal_ebd838a88f3036b7fe78a82c7e0fe52e5f53a309bde3ae1aa802909a9d502353_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4dba9d43b16d5e79a37f0a8dcf6327f47ee37572f7a38ca6f7ed4256bcb0f310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dba9d43b16d5e79a37f0a8dcf6327f47ee37572f7a38ca6f7ed4256bcb0f310->enter($__internal_4dba9d43b16d5e79a37f0a8dcf6327f47ee37572f7a38ca6f7ed4256bcb0f310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_27dfc2e48865ad36c391528b8f9a6bd13629004d8fe2427664165023bcbe7297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dfc2e48865ad36c391528b8f9a6bd13629004d8fe2427664165023bcbe7297->enter($__internal_27dfc2e48865ad36c391528b8f9a6bd13629004d8fe2427664165023bcbe7297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_27dfc2e48865ad36c391528b8f9a6bd13629004d8fe2427664165023bcbe7297->leave($__internal_27dfc2e48865ad36c391528b8f9a6bd13629004d8fe2427664165023bcbe7297_prof);

        
        $__internal_4dba9d43b16d5e79a37f0a8dcf6327f47ee37572f7a38ca6f7ed4256bcb0f310->leave($__internal_4dba9d43b16d5e79a37f0a8dcf6327f47ee37572f7a38ca6f7ed4256bcb0f310_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec6926c1b7c1b5ce97aedbab299cce5198800ded7f8c8f1cf0dc3deda3a738e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6926c1b7c1b5ce97aedbab299cce5198800ded7f8c8f1cf0dc3deda3a738e7->enter($__internal_ec6926c1b7c1b5ce97aedbab299cce5198800ded7f8c8f1cf0dc3deda3a738e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51546f2754f03d605ac80cc2cf5ec40bcdab42761204db94ba7c13c07cc9d671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51546f2754f03d605ac80cc2cf5ec40bcdab42761204db94ba7c13c07cc9d671->enter($__internal_51546f2754f03d605ac80cc2cf5ec40bcdab42761204db94ba7c13c07cc9d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_51546f2754f03d605ac80cc2cf5ec40bcdab42761204db94ba7c13c07cc9d671->leave($__internal_51546f2754f03d605ac80cc2cf5ec40bcdab42761204db94ba7c13c07cc9d671_prof);

        
        $__internal_ec6926c1b7c1b5ce97aedbab299cce5198800ded7f8c8f1cf0dc3deda3a738e7->leave($__internal_ec6926c1b7c1b5ce97aedbab299cce5198800ded7f8c8f1cf0dc3deda3a738e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
