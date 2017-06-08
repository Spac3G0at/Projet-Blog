<?php

/* default/post.html.twig */
class __TwigTemplate_6087cb2bc56699c9a57809ee27ff229f5183aacd611a5729338f795ab444f9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/post.html.twig", 1);
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
        $__internal_ed9708d38b0a02a8d7b00b536f723bb9033db93b258f02dcc825d6518e888b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9708d38b0a02a8d7b00b536f723bb9033db93b258f02dcc825d6518e888b74->enter($__internal_ed9708d38b0a02a8d7b00b536f723bb9033db93b258f02dcc825d6518e888b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_5abdbf7991405d0559a777b627169e9add905739a5903cb2c012bbb268b32971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abdbf7991405d0559a777b627169e9add905739a5903cb2c012bbb268b32971->enter($__internal_5abdbf7991405d0559a777b627169e9add905739a5903cb2c012bbb268b32971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9708d38b0a02a8d7b00b536f723bb9033db93b258f02dcc825d6518e888b74->leave($__internal_ed9708d38b0a02a8d7b00b536f723bb9033db93b258f02dcc825d6518e888b74_prof);

        
        $__internal_5abdbf7991405d0559a777b627169e9add905739a5903cb2c012bbb268b32971->leave($__internal_5abdbf7991405d0559a777b627169e9add905739a5903cb2c012bbb268b32971_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aef20ce9e9d937ccdf683b91bc393226199e7958255be584666914b0f18a7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aef20ce9e9d937ccdf683b91bc393226199e7958255be584666914b0f18a7bd->enter($__internal_5aef20ce9e9d937ccdf683b91bc393226199e7958255be584666914b0f18a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b2df83c3cf2dfa2860a03908ee5289d8161ad49c7e6b92c30509705a76e0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2df83c3cf2dfa2860a03908ee5289d8161ad49c7e6b92c30509705a76e0782->enter($__internal_5b2df83c3cf2dfa2860a03908ee5289d8161ad49c7e6b92c30509705a76e0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "isDraft", array()) != 1)) {
            // line 6
            echo "
\t<div class=\"row\">
\t<h1 class=\"text-center\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
            echo "</h1>
\t";
            // line 9
            if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
                // line 10
                echo "\t<img width=\"100%;\" class=\"center-block\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "html", null, true);
                echo "\">
\t";
            }
            // line 12
            echo "
\t</div>

\t<hr>

\t<div class=\"row container\">
\t\t<h4 class=\"text-center\">";
            // line 18
            echo "<span class=\"glyphicon glyphicon-time\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</h4>
\t</div>

\t<hr>


\t<div class=\"row article-content container\">

\t\t";
            // line 26
            echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array());
            echo "

\t</div>

\t";
        } else {
            // line 31
            echo "
\t\t<h1 class=\"text-center\">Article indisponible</h1>

\t";
        }
        // line 35
        echo "
";
        
        $__internal_5b2df83c3cf2dfa2860a03908ee5289d8161ad49c7e6b92c30509705a76e0782->leave($__internal_5b2df83c3cf2dfa2860a03908ee5289d8161ad49c7e6b92c30509705a76e0782_prof);

        
        $__internal_5aef20ce9e9d937ccdf683b91bc393226199e7958255be584666914b0f18a7bd->leave($__internal_5aef20ce9e9d937ccdf683b91bc393226199e7958255be584666914b0f18a7bd_prof);

    }

    public function getTemplateName()
    {
        return "default/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  101 => 31,  93 => 26,  79 => 18,  71 => 12,  64 => 10,  62 => 9,  58 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

\t{% if article.isDraft != 1 %}

\t<div class=\"row\">
\t<h1 class=\"text-center\">{{ article.title }}</h1>
\t{% if article.image != NULL %}
\t<img width=\"100%;\" class=\"center-block\" src=\"{{ asset('uploads/articles/') }}{{ article.image }}\">
\t{% endif %}

\t</div>

\t<hr>

\t<div class=\"row container\">
\t\t<h4 class=\"text-center\">{# Author,  #}<span class=\"glyphicon glyphicon-time\">{{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</h4>
\t</div>

\t<hr>


\t<div class=\"row article-content container\">

\t\t{{ article.text | raw }}

\t</div>

\t{% else %}

\t\t<h1 class=\"text-center\">Article indisponible</h1>

\t{% endif %}

{% endblock %}", "default/post.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/post.html.twig");
    }
}
