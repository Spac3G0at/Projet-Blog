<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_e966c0920af4a7cc432148821f6ea498548afa3cacbe8652f2a31dc83f72586e extends Twig_Template
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
        $__internal_e471646018420c00a43e9fd80eb24dcd7789881133ec21500ce381645896ac1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e471646018420c00a43e9fd80eb24dcd7789881133ec21500ce381645896ac1d->enter($__internal_e471646018420c00a43e9fd80eb24dcd7789881133ec21500ce381645896ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e5e9df70e399e7e1c4063bd4c04f0c7bcba2170bf2bfec1a6daa2f2006632e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e9df70e399e7e1c4063bd4c04f0c7bcba2170bf2bfec1a6daa2f2006632e9a->enter($__internal_e5e9df70e399e7e1c4063bd4c04f0c7bcba2170bf2bfec1a6daa2f2006632e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e471646018420c00a43e9fd80eb24dcd7789881133ec21500ce381645896ac1d->leave($__internal_e471646018420c00a43e9fd80eb24dcd7789881133ec21500ce381645896ac1d_prof);

        
        $__internal_e5e9df70e399e7e1c4063bd4c04f0c7bcba2170bf2bfec1a6daa2f2006632e9a->leave($__internal_e5e9df70e399e7e1c4063bd4c04f0c7bcba2170bf2bfec1a6daa2f2006632e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
