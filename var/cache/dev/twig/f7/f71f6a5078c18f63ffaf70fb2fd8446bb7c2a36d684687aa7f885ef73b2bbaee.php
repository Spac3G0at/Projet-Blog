<?php

/* default/post.html.twig */
class __TwigTemplate_d57142b70a5c68649097b09723efa7e6af984e23c2b2cb0ba9df513c08f38364 extends Twig_Template
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
        $__internal_df3fa2ec092cd4c1f9bda5434b8433c3d10cb5a1d2c68264e67ba3686c071455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3fa2ec092cd4c1f9bda5434b8433c3d10cb5a1d2c68264e67ba3686c071455->enter($__internal_df3fa2ec092cd4c1f9bda5434b8433c3d10cb5a1d2c68264e67ba3686c071455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_a7bb56f73abcd1021c812eb53b01a0fc737587a71ec2f5bbe87fc97838b1e8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bb56f73abcd1021c812eb53b01a0fc737587a71ec2f5bbe87fc97838b1e8c9->enter($__internal_a7bb56f73abcd1021c812eb53b01a0fc737587a71ec2f5bbe87fc97838b1e8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df3fa2ec092cd4c1f9bda5434b8433c3d10cb5a1d2c68264e67ba3686c071455->leave($__internal_df3fa2ec092cd4c1f9bda5434b8433c3d10cb5a1d2c68264e67ba3686c071455_prof);

        
        $__internal_a7bb56f73abcd1021c812eb53b01a0fc737587a71ec2f5bbe87fc97838b1e8c9->leave($__internal_a7bb56f73abcd1021c812eb53b01a0fc737587a71ec2f5bbe87fc97838b1e8c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9db501eef2edb6b164083f4c23c4413ec204f9740a2417663cc88a9f04be0d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db501eef2edb6b164083f4c23c4413ec204f9740a2417663cc88a9f04be0d1b->enter($__internal_9db501eef2edb6b164083f4c23c4413ec204f9740a2417663cc88a9f04be0d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef0adc24f4ff76590c6adc67d86ecd0a1c53b0039add66ab97d917ab01ab4822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0adc24f4ff76590c6adc67d86ecd0a1c53b0039add66ab97d917ab01ab4822->enter($__internal_ef0adc24f4ff76590c6adc67d86ecd0a1c53b0039add66ab97d917ab01ab4822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef0adc24f4ff76590c6adc67d86ecd0a1c53b0039add66ab97d917ab01ab4822->leave($__internal_ef0adc24f4ff76590c6adc67d86ecd0a1c53b0039add66ab97d917ab01ab4822_prof);

        
        $__internal_9db501eef2edb6b164083f4c23c4413ec204f9740a2417663cc88a9f04be0d1b->leave($__internal_9db501eef2edb6b164083f4c23c4413ec204f9740a2417663cc88a9f04be0d1b_prof);

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
