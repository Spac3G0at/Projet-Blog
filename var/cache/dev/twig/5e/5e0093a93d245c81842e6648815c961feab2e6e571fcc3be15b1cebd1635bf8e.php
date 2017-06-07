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
        $__internal_68d6c9d37489612389eaadefc19726f144ee5642b6473a6eeea9d49db08dc41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d6c9d37489612389eaadefc19726f144ee5642b6473a6eeea9d49db08dc41f->enter($__internal_68d6c9d37489612389eaadefc19726f144ee5642b6473a6eeea9d49db08dc41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_24925524d14729b2c021fc0971956a169e6a5ac04d65e3671be4df40ea139fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24925524d14729b2c021fc0971956a169e6a5ac04d65e3671be4df40ea139fc6->enter($__internal_24925524d14729b2c021fc0971956a169e6a5ac04d65e3671be4df40ea139fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_68d6c9d37489612389eaadefc19726f144ee5642b6473a6eeea9d49db08dc41f->leave($__internal_68d6c9d37489612389eaadefc19726f144ee5642b6473a6eeea9d49db08dc41f_prof);

        
        $__internal_24925524d14729b2c021fc0971956a169e6a5ac04d65e3671be4df40ea139fc6->leave($__internal_24925524d14729b2c021fc0971956a169e6a5ac04d65e3671be4df40ea139fc6_prof);

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
