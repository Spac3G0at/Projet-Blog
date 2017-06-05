<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d3b746fbeec5f32e4c5c95bf8541c2e06ebcf79b4b5e820e5a30d4e8b9d744ee extends Twig_Template
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
        $__internal_8f03317e1a2466092ab939707178121f5c3769ca886cd87553b5403ad170fe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f03317e1a2466092ab939707178121f5c3769ca886cd87553b5403ad170fe44->enter($__internal_8f03317e1a2466092ab939707178121f5c3769ca886cd87553b5403ad170fe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_53588195183a290b2adcfe8d470c6de677899b9f25c7e6b85bf987f7f30d152a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53588195183a290b2adcfe8d470c6de677899b9f25c7e6b85bf987f7f30d152a->enter($__internal_53588195183a290b2adcfe8d470c6de677899b9f25c7e6b85bf987f7f30d152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8f03317e1a2466092ab939707178121f5c3769ca886cd87553b5403ad170fe44->leave($__internal_8f03317e1a2466092ab939707178121f5c3769ca886cd87553b5403ad170fe44_prof);

        
        $__internal_53588195183a290b2adcfe8d470c6de677899b9f25c7e6b85bf987f7f30d152a->leave($__internal_53588195183a290b2adcfe8d470c6de677899b9f25c7e6b85bf987f7f30d152a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
