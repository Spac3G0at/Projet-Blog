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
        $__internal_29f43acd5372ddd2384b2fb960cebffc39c16dffff61cdd72758c5a31e15c44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f43acd5372ddd2384b2fb960cebffc39c16dffff61cdd72758c5a31e15c44f->enter($__internal_29f43acd5372ddd2384b2fb960cebffc39c16dffff61cdd72758c5a31e15c44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_a5945f00aec3fb523ed861a94ad2351ecae25b2cf7b8774129134a1575d72dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5945f00aec3fb523ed861a94ad2351ecae25b2cf7b8774129134a1575d72dd6->enter($__internal_a5945f00aec3fb523ed861a94ad2351ecae25b2cf7b8774129134a1575d72dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f43acd5372ddd2384b2fb960cebffc39c16dffff61cdd72758c5a31e15c44f->leave($__internal_29f43acd5372ddd2384b2fb960cebffc39c16dffff61cdd72758c5a31e15c44f_prof);

        
        $__internal_a5945f00aec3fb523ed861a94ad2351ecae25b2cf7b8774129134a1575d72dd6->leave($__internal_a5945f00aec3fb523ed861a94ad2351ecae25b2cf7b8774129134a1575d72dd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0211be0a685f8ccd3365a1fdab505f1ac1d3704d8af1855666da04809c9ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0211be0a685f8ccd3365a1fdab505f1ac1d3704d8af1855666da04809c9ab1->enter($__internal_0b0211be0a685f8ccd3365a1fdab505f1ac1d3704d8af1855666da04809c9ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d42920852fa0b42b7e863aa1fcebe513c4069bd1e39d87fd8211f9c84c9ad011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42920852fa0b42b7e863aa1fcebe513c4069bd1e39d87fd8211f9c84c9ad011->enter($__internal_d42920852fa0b42b7e863aa1fcebe513c4069bd1e39d87fd8211f9c84c9ad011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d42920852fa0b42b7e863aa1fcebe513c4069bd1e39d87fd8211f9c84c9ad011->leave($__internal_d42920852fa0b42b7e863aa1fcebe513c4069bd1e39d87fd8211f9c84c9ad011_prof);

        
        $__internal_0b0211be0a685f8ccd3365a1fdab505f1ac1d3704d8af1855666da04809c9ab1->leave($__internal_0b0211be0a685f8ccd3365a1fdab505f1ac1d3704d8af1855666da04809c9ab1_prof);

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
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
