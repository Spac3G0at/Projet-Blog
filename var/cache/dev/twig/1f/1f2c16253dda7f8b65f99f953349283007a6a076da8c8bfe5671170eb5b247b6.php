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
        $__internal_441fbb55f65fa6849a717de9fefc11aaffa1549052cbbe5754a08ea54ddcfac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441fbb55f65fa6849a717de9fefc11aaffa1549052cbbe5754a08ea54ddcfac2->enter($__internal_441fbb55f65fa6849a717de9fefc11aaffa1549052cbbe5754a08ea54ddcfac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2df6ec323ba5e9e190b087cfe29e5f90367fb1fb805b9b04f3e52681b942055c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df6ec323ba5e9e190b087cfe29e5f90367fb1fb805b9b04f3e52681b942055c->enter($__internal_2df6ec323ba5e9e190b087cfe29e5f90367fb1fb805b9b04f3e52681b942055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_441fbb55f65fa6849a717de9fefc11aaffa1549052cbbe5754a08ea54ddcfac2->leave($__internal_441fbb55f65fa6849a717de9fefc11aaffa1549052cbbe5754a08ea54ddcfac2_prof);

        
        $__internal_2df6ec323ba5e9e190b087cfe29e5f90367fb1fb805b9b04f3e52681b942055c->leave($__internal_2df6ec323ba5e9e190b087cfe29e5f90367fb1fb805b9b04f3e52681b942055c_prof);

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
