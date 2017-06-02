<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6b3b00c04218903e69b17fc9888485db71d6a394e859e0407b21c2f9ba5c29c8 extends Twig_Template
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
        $__internal_860a8c54692c0d61690d259a2b7251170e564663c9519cae969fccb95ae5c5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860a8c54692c0d61690d259a2b7251170e564663c9519cae969fccb95ae5c5ce->enter($__internal_860a8c54692c0d61690d259a2b7251170e564663c9519cae969fccb95ae5c5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e4ed55f61dfa401163bac416a53adf656a1bf3b0df9815a379db4b85e9e0def4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ed55f61dfa401163bac416a53adf656a1bf3b0df9815a379db4b85e9e0def4->enter($__internal_e4ed55f61dfa401163bac416a53adf656a1bf3b0df9815a379db4b85e9e0def4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_860a8c54692c0d61690d259a2b7251170e564663c9519cae969fccb95ae5c5ce->leave($__internal_860a8c54692c0d61690d259a2b7251170e564663c9519cae969fccb95ae5c5ce_prof);

        
        $__internal_e4ed55f61dfa401163bac416a53adf656a1bf3b0df9815a379db4b85e9e0def4->leave($__internal_e4ed55f61dfa401163bac416a53adf656a1bf3b0df9815a379db4b85e9e0def4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
