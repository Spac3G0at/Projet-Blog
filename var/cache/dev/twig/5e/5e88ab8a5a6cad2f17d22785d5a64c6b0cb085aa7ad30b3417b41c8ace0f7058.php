<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_914b50e017a935c0e39a67256908057bd10c69399428253a5bb406dda6735da7 extends Twig_Template
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
        $__internal_e03033ad8179fd970b49899f195e5df532d49e85dfd6ec36f630e117086e71af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03033ad8179fd970b49899f195e5df532d49e85dfd6ec36f630e117086e71af->enter($__internal_e03033ad8179fd970b49899f195e5df532d49e85dfd6ec36f630e117086e71af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8f66c4ede333b8ec7f09734a283f565ab76a13add16832043f83825041c5100c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f66c4ede333b8ec7f09734a283f565ab76a13add16832043f83825041c5100c->enter($__internal_8f66c4ede333b8ec7f09734a283f565ab76a13add16832043f83825041c5100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e03033ad8179fd970b49899f195e5df532d49e85dfd6ec36f630e117086e71af->leave($__internal_e03033ad8179fd970b49899f195e5df532d49e85dfd6ec36f630e117086e71af_prof);

        
        $__internal_8f66c4ede333b8ec7f09734a283f565ab76a13add16832043f83825041c5100c->leave($__internal_8f66c4ede333b8ec7f09734a283f565ab76a13add16832043f83825041c5100c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
