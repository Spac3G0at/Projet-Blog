<?php

/* ::paginator.html.twig */
class __TwigTemplate_d95868594c2cb9154eb59ce65963e34a43302343a5da770e6a5e1cac9a3dc2c8 extends Twig_Template
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
        $__internal_2a7a47c3c5e8092daceb42d340ce2bd80272533c8e947cbe688eb2ebf30f4486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7a47c3c5e8092daceb42d340ce2bd80272533c8e947cbe688eb2ebf30f4486->enter($__internal_2a7a47c3c5e8092daceb42d340ce2bd80272533c8e947cbe688eb2ebf30f4486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::paginator.html.twig"));

        $__internal_30fad0c6ff86d4e53ab4502b2c783cd408f972aca04f9a61aeab5c8d1e33cb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fad0c6ff86d4e53ab4502b2c783cd408f972aca04f9a61aeab5c8d1e33cb13->enter($__internal_30fad0c6ff86d4e53ab4502b2c783cd408f972aca04f9a61aeab5c8d1e33cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::paginator.html.twig"));

        // line 1
        echo "<div class=\"text-center\">
    <ul class=\"pagination\">
        ";
        // line 3
        if ((($context["page"] ?? $this->getContext($context, "page")) == 1)) {
            // line 4
            echo "            <li class=\"disabled\"><a href=\"#\">&laquo;</a></li>
        ";
        } else {
            // line 6
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array("page" => (($context["page"] ?? $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "            <li class=\"";
            echo ((($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) ? ("active") : (""));
            echo "\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["pagesCount"] ?? $this->getContext($context, "pagesCount")))) {
            // line 14
            echo "            <li class=\"disabled\"><a href=\"#\">&raquo;</a></li>
        ";
        } else {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array("page" => (($context["page"] ?? $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">&raquo;</li>
        ";
        }
        // line 18
        echo "    </ul>
</div>";
        
        $__internal_2a7a47c3c5e8092daceb42d340ce2bd80272533c8e947cbe688eb2ebf30f4486->leave($__internal_2a7a47c3c5e8092daceb42d340ce2bd80272533c8e947cbe688eb2ebf30f4486_prof);

        
        $__internal_30fad0c6ff86d4e53ab4502b2c783cd408f972aca04f9a61aeab5c8d1e33cb13->leave($__internal_30fad0c6ff86d4e53ab4502b2c783cd408f972aca04f9a61aeab5c8d1e33cb13_prof);

    }

    public function getTemplateName()
    {
        return "::paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  69 => 16,  65 => 14,  62 => 13,  51 => 10,  46 => 9,  41 => 8,  35 => 6,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"text-center\">
    <ul class=\"pagination\">
        {% if page == 1 %}
            <li class=\"disabled\"><a href=\"#\">&laquo;</a></li>
        {% else %}
            <li><a href=\"{{ path(app.request.get('_route'), { 'page': page-1 }) }}\">&laquo;</a></li>
        {% endif %}
        {% for p in range(1, pagesCount) %}
            <li class=\"{{ p == page ? 'active' : '' }}\">
                <a href=\"{{ path(app.request.get('_route'), { 'page': p }) }}\">{{ p }}</a>
            </li>
        {% endfor %}
        {% if page == pagesCount %}
            <li class=\"disabled\"><a href=\"#\">&raquo;</a></li>
        {% else %}
            <li><a href=\"{{ path(app.request.get('_route'), { 'page': page+1 }) }}\">&raquo;</li>
        {% endif %}
    </ul>
</div>", "::paginator.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/paginator.html.twig");
    }
}
