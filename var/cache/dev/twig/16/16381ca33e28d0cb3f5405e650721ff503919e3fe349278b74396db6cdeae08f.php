<?php

/* article/index.html.twig */
class __TwigTemplate_eafdd9adb599ef576c94ed9db9b912f0f53974d173449bafe59dfa493c8931df extends Twig_Template
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
        $__internal_eecc54c764547d951e763a22a0f4c1b6a5f9a5b12abb2c5baec9039dc67502cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecc54c764547d951e763a22a0f4c1b6a5f9a5b12abb2c5baec9039dc67502cd->enter($__internal_eecc54c764547d951e763a22a0f4c1b6a5f9a5b12abb2c5baec9039dc67502cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_cbb73e07217b231ea5a4ad0787cc85ec9bad4f8100144275c5390dee14865b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb73e07217b231ea5a4ad0787cc85ec9bad4f8100144275c5390dee14865b5d->enter($__internal_cbb73e07217b231ea5a4ad0787cc85ec9bad4f8100144275c5390dee14865b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecc54c764547d951e763a22a0f4c1b6a5f9a5b12abb2c5baec9039dc67502cd->leave($__internal_eecc54c764547d951e763a22a0f4c1b6a5f9a5b12abb2c5baec9039dc67502cd_prof);

        
        $__internal_cbb73e07217b231ea5a4ad0787cc85ec9bad4f8100144275c5390dee14865b5d->leave($__internal_cbb73e07217b231ea5a4ad0787cc85ec9bad4f8100144275c5390dee14865b5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5dc9ce34c1cb2f1879a122408c2b36636cda589907a5b8fa1f1b1dc3cf4dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5dc9ce34c1cb2f1879a122408c2b36636cda589907a5b8fa1f1b1dc3cf4dd8->enter($__internal_ec5dc9ce34c1cb2f1879a122408c2b36636cda589907a5b8fa1f1b1dc3cf4dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4f3dcc5e9d319d75e5003d4c4286b6195b274316221136c5c7fd2932b00af67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f3dcc5e9d319d75e5003d4c4286b6195b274316221136c5c7fd2932b00af67->enter($__internal_e4f3dcc5e9d319d75e5003d4c4286b6195b274316221136c5c7fd2932b00af67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1 class=\"text-center\">Article list</h1>

    <div class=\"count\">
        Nombre total d'articles : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </div>
    <table class=\"table table-bordered\">
        <tr>
            ";
        // line 13
        echo "            <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
            <th";
        // line 14
        if ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
            <th>";
        // line 15
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Created at", array(0 => "a.createdAt", 1 => "a.createdAt"));
        echo "</th>
            <th";
        // line 16
        if ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "isSorted", array(0 => "a.isDraft"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Is Draft", "a.isDraft");
        echo "</th>
            <th>Actions</th>

        </tr>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["article"], "isDraft", array())) {
                echo "Yes";
            } else {
                echo "No";
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
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table>

    <div class=\"navigation\">
        ";
        // line 42
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
    </div>

    ";
        // line 46
        echo "
";
        // line 60
        echo "            ";
        // line 64
        echo "                    ";
        // line 65
        echo "                   ";
        // line 88
        echo "

";
        
        $__internal_e4f3dcc5e9d319d75e5003d4c4286b6195b274316221136c5c7fd2932b00af67->leave($__internal_e4f3dcc5e9d319d75e5003d4c4286b6195b274316221136c5c7fd2932b00af67_prof);

        
        $__internal_ec5dc9ce34c1cb2f1879a122408c2b36636cda589907a5b8fa1f1b1dc3cf4dd8->leave($__internal_ec5dc9ce34c1cb2f1879a122408c2b36636cda589907a5b8fa1f1b1dc3cf4dd8_prof);

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
        return array (  186 => 88,  184 => 65,  182 => 64,  180 => 60,  177 => 46,  171 => 42,  166 => 39,  146 => 33,  140 => 30,  129 => 26,  123 => 25,  119 => 24,  115 => 23,  108 => 22,  91 => 21,  79 => 16,  75 => 15,  67 => 14,  62 => 13,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1 class=\"text-center\">Article list</h1>

    <div class=\"count\">
        Nombre total d'articles : {{ pagination.getTotalItemCount }}
    </div>
    <table class=\"table table-bordered\">
        <tr>
            {# sorting of properties based on query components #}
            <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
            <th{% if pagination.isSorted('a.Title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
            <th>{{ knp_pagination_sortable(pagination, 'Created at', ['a.createdAt', 'a.createdAt']) }}</th>
            <th{% if pagination.isSorted('a.isDraft') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Is Draft', 'a.isDraft') }}</th>
            <th>Actions</th>

        </tr>

        {% for article in pagination %}
            <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                <td>{{ article.id }}</td>
                <td>{{ article.title }}</td>
                <td>{{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</td>
                <td>{% if article.isDraft %}Yes{% else %}No{% endif %}</td>
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
    </table>

    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>

    {# <h1>Articles list</h1> #}

{#     <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Text</th>
                <th>Label</th>
                <th>Isdraft</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody> #}
            {# {% for article in articles %} #}
{#                 <tr>
                    <td><a href=\"{{ path('article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                    <td>{{ article.title }}</td> #}
                    {# <td>{{ article.text }}</td> #}
                   {#  <td>{{ article.label }}</td>
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
    </ul> #}


{% endblock %}
", "article/index.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/app/Resources/views/article/index.html.twig");
    }
}
