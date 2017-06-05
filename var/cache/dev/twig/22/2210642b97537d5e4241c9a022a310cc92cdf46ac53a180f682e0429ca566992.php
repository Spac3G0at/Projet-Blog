<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_52dbe6d78644715d266dd8739bf17017fddff7cdc1f9d61eaceea547041c42a6 extends Twig_Template
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
        $__internal_377de2f41e84a6cbef3fdb054b9bf1517693b61d5cf66c021875fb793f362a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377de2f41e84a6cbef3fdb054b9bf1517693b61d5cf66c021875fb793f362a48->enter($__internal_377de2f41e84a6cbef3fdb054b9bf1517693b61d5cf66c021875fb793f362a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7daa0ceaf679449e2faa8513fc9d2d3a4c136452e39e9b78613307a1e536c1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daa0ceaf679449e2faa8513fc9d2d3a4c136452e39e9b78613307a1e536c1af->enter($__internal_7daa0ceaf679449e2faa8513fc9d2d3a4c136452e39e9b78613307a1e536c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_377de2f41e84a6cbef3fdb054b9bf1517693b61d5cf66c021875fb793f362a48->leave($__internal_377de2f41e84a6cbef3fdb054b9bf1517693b61d5cf66c021875fb793f362a48_prof);

        
        $__internal_7daa0ceaf679449e2faa8513fc9d2d3a4c136452e39e9b78613307a1e536c1af->leave($__internal_7daa0ceaf679449e2faa8513fc9d2d3a4c136452e39e9b78613307a1e536c1af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
