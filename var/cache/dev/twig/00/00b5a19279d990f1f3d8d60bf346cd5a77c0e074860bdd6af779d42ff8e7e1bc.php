<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_10f472726f752626e68d972039f688a544d36ee49e36bddc8f450757e814f609 extends Twig_Template
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
        $__internal_1f1f1f157dd80b1115705a6f689ee77750b8f78fcd414f52e9b8043787329ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1f1f157dd80b1115705a6f689ee77750b8f78fcd414f52e9b8043787329ab5->enter($__internal_1f1f1f157dd80b1115705a6f689ee77750b8f78fcd414f52e9b8043787329ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_232df24b9ea7aa87f25c5ed351647f111882896805a0a9a7a9ee5092d4b79537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232df24b9ea7aa87f25c5ed351647f111882896805a0a9a7a9ee5092d4b79537->enter($__internal_232df24b9ea7aa87f25c5ed351647f111882896805a0a9a7a9ee5092d4b79537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1f1f1f157dd80b1115705a6f689ee77750b8f78fcd414f52e9b8043787329ab5->leave($__internal_1f1f1f157dd80b1115705a6f689ee77750b8f78fcd414f52e9b8043787329ab5_prof);

        
        $__internal_232df24b9ea7aa87f25c5ed351647f111882896805a0a9a7a9ee5092d4b79537->leave($__internal_232df24b9ea7aa87f25c5ed351647f111882896805a0a9a7a9ee5092d4b79537_prof);

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
