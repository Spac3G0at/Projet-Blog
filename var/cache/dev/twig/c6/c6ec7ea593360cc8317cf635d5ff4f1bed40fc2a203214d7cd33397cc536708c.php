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
        $__internal_577744e46cc8422b96a68df62e62c4258119dd9b99e6c7060b4d885e7cd26dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577744e46cc8422b96a68df62e62c4258119dd9b99e6c7060b4d885e7cd26dbf->enter($__internal_577744e46cc8422b96a68df62e62c4258119dd9b99e6c7060b4d885e7cd26dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_cb7dd6f34afcf5734ff3a9104d2115112b7bfeaffe6f519197f751a82821daea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7dd6f34afcf5734ff3a9104d2115112b7bfeaffe6f519197f751a82821daea->enter($__internal_cb7dd6f34afcf5734ff3a9104d2115112b7bfeaffe6f519197f751a82821daea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577744e46cc8422b96a68df62e62c4258119dd9b99e6c7060b4d885e7cd26dbf->leave($__internal_577744e46cc8422b96a68df62e62c4258119dd9b99e6c7060b4d885e7cd26dbf_prof);

        
        $__internal_cb7dd6f34afcf5734ff3a9104d2115112b7bfeaffe6f519197f751a82821daea->leave($__internal_cb7dd6f34afcf5734ff3a9104d2115112b7bfeaffe6f519197f751a82821daea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7935f4f9604b054e24cb80788f18edcb319153c925948bd8f481b1962c6c5306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7935f4f9604b054e24cb80788f18edcb319153c925948bd8f481b1962c6c5306->enter($__internal_7935f4f9604b054e24cb80788f18edcb319153c925948bd8f481b1962c6c5306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a18663d5b20810a3f5a3976f5d269e43aecab55bd177284d70894cd031134c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a18663d5b20810a3f5a3976f5d269e43aecab55bd177284d70894cd031134c6->enter($__internal_1a18663d5b20810a3f5a3976f5d269e43aecab55bd177284d70894cd031134c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


";
        // line 24
        echo "

\t<div class=\"row ";
        // line 26
        if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
            echo " haveImage ";
        }
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "html", null, true);
        echo ");\">
\t\t<h1 class=\"text-center\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>

\t</div>

\t<div class=\"row container\">
\t\t<h4>Author, ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "H:i:s"), "html", null, true);
        echo "</h4>
\t</div>


";
        // line 52
        echo "


\t<div class=\"row article-content container\">

\t\t";
        // line 57
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array());
        echo "

\t</div>

\t<a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>
";
        
        $__internal_1a18663d5b20810a3f5a3976f5d269e43aecab55bd177284d70894cd031134c6->leave($__internal_1a18663d5b20810a3f5a3976f5d269e43aecab55bd177284d70894cd031134c6_prof);

        
        $__internal_7935f4f9604b054e24cb80788f18edcb319153c925948bd8f481b1962c6c5306->leave($__internal_7935f4f9604b054e24cb80788f18edcb319153c925948bd8f481b1962c6c5306_prof);

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
        return array (  91 => 57,  84 => 52,  75 => 32,  67 => 27,  58 => 26,  54 => 24,  49 => 4,  40 => 3,  11 => 1,);
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



{# \t<div class=\"row \">
\t\t<div class=\"breadcrumbs col-md-12  text-center\">
\t\t\t<div class=\"border\">
\t\t\t\t<h6>SIMPLE GRIND</h6>
\t\t\t</div>
\t\t\t<div class=\"border\">
\t\t\t\t<h6>SIMPLE</h6>
\t\t\t</div>
\t\t\t<div class=\"border\">
\t\t\t\t<h6>SIMPLE GRIND</h6>
\t\t\t</div>
\t\t\t<div class=\"border\">
\t\t\t\t<h6>SIMPLE GRIND</h6>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br> #}


\t<div class=\"row {% if article.image != NULL %} haveImage {% endif %}\" style=\"background-image: url({{ asset(\"uploads/articles/\") }}{{ article.image }});\">
\t\t<h1 class=\"text-center\">{{ article.title }}</h1>

\t</div>

\t<div class=\"row container\">
\t\t<h4>Author, {{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</h4>
\t</div>


{# \t<div class=\"row\">
\t\t<hr>
\t\t<div class=\"col-md-12 text-center\">
\t\t\t<div class=\"catego\">
\t\t\t\t<h4> <i class=\"fa fa-user\"> Li an Fen</i></h4>
\t\t\t</div>
\t\t\t<div class=\"catego\">
\t\t\t\t<h4> <i class=\"fa fa-clock-o\"> 29/05/2017</i></h4>
\t\t\t</div>
\t\t\t<div class=\"catego\">
\t\t\t\t<h4>Voyage</h4>
\t\t\t</div>
\t\t\t<hr>
\t\t</div>

\t</div> #}



\t<div class=\"row article-content container\">

\t\t{{ article.text | raw }}

\t</div>

\t<a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>
{% endblock %}", "default/post.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/post.html.twig");
    }
}
