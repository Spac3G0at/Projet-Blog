<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_739840651a6ba64862f57f7a6b1b75306e0c3512734b640cdbc73c7db3d0d47f extends Twig_Template
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
        $__internal_b1d83bdb69eefd6078810bcbe06e4dbaa690b2ff6f277388b69fa123ea4313e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d83bdb69eefd6078810bcbe06e4dbaa690b2ff6f277388b69fa123ea4313e0->enter($__internal_b1d83bdb69eefd6078810bcbe06e4dbaa690b2ff6f277388b69fa123ea4313e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7187408f609ef607d3b2d48836856e545d792286ce4a424820b2c6f56a99203e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7187408f609ef607d3b2d48836856e545d792286ce4a424820b2c6f56a99203e->enter($__internal_7187408f609ef607d3b2d48836856e545d792286ce4a424820b2c6f56a99203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b1d83bdb69eefd6078810bcbe06e4dbaa690b2ff6f277388b69fa123ea4313e0->leave($__internal_b1d83bdb69eefd6078810bcbe06e4dbaa690b2ff6f277388b69fa123ea4313e0_prof);

        
        $__internal_7187408f609ef607d3b2d48836856e545d792286ce4a424820b2c6f56a99203e->leave($__internal_7187408f609ef607d3b2d48836856e545d792286ce4a424820b2c6f56a99203e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
