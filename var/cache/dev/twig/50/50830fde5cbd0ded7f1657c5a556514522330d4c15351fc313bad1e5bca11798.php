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
        $__internal_14268e76b8e3ce71a7097972eae632ccb23e4b9296657814fd232c77b86f6dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14268e76b8e3ce71a7097972eae632ccb23e4b9296657814fd232c77b86f6dae->enter($__internal_14268e76b8e3ce71a7097972eae632ccb23e4b9296657814fd232c77b86f6dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_42db6090645c9e88d62ecaa12cb0f5da87e3f30ec88ec541b1a8dcdeb358eb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42db6090645c9e88d62ecaa12cb0f5da87e3f30ec88ec541b1a8dcdeb358eb52->enter($__internal_42db6090645c9e88d62ecaa12cb0f5da87e3f30ec88ec541b1a8dcdeb358eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_14268e76b8e3ce71a7097972eae632ccb23e4b9296657814fd232c77b86f6dae->leave($__internal_14268e76b8e3ce71a7097972eae632ccb23e4b9296657814fd232c77b86f6dae_prof);

        
        $__internal_42db6090645c9e88d62ecaa12cb0f5da87e3f30ec88ec541b1a8dcdeb358eb52->leave($__internal_42db6090645c9e88d62ecaa12cb0f5da87e3f30ec88ec541b1a8dcdeb358eb52_prof);

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
