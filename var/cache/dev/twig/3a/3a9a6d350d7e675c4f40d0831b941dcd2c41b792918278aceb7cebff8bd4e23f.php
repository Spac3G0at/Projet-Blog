<?php

/* :default:post.html.twig */
class __TwigTemplate_c894c456391fb740e250c510bbfbbef39d300537757386459d6ba3c0a64d3546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:post.html.twig", 1);
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
        $__internal_27a3ab2b4b2a9fd82f37a93c1159bd950ffeb9c571de965d4f93db411735e2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a3ab2b4b2a9fd82f37a93c1159bd950ffeb9c571de965d4f93db411735e2f6->enter($__internal_27a3ab2b4b2a9fd82f37a93c1159bd950ffeb9c571de965d4f93db411735e2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:post.html.twig"));

        $__internal_7bd40045ca23c4d72f58e039f565a19baf1992131122a893f37ddc14373bc077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd40045ca23c4d72f58e039f565a19baf1992131122a893f37ddc14373bc077->enter($__internal_7bd40045ca23c4d72f58e039f565a19baf1992131122a893f37ddc14373bc077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a3ab2b4b2a9fd82f37a93c1159bd950ffeb9c571de965d4f93db411735e2f6->leave($__internal_27a3ab2b4b2a9fd82f37a93c1159bd950ffeb9c571de965d4f93db411735e2f6_prof);

        
        $__internal_7bd40045ca23c4d72f58e039f565a19baf1992131122a893f37ddc14373bc077->leave($__internal_7bd40045ca23c4d72f58e039f565a19baf1992131122a893f37ddc14373bc077_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2f74b91ecd1dac235a9ebb0fd0b5d2dd744c74f8de34aecb5c24dceac91d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2f74b91ecd1dac235a9ebb0fd0b5d2dd744c74f8de34aecb5c24dceac91d02->enter($__internal_4e2f74b91ecd1dac235a9ebb0fd0b5d2dd744c74f8de34aecb5c24dceac91d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2b83bab7c2faabdd80bb7d81a330d4f30a158fd550dce831b77ec6f9bd18d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b83bab7c2faabdd80bb7d81a330d4f30a158fd550dce831b77ec6f9bd18d26->enter($__internal_a2b83bab7c2faabdd80bb7d81a330d4f30a158fd550dce831b77ec6f9bd18d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2b83bab7c2faabdd80bb7d81a330d4f30a158fd550dce831b77ec6f9bd18d26->leave($__internal_a2b83bab7c2faabdd80bb7d81a330d4f30a158fd550dce831b77ec6f9bd18d26_prof);

        
        $__internal_4e2f74b91ecd1dac235a9ebb0fd0b5d2dd744c74f8de34aecb5c24dceac91d02->leave($__internal_4e2f74b91ecd1dac235a9ebb0fd0b5d2dd744c74f8de34aecb5c24dceac91d02_prof);

    }

    public function getTemplateName()
    {
        return ":default:post.html.twig";
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
{% endblock %}", ":default:post.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/post.html.twig");
    }
}
