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
        $__internal_577972cb7b26e0f88a9e0f4af01b490b5c69e204153fd9ef2667823e7e18c8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577972cb7b26e0f88a9e0f4af01b490b5c69e204153fd9ef2667823e7e18c8a9->enter($__internal_577972cb7b26e0f88a9e0f4af01b490b5c69e204153fd9ef2667823e7e18c8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_980fb946e632ef108308cd77401d91c7900e75bafd58b0b1186a7612b47d1b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980fb946e632ef108308cd77401d91c7900e75bafd58b0b1186a7612b47d1b19->enter($__internal_980fb946e632ef108308cd77401d91c7900e75bafd58b0b1186a7612b47d1b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_577972cb7b26e0f88a9e0f4af01b490b5c69e204153fd9ef2667823e7e18c8a9->leave($__internal_577972cb7b26e0f88a9e0f4af01b490b5c69e204153fd9ef2667823e7e18c8a9_prof);

        
        $__internal_980fb946e632ef108308cd77401d91c7900e75bafd58b0b1186a7612b47d1b19->leave($__internal_980fb946e632ef108308cd77401d91c7900e75bafd58b0b1186a7612b47d1b19_prof);

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
