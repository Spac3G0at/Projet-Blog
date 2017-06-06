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
        $__internal_5e420b350e9837147b124080b88632d22bdab4713cc5ac0bd56704215c4f6991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e420b350e9837147b124080b88632d22bdab4713cc5ac0bd56704215c4f6991->enter($__internal_5e420b350e9837147b124080b88632d22bdab4713cc5ac0bd56704215c4f6991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_438a092d48cbf8e10e062d08a4107b55c7716cefba8a71e3ee066afc2e6d69fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438a092d48cbf8e10e062d08a4107b55c7716cefba8a71e3ee066afc2e6d69fa->enter($__internal_438a092d48cbf8e10e062d08a4107b55c7716cefba8a71e3ee066afc2e6d69fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e420b350e9837147b124080b88632d22bdab4713cc5ac0bd56704215c4f6991->leave($__internal_5e420b350e9837147b124080b88632d22bdab4713cc5ac0bd56704215c4f6991_prof);

        
        $__internal_438a092d48cbf8e10e062d08a4107b55c7716cefba8a71e3ee066afc2e6d69fa->leave($__internal_438a092d48cbf8e10e062d08a4107b55c7716cefba8a71e3ee066afc2e6d69fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51ceeba82a4bdddb93ab21b643a10d0544b9e07ccd82c71c73d3559947b04050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ceeba82a4bdddb93ab21b643a10d0544b9e07ccd82c71c73d3559947b04050->enter($__internal_51ceeba82a4bdddb93ab21b643a10d0544b9e07ccd82c71c73d3559947b04050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_534d09efdcfc382ebbb897ca9f0379f45379be6340256e5cb77d81105f46dac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534d09efdcfc382ebbb897ca9f0379f45379be6340256e5cb77d81105f46dac3->enter($__internal_534d09efdcfc382ebbb897ca9f0379f45379be6340256e5cb77d81105f46dac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_534d09efdcfc382ebbb897ca9f0379f45379be6340256e5cb77d81105f46dac3->leave($__internal_534d09efdcfc382ebbb897ca9f0379f45379be6340256e5cb77d81105f46dac3_prof);

        
        $__internal_51ceeba82a4bdddb93ab21b643a10d0544b9e07ccd82c71c73d3559947b04050->leave($__internal_51ceeba82a4bdddb93ab21b643a10d0544b9e07ccd82c71c73d3559947b04050_prof);

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
{% endblock %}", "default/post.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/app/Resources/views/default/post.html.twig");
    }
}
