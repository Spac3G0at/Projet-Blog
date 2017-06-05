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
        $__internal_fadf81db51f3186232eb1ab30e40b2bc88524bf14ef2dd8a2d6d031633a1150c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadf81db51f3186232eb1ab30e40b2bc88524bf14ef2dd8a2d6d031633a1150c->enter($__internal_fadf81db51f3186232eb1ab30e40b2bc88524bf14ef2dd8a2d6d031633a1150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_da989aca68bba3ab09a383fcc585eb1a5bf81ff042ae7436beac4ecd554f5598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da989aca68bba3ab09a383fcc585eb1a5bf81ff042ae7436beac4ecd554f5598->enter($__internal_da989aca68bba3ab09a383fcc585eb1a5bf81ff042ae7436beac4ecd554f5598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fadf81db51f3186232eb1ab30e40b2bc88524bf14ef2dd8a2d6d031633a1150c->leave($__internal_fadf81db51f3186232eb1ab30e40b2bc88524bf14ef2dd8a2d6d031633a1150c_prof);

        
        $__internal_da989aca68bba3ab09a383fcc585eb1a5bf81ff042ae7436beac4ecd554f5598->leave($__internal_da989aca68bba3ab09a383fcc585eb1a5bf81ff042ae7436beac4ecd554f5598_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6659f875182650c578c5cc9d6261847d5cd2c7cefda518f83684ae394146fc5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6659f875182650c578c5cc9d6261847d5cd2c7cefda518f83684ae394146fc5f->enter($__internal_6659f875182650c578c5cc9d6261847d5cd2c7cefda518f83684ae394146fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27a87f6b4c1cad1465771979f2ec3144d814159cb00f25d05fa48e2405ba1ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a87f6b4c1cad1465771979f2ec3144d814159cb00f25d05fa48e2405ba1ce8->enter($__internal_27a87f6b4c1cad1465771979f2ec3144d814159cb00f25d05fa48e2405ba1ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1 class=\"text-center\"><span><ins>Article list</ins></span></h1>
    
    <table class=\"table table-bordered\">
        <tr>
            ";
        // line 10
        echo "            <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
            <th";
        // line 11
        if ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
            <th>";
        // line 12
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Created at", array(0 => "a.createdAt", 1 => "a.createdAt"));
        echo "</th>
            <th";
        // line 13
        if ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "isSorted", array(0 => "a.isDraft"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Is Draft", "a.isDraft");
        echo "</th>
            <th>Actions</th>

        </tr>

        ";
        // line 18
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
            // line 19
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["article"], "isDraft", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                  
                            <a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                      
                            <a class=\"btn btn-warning\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    
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
        // line 33
        echo "    </table>

    <div class=\"count\">
        Nombre total d'articles : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </div>


            <a class=\"btn btn-success\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>

    <div class=\"navigation\">
        ";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
    </div>





    ";
        // line 51
        echo "
";
        // line 65
        echo "            ";
        // line 69
        echo "                    ";
        // line 70
        echo "                   ";
        // line 93
        echo "
    
";
        
        $__internal_27a87f6b4c1cad1465771979f2ec3144d814159cb00f25d05fa48e2405ba1ce8->leave($__internal_27a87f6b4c1cad1465771979f2ec3144d814159cb00f25d05fa48e2405ba1ce8_prof);

        
        $__internal_6659f875182650c578c5cc9d6261847d5cd2c7cefda518f83684ae394146fc5f->leave($__internal_6659f875182650c578c5cc9d6261847d5cd2c7cefda518f83684ae394146fc5f_prof);

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
        return array (  194 => 93,  192 => 70,  190 => 69,  188 => 65,  185 => 51,  175 => 43,  169 => 40,  162 => 36,  157 => 33,  138 => 28,  133 => 26,  123 => 23,  117 => 22,  113 => 21,  109 => 20,  102 => 19,  85 => 18,  73 => 13,  69 => 12,  61 => 11,  56 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1 class=\"text-center\"><span><ins>Article list</ins></span></h1>
    
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
                  
                            <a class=\"btn btn-primary\" href=\"{{ path('article_show', { 'id': article.id }) }}\">show</a>
                      
                            <a class=\"btn btn-warning\" href=\"{{ path('article_edit', { 'id': article.id }) }}\">edit</a>
                    
                </td>
            </tr>
        {% endfor %}
    </table>

    <div class=\"count\">
        Nombre total d'articles : {{ pagination.getTotalItemCount }}
    </div>


            <a class=\"btn btn-success\" href=\"{{ path('article_new') }}\">Create a new article</a>

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
", "article/index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/index.html.twig");
    }
}
