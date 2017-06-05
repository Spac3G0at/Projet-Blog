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
        $__internal_f5bdcebba1c3cebdfecd39e5cccf2bfc5c272c15cf06d72031854e5c9a021d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5bdcebba1c3cebdfecd39e5cccf2bfc5c272c15cf06d72031854e5c9a021d91->enter($__internal_f5bdcebba1c3cebdfecd39e5cccf2bfc5c272c15cf06d72031854e5c9a021d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_34a6b8b7446195280ce570cbf25bd0fa8525cc41ef23ca7faf08c171a715be34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a6b8b7446195280ce570cbf25bd0fa8525cc41ef23ca7faf08c171a715be34->enter($__internal_34a6b8b7446195280ce570cbf25bd0fa8525cc41ef23ca7faf08c171a715be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f5bdcebba1c3cebdfecd39e5cccf2bfc5c272c15cf06d72031854e5c9a021d91->leave($__internal_f5bdcebba1c3cebdfecd39e5cccf2bfc5c272c15cf06d72031854e5c9a021d91_prof);

        
        $__internal_34a6b8b7446195280ce570cbf25bd0fa8525cc41ef23ca7faf08c171a715be34->leave($__internal_34a6b8b7446195280ce570cbf25bd0fa8525cc41ef23ca7faf08c171a715be34_prof);

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
