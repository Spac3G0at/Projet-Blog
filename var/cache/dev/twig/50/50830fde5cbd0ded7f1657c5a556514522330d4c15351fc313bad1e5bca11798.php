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
        $__internal_da034a7b8adc4e960ca55b7c18f52f8bb082cb0416e617312a34f4107e7e4ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da034a7b8adc4e960ca55b7c18f52f8bb082cb0416e617312a34f4107e7e4ed8->enter($__internal_da034a7b8adc4e960ca55b7c18f52f8bb082cb0416e617312a34f4107e7e4ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2651a96edc3ae0c97c51fa9b83dda5901d9522301e6b03532f7409e5980c0409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2651a96edc3ae0c97c51fa9b83dda5901d9522301e6b03532f7409e5980c0409->enter($__internal_2651a96edc3ae0c97c51fa9b83dda5901d9522301e6b03532f7409e5980c0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_da034a7b8adc4e960ca55b7c18f52f8bb082cb0416e617312a34f4107e7e4ed8->leave($__internal_da034a7b8adc4e960ca55b7c18f52f8bb082cb0416e617312a34f4107e7e4ed8_prof);

        
        $__internal_2651a96edc3ae0c97c51fa9b83dda5901d9522301e6b03532f7409e5980c0409->leave($__internal_2651a96edc3ae0c97c51fa9b83dda5901d9522301e6b03532f7409e5980c0409_prof);

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
