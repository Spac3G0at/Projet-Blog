<?php

/* :article:show.html.twig */
class __TwigTemplate_c7098344c2fc3b11cd6579b716a8f28fbd816dacd205ce818e3eb00e49a5661d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:show.html.twig", 1);
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
        $__internal_570cb32ce86de4bf1636cd7f75c11d7449cb67719fba7535f9c05e645e668049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570cb32ce86de4bf1636cd7f75c11d7449cb67719fba7535f9c05e645e668049->enter($__internal_570cb32ce86de4bf1636cd7f75c11d7449cb67719fba7535f9c05e645e668049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $__internal_75da99f9e4f44917b1ebc3ba84d9e2274af67393801bc75c0ed852f7cd1f8022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75da99f9e4f44917b1ebc3ba84d9e2274af67393801bc75c0ed852f7cd1f8022->enter($__internal_75da99f9e4f44917b1ebc3ba84d9e2274af67393801bc75c0ed852f7cd1f8022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_570cb32ce86de4bf1636cd7f75c11d7449cb67719fba7535f9c05e645e668049->leave($__internal_570cb32ce86de4bf1636cd7f75c11d7449cb67719fba7535f9c05e645e668049_prof);

        
        $__internal_75da99f9e4f44917b1ebc3ba84d9e2274af67393801bc75c0ed852f7cd1f8022->leave($__internal_75da99f9e4f44917b1ebc3ba84d9e2274af67393801bc75c0ed852f7cd1f8022_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72fc955da542c729798b367ddcad111decc5723a4502764c16bc490cb0b2d5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fc955da542c729798b367ddcad111decc5723a4502764c16bc490cb0b2d5ff->enter($__internal_72fc955da542c729798b367ddcad111decc5723a4502764c16bc490cb0b2d5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca406d97415fec58a9f413b008e53bdb76898d53cbe4c2f154a8d654f7c907f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca406d97415fec58a9f413b008e53bdb76898d53cbe4c2f154a8d654f7c907f8->enter($__internal_ca406d97415fec58a9f413b008e53bdb76898d53cbe4c2f154a8d654f7c907f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca406d97415fec58a9f413b008e53bdb76898d53cbe4c2f154a8d654f7c907f8->leave($__internal_ca406d97415fec58a9f413b008e53bdb76898d53cbe4c2f154a8d654f7c907f8_prof);

        
        $__internal_72fc955da542c729798b367ddcad111decc5723a4502764c16bc490cb0b2d5ff->leave($__internal_72fc955da542c729798b367ddcad111decc5723a4502764c16bc490cb0b2d5ff_prof);

    }

    public function getTemplateName()
    {
        return ":article:show.html.twig";
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
", ":article:show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/show.html.twig");
    }
}
