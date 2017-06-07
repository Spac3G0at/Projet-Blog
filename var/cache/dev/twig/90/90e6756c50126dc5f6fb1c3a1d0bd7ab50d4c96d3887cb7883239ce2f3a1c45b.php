<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99ea50729fc9bde07bde341ef776eb12486870ab69bb80c023683c1e598b587a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95c5b3e5abcc339d5be0d211d2e4ca148384d1a5119a52bdda987599baf6f032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c5b3e5abcc339d5be0d211d2e4ca148384d1a5119a52bdda987599baf6f032->enter($__internal_95c5b3e5abcc339d5be0d211d2e4ca148384d1a5119a52bdda987599baf6f032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c94f28a41c968ccebcb8f3ea90fa0231e8bd04825bba77d9ecef3b53b4604f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94f28a41c968ccebcb8f3ea90fa0231e8bd04825bba77d9ecef3b53b4604f11->enter($__internal_c94f28a41c968ccebcb8f3ea90fa0231e8bd04825bba77d9ecef3b53b4604f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c5b3e5abcc339d5be0d211d2e4ca148384d1a5119a52bdda987599baf6f032->leave($__internal_95c5b3e5abcc339d5be0d211d2e4ca148384d1a5119a52bdda987599baf6f032_prof);

        
        $__internal_c94f28a41c968ccebcb8f3ea90fa0231e8bd04825bba77d9ecef3b53b4604f11->leave($__internal_c94f28a41c968ccebcb8f3ea90fa0231e8bd04825bba77d9ecef3b53b4604f11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cd4673c0afecfd021f7a62ccccc0fe4f871fbeb60967e4ee7bd605115cf0976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd4673c0afecfd021f7a62ccccc0fe4f871fbeb60967e4ee7bd605115cf0976->enter($__internal_9cd4673c0afecfd021f7a62ccccc0fe4f871fbeb60967e4ee7bd605115cf0976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c80b80e7921f3736dcabf647ff6910ec100e412b3b0ed8ccd06cce70af0527b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80b80e7921f3736dcabf647ff6910ec100e412b3b0ed8ccd06cce70af0527b8->enter($__internal_c80b80e7921f3736dcabf647ff6910ec100e412b3b0ed8ccd06cce70af0527b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c80b80e7921f3736dcabf647ff6910ec100e412b3b0ed8ccd06cce70af0527b8->leave($__internal_c80b80e7921f3736dcabf647ff6910ec100e412b3b0ed8ccd06cce70af0527b8_prof);

        
        $__internal_9cd4673c0afecfd021f7a62ccccc0fe4f871fbeb60967e4ee7bd605115cf0976->leave($__internal_9cd4673c0afecfd021f7a62ccccc0fe4f871fbeb60967e4ee7bd605115cf0976_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e245ca337ce0fa829243da64103f2054a8ad67917ecbe0a12dee6c9642dc537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e245ca337ce0fa829243da64103f2054a8ad67917ecbe0a12dee6c9642dc537->enter($__internal_4e245ca337ce0fa829243da64103f2054a8ad67917ecbe0a12dee6c9642dc537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72dd08f712888d2dd6883f3cf3829a88231a63a52d5d20f97ea532ffd152ac0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dd08f712888d2dd6883f3cf3829a88231a63a52d5d20f97ea532ffd152ac0b->enter($__internal_72dd08f712888d2dd6883f3cf3829a88231a63a52d5d20f97ea532ffd152ac0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72dd08f712888d2dd6883f3cf3829a88231a63a52d5d20f97ea532ffd152ac0b->leave($__internal_72dd08f712888d2dd6883f3cf3829a88231a63a52d5d20f97ea532ffd152ac0b_prof);

        
        $__internal_4e245ca337ce0fa829243da64103f2054a8ad67917ecbe0a12dee6c9642dc537->leave($__internal_4e245ca337ce0fa829243da64103f2054a8ad67917ecbe0a12dee6c9642dc537_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a85279f6614dc46e10a63c89f9240dac9c2d3df59fb2595d903f3e50f2840f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a85279f6614dc46e10a63c89f9240dac9c2d3df59fb2595d903f3e50f2840f9->enter($__internal_3a85279f6614dc46e10a63c89f9240dac9c2d3df59fb2595d903f3e50f2840f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d5b77aec8d2917379edca41468c77b9329752544183870bb629854878a71a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5b77aec8d2917379edca41468c77b9329752544183870bb629854878a71a04->enter($__internal_5d5b77aec8d2917379edca41468c77b9329752544183870bb629854878a71a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5d5b77aec8d2917379edca41468c77b9329752544183870bb629854878a71a04->leave($__internal_5d5b77aec8d2917379edca41468c77b9329752544183870bb629854878a71a04_prof);

        
        $__internal_3a85279f6614dc46e10a63c89f9240dac9c2d3df59fb2595d903f3e50f2840f9->leave($__internal_3a85279f6614dc46e10a63c89f9240dac9c2d3df59fb2595d903f3e50f2840f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
