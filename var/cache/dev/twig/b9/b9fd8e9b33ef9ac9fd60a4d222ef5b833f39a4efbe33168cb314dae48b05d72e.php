<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_c06844201f1fd688b91230facb0eb779a9ee474ec18f1b7b148a32ce8313b86c extends Twig_Template
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
        $__internal_7277bf10ad9b83d5c0ebce1a9cb878e6b6b13465a2f2a93cd9356235e679f955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7277bf10ad9b83d5c0ebce1a9cb878e6b6b13465a2f2a93cd9356235e679f955->enter($__internal_7277bf10ad9b83d5c0ebce1a9cb878e6b6b13465a2f2a93cd9356235e679f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_02097211fced33edbc7b704594974ae64de3ba6e03ceefdfd1e9b03bb31c9d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02097211fced33edbc7b704594974ae64de3ba6e03ceefdfd1e9b03bb31c9d4d->enter($__internal_02097211fced33edbc7b704594974ae64de3ba6e03ceefdfd1e9b03bb31c9d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_7277bf10ad9b83d5c0ebce1a9cb878e6b6b13465a2f2a93cd9356235e679f955->leave($__internal_7277bf10ad9b83d5c0ebce1a9cb878e6b6b13465a2f2a93cd9356235e679f955_prof);

        
        $__internal_02097211fced33edbc7b704594974ae64de3ba6e03ceefdfd1e9b03bb31c9d4d->leave($__internal_02097211fced33edbc7b704594974ae64de3ba6e03ceefdfd1e9b03bb31c9d4d_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
