<?php

/* article/show.html.twig */
class __TwigTemplate_c7098344c2fc3b11cd6579b716a8f28fbd816dacd205ce818e3eb00e49a5661d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_10262afcb6a3d556e834e3a6ffe9690805e439d94c53c724fc955c65bf6c1d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10262afcb6a3d556e834e3a6ffe9690805e439d94c53c724fc955c65bf6c1d31->enter($__internal_10262afcb6a3d556e834e3a6ffe9690805e439d94c53c724fc955c65bf6c1d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_b39e2a80c82e02ce4b8b47e55bd614aea74435f46404172039d74639a49586a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39e2a80c82e02ce4b8b47e55bd614aea74435f46404172039d74639a49586a7->enter($__internal_b39e2a80c82e02ce4b8b47e55bd614aea74435f46404172039d74639a49586a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10262afcb6a3d556e834e3a6ffe9690805e439d94c53c724fc955c65bf6c1d31->leave($__internal_10262afcb6a3d556e834e3a6ffe9690805e439d94c53c724fc955c65bf6c1d31_prof);

        
        $__internal_b39e2a80c82e02ce4b8b47e55bd614aea74435f46404172039d74639a49586a7->leave($__internal_b39e2a80c82e02ce4b8b47e55bd614aea74435f46404172039d74639a49586a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31ec2cffbe6c1012acf5b34e39069bc7b90501e043f4ee5e279627a813b345b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ec2cffbe6c1012acf5b34e39069bc7b90501e043f4ee5e279627a813b345b8->enter($__internal_31ec2cffbe6c1012acf5b34e39069bc7b90501e043f4ee5e279627a813b345b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb15b858eb245556ac5ca6006342bd920b360ba86d3550bb5ef4a7133efdd767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb15b858eb245556ac5ca6006342bd920b360ba86d3550bb5ef4a7133efdd767->enter($__internal_fb15b858eb245556ac5ca6006342bd920b360ba86d3550bb5ef4a7133efdd767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 35
        echo "
    <div class=\"row\">

        ";
        // line 38
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array());
        echo "

    </div>

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fb15b858eb245556ac5ca6006342bd920b360ba86d3550bb5ef4a7133efdd767->leave($__internal_fb15b858eb245556ac5ca6006342bd920b360ba86d3550bb5ef4a7133efdd767_prof);

        
        $__internal_31ec2cffbe6c1012acf5b34e39069bc7b90501e043f4ee5e279627a813b345b8->leave($__internal_31ec2cffbe6c1012acf5b34e39069bc7b90501e043f4ee5e279627a813b345b8_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 52,  81 => 50,  75 => 47,  69 => 44,  60 => 38,  55 => 35,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"text-center\">{{ article.title }}</h1>

    {# <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ article.title }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ article.text }}</td>
            </tr>
            <tr>
                <th>Label</th>
                <td>{{ article.label }}</td>
            </tr>
            <tr>
                <th>Isdraft</th>
                <td>{% if article.isDraft %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if article.createdAt %}{{ article.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
 #}

    <div class=\"row\">

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
", "article/show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/show.html.twig");
    }
}
