<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a4ec120114672e29a1e34a0b47ffad99f890a3d7d9b7013c43fc4bef9a246ecc extends Twig_Template
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
        $__internal_66af8429d87b3d25916654dfd140a547be21659bf511897fc82fdad38af8b3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66af8429d87b3d25916654dfd140a547be21659bf511897fc82fdad38af8b3b9->enter($__internal_66af8429d87b3d25916654dfd140a547be21659bf511897fc82fdad38af8b3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_49af804755b899cb9a4bc90d9ae93ba364904eca6c300da27b395264235da2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49af804755b899cb9a4bc90d9ae93ba364904eca6c300da27b395264235da2e7->enter($__internal_49af804755b899cb9a4bc90d9ae93ba364904eca6c300da27b395264235da2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_66af8429d87b3d25916654dfd140a547be21659bf511897fc82fdad38af8b3b9->leave($__internal_66af8429d87b3d25916654dfd140a547be21659bf511897fc82fdad38af8b3b9_prof);

        
        $__internal_49af804755b899cb9a4bc90d9ae93ba364904eca6c300da27b395264235da2e7->leave($__internal_49af804755b899cb9a4bc90d9ae93ba364904eca6c300da27b395264235da2e7_prof);

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
