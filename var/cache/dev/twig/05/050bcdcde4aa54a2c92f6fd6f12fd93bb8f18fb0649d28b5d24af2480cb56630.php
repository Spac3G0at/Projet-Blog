<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_61ee7fdf9e1d569cb85446b385c3d12662765a5d6ffbf496b1882d015d4d2e53 extends Twig_Template
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
        $__internal_07017e791b333acd91051307fa6eb8f095be3776ac72a83c10d7f5b2e515be9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07017e791b333acd91051307fa6eb8f095be3776ac72a83c10d7f5b2e515be9d->enter($__internal_07017e791b333acd91051307fa6eb8f095be3776ac72a83c10d7f5b2e515be9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b330fa95b6cecff72674f914e9a2c816fb036d3f95cf5550aec30211dd92cd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b330fa95b6cecff72674f914e9a2c816fb036d3f95cf5550aec30211dd92cd8e->enter($__internal_b330fa95b6cecff72674f914e9a2c816fb036d3f95cf5550aec30211dd92cd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_07017e791b333acd91051307fa6eb8f095be3776ac72a83c10d7f5b2e515be9d->leave($__internal_07017e791b333acd91051307fa6eb8f095be3776ac72a83c10d7f5b2e515be9d_prof);

        
        $__internal_b330fa95b6cecff72674f914e9a2c816fb036d3f95cf5550aec30211dd92cd8e->leave($__internal_b330fa95b6cecff72674f914e9a2c816fb036d3f95cf5550aec30211dd92cd8e_prof);

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
