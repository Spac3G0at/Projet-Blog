<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_37843d11843488f1dc9a3910f0aea3d194829bc3c2c5858262d5d8b789c1633a extends Twig_Template
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
        $__internal_41a4fea93473dc3d03e0cfae1b8844fd0623028342bd39be3775f7d303e3eb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a4fea93473dc3d03e0cfae1b8844fd0623028342bd39be3775f7d303e3eb08->enter($__internal_41a4fea93473dc3d03e0cfae1b8844fd0623028342bd39be3775f7d303e3eb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4acf855be1303173926e29572b8dc27fc74e39a4d22f2000f7c18bb2d74360ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acf855be1303173926e29572b8dc27fc74e39a4d22f2000f7c18bb2d74360ca->enter($__internal_4acf855be1303173926e29572b8dc27fc74e39a4d22f2000f7c18bb2d74360ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_41a4fea93473dc3d03e0cfae1b8844fd0623028342bd39be3775f7d303e3eb08->leave($__internal_41a4fea93473dc3d03e0cfae1b8844fd0623028342bd39be3775f7d303e3eb08_prof);

        
        $__internal_4acf855be1303173926e29572b8dc27fc74e39a4d22f2000f7c18bb2d74360ca->leave($__internal_4acf855be1303173926e29572b8dc27fc74e39a4d22f2000f7c18bb2d74360ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
