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
        $__internal_192718e8cc815aa8ec982fef954263214ce4b03f29bf5a6dbf48f6a48dced13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192718e8cc815aa8ec982fef954263214ce4b03f29bf5a6dbf48f6a48dced13c->enter($__internal_192718e8cc815aa8ec982fef954263214ce4b03f29bf5a6dbf48f6a48dced13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f3b37efd36abb95163e8dfa6e34d789c88e5eb797e3843fba88ae84e294174c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b37efd36abb95163e8dfa6e34d789c88e5eb797e3843fba88ae84e294174c6->enter($__internal_f3b37efd36abb95163e8dfa6e34d789c88e5eb797e3843fba88ae84e294174c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_192718e8cc815aa8ec982fef954263214ce4b03f29bf5a6dbf48f6a48dced13c->leave($__internal_192718e8cc815aa8ec982fef954263214ce4b03f29bf5a6dbf48f6a48dced13c_prof);

        
        $__internal_f3b37efd36abb95163e8dfa6e34d789c88e5eb797e3843fba88ae84e294174c6->leave($__internal_f3b37efd36abb95163e8dfa6e34d789c88e5eb797e3843fba88ae84e294174c6_prof);

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
