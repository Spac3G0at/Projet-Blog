<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a2c92bd0a312c5eb406a4101f679c2ee3e379d3a00d37ab416e1aa113b6a6d0 extends Twig_Template
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
        $__internal_9c3dd2108fe048a2f9bbc34b1438d3a3ac9c8d07f63ada8dd4466a5b9b29c2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3dd2108fe048a2f9bbc34b1438d3a3ac9c8d07f63ada8dd4466a5b9b29c2b2->enter($__internal_9c3dd2108fe048a2f9bbc34b1438d3a3ac9c8d07f63ada8dd4466a5b9b29c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2d8bfaa0f3657a9e998770d3a9fae2f61ad8e0feb51755ce4725ccabb9fbc89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8bfaa0f3657a9e998770d3a9fae2f61ad8e0feb51755ce4725ccabb9fbc89c->enter($__internal_2d8bfaa0f3657a9e998770d3a9fae2f61ad8e0feb51755ce4725ccabb9fbc89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3dd2108fe048a2f9bbc34b1438d3a3ac9c8d07f63ada8dd4466a5b9b29c2b2->leave($__internal_9c3dd2108fe048a2f9bbc34b1438d3a3ac9c8d07f63ada8dd4466a5b9b29c2b2_prof);

        
        $__internal_2d8bfaa0f3657a9e998770d3a9fae2f61ad8e0feb51755ce4725ccabb9fbc89c->leave($__internal_2d8bfaa0f3657a9e998770d3a9fae2f61ad8e0feb51755ce4725ccabb9fbc89c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d44bf5097ddf0ef24dd5b025d56e37ac76cfdce39d116f75867d3db1b729440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d44bf5097ddf0ef24dd5b025d56e37ac76cfdce39d116f75867d3db1b729440->enter($__internal_9d44bf5097ddf0ef24dd5b025d56e37ac76cfdce39d116f75867d3db1b729440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd8e8f0b52b94fe98dc9c6e2a6e43f7a4f49d746e5437bf09269433ca4729a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8e8f0b52b94fe98dc9c6e2a6e43f7a4f49d746e5437bf09269433ca4729a89->enter($__internal_fd8e8f0b52b94fe98dc9c6e2a6e43f7a4f49d746e5437bf09269433ca4729a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fd8e8f0b52b94fe98dc9c6e2a6e43f7a4f49d746e5437bf09269433ca4729a89->leave($__internal_fd8e8f0b52b94fe98dc9c6e2a6e43f7a4f49d746e5437bf09269433ca4729a89_prof);

        
        $__internal_9d44bf5097ddf0ef24dd5b025d56e37ac76cfdce39d116f75867d3db1b729440->leave($__internal_9d44bf5097ddf0ef24dd5b025d56e37ac76cfdce39d116f75867d3db1b729440_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ed7eba1e78d90c527e8dc9219647e6ffb82645ba6af00be3c7c5f8685cf391f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed7eba1e78d90c527e8dc9219647e6ffb82645ba6af00be3c7c5f8685cf391f->enter($__internal_6ed7eba1e78d90c527e8dc9219647e6ffb82645ba6af00be3c7c5f8685cf391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_426f2358e96de8d35d9c8144ce2a27f726b2e317283f5104a4f340912ae6e35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426f2358e96de8d35d9c8144ce2a27f726b2e317283f5104a4f340912ae6e35a->enter($__internal_426f2358e96de8d35d9c8144ce2a27f726b2e317283f5104a4f340912ae6e35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_426f2358e96de8d35d9c8144ce2a27f726b2e317283f5104a4f340912ae6e35a->leave($__internal_426f2358e96de8d35d9c8144ce2a27f726b2e317283f5104a4f340912ae6e35a_prof);

        
        $__internal_6ed7eba1e78d90c527e8dc9219647e6ffb82645ba6af00be3c7c5f8685cf391f->leave($__internal_6ed7eba1e78d90c527e8dc9219647e6ffb82645ba6af00be3c7c5f8685cf391f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc582842cd2bd38877df2d6287d5e1515185b37347bc5f91e6c16e5b72a13a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc582842cd2bd38877df2d6287d5e1515185b37347bc5f91e6c16e5b72a13a4->enter($__internal_1dc582842cd2bd38877df2d6287d5e1515185b37347bc5f91e6c16e5b72a13a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83571c9ef10bd8458167c1c2d3e372e89b01c5861cc58f3cb90f1695e36d8b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83571c9ef10bd8458167c1c2d3e372e89b01c5861cc58f3cb90f1695e36d8b01->enter($__internal_83571c9ef10bd8458167c1c2d3e372e89b01c5861cc58f3cb90f1695e36d8b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_83571c9ef10bd8458167c1c2d3e372e89b01c5861cc58f3cb90f1695e36d8b01->leave($__internal_83571c9ef10bd8458167c1c2d3e372e89b01c5861cc58f3cb90f1695e36d8b01_prof);

        
        $__internal_1dc582842cd2bd38877df2d6287d5e1515185b37347bc5f91e6c16e5b72a13a4->leave($__internal_1dc582842cd2bd38877df2d6287d5e1515185b37347bc5f91e6c16e5b72a13a4_prof);

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
