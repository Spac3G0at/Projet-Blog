<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8222ccdf4a46282606039eeec11a95d5fc15a6b8ff6ea9f58cf5ee449c891d83 extends Twig_Template
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
        $__internal_47514aa7022d10716381d94a95f345a4d98130c177d1b93295413e621e88ac9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47514aa7022d10716381d94a95f345a4d98130c177d1b93295413e621e88ac9e->enter($__internal_47514aa7022d10716381d94a95f345a4d98130c177d1b93295413e621e88ac9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f5770776049cb45b2ce8a4e06146acc293d4e71bc2156534a92fa9def055f9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5770776049cb45b2ce8a4e06146acc293d4e71bc2156534a92fa9def055f9a7->enter($__internal_f5770776049cb45b2ce8a4e06146acc293d4e71bc2156534a92fa9def055f9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_47514aa7022d10716381d94a95f345a4d98130c177d1b93295413e621e88ac9e->leave($__internal_47514aa7022d10716381d94a95f345a4d98130c177d1b93295413e621e88ac9e_prof);

        
        $__internal_f5770776049cb45b2ce8a4e06146acc293d4e71bc2156534a92fa9def055f9a7->leave($__internal_f5770776049cb45b2ce8a4e06146acc293d4e71bc2156534a92fa9def055f9a7_prof);

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
