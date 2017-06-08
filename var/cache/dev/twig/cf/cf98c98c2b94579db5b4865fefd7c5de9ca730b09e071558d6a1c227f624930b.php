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
        $__internal_248e0e24f38bd438baeaaee92ee8bc9c1ef3cc33341ef4671e40d52d4457aac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248e0e24f38bd438baeaaee92ee8bc9c1ef3cc33341ef4671e40d52d4457aac8->enter($__internal_248e0e24f38bd438baeaaee92ee8bc9c1ef3cc33341ef4671e40d52d4457aac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5eed6d8744a15688e587eb669f1754ce08a61c74b951feeba6fa3f2dec103b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eed6d8744a15688e587eb669f1754ce08a61c74b951feeba6fa3f2dec103b77->enter($__internal_5eed6d8744a15688e587eb669f1754ce08a61c74b951feeba6fa3f2dec103b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_248e0e24f38bd438baeaaee92ee8bc9c1ef3cc33341ef4671e40d52d4457aac8->leave($__internal_248e0e24f38bd438baeaaee92ee8bc9c1ef3cc33341ef4671e40d52d4457aac8_prof);

        
        $__internal_5eed6d8744a15688e587eb669f1754ce08a61c74b951feeba6fa3f2dec103b77->leave($__internal_5eed6d8744a15688e587eb669f1754ce08a61c74b951feeba6fa3f2dec103b77_prof);

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
