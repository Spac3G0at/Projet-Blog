<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_c95177c0f88ccb3479d05553f3bdf3add0cd5b3ff8ac7d6975cfaef0cd75448b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07331931f300541a79fe923fe1c186d53c1e5edc95b2b93da9fe3ba80a9e7519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07331931f300541a79fe923fe1c186d53c1e5edc95b2b93da9fe3ba80a9e7519->enter($__internal_07331931f300541a79fe923fe1c186d53c1e5edc95b2b93da9fe3ba80a9e7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        $__internal_685416b66803ab2faa87889fbcedf3bbdfd0a4fb000fb3289f6e99ed31393271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685416b66803ab2faa87889fbcedf3bbdfd0a4fb000fb3289f6e99ed31393271->enter($__internal_685416b66803ab2faa87889fbcedf3bbdfd0a4fb000fb3289f6e99ed31393271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "    <div class=\"pagination\">
        <ul class=\"pagination\">
            ";
            // line 6
            if ((array_key_exists("first", $context) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["first"] ?? $this->getContext($context, "first"))))) {
                // line 7
                echo "                <li>";
                // line 8
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
                ";
                // line 9
                echo "</li>
            ";
            }
            // line 11
            echo "
            ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "                <li>";
                // line 14
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
                ";
                // line 15
                echo "</li>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "                ";
                if (($context["page"] != ($context["current"] ?? $this->getContext($context, "current")))) {
                    // line 20
                    echo "                    <li>";
                    // line 21
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    ";
                    // line 22
                    echo "</li>
                ";
                } else {
                    // line 24
                    echo "                    <li class=\"active\"><span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
                ";
                }
                // line 26
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            if (array_key_exists("next", $context)) {
                // line 30
                echo "                <li>";
                // line 31
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
               ";
                // line 32
                echo "</li>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if ((array_key_exists("last", $context) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["last"] ?? $this->getContext($context, "last"))))) {
                // line 36
                echo "                <li>";
                // line 37
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
                ";
                // line 38
                echo "</li>
            ";
            }
            // line 40
            echo "        </ul>
    </div>
";
        }
        
        $__internal_07331931f300541a79fe923fe1c186d53c1e5edc95b2b93da9fe3ba80a9e7519->leave($__internal_07331931f300541a79fe923fe1c186d53c1e5edc95b2b93da9fe3ba80a9e7519_prof);

        
        $__internal_685416b66803ab2faa87889fbcedf3bbdfd0a4fb000fb3289f6e99ed31393271->leave($__internal_685416b66803ab2faa87889fbcedf3bbdfd0a4fb000fb3289f6e99ed31393271_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  127 => 38,  122 => 37,  120 => 36,  118 => 35,  115 => 34,  111 => 32,  106 => 31,  104 => 30,  102 => 29,  99 => 28,  92 => 26,  86 => 24,  82 => 22,  75 => 21,  73 => 20,  70 => 19,  66 => 18,  63 => 17,  59 => 15,  54 => 14,  52 => 13,  50 => 12,  47 => 11,  43 => 9,  38 => 8,  36 => 7,  34 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}
    <div class=\"pagination\">
        <ul class=\"pagination\">
            {% if first is defined and current != first %}
                <li>{# <span class=\"first\"> #}
                    <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
                {# </span> #}</li>
            {% endif %}

            {% if previous is defined %}
                <li>{# <span class=\"previous\"> #}
                    <a  href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
                {# </span> #}</li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li>{# <span class=\"page\"> #}
                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    {# </span> #}</li>
                {% else %}
                    <li class=\"active\"><span class=\"current\">{{ page }}</span></li>
                {% endif %}

            {% endfor %}

            {% if next is defined %}
                <li>{# <span class=\"next\"> #}
                    <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
               {#  </span> #}</li>
            {% endif %}

            {% if last is defined and current != last %}
                <li>{# <span class=\"last\"> #}
                    <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
                {# </span> #}</li>
            {% endif %}
        </ul>
    </div>
{% endif %}
", "KnpPaginatorBundle:Pagination:sliding.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sliding.html.twig");
    }
}
