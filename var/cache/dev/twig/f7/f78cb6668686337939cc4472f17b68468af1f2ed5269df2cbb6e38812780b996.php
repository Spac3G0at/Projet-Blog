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
        $__internal_90a0f30966054769a602d8ae937300c61abc88d29fb45b61d023a054c151bbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a0f30966054769a602d8ae937300c61abc88d29fb45b61d023a054c151bbc4->enter($__internal_90a0f30966054769a602d8ae937300c61abc88d29fb45b61d023a054c151bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_69057b9c20fe21b118d66709f69b94fe0644ddbd35d730c10a1145832d82a391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69057b9c20fe21b118d66709f69b94fe0644ddbd35d730c10a1145832d82a391->enter($__internal_69057b9c20fe21b118d66709f69b94fe0644ddbd35d730c10a1145832d82a391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a0f30966054769a602d8ae937300c61abc88d29fb45b61d023a054c151bbc4->leave($__internal_90a0f30966054769a602d8ae937300c61abc88d29fb45b61d023a054c151bbc4_prof);

        
        $__internal_69057b9c20fe21b118d66709f69b94fe0644ddbd35d730c10a1145832d82a391->leave($__internal_69057b9c20fe21b118d66709f69b94fe0644ddbd35d730c10a1145832d82a391_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_02ab99e8519778a1c03033f714e6430784a48890d8cb05977d9329d61da73237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ab99e8519778a1c03033f714e6430784a48890d8cb05977d9329d61da73237->enter($__internal_02ab99e8519778a1c03033f714e6430784a48890d8cb05977d9329d61da73237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fc47505fc68c42f220f84a0d546d589538edd3bf4a296bc47c7447161c8967d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc47505fc68c42f220f84a0d546d589538edd3bf4a296bc47c7447161c8967d2->enter($__internal_fc47505fc68c42f220f84a0d546d589538edd3bf4a296bc47c7447161c8967d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fc47505fc68c42f220f84a0d546d589538edd3bf4a296bc47c7447161c8967d2->leave($__internal_fc47505fc68c42f220f84a0d546d589538edd3bf4a296bc47c7447161c8967d2_prof);

        
        $__internal_02ab99e8519778a1c03033f714e6430784a48890d8cb05977d9329d61da73237->leave($__internal_02ab99e8519778a1c03033f714e6430784a48890d8cb05977d9329d61da73237_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cec5e40e369e52d5199dd321035183a9b39e62f2e696e8fcab1c48eb9ea331a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec5e40e369e52d5199dd321035183a9b39e62f2e696e8fcab1c48eb9ea331a3->enter($__internal_cec5e40e369e52d5199dd321035183a9b39e62f2e696e8fcab1c48eb9ea331a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fbb240b2009ad676145b725fdcc8301b208b189c78d42b89cae24dc4c4908488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb240b2009ad676145b725fdcc8301b208b189c78d42b89cae24dc4c4908488->enter($__internal_fbb240b2009ad676145b725fdcc8301b208b189c78d42b89cae24dc4c4908488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fbb240b2009ad676145b725fdcc8301b208b189c78d42b89cae24dc4c4908488->leave($__internal_fbb240b2009ad676145b725fdcc8301b208b189c78d42b89cae24dc4c4908488_prof);

        
        $__internal_cec5e40e369e52d5199dd321035183a9b39e62f2e696e8fcab1c48eb9ea331a3->leave($__internal_cec5e40e369e52d5199dd321035183a9b39e62f2e696e8fcab1c48eb9ea331a3_prof);

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
