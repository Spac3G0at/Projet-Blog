<?php

/* article/new.html.twig */
class __TwigTemplate_11d65305292e54fe41a88afae81b7ba7065d62269f0aa13ef472ed72cb42410e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a977157a593bb5aa49b8c5b05e4025aaff1a4fddb139539a9d34babb0df0a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a977157a593bb5aa49b8c5b05e4025aaff1a4fddb139539a9d34babb0df0a1e->enter($__internal_5a977157a593bb5aa49b8c5b05e4025aaff1a4fddb139539a9d34babb0df0a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_53ced5737bd091d3bd2da2d81b2e6f703cfc812428e45121468b0bd14df5ad30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ced5737bd091d3bd2da2d81b2e6f703cfc812428e45121468b0bd14df5ad30->enter($__internal_53ced5737bd091d3bd2da2d81b2e6f703cfc812428e45121468b0bd14df5ad30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a977157a593bb5aa49b8c5b05e4025aaff1a4fddb139539a9d34babb0df0a1e->leave($__internal_5a977157a593bb5aa49b8c5b05e4025aaff1a4fddb139539a9d34babb0df0a1e_prof);

        
        $__internal_53ced5737bd091d3bd2da2d81b2e6f703cfc812428e45121468b0bd14df5ad30->leave($__internal_53ced5737bd091d3bd2da2d81b2e6f703cfc812428e45121468b0bd14df5ad30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f8b3abcd3d423443e74e8c19008d0863f88d4782eb63f8fb93bca1c62c3cede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8b3abcd3d423443e74e8c19008d0863f88d4782eb63f8fb93bca1c62c3cede->enter($__internal_8f8b3abcd3d423443e74e8c19008d0863f88d4782eb63f8fb93bca1c62c3cede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a71aee53698e2c0129abe10fe63d3c888afb7dc20096771f15ce394f789255a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71aee53698e2c0129abe10fe63d3c888afb7dc20096771f15ce394f789255a3->enter($__internal_a71aee53698e2c0129abe10fe63d3c888afb7dc20096771f15ce394f789255a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a71aee53698e2c0129abe10fe63d3c888afb7dc20096771f15ce394f789255a3->leave($__internal_a71aee53698e2c0129abe10fe63d3c888afb7dc20096771f15ce394f789255a3_prof);

        
        $__internal_8f8b3abcd3d423443e74e8c19008d0863f88d4782eb63f8fb93bca1c62c3cede->leave($__internal_8f8b3abcd3d423443e74e8c19008d0863f88d4782eb63f8fb93bca1c62c3cede_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
