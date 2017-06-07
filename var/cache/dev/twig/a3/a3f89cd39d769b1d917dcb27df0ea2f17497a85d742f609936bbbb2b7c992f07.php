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
        $__internal_0a97466e01c40d8dee2b7b120c60f7c48d1bab8cc56b5669340acbef05eafd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a97466e01c40d8dee2b7b120c60f7c48d1bab8cc56b5669340acbef05eafd8b->enter($__internal_0a97466e01c40d8dee2b7b120c60f7c48d1bab8cc56b5669340acbef05eafd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_997d16ed2c98c841eee66bc44874bf874339dc6a1482ee85a78e22bcff960741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997d16ed2c98c841eee66bc44874bf874339dc6a1482ee85a78e22bcff960741->enter($__internal_997d16ed2c98c841eee66bc44874bf874339dc6a1482ee85a78e22bcff960741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a97466e01c40d8dee2b7b120c60f7c48d1bab8cc56b5669340acbef05eafd8b->leave($__internal_0a97466e01c40d8dee2b7b120c60f7c48d1bab8cc56b5669340acbef05eafd8b_prof);

        
        $__internal_997d16ed2c98c841eee66bc44874bf874339dc6a1482ee85a78e22bcff960741->leave($__internal_997d16ed2c98c841eee66bc44874bf874339dc6a1482ee85a78e22bcff960741_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_05c019d2004d1758bd96b8c8bda9f851d4a2f8076c3f9e5f0a33c6cbe633dbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c019d2004d1758bd96b8c8bda9f851d4a2f8076c3f9e5f0a33c6cbe633dbd4->enter($__internal_05c019d2004d1758bd96b8c8bda9f851d4a2f8076c3f9e5f0a33c6cbe633dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7f657c55ffc00624633c9cc63b0f0616f748a3a4102681db4d76dcccba10b649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f657c55ffc00624633c9cc63b0f0616f748a3a4102681db4d76dcccba10b649->enter($__internal_7f657c55ffc00624633c9cc63b0f0616f748a3a4102681db4d76dcccba10b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7f657c55ffc00624633c9cc63b0f0616f748a3a4102681db4d76dcccba10b649->leave($__internal_7f657c55ffc00624633c9cc63b0f0616f748a3a4102681db4d76dcccba10b649_prof);

        
        $__internal_05c019d2004d1758bd96b8c8bda9f851d4a2f8076c3f9e5f0a33c6cbe633dbd4->leave($__internal_05c019d2004d1758bd96b8c8bda9f851d4a2f8076c3f9e5f0a33c6cbe633dbd4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5e769efe69f600f3b988f1ec77206f300bc93829d421aef0e2885cc5344edc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e769efe69f600f3b988f1ec77206f300bc93829d421aef0e2885cc5344edc1->enter($__internal_e5e769efe69f600f3b988f1ec77206f300bc93829d421aef0e2885cc5344edc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e12c2398ff7cc3fab64646b082046b588dcdbc030beea57cd2d818799e4d58a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12c2398ff7cc3fab64646b082046b588dcdbc030beea57cd2d818799e4d58a2->enter($__internal_e12c2398ff7cc3fab64646b082046b588dcdbc030beea57cd2d818799e4d58a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e12c2398ff7cc3fab64646b082046b588dcdbc030beea57cd2d818799e4d58a2->leave($__internal_e12c2398ff7cc3fab64646b082046b588dcdbc030beea57cd2d818799e4d58a2_prof);

        
        $__internal_e5e769efe69f600f3b988f1ec77206f300bc93829d421aef0e2885cc5344edc1->leave($__internal_e5e769efe69f600f3b988f1ec77206f300bc93829d421aef0e2885cc5344edc1_prof);

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
