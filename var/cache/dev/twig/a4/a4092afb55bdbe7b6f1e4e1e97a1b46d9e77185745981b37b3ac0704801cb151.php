<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fe466c80bf3e571fee01f4d98c1b9eebc97279533b03433934ec4b691e97341b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75f92cdd0f25eaef56ecc3898be0f10ab08068e06fa5be39b12d92c70f5328bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f92cdd0f25eaef56ecc3898be0f10ab08068e06fa5be39b12d92c70f5328bb->enter($__internal_75f92cdd0f25eaef56ecc3898be0f10ab08068e06fa5be39b12d92c70f5328bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ae78376d63196ca70ed11b5c2f02baa85cd9f79bd360acf21471ded83851128c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae78376d63196ca70ed11b5c2f02baa85cd9f79bd360acf21471ded83851128c->enter($__internal_ae78376d63196ca70ed11b5c2f02baa85cd9f79bd360acf21471ded83851128c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75f92cdd0f25eaef56ecc3898be0f10ab08068e06fa5be39b12d92c70f5328bb->leave($__internal_75f92cdd0f25eaef56ecc3898be0f10ab08068e06fa5be39b12d92c70f5328bb_prof);

        
        $__internal_ae78376d63196ca70ed11b5c2f02baa85cd9f79bd360acf21471ded83851128c->leave($__internal_ae78376d63196ca70ed11b5c2f02baa85cd9f79bd360acf21471ded83851128c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f20af0b9ac297e58a36bf074250e6c6ad8a140e85414963c1d9b34bc55ed30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f20af0b9ac297e58a36bf074250e6c6ad8a140e85414963c1d9b34bc55ed30->enter($__internal_79f20af0b9ac297e58a36bf074250e6c6ad8a140e85414963c1d9b34bc55ed30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98c087d560dce8fe0a8ecc9a4288efff117f25b69179a85c6a22d47f137dc518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c087d560dce8fe0a8ecc9a4288efff117f25b69179a85c6a22d47f137dc518->enter($__internal_98c087d560dce8fe0a8ecc9a4288efff117f25b69179a85c6a22d47f137dc518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_98c087d560dce8fe0a8ecc9a4288efff117f25b69179a85c6a22d47f137dc518->leave($__internal_98c087d560dce8fe0a8ecc9a4288efff117f25b69179a85c6a22d47f137dc518_prof);

        
        $__internal_79f20af0b9ac297e58a36bf074250e6c6ad8a140e85414963c1d9b34bc55ed30->leave($__internal_79f20af0b9ac297e58a36bf074250e6c6ad8a140e85414963c1d9b34bc55ed30_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a622de2db314dd62725bf3ab54693bcebb291dd15dd911c9d5c4d3c04e47baa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a622de2db314dd62725bf3ab54693bcebb291dd15dd911c9d5c4d3c04e47baa0->enter($__internal_a622de2db314dd62725bf3ab54693bcebb291dd15dd911c9d5c4d3c04e47baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23896e49c5142fbbdc5d314f0fa7b42244fbbf2b0612aabaa9155c712a8eb977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23896e49c5142fbbdc5d314f0fa7b42244fbbf2b0612aabaa9155c712a8eb977->enter($__internal_23896e49c5142fbbdc5d314f0fa7b42244fbbf2b0612aabaa9155c712a8eb977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_23896e49c5142fbbdc5d314f0fa7b42244fbbf2b0612aabaa9155c712a8eb977->leave($__internal_23896e49c5142fbbdc5d314f0fa7b42244fbbf2b0612aabaa9155c712a8eb977_prof);

        
        $__internal_a622de2db314dd62725bf3ab54693bcebb291dd15dd911c9d5c4d3c04e47baa0->leave($__internal_a622de2db314dd62725bf3ab54693bcebb291dd15dd911c9d5c4d3c04e47baa0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
