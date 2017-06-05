<?php

/* article/index.html.twig */
class __TwigTemplate_5c6672dd9bd029b94a615dc23351aee7512275162fe7df09defe08180b58ab6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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
        $__internal_c5383f25d900e4a0d59bc7cc32deffd727d8ee701c9dfc70977bd6f619b60ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5383f25d900e4a0d59bc7cc32deffd727d8ee701c9dfc70977bd6f619b60ee2->enter($__internal_c5383f25d900e4a0d59bc7cc32deffd727d8ee701c9dfc70977bd6f619b60ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_f6d84fa0670b76a885c8bb290a72ad8417a8d4f32d741d6277ab6150b2bf787d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d84fa0670b76a885c8bb290a72ad8417a8d4f32d741d6277ab6150b2bf787d->enter($__internal_f6d84fa0670b76a885c8bb290a72ad8417a8d4f32d741d6277ab6150b2bf787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5383f25d900e4a0d59bc7cc32deffd727d8ee701c9dfc70977bd6f619b60ee2->leave($__internal_c5383f25d900e4a0d59bc7cc32deffd727d8ee701c9dfc70977bd6f619b60ee2_prof);

        
        $__internal_f6d84fa0670b76a885c8bb290a72ad8417a8d4f32d741d6277ab6150b2bf787d->leave($__internal_f6d84fa0670b76a885c8bb290a72ad8417a8d4f32d741d6277ab6150b2bf787d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8014f8951c4b6708ab1f39e08b042bad9e9d0f94b35011ca74eb4d78cc22589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8014f8951c4b6708ab1f39e08b042bad9e9d0f94b35011ca74eb4d78cc22589->enter($__internal_d8014f8951c4b6708ab1f39e08b042bad9e9d0f94b35011ca74eb4d78cc22589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8bd0649da86bfcf443d9ce2de7f099908472dc7ec78cec09d0dc671067f835d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bd0649da86bfcf443d9ce2de7f099908472dc7ec78cec09d0dc671067f835d->enter($__internal_b8bd0649da86bfcf443d9ce2de7f099908472dc7ec78cec09d0dc671067f835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articles list</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                ";
        // line 12
        echo "                <th>Label</th>
                <th>Isdraft</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 24
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "label", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["article"], "isDraft", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["article"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_b8bd0649da86bfcf443d9ce2de7f099908472dc7ec78cec09d0dc671067f835d->leave($__internal_b8bd0649da86bfcf443d9ce2de7f099908472dc7ec78cec09d0dc671067f835d_prof);

        
        $__internal_d8014f8951c4b6708ab1f39e08b042bad9e9d0f94b35011ca74eb4d78cc22589->leave($__internal_d8014f8951c4b6708ab1f39e08b042bad9e9d0f94b35011ca74eb4d78cc22589_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  97 => 26,  89 => 25,  84 => 24,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  58 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Articles list</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                {# <th>Text</th> #}
                <th>Label</th>
                <th>Isdraft</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"{{ path('article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                <td>{{ article.title }}</td>
                {# <td>{{ article.text }}</td> #}
                <td>{{ article.label }}</td>
                <td>{% if article.isDraft %}Yes{% else %}No{% endif %}</td>
                <td>{% if article.createdAt %}{{ article.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('article_show', { 'id': article.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_new') }}\">Create a new article</a>
        </li>
    </ul>
{% endblock %}
", "article/index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/index.html.twig");
    }
}
