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
        $__internal_9f4e2f3322b67f74f661b06175c91fe5a20923ce4530bf59560da07da52a18c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4e2f3322b67f74f661b06175c91fe5a20923ce4530bf59560da07da52a18c0->enter($__internal_9f4e2f3322b67f74f661b06175c91fe5a20923ce4530bf59560da07da52a18c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

        $__internal_aafce5bf3667973bd2054f102b236ccf71856a84ef05588ed6ab868491bbb370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafce5bf3667973bd2054f102b236ccf71856a84ef05588ed6ab868491bbb370->enter($__internal_aafce5bf3667973bd2054f102b236ccf71856a84ef05588ed6ab868491bbb370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sliding.html.twig"));

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
                echo "                <li><span class=\"first\">
                    <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
                </span></li>
            ";
            }
            // line 11
            echo "
            ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "                <li><span class=\"previous\">
                    <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
                </span></li>
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
                    echo "                    <li><span class=\"page\">
                        <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </span></li>
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
                echo "                <li><span class=\"next\">
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
                </span></li>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if ((array_key_exists("last", $context) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["last"] ?? $this->getContext($context, "last"))))) {
                // line 36
                echo "                <li><span class=\"last\">
                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
                </span></li>
            ";
            }
            // line 40
            echo "        </ul>
    </div>
";
        }
        
        $__internal_9f4e2f3322b67f74f661b06175c91fe5a20923ce4530bf59560da07da52a18c0->leave($__internal_9f4e2f3322b67f74f661b06175c91fe5a20923ce4530bf59560da07da52a18c0_prof);

        
        $__internal_aafce5bf3667973bd2054f102b236ccf71856a84ef05588ed6ab868491bbb370->leave($__internal_aafce5bf3667973bd2054f102b236ccf71856a84ef05588ed6ab868491bbb370_prof);

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
        return array (  121 => 40,  115 => 37,  112 => 36,  110 => 35,  107 => 34,  101 => 31,  98 => 30,  96 => 29,  93 => 28,  86 => 26,  80 => 24,  72 => 21,  69 => 20,  66 => 19,  62 => 18,  59 => 17,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  39 => 8,  36 => 7,  34 => 6,  30 => 4,  28 => 3,  25 => 2,);
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
                <li><span class=\"first\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
                </span></li>
            {% endif %}

            {% if previous is defined %}
                <li><span class=\"previous\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
                </span></li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li><span class=\"page\">
                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </span></li>
                {% else %}
                    <li class=\"active\"><span class=\"current\">{{ page }}</span></li>
                {% endif %}

            {% endfor %}

            {% if next is defined %}
                <li><span class=\"next\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
                </span></li>
            {% endif %}

            {% if last is defined and current != last %}
                <li><span class=\"last\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
                </span></li>
            {% endif %}
        </ul>
    </div>
{% endif %}
", "KnpPaginatorBundle:Pagination:sliding.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sliding.html.twig");
    }
}
