<?php

/* article/new.html.twig */
class __TwigTemplate_61318842e5f78503c21dd01e1616d1a648abbc5374c946e4d40613fd7878f307 extends Twig_Template
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
        $__internal_1546ba85d504e7dcc44ad98284ce7bea4f1491e062dad3f9f28789397736d401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1546ba85d504e7dcc44ad98284ce7bea4f1491e062dad3f9f28789397736d401->enter($__internal_1546ba85d504e7dcc44ad98284ce7bea4f1491e062dad3f9f28789397736d401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_8dc21b263991a4f9e62767a18d907abb1803f10493e98f28383412b2942e840a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc21b263991a4f9e62767a18d907abb1803f10493e98f28383412b2942e840a->enter($__internal_8dc21b263991a4f9e62767a18d907abb1803f10493e98f28383412b2942e840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1546ba85d504e7dcc44ad98284ce7bea4f1491e062dad3f9f28789397736d401->leave($__internal_1546ba85d504e7dcc44ad98284ce7bea4f1491e062dad3f9f28789397736d401_prof);

        
        $__internal_8dc21b263991a4f9e62767a18d907abb1803f10493e98f28383412b2942e840a->leave($__internal_8dc21b263991a4f9e62767a18d907abb1803f10493e98f28383412b2942e840a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b16f1f35dc2035dcc8e2bc5653367cc0b1b79545fb3957575d63d251fd18dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b16f1f35dc2035dcc8e2bc5653367cc0b1b79545fb3957575d63d251fd18dba->enter($__internal_9b16f1f35dc2035dcc8e2bc5653367cc0b1b79545fb3957575d63d251fd18dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24b9aa469b0967040ae39390b33a55b519a48b03258e8cdde41085ab459e0732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b9aa469b0967040ae39390b33a55b519a48b03258e8cdde41085ab459e0732->enter($__internal_24b9aa469b0967040ae39390b33a55b519a48b03258e8cdde41085ab459e0732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24b9aa469b0967040ae39390b33a55b519a48b03258e8cdde41085ab459e0732->leave($__internal_24b9aa469b0967040ae39390b33a55b519a48b03258e8cdde41085ab459e0732_prof);

        
        $__internal_9b16f1f35dc2035dcc8e2bc5653367cc0b1b79545fb3957575d63d251fd18dba->leave($__internal_9b16f1f35dc2035dcc8e2bc5653367cc0b1b79545fb3957575d63d251fd18dba_prof);

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
