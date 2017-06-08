<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fd09df9ef9e8eb284056b94abcc7641237995e17289bb3da35b526f9db8da821 extends Twig_Template
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
        $__internal_e6e32a3d6f64c10bf13988290bcfcbcf0ceaafaab3189ecbe3ab10201fcd6763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e32a3d6f64c10bf13988290bcfcbcf0ceaafaab3189ecbe3ab10201fcd6763->enter($__internal_e6e32a3d6f64c10bf13988290bcfcbcf0ceaafaab3189ecbe3ab10201fcd6763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dfd53ac3cb1d2c34fb74713ded8f0bf525929ba57d4be07e2368e7ae181d410e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd53ac3cb1d2c34fb74713ded8f0bf525929ba57d4be07e2368e7ae181d410e->enter($__internal_dfd53ac3cb1d2c34fb74713ded8f0bf525929ba57d4be07e2368e7ae181d410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e6e32a3d6f64c10bf13988290bcfcbcf0ceaafaab3189ecbe3ab10201fcd6763->leave($__internal_e6e32a3d6f64c10bf13988290bcfcbcf0ceaafaab3189ecbe3ab10201fcd6763_prof);

        
        $__internal_dfd53ac3cb1d2c34fb74713ded8f0bf525929ba57d4be07e2368e7ae181d410e->leave($__internal_dfd53ac3cb1d2c34fb74713ded8f0bf525929ba57d4be07e2368e7ae181d410e_prof);

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
