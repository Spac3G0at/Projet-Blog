<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_595e1727099d8954a7490462f7f3e6cc3e930706475dfdb4b9b69447486e9b93 extends Twig_Template
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
        $__internal_36151109758cee51b542823f1898dfde44a895267abd859cd2cd561e498ee0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36151109758cee51b542823f1898dfde44a895267abd859cd2cd561e498ee0e0->enter($__internal_36151109758cee51b542823f1898dfde44a895267abd859cd2cd561e498ee0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9a1b92315879b70a60f95afca429245a01d9a578f1e6119c0c283d05e13a2ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1b92315879b70a60f95afca429245a01d9a578f1e6119c0c283d05e13a2ee7->enter($__internal_9a1b92315879b70a60f95afca429245a01d9a578f1e6119c0c283d05e13a2ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_36151109758cee51b542823f1898dfde44a895267abd859cd2cd561e498ee0e0->leave($__internal_36151109758cee51b542823f1898dfde44a895267abd859cd2cd561e498ee0e0_prof);

        
        $__internal_9a1b92315879b70a60f95afca429245a01d9a578f1e6119c0c283d05e13a2ee7->leave($__internal_9a1b92315879b70a60f95afca429245a01d9a578f1e6119c0c283d05e13a2ee7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
