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
        $__internal_007df5321448efb89e6aad221be2d454eb052c17cb2351658d49099c4a1e745e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007df5321448efb89e6aad221be2d454eb052c17cb2351658d49099c4a1e745e->enter($__internal_007df5321448efb89e6aad221be2d454eb052c17cb2351658d49099c4a1e745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fbcdb70f825cbb06ab0a3f68497be5aad9b59b797e8d5a676bb46f9c82b1c6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcdb70f825cbb06ab0a3f68497be5aad9b59b797e8d5a676bb46f9c82b1c6aa->enter($__internal_fbcdb70f825cbb06ab0a3f68497be5aad9b59b797e8d5a676bb46f9c82b1c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007df5321448efb89e6aad221be2d454eb052c17cb2351658d49099c4a1e745e->leave($__internal_007df5321448efb89e6aad221be2d454eb052c17cb2351658d49099c4a1e745e_prof);

        
        $__internal_fbcdb70f825cbb06ab0a3f68497be5aad9b59b797e8d5a676bb46f9c82b1c6aa->leave($__internal_fbcdb70f825cbb06ab0a3f68497be5aad9b59b797e8d5a676bb46f9c82b1c6aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69bf764a00dd5d55d4f63953b221308fc4d4ddd0955b8670187e6738d54c111b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bf764a00dd5d55d4f63953b221308fc4d4ddd0955b8670187e6738d54c111b->enter($__internal_69bf764a00dd5d55d4f63953b221308fc4d4ddd0955b8670187e6738d54c111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e789c599b05add6fbb63ac46d847b84f094f18dc06efbad40fc1be98ce164a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e789c599b05add6fbb63ac46d847b84f094f18dc06efbad40fc1be98ce164a77->enter($__internal_e789c599b05add6fbb63ac46d847b84f094f18dc06efbad40fc1be98ce164a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e789c599b05add6fbb63ac46d847b84f094f18dc06efbad40fc1be98ce164a77->leave($__internal_e789c599b05add6fbb63ac46d847b84f094f18dc06efbad40fc1be98ce164a77_prof);

        
        $__internal_69bf764a00dd5d55d4f63953b221308fc4d4ddd0955b8670187e6738d54c111b->leave($__internal_69bf764a00dd5d55d4f63953b221308fc4d4ddd0955b8670187e6738d54c111b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bbfda18e77120fcf9e11be92816990e3680765f906711ab662d65bf612839e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbfda18e77120fcf9e11be92816990e3680765f906711ab662d65bf612839e3->enter($__internal_5bbfda18e77120fcf9e11be92816990e3680765f906711ab662d65bf612839e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bafc2b91d48cbb67cb09cdbc3b1355a9eae724f399afcd49de7700309feede15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafc2b91d48cbb67cb09cdbc3b1355a9eae724f399afcd49de7700309feede15->enter($__internal_bafc2b91d48cbb67cb09cdbc3b1355a9eae724f399afcd49de7700309feede15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bafc2b91d48cbb67cb09cdbc3b1355a9eae724f399afcd49de7700309feede15->leave($__internal_bafc2b91d48cbb67cb09cdbc3b1355a9eae724f399afcd49de7700309feede15_prof);

        
        $__internal_5bbfda18e77120fcf9e11be92816990e3680765f906711ab662d65bf612839e3->leave($__internal_5bbfda18e77120fcf9e11be92816990e3680765f906711ab662d65bf612839e3_prof);

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
