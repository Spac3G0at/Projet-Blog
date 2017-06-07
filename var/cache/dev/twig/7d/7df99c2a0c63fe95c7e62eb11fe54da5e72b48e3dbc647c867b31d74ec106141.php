<?php

/* article/show.html.twig */
class __TwigTemplate_c7098344c2fc3b11cd6579b716a8f28fbd816dacd205ce818e3eb00e49a5661d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_917b46c71012dc707cfe8ebd03c4c5d17670111949197f8944015fbd6b5e591d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917b46c71012dc707cfe8ebd03c4c5d17670111949197f8944015fbd6b5e591d->enter($__internal_917b46c71012dc707cfe8ebd03c4c5d17670111949197f8944015fbd6b5e591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_3e76bfff1b0dd2a864befca8733c0b72c8556b4202e8d1b5ba6ad689de2b5b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e76bfff1b0dd2a864befca8733c0b72c8556b4202e8d1b5ba6ad689de2b5b80->enter($__internal_3e76bfff1b0dd2a864befca8733c0b72c8556b4202e8d1b5ba6ad689de2b5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917b46c71012dc707cfe8ebd03c4c5d17670111949197f8944015fbd6b5e591d->leave($__internal_917b46c71012dc707cfe8ebd03c4c5d17670111949197f8944015fbd6b5e591d_prof);

        
        $__internal_3e76bfff1b0dd2a864befca8733c0b72c8556b4202e8d1b5ba6ad689de2b5b80->leave($__internal_3e76bfff1b0dd2a864befca8733c0b72c8556b4202e8d1b5ba6ad689de2b5b80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f924c0b359a0729de20693f66f1a31ee3e1675ebda6ce94168ebd90494666a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f924c0b359a0729de20693f66f1a31ee3e1675ebda6ce94168ebd90494666a->enter($__internal_22f924c0b359a0729de20693f66f1a31ee3e1675ebda6ce94168ebd90494666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21fbde48e4f0ca5350c088dc14249171fcdc6b6c752cbe48c41c317edc836c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fbde48e4f0ca5350c088dc14249171fcdc6b6c752cbe48c41c317edc836c77->enter($__internal_21fbde48e4f0ca5350c088dc14249171fcdc6b6c752cbe48c41c317edc836c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row ";
        if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
            echo " haveImage ";
        }
        echo "\">
    <h1 class=\"text-center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>
    ";
        // line 6
        if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 9
        echo "
    </div>

    <hr>

    <div class=\"row container\">
        <h4 class=\"text-center\">";
        // line 15
        echo "<span class=\"glyphicon glyphicon-time\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "H:i:s"), "html", null, true);
        echo "</h4>
    </div>

    <hr>


    <div class=\"row article-content container\">

        ";
        // line 23
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array());
        echo "

    </div>


    <ul class=\"list-unstyled\">
        <li>
            <a class=\"\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_21fbde48e4f0ca5350c088dc14249171fcdc6b6c752cbe48c41c317edc836c77->leave($__internal_21fbde48e4f0ca5350c088dc14249171fcdc6b6c752cbe48c41c317edc836c77_prof);

        
        $__internal_22f924c0b359a0729de20693f66f1a31ee3e1675ebda6ce94168ebd90494666a->leave($__internal_22f924c0b359a0729de20693f66f1a31ee3e1675ebda6ce94168ebd90494666a_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  113 => 36,  107 => 33,  101 => 30,  91 => 23,  77 => 15,  69 => 9,  62 => 7,  60 => 6,  56 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"row {% if article.image != NULL %} haveImage {% endif %}\">
    <h1 class=\"text-center\">{{ article.title }}</h1>
    {% if article.image != NULL %}
    <img src=\"{{ asset('uploads/articles/') }}{{ article.image }}\">
    {% endif %}

    </div>

    <hr>

    <div class=\"row container\">
        <h4 class=\"text-center\">{# Author,  #}<span class=\"glyphicon glyphicon-time\">{{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</h4>
    </div>

    <hr>


    <div class=\"row article-content container\">

        {{ article.text | raw }}

    </div>


    <ul class=\"list-unstyled\">
        <li>
            <a class=\"\" href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('article_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/show.html.twig");
    }
}
