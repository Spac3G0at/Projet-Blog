<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4ae17c18ee8d921993916e27e5bac9819b36059d5414c0184e33d4ac9663c83 extends Twig_Template
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
        $__internal_54bbdbe5617618b5a19f8f70a746c7a12eff57bdc264c19ba5f6a657447b55ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bbdbe5617618b5a19f8f70a746c7a12eff57bdc264c19ba5f6a657447b55ff->enter($__internal_54bbdbe5617618b5a19f8f70a746c7a12eff57bdc264c19ba5f6a657447b55ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7c4dde50961cdfa489fad6e7c6a8fa9c4c37f8177c3fefb4150fdba4651424fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4dde50961cdfa489fad6e7c6a8fa9c4c37f8177c3fefb4150fdba4651424fe->enter($__internal_7c4dde50961cdfa489fad6e7c6a8fa9c4c37f8177c3fefb4150fdba4651424fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54bbdbe5617618b5a19f8f70a746c7a12eff57bdc264c19ba5f6a657447b55ff->leave($__internal_54bbdbe5617618b5a19f8f70a746c7a12eff57bdc264c19ba5f6a657447b55ff_prof);

        
        $__internal_7c4dde50961cdfa489fad6e7c6a8fa9c4c37f8177c3fefb4150fdba4651424fe->leave($__internal_7c4dde50961cdfa489fad6e7c6a8fa9c4c37f8177c3fefb4150fdba4651424fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c129ff56a83980630983209fd2bfc458e7ab627389fe70bc763fda2f28d17a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c129ff56a83980630983209fd2bfc458e7ab627389fe70bc763fda2f28d17a4->enter($__internal_0c129ff56a83980630983209fd2bfc458e7ab627389fe70bc763fda2f28d17a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f9145bf909e895a316219e126c58dea350a31d81d0d4c716ee2c43e6492e66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9145bf909e895a316219e126c58dea350a31d81d0d4c716ee2c43e6492e66e->enter($__internal_2f9145bf909e895a316219e126c58dea350a31d81d0d4c716ee2c43e6492e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f9145bf909e895a316219e126c58dea350a31d81d0d4c716ee2c43e6492e66e->leave($__internal_2f9145bf909e895a316219e126c58dea350a31d81d0d4c716ee2c43e6492e66e_prof);

        
        $__internal_0c129ff56a83980630983209fd2bfc458e7ab627389fe70bc763fda2f28d17a4->leave($__internal_0c129ff56a83980630983209fd2bfc458e7ab627389fe70bc763fda2f28d17a4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ffaba7695e9b5daf17a46f24a91452f058fa12a8789a84b8c966371a2a5a63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffaba7695e9b5daf17a46f24a91452f058fa12a8789a84b8c966371a2a5a63e->enter($__internal_3ffaba7695e9b5daf17a46f24a91452f058fa12a8789a84b8c966371a2a5a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9fd20c2fb2e70f02ff173f3327720f6c21e95b1cb5af381e5bfc468dfc8d3427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd20c2fb2e70f02ff173f3327720f6c21e95b1cb5af381e5bfc468dfc8d3427->enter($__internal_9fd20c2fb2e70f02ff173f3327720f6c21e95b1cb5af381e5bfc468dfc8d3427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9fd20c2fb2e70f02ff173f3327720f6c21e95b1cb5af381e5bfc468dfc8d3427->leave($__internal_9fd20c2fb2e70f02ff173f3327720f6c21e95b1cb5af381e5bfc468dfc8d3427_prof);

        
        $__internal_3ffaba7695e9b5daf17a46f24a91452f058fa12a8789a84b8c966371a2a5a63e->leave($__internal_3ffaba7695e9b5daf17a46f24a91452f058fa12a8789a84b8c966371a2a5a63e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f7fc33b9c46a644289e3167f5c15859fa4d0083b6c0aa24adff2886ee9f4d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7fc33b9c46a644289e3167f5c15859fa4d0083b6c0aa24adff2886ee9f4d74->enter($__internal_5f7fc33b9c46a644289e3167f5c15859fa4d0083b6c0aa24adff2886ee9f4d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a293b8d186a9fc8ae244e6cc5e918ea45fe8348d0a254a21df01854fdde61f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a293b8d186a9fc8ae244e6cc5e918ea45fe8348d0a254a21df01854fdde61f5a->enter($__internal_a293b8d186a9fc8ae244e6cc5e918ea45fe8348d0a254a21df01854fdde61f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a293b8d186a9fc8ae244e6cc5e918ea45fe8348d0a254a21df01854fdde61f5a->leave($__internal_a293b8d186a9fc8ae244e6cc5e918ea45fe8348d0a254a21df01854fdde61f5a_prof);

        
        $__internal_5f7fc33b9c46a644289e3167f5c15859fa4d0083b6c0aa24adff2886ee9f4d74->leave($__internal_5f7fc33b9c46a644289e3167f5c15859fa4d0083b6c0aa24adff2886ee9f4d74_prof);

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
