<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_2be16abb9562975df4e07e107c224875e274e0bbc85ee0c47f314e82f528a190 extends Twig_Template
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
        $__internal_e2a93a54fc0f30441d9fc24ee6c8edca3414a8e31feb6a34bb418fe9a7f85c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a93a54fc0f30441d9fc24ee6c8edca3414a8e31feb6a34bb418fe9a7f85c3d->enter($__internal_e2a93a54fc0f30441d9fc24ee6c8edca3414a8e31feb6a34bb418fe9a7f85c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        $__internal_4291311438b32eeb7270f6e0056de4ac93c6a6a7d50d93f025924233282fc065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4291311438b32eeb7270f6e0056de4ac93c6a6a7d50d93f025924233282fc065->enter($__internal_4291311438b32eeb7270f6e0056de4ac93c6a6a7d50d93f025924233282fc065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["filterFieldName"] ?? $this->getContext($context, "filterFieldName")), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"";
            if ((($context["selectedField"] ?? $this->getContext($context, "selectedField")) == $context["field"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["selectedValue"] ?? $this->getContext($context, "selectedValue")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["filterValueName"] ?? $this->getContext($context, "filterValueName")), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "button", array()), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_e2a93a54fc0f30441d9fc24ee6c8edca3414a8e31feb6a34bb418fe9a7f85c3d->leave($__internal_e2a93a54fc0f30441d9fc24ee6c8edca3414a8e31feb6a34bb418fe9a7f85c3d_prof);

        
        $__internal_4291311438b32eeb7270f6e0056de4ac93c6a6a7d50d93f025924233282fc065->leave($__internal_4291311438b32eeb7270f6e0056de4ac93c6a6a7d50d93f025924233282fc065_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  54 => 7,  39 => 5,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"{{ filterFieldName }}\">
        {% for field, label in fields %}
            <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
        {% endfor %}
    </select>

    <input type=\"text\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" />

    <button>{{ options.button }}</button>

</form>
", "KnpPaginatorBundle:Pagination:filtration.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/filtration.html.twig");
    }
}
