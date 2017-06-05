<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2e38dcacc3e7428beef242add9e2bffc6f47ef7af300075aa0e79299e98f5831 extends Twig_Template
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
        $__internal_4a2d6ce453c09c29235949c1240ec46c68c8173e185836547ffc0c1266dd95ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2d6ce453c09c29235949c1240ec46c68c8173e185836547ffc0c1266dd95ec->enter($__internal_4a2d6ce453c09c29235949c1240ec46c68c8173e185836547ffc0c1266dd95ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f9baf8f049374b9ed2a9d0a5022591ebe0fa0647606c886e6c72bde07a29c053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9baf8f049374b9ed2a9d0a5022591ebe0fa0647606c886e6c72bde07a29c053->enter($__internal_f9baf8f049374b9ed2a9d0a5022591ebe0fa0647606c886e6c72bde07a29c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4a2d6ce453c09c29235949c1240ec46c68c8173e185836547ffc0c1266dd95ec->leave($__internal_4a2d6ce453c09c29235949c1240ec46c68c8173e185836547ffc0c1266dd95ec_prof);

        
        $__internal_f9baf8f049374b9ed2a9d0a5022591ebe0fa0647606c886e6c72bde07a29c053->leave($__internal_f9baf8f049374b9ed2a9d0a5022591ebe0fa0647606c886e6c72bde07a29c053_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
