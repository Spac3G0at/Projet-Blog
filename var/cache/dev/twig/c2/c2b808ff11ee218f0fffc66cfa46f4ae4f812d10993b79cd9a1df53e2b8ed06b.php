<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4b57b0bd422bc69469a5a4fd24ca972c95de426d06c56a518c9d7d4b2094b793 extends Twig_Template
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
        $__internal_b82d8199b60bde390bcbf7362bec2fbd481f303d14e2e659df5128adb992ee95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82d8199b60bde390bcbf7362bec2fbd481f303d14e2e659df5128adb992ee95->enter($__internal_b82d8199b60bde390bcbf7362bec2fbd481f303d14e2e659df5128adb992ee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_dc20169633412ac980db7f8a5e2a9270246b36fcb29a6b2f74b16e3549451b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc20169633412ac980db7f8a5e2a9270246b36fcb29a6b2f74b16e3549451b23->enter($__internal_dc20169633412ac980db7f8a5e2a9270246b36fcb29a6b2f74b16e3549451b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b82d8199b60bde390bcbf7362bec2fbd481f303d14e2e659df5128adb992ee95->leave($__internal_b82d8199b60bde390bcbf7362bec2fbd481f303d14e2e659df5128adb992ee95_prof);

        
        $__internal_dc20169633412ac980db7f8a5e2a9270246b36fcb29a6b2f74b16e3549451b23->leave($__internal_dc20169633412ac980db7f8a5e2a9270246b36fcb29a6b2f74b16e3549451b23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
