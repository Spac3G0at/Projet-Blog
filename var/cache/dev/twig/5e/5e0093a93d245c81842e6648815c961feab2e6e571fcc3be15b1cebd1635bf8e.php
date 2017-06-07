<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5b1362b8c2ba24bba4066a104235338717928f3f87b814be6565dce5dc3d00e2 extends Twig_Template
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
        $__internal_b82a13c98fb433a46e6919541ab7cb44ffea05d812513c88dab4525941991482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82a13c98fb433a46e6919541ab7cb44ffea05d812513c88dab4525941991482->enter($__internal_b82a13c98fb433a46e6919541ab7cb44ffea05d812513c88dab4525941991482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_0282ac8a0988478e079ce3bcd3f8adee63dda2ac51300fb2ac6ad9ab9cbd93ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0282ac8a0988478e079ce3bcd3f8adee63dda2ac51300fb2ac6ad9ab9cbd93ee->enter($__internal_0282ac8a0988478e079ce3bcd3f8adee63dda2ac51300fb2ac6ad9ab9cbd93ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b82a13c98fb433a46e6919541ab7cb44ffea05d812513c88dab4525941991482->leave($__internal_b82a13c98fb433a46e6919541ab7cb44ffea05d812513c88dab4525941991482_prof);

        
        $__internal_0282ac8a0988478e079ce3bcd3f8adee63dda2ac51300fb2ac6ad9ab9cbd93ee->leave($__internal_0282ac8a0988478e079ce3bcd3f8adee63dda2ac51300fb2ac6ad9ab9cbd93ee_prof);

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
