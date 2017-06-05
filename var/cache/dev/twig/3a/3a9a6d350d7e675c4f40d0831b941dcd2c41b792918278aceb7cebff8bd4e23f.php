<?php

/* default/post.html.twig */
class __TwigTemplate_c894c456391fb740e250c510bbfbbef39d300537757386459d6ba3c0a64d3546 extends Twig_Template
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
        $__internal_0b5d2f10af1fe5d7e724020c0c6f6b5a1e3dc17ddbde2cf499c3d65adaac25d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5d2f10af1fe5d7e724020c0c6f6b5a1e3dc17ddbde2cf499c3d65adaac25d7->enter($__internal_0b5d2f10af1fe5d7e724020c0c6f6b5a1e3dc17ddbde2cf499c3d65adaac25d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_96f50ff9290ada6698c48e6f3987918e4d58d7b456b11ac69dbe679e5693d779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f50ff9290ada6698c48e6f3987918e4d58d7b456b11ac69dbe679e5693d779->enter($__internal_96f50ff9290ada6698c48e6f3987918e4d58d7b456b11ac69dbe679e5693d779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5d2f10af1fe5d7e724020c0c6f6b5a1e3dc17ddbde2cf499c3d65adaac25d7->leave($__internal_0b5d2f10af1fe5d7e724020c0c6f6b5a1e3dc17ddbde2cf499c3d65adaac25d7_prof);

        
        $__internal_96f50ff9290ada6698c48e6f3987918e4d58d7b456b11ac69dbe679e5693d779->leave($__internal_96f50ff9290ada6698c48e6f3987918e4d58d7b456b11ac69dbe679e5693d779_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cd5f3bb122daad7cf39dc08c1a69c731d8262f9353600be21a22f68d3d34236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd5f3bb122daad7cf39dc08c1a69c731d8262f9353600be21a22f68d3d34236->enter($__internal_2cd5f3bb122daad7cf39dc08c1a69c731d8262f9353600be21a22f68d3d34236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8be329400b7d387ec800581633606dd779b7a19c39edc9e29b7f5b6a5e592f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be329400b7d387ec800581633606dd779b7a19c39edc9e29b7f5b6a5e592f63->enter($__internal_8be329400b7d387ec800581633606dd779b7a19c39edc9e29b7f5b6a5e592f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


\t<div class=\"row \">
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
\t<br>
\t<div class=\"row\">
\t\t<h1 class=\"text-center\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>
\t</div>


\t<div class=\"row\">
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

\t</div>



\t<div class=\"row\">

\t\t";
        // line 50
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array());
        echo "

\t</div>

\t<a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>
";
        
        $__internal_8be329400b7d387ec800581633606dd779b7a19c39edc9e29b7f5b6a5e592f63->leave($__internal_8be329400b7d387ec800581633606dd779b7a19c39edc9e29b7f5b6a5e592f63_prof);

        
        $__internal_2cd5f3bb122daad7cf39dc08c1a69c731d8262f9353600be21a22f68d3d34236->leave($__internal_2cd5f3bb122daad7cf39dc08c1a69c731d8262f9353600be21a22f68d3d34236_prof);

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
        return array (  100 => 50,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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



\t<div class=\"row \">
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
\t<br>
\t<div class=\"row\">
\t\t<h1 class=\"text-center\">{{ article.title }}</h1>
\t</div>


\t<div class=\"row\">
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

\t</div>



\t<div class=\"row\">

\t\t{{ article.text | raw }}

\t</div>

\t<a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>
{% endblock %}", "default/post.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/post.html.twig");
    }
}
