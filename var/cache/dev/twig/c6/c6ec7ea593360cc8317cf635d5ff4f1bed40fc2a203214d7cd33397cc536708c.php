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
        $__internal_ebd832f1e8a881eb77054ac16926b3fd96ed765c36660fa2d78383d062d93aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd832f1e8a881eb77054ac16926b3fd96ed765c36660fa2d78383d062d93aed->enter($__internal_ebd832f1e8a881eb77054ac16926b3fd96ed765c36660fa2d78383d062d93aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_96b5d4cfa70e5aacc5787d6e9262a4ab38cf95b4c8b27a67716dbecebbc73913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b5d4cfa70e5aacc5787d6e9262a4ab38cf95b4c8b27a67716dbecebbc73913->enter($__internal_96b5d4cfa70e5aacc5787d6e9262a4ab38cf95b4c8b27a67716dbecebbc73913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd832f1e8a881eb77054ac16926b3fd96ed765c36660fa2d78383d062d93aed->leave($__internal_ebd832f1e8a881eb77054ac16926b3fd96ed765c36660fa2d78383d062d93aed_prof);

        
        $__internal_96b5d4cfa70e5aacc5787d6e9262a4ab38cf95b4c8b27a67716dbecebbc73913->leave($__internal_96b5d4cfa70e5aacc5787d6e9262a4ab38cf95b4c8b27a67716dbecebbc73913_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b0f1a060d5fe51ec4ed40ce5f199ef43660ee96410ef6f7f44f276d59de64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b0f1a060d5fe51ec4ed40ce5f199ef43660ee96410ef6f7f44f276d59de64c->enter($__internal_78b0f1a060d5fe51ec4ed40ce5f199ef43660ee96410ef6f7f44f276d59de64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bc2641896da66fbe891eb25a54da6b8e47ff481a4250afabef263f2406be36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc2641896da66fbe891eb25a54da6b8e47ff481a4250afabef263f2406be36f->enter($__internal_0bc2641896da66fbe891eb25a54da6b8e47ff481a4250afabef263f2406be36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "isDraft", array()) != 1)) {
            // line 6
            echo "
\t<div class=\"row ";
            // line 7
            if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
                echo " haveImage ";
            }
            echo "\">
\t<h1 class=\"text-center\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
            echo "</h1>
\t";
            // line 9
            if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
                // line 10
                echo "\t<img src=\"";
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
        
        $__internal_0bc2641896da66fbe891eb25a54da6b8e47ff481a4250afabef263f2406be36f->leave($__internal_0bc2641896da66fbe891eb25a54da6b8e47ff481a4250afabef263f2406be36f_prof);

        
        $__internal_78b0f1a060d5fe51ec4ed40ce5f199ef43660ee96410ef6f7f44f276d59de64c->leave($__internal_78b0f1a060d5fe51ec4ed40ce5f199ef43660ee96410ef6f7f44f276d59de64c_prof);

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
        return array (  112 => 35,  106 => 31,  98 => 26,  84 => 18,  76 => 12,  69 => 10,  67 => 9,  63 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

\t<div class=\"row {% if article.image != NULL %} haveImage {% endif %}\">
\t<h1 class=\"text-center\">{{ article.title }}</h1>
\t{% if article.image != NULL %}
\t<img src=\"{{ asset('uploads/articles/') }}{{ article.image }}\">
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
