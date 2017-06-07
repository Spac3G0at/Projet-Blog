<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bbd3ae04474873c92aae96d63d02f554649482848c0554583ca32c8491ac8f71 extends Twig_Template
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
        $__internal_df8e06143f5eb51448ec279cb5e070f2dcf408d7d4b87fd0b79d198e649d1188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8e06143f5eb51448ec279cb5e070f2dcf408d7d4b87fd0b79d198e649d1188->enter($__internal_df8e06143f5eb51448ec279cb5e070f2dcf408d7d4b87fd0b79d198e649d1188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_41c35f960d3ef69b5cc35f949940629a4229b399c93b5b4077a1037f453789ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c35f960d3ef69b5cc35f949940629a4229b399c93b5b4077a1037f453789ed->enter($__internal_41c35f960d3ef69b5cc35f949940629a4229b399c93b5b4077a1037f453789ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8e06143f5eb51448ec279cb5e070f2dcf408d7d4b87fd0b79d198e649d1188->leave($__internal_df8e06143f5eb51448ec279cb5e070f2dcf408d7d4b87fd0b79d198e649d1188_prof);

        
        $__internal_41c35f960d3ef69b5cc35f949940629a4229b399c93b5b4077a1037f453789ed->leave($__internal_41c35f960d3ef69b5cc35f949940629a4229b399c93b5b4077a1037f453789ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c97440ef58ad6eedc732d613cd2b49d453a972cf3666db5b15b51c0291a9c448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97440ef58ad6eedc732d613cd2b49d453a972cf3666db5b15b51c0291a9c448->enter($__internal_c97440ef58ad6eedc732d613cd2b49d453a972cf3666db5b15b51c0291a9c448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88997f4b33ee5fa3060d6caf806f21c2d5c574c25317bdf9fc46aea8914b703a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88997f4b33ee5fa3060d6caf806f21c2d5c574c25317bdf9fc46aea8914b703a->enter($__internal_88997f4b33ee5fa3060d6caf806f21c2d5c574c25317bdf9fc46aea8914b703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_88997f4b33ee5fa3060d6caf806f21c2d5c574c25317bdf9fc46aea8914b703a->leave($__internal_88997f4b33ee5fa3060d6caf806f21c2d5c574c25317bdf9fc46aea8914b703a_prof);

        
        $__internal_c97440ef58ad6eedc732d613cd2b49d453a972cf3666db5b15b51c0291a9c448->leave($__internal_c97440ef58ad6eedc732d613cd2b49d453a972cf3666db5b15b51c0291a9c448_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_974493d87c8bd7e7bef20e486d6490821944bf5a246f5f771e364511850938ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974493d87c8bd7e7bef20e486d6490821944bf5a246f5f771e364511850938ce->enter($__internal_974493d87c8bd7e7bef20e486d6490821944bf5a246f5f771e364511850938ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad9e2490653d9da100de2c6947ab35dc548feabf59763cc3c69f3541933b9e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9e2490653d9da100de2c6947ab35dc548feabf59763cc3c69f3541933b9e3e->enter($__internal_ad9e2490653d9da100de2c6947ab35dc548feabf59763cc3c69f3541933b9e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad9e2490653d9da100de2c6947ab35dc548feabf59763cc3c69f3541933b9e3e->leave($__internal_ad9e2490653d9da100de2c6947ab35dc548feabf59763cc3c69f3541933b9e3e_prof);

        
        $__internal_974493d87c8bd7e7bef20e486d6490821944bf5a246f5f771e364511850938ce->leave($__internal_974493d87c8bd7e7bef20e486d6490821944bf5a246f5f771e364511850938ce_prof);

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
