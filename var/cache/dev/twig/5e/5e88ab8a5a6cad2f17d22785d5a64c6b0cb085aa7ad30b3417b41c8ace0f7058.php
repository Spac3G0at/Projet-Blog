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
        $__internal_ea7aa571d0c1b517f4a9fc0b09599e1185d37c0a3b488becd1fba87ca9ce14f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7aa571d0c1b517f4a9fc0b09599e1185d37c0a3b488becd1fba87ca9ce14f2->enter($__internal_ea7aa571d0c1b517f4a9fc0b09599e1185d37c0a3b488becd1fba87ca9ce14f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a51f06c56a9fbb1e7a3a3a0debfbe2fe9934a9f5e63805e7da84026a321cc8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51f06c56a9fbb1e7a3a3a0debfbe2fe9934a9f5e63805e7da84026a321cc8b9->enter($__internal_a51f06c56a9fbb1e7a3a3a0debfbe2fe9934a9f5e63805e7da84026a321cc8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ea7aa571d0c1b517f4a9fc0b09599e1185d37c0a3b488becd1fba87ca9ce14f2->leave($__internal_ea7aa571d0c1b517f4a9fc0b09599e1185d37c0a3b488becd1fba87ca9ce14f2_prof);

        
        $__internal_a51f06c56a9fbb1e7a3a3a0debfbe2fe9934a9f5e63805e7da84026a321cc8b9->leave($__internal_a51f06c56a9fbb1e7a3a3a0debfbe2fe9934a9f5e63805e7da84026a321cc8b9_prof);

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
