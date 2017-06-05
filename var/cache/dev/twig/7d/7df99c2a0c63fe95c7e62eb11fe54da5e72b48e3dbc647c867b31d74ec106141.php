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
        $__internal_c652a04f67c21d39ada984c7ff1bc6f0592fc5bfc7121de83f0496704d89ab58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c652a04f67c21d39ada984c7ff1bc6f0592fc5bfc7121de83f0496704d89ab58->enter($__internal_c652a04f67c21d39ada984c7ff1bc6f0592fc5bfc7121de83f0496704d89ab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_7df815cd8df03a95fb02e564d80d3100148e53bfb40a005bdd368af763522a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df815cd8df03a95fb02e564d80d3100148e53bfb40a005bdd368af763522a71->enter($__internal_7df815cd8df03a95fb02e564d80d3100148e53bfb40a005bdd368af763522a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c652a04f67c21d39ada984c7ff1bc6f0592fc5bfc7121de83f0496704d89ab58->leave($__internal_c652a04f67c21d39ada984c7ff1bc6f0592fc5bfc7121de83f0496704d89ab58_prof);

        
        $__internal_7df815cd8df03a95fb02e564d80d3100148e53bfb40a005bdd368af763522a71->leave($__internal_7df815cd8df03a95fb02e564d80d3100148e53bfb40a005bdd368af763522a71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb51f223f7782047ddd7782283a7158de030baf8b7ca9fd928bb508df3ab7355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb51f223f7782047ddd7782283a7158de030baf8b7ca9fd928bb508df3ab7355->enter($__internal_bb51f223f7782047ddd7782283a7158de030baf8b7ca9fd928bb508df3ab7355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b26feaf04333c0c886c1714f7ac333c92a5a0077e3ecaff4baf90a3eb6d4e5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26feaf04333c0c886c1714f7ac333c92a5a0077e3ecaff4baf90a3eb6d4e5b1->enter($__internal_b26feaf04333c0c886c1714f7ac333c92a5a0077e3ecaff4baf90a3eb6d4e5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b26feaf04333c0c886c1714f7ac333c92a5a0077e3ecaff4baf90a3eb6d4e5b1->leave($__internal_b26feaf04333c0c886c1714f7ac333c92a5a0077e3ecaff4baf90a3eb6d4e5b1_prof);

        
        $__internal_bb51f223f7782047ddd7782283a7158de030baf8b7ca9fd928bb508df3ab7355->leave($__internal_bb51f223f7782047ddd7782283a7158de030baf8b7ca9fd928bb508df3ab7355_prof);

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
