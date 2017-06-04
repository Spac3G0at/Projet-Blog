<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ff10781e247125c4b611d2ae24c2b8322d6569c83349c301a7939f1baa452beb extends Twig_Template
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
        $__internal_537f6bcc944655097c271c44efa3f170b09f9c500efacc69155bdaf828b0f6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537f6bcc944655097c271c44efa3f170b09f9c500efacc69155bdaf828b0f6fc->enter($__internal_537f6bcc944655097c271c44efa3f170b09f9c500efacc69155bdaf828b0f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2a9e5ac16374348049d05a3b62eb9e95d0d4b191bcbd52335aaa33ac377f013b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9e5ac16374348049d05a3b62eb9e95d0d4b191bcbd52335aaa33ac377f013b->enter($__internal_2a9e5ac16374348049d05a3b62eb9e95d0d4b191bcbd52335aaa33ac377f013b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_537f6bcc944655097c271c44efa3f170b09f9c500efacc69155bdaf828b0f6fc->leave($__internal_537f6bcc944655097c271c44efa3f170b09f9c500efacc69155bdaf828b0f6fc_prof);

        
        $__internal_2a9e5ac16374348049d05a3b62eb9e95d0d4b191bcbd52335aaa33ac377f013b->leave($__internal_2a9e5ac16374348049d05a3b62eb9e95d0d4b191bcbd52335aaa33ac377f013b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
