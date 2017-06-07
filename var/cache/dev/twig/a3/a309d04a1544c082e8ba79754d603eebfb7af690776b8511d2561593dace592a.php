<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_368d3926c28f621f4d75cf814bb13420a9f5ebf06b2197a405d9e7e84b72263c extends Twig_Template
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
        $__internal_137075a8a6bb18f26a583956bfa90d38e3997b0f99cdc248c3e78ee7dc04a99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137075a8a6bb18f26a583956bfa90d38e3997b0f99cdc248c3e78ee7dc04a99f->enter($__internal_137075a8a6bb18f26a583956bfa90d38e3997b0f99cdc248c3e78ee7dc04a99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9cc614e8ea4ac8969f3cf9234287a423a2e012011594a79c63e1a274ffefcb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc614e8ea4ac8969f3cf9234287a423a2e012011594a79c63e1a274ffefcb8d->enter($__internal_9cc614e8ea4ac8969f3cf9234287a423a2e012011594a79c63e1a274ffefcb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_137075a8a6bb18f26a583956bfa90d38e3997b0f99cdc248c3e78ee7dc04a99f->leave($__internal_137075a8a6bb18f26a583956bfa90d38e3997b0f99cdc248c3e78ee7dc04a99f_prof);

        
        $__internal_9cc614e8ea4ac8969f3cf9234287a423a2e012011594a79c63e1a274ffefcb8d->leave($__internal_9cc614e8ea4ac8969f3cf9234287a423a2e012011594a79c63e1a274ffefcb8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
