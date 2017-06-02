<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7d6efaf9f2d314fe6e0935e4cb7437a97c82332dbf41050c7a9801d6e6fa9a74 extends Twig_Template
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
        $__internal_260731200896c0b74c35b6375fd47581ce0c876b0e3d12846c20f1e8d30f68f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260731200896c0b74c35b6375fd47581ce0c876b0e3d12846c20f1e8d30f68f6->enter($__internal_260731200896c0b74c35b6375fd47581ce0c876b0e3d12846c20f1e8d30f68f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a7d8a5c73b02bb9499eedaec6b3bb4cd78937b280d2fe8e52b10cece87503ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d8a5c73b02bb9499eedaec6b3bb4cd78937b280d2fe8e52b10cece87503ed0->enter($__internal_a7d8a5c73b02bb9499eedaec6b3bb4cd78937b280d2fe8e52b10cece87503ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_260731200896c0b74c35b6375fd47581ce0c876b0e3d12846c20f1e8d30f68f6->leave($__internal_260731200896c0b74c35b6375fd47581ce0c876b0e3d12846c20f1e8d30f68f6_prof);

        
        $__internal_a7d8a5c73b02bb9499eedaec6b3bb4cd78937b280d2fe8e52b10cece87503ed0->leave($__internal_a7d8a5c73b02bb9499eedaec6b3bb4cd78937b280d2fe8e52b10cece87503ed0_prof);

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
