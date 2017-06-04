<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bef117ab3fc21daeb907f14aa7bb431606496524fc63ef92fd68e47a096c23dd extends Twig_Template
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
        $__internal_eab87506543d68dda197759984f671c1efe1514aeed19f407a2e963d082c081b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab87506543d68dda197759984f671c1efe1514aeed19f407a2e963d082c081b->enter($__internal_eab87506543d68dda197759984f671c1efe1514aeed19f407a2e963d082c081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7abe07db1845de0be88a80bd771c6450d1fbc577edd8d64402716b9c5f3750e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abe07db1845de0be88a80bd771c6450d1fbc577edd8d64402716b9c5f3750e6->enter($__internal_7abe07db1845de0be88a80bd771c6450d1fbc577edd8d64402716b9c5f3750e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab87506543d68dda197759984f671c1efe1514aeed19f407a2e963d082c081b->leave($__internal_eab87506543d68dda197759984f671c1efe1514aeed19f407a2e963d082c081b_prof);

        
        $__internal_7abe07db1845de0be88a80bd771c6450d1fbc577edd8d64402716b9c5f3750e6->leave($__internal_7abe07db1845de0be88a80bd771c6450d1fbc577edd8d64402716b9c5f3750e6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_83c521fd20edc39c3dd98cbed159d23d76a941e4a78a3df28c7d0a728495f499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c521fd20edc39c3dd98cbed159d23d76a941e4a78a3df28c7d0a728495f499->enter($__internal_83c521fd20edc39c3dd98cbed159d23d76a941e4a78a3df28c7d0a728495f499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1da05ce54e90df202d87093b7b16deffb50d9e95a66936c07fec66b52a9aea84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da05ce54e90df202d87093b7b16deffb50d9e95a66936c07fec66b52a9aea84->enter($__internal_1da05ce54e90df202d87093b7b16deffb50d9e95a66936c07fec66b52a9aea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1da05ce54e90df202d87093b7b16deffb50d9e95a66936c07fec66b52a9aea84->leave($__internal_1da05ce54e90df202d87093b7b16deffb50d9e95a66936c07fec66b52a9aea84_prof);

        
        $__internal_83c521fd20edc39c3dd98cbed159d23d76a941e4a78a3df28c7d0a728495f499->leave($__internal_83c521fd20edc39c3dd98cbed159d23d76a941e4a78a3df28c7d0a728495f499_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0af86c8be8105eae525ad8aab980165c8b4a9fc0b248d41f3d5c1ebd68c8090d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af86c8be8105eae525ad8aab980165c8b4a9fc0b248d41f3d5c1ebd68c8090d->enter($__internal_0af86c8be8105eae525ad8aab980165c8b4a9fc0b248d41f3d5c1ebd68c8090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1995b782f14a7c060f0a3c44d2ae1aea85e6713e55a393aee743662c5e50f895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1995b782f14a7c060f0a3c44d2ae1aea85e6713e55a393aee743662c5e50f895->enter($__internal_1995b782f14a7c060f0a3c44d2ae1aea85e6713e55a393aee743662c5e50f895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1995b782f14a7c060f0a3c44d2ae1aea85e6713e55a393aee743662c5e50f895->leave($__internal_1995b782f14a7c060f0a3c44d2ae1aea85e6713e55a393aee743662c5e50f895_prof);

        
        $__internal_0af86c8be8105eae525ad8aab980165c8b4a9fc0b248d41f3d5c1ebd68c8090d->leave($__internal_0af86c8be8105eae525ad8aab980165c8b4a9fc0b248d41f3d5c1ebd68c8090d_prof);

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
