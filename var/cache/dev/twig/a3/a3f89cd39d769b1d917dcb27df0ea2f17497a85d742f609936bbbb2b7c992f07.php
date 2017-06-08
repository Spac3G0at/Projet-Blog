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
        $__internal_981542404948f97b8b15b7068fb9a90eb71cb9a6bf237fd4d62d5238f5e6db64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981542404948f97b8b15b7068fb9a90eb71cb9a6bf237fd4d62d5238f5e6db64->enter($__internal_981542404948f97b8b15b7068fb9a90eb71cb9a6bf237fd4d62d5238f5e6db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0eacc9c456c019f7a2019ecd4daacb91b08b57a725eabb856b8af3dd478937eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eacc9c456c019f7a2019ecd4daacb91b08b57a725eabb856b8af3dd478937eb->enter($__internal_0eacc9c456c019f7a2019ecd4daacb91b08b57a725eabb856b8af3dd478937eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981542404948f97b8b15b7068fb9a90eb71cb9a6bf237fd4d62d5238f5e6db64->leave($__internal_981542404948f97b8b15b7068fb9a90eb71cb9a6bf237fd4d62d5238f5e6db64_prof);

        
        $__internal_0eacc9c456c019f7a2019ecd4daacb91b08b57a725eabb856b8af3dd478937eb->leave($__internal_0eacc9c456c019f7a2019ecd4daacb91b08b57a725eabb856b8af3dd478937eb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_147fd0d89bb0bd63b42c290d39d201ded43659c5369411e9616027e665112bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147fd0d89bb0bd63b42c290d39d201ded43659c5369411e9616027e665112bba->enter($__internal_147fd0d89bb0bd63b42c290d39d201ded43659c5369411e9616027e665112bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_398b5ef248080b688b1dfc4739dd33c82e2803ca9ca700290037b3bc05a03a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398b5ef248080b688b1dfc4739dd33c82e2803ca9ca700290037b3bc05a03a21->enter($__internal_398b5ef248080b688b1dfc4739dd33c82e2803ca9ca700290037b3bc05a03a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_398b5ef248080b688b1dfc4739dd33c82e2803ca9ca700290037b3bc05a03a21->leave($__internal_398b5ef248080b688b1dfc4739dd33c82e2803ca9ca700290037b3bc05a03a21_prof);

        
        $__internal_147fd0d89bb0bd63b42c290d39d201ded43659c5369411e9616027e665112bba->leave($__internal_147fd0d89bb0bd63b42c290d39d201ded43659c5369411e9616027e665112bba_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c21131552bf8171ce42f5d30e77a07235a13187dd67db56180751e65a8b68904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21131552bf8171ce42f5d30e77a07235a13187dd67db56180751e65a8b68904->enter($__internal_c21131552bf8171ce42f5d30e77a07235a13187dd67db56180751e65a8b68904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5efd1d20b11aa52912225af5e312cd97268acb8657f88c7513f8a61702d2491a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efd1d20b11aa52912225af5e312cd97268acb8657f88c7513f8a61702d2491a->enter($__internal_5efd1d20b11aa52912225af5e312cd97268acb8657f88c7513f8a61702d2491a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5efd1d20b11aa52912225af5e312cd97268acb8657f88c7513f8a61702d2491a->leave($__internal_5efd1d20b11aa52912225af5e312cd97268acb8657f88c7513f8a61702d2491a_prof);

        
        $__internal_c21131552bf8171ce42f5d30e77a07235a13187dd67db56180751e65a8b68904->leave($__internal_c21131552bf8171ce42f5d30e77a07235a13187dd67db56180751e65a8b68904_prof);

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
