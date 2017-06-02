<?php

/* article/show.html.twig */
class __TwigTemplate_dec5fa762589ba0a18b1a2c854c0eb0c75b1fb660a54780bd46d535101c674e4 extends Twig_Template
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
        $__internal_b7ec14c542ef0ac2f29d58315940e9bd2a05253d1032b18a92516be9665ea913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ec14c542ef0ac2f29d58315940e9bd2a05253d1032b18a92516be9665ea913->enter($__internal_b7ec14c542ef0ac2f29d58315940e9bd2a05253d1032b18a92516be9665ea913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_bbe7281fb07369349898bd7d1080ab00edf78772f583283fdaafc4ce1ec1b540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe7281fb07369349898bd7d1080ab00edf78772f583283fdaafc4ce1ec1b540->enter($__internal_bbe7281fb07369349898bd7d1080ab00edf78772f583283fdaafc4ce1ec1b540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ec14c542ef0ac2f29d58315940e9bd2a05253d1032b18a92516be9665ea913->leave($__internal_b7ec14c542ef0ac2f29d58315940e9bd2a05253d1032b18a92516be9665ea913_prof);

        
        $__internal_bbe7281fb07369349898bd7d1080ab00edf78772f583283fdaafc4ce1ec1b540->leave($__internal_bbe7281fb07369349898bd7d1080ab00edf78772f583283fdaafc4ce1ec1b540_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d03f0b939a2eab8baa61873be2b963fc31cb7a53ae3533634ee687308586ad52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03f0b939a2eab8baa61873be2b963fc31cb7a53ae3533634ee687308586ad52->enter($__internal_d03f0b939a2eab8baa61873be2b963fc31cb7a53ae3533634ee687308586ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_949c1c5f14183ffb6780653b5354431a0d104073827b0937d6cc0b2915f8bf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949c1c5f14183ffb6780653b5354431a0d104073827b0937d6cc0b2915f8bf0a->enter($__internal_949c1c5f14183ffb6780653b5354431a0d104073827b0937d6cc0b2915f8bf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Label</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "label", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isdraft</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "isDraft", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_949c1c5f14183ffb6780653b5354431a0d104073827b0937d6cc0b2915f8bf0a->leave($__internal_949c1c5f14183ffb6780653b5354431a0d104073827b0937d6cc0b2915f8bf0a_prof);

        
        $__internal_d03f0b939a2eab8baa61873be2b963fc31cb7a53ae3533634ee687308586ad52->leave($__internal_d03f0b939a2eab8baa61873be2b963fc31cb7a53ae3533634ee687308586ad52_prof);

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
        return array (  125 => 45,  120 => 43,  114 => 40,  108 => 37,  96 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article</h1>

    <table>
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

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/show.html.twig");
    }
}
