<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_e433fb209157d7060559d0cc886eb3d61cad33eaba69feb79933a6b200a65c9a extends Twig_Template
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
        $__internal_e3ae055fb9d3c82f9e92bd3221e53a92f6257ffebdacafa233e56e1359b57b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ae055fb9d3c82f9e92bd3221e53a92f6257ffebdacafa233e56e1359b57b7d->enter($__internal_e3ae055fb9d3c82f9e92bd3221e53a92f6257ffebdacafa233e56e1359b57b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3eeb6b6ee4d5e190def2bc46b5ed6b50ca7a15597fe416d565b8257b50e67935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eeb6b6ee4d5e190def2bc46b5ed6b50ca7a15597fe416d565b8257b50e67935->enter($__internal_3eeb6b6ee4d5e190def2bc46b5ed6b50ca7a15597fe416d565b8257b50e67935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ae055fb9d3c82f9e92bd3221e53a92f6257ffebdacafa233e56e1359b57b7d->leave($__internal_e3ae055fb9d3c82f9e92bd3221e53a92f6257ffebdacafa233e56e1359b57b7d_prof);

        
        $__internal_3eeb6b6ee4d5e190def2bc46b5ed6b50ca7a15597fe416d565b8257b50e67935->leave($__internal_3eeb6b6ee4d5e190def2bc46b5ed6b50ca7a15597fe416d565b8257b50e67935_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6451edf59beb13cae69ccd70da29571ab1a3916979ff6e1c20f9cf0827c5ac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6451edf59beb13cae69ccd70da29571ab1a3916979ff6e1c20f9cf0827c5ac7b->enter($__internal_6451edf59beb13cae69ccd70da29571ab1a3916979ff6e1c20f9cf0827c5ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cd4390fe24365343dbf65095d08aa7c8e8a15ddcd87303e62b9e75f8d621421c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4390fe24365343dbf65095d08aa7c8e8a15ddcd87303e62b9e75f8d621421c->enter($__internal_cd4390fe24365343dbf65095d08aa7c8e8a15ddcd87303e62b9e75f8d621421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cd4390fe24365343dbf65095d08aa7c8e8a15ddcd87303e62b9e75f8d621421c->leave($__internal_cd4390fe24365343dbf65095d08aa7c8e8a15ddcd87303e62b9e75f8d621421c_prof);

        
        $__internal_6451edf59beb13cae69ccd70da29571ab1a3916979ff6e1c20f9cf0827c5ac7b->leave($__internal_6451edf59beb13cae69ccd70da29571ab1a3916979ff6e1c20f9cf0827c5ac7b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dba90c15af7d14c4ac436dd4a79b36799b47bc2a010c560f6972a5d7d8187a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba90c15af7d14c4ac436dd4a79b36799b47bc2a010c560f6972a5d7d8187a60->enter($__internal_dba90c15af7d14c4ac436dd4a79b36799b47bc2a010c560f6972a5d7d8187a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_625a38b4b1d0e220f4c31cd52f32a401448ea0aeaf4393a1e13da273fa4d7eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625a38b4b1d0e220f4c31cd52f32a401448ea0aeaf4393a1e13da273fa4d7eff->enter($__internal_625a38b4b1d0e220f4c31cd52f32a401448ea0aeaf4393a1e13da273fa4d7eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_625a38b4b1d0e220f4c31cd52f32a401448ea0aeaf4393a1e13da273fa4d7eff->leave($__internal_625a38b4b1d0e220f4c31cd52f32a401448ea0aeaf4393a1e13da273fa4d7eff_prof);

        
        $__internal_dba90c15af7d14c4ac436dd4a79b36799b47bc2a010c560f6972a5d7d8187a60->leave($__internal_dba90c15af7d14c4ac436dd4a79b36799b47bc2a010c560f6972a5d7d8187a60_prof);

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
