<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6a2c92bd0a312c5eb406a4101f679c2ee3e379d3a00d37ab416e1aa113b6a6d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_18993417a717ce926d7d66ce317586a00a6f2e3b3e2671d723a12584fbfc6ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18993417a717ce926d7d66ce317586a00a6f2e3b3e2671d723a12584fbfc6ad9->enter($__internal_18993417a717ce926d7d66ce317586a00a6f2e3b3e2671d723a12584fbfc6ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_36cb4fd9693cf65bccaccad1ba067b7260c2ef9fcb7f6b3bf6564131ee8c40ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cb4fd9693cf65bccaccad1ba067b7260c2ef9fcb7f6b3bf6564131ee8c40ca->enter($__internal_36cb4fd9693cf65bccaccad1ba067b7260c2ef9fcb7f6b3bf6564131ee8c40ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18993417a717ce926d7d66ce317586a00a6f2e3b3e2671d723a12584fbfc6ad9->leave($__internal_18993417a717ce926d7d66ce317586a00a6f2e3b3e2671d723a12584fbfc6ad9_prof);

        
        $__internal_36cb4fd9693cf65bccaccad1ba067b7260c2ef9fcb7f6b3bf6564131ee8c40ca->leave($__internal_36cb4fd9693cf65bccaccad1ba067b7260c2ef9fcb7f6b3bf6564131ee8c40ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e11f9bc503462afb84336e93b694b7ee0dbe0093873173d56e57d691a7f99a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11f9bc503462afb84336e93b694b7ee0dbe0093873173d56e57d691a7f99a61->enter($__internal_e11f9bc503462afb84336e93b694b7ee0dbe0093873173d56e57d691a7f99a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd180e52250843ec5a7e68dd4e23e989b2290f4e8d8d9c4c2a689434e6a04a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd180e52250843ec5a7e68dd4e23e989b2290f4e8d8d9c4c2a689434e6a04a40->enter($__internal_dd180e52250843ec5a7e68dd4e23e989b2290f4e8d8d9c4c2a689434e6a04a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd180e52250843ec5a7e68dd4e23e989b2290f4e8d8d9c4c2a689434e6a04a40->leave($__internal_dd180e52250843ec5a7e68dd4e23e989b2290f4e8d8d9c4c2a689434e6a04a40_prof);

        
        $__internal_e11f9bc503462afb84336e93b694b7ee0dbe0093873173d56e57d691a7f99a61->leave($__internal_e11f9bc503462afb84336e93b694b7ee0dbe0093873173d56e57d691a7f99a61_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c53146183acc378f990e76ce5d8d09aee1fd090444d3cf28b9ef96996d65b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c53146183acc378f990e76ce5d8d09aee1fd090444d3cf28b9ef96996d65b42->enter($__internal_1c53146183acc378f990e76ce5d8d09aee1fd090444d3cf28b9ef96996d65b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0ef0495972b2b5ea6ff2511d0ee3b261ddf92e85f46669a46d22a7d92ac462b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ef0495972b2b5ea6ff2511d0ee3b261ddf92e85f46669a46d22a7d92ac462b->enter($__internal_b0ef0495972b2b5ea6ff2511d0ee3b261ddf92e85f46669a46d22a7d92ac462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0ef0495972b2b5ea6ff2511d0ee3b261ddf92e85f46669a46d22a7d92ac462b->leave($__internal_b0ef0495972b2b5ea6ff2511d0ee3b261ddf92e85f46669a46d22a7d92ac462b_prof);

        
        $__internal_1c53146183acc378f990e76ce5d8d09aee1fd090444d3cf28b9ef96996d65b42->leave($__internal_1c53146183acc378f990e76ce5d8d09aee1fd090444d3cf28b9ef96996d65b42_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b7ece59842ec2662ccdf80bb68ba8f6916c47f3346baae685356ee96c8204a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7ece59842ec2662ccdf80bb68ba8f6916c47f3346baae685356ee96c8204a1->enter($__internal_6b7ece59842ec2662ccdf80bb68ba8f6916c47f3346baae685356ee96c8204a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b8de3af0b1ca596ecf1279a00216b04c7e4ae288309978d7b0c48447783bb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8de3af0b1ca596ecf1279a00216b04c7e4ae288309978d7b0c48447783bb71->enter($__internal_7b8de3af0b1ca596ecf1279a00216b04c7e4ae288309978d7b0c48447783bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7b8de3af0b1ca596ecf1279a00216b04c7e4ae288309978d7b0c48447783bb71->leave($__internal_7b8de3af0b1ca596ecf1279a00216b04c7e4ae288309978d7b0c48447783bb71_prof);

        
        $__internal_6b7ece59842ec2662ccdf80bb68ba8f6916c47f3346baae685356ee96c8204a1->leave($__internal_6b7ece59842ec2662ccdf80bb68ba8f6916c47f3346baae685356ee96c8204a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
