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
        $__internal_bb93b9cd6654580688c44bd2894fb46ec6b1b7a7e423f95379f5d2f794b298e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb93b9cd6654580688c44bd2894fb46ec6b1b7a7e423f95379f5d2f794b298e2->enter($__internal_bb93b9cd6654580688c44bd2894fb46ec6b1b7a7e423f95379f5d2f794b298e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9a5195fae31a5a5ea4dbe155dba20dfe98e61ae43f094ee8586f5088e943c736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5195fae31a5a5ea4dbe155dba20dfe98e61ae43f094ee8586f5088e943c736->enter($__internal_9a5195fae31a5a5ea4dbe155dba20dfe98e61ae43f094ee8586f5088e943c736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_bb93b9cd6654580688c44bd2894fb46ec6b1b7a7e423f95379f5d2f794b298e2->leave($__internal_bb93b9cd6654580688c44bd2894fb46ec6b1b7a7e423f95379f5d2f794b298e2_prof);

        
        $__internal_9a5195fae31a5a5ea4dbe155dba20dfe98e61ae43f094ee8586f5088e943c736->leave($__internal_9a5195fae31a5a5ea4dbe155dba20dfe98e61ae43f094ee8586f5088e943c736_prof);

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
