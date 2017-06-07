<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_808db691666f85381efd5571e7ba637c7ccfd0d42fb2d89a1b895ace15d0fb3c extends Twig_Template
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
        $__internal_5c3726621bbb1ec5a02b733ee7c04f5a4f9b56d41c1f71d9f32bcf9e4e80ff32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3726621bbb1ec5a02b733ee7c04f5a4f9b56d41c1f71d9f32bcf9e4e80ff32->enter($__internal_5c3726621bbb1ec5a02b733ee7c04f5a4f9b56d41c1f71d9f32bcf9e4e80ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a373b9f9ea58c57240abbb94e392f18919ec58f30811ca087d7ff5ff24628597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a373b9f9ea58c57240abbb94e392f18919ec58f30811ca087d7ff5ff24628597->enter($__internal_a373b9f9ea58c57240abbb94e392f18919ec58f30811ca087d7ff5ff24628597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5c3726621bbb1ec5a02b733ee7c04f5a4f9b56d41c1f71d9f32bcf9e4e80ff32->leave($__internal_5c3726621bbb1ec5a02b733ee7c04f5a4f9b56d41c1f71d9f32bcf9e4e80ff32_prof);

        
        $__internal_a373b9f9ea58c57240abbb94e392f18919ec58f30811ca087d7ff5ff24628597->leave($__internal_a373b9f9ea58c57240abbb94e392f18919ec58f30811ca087d7ff5ff24628597_prof);

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
