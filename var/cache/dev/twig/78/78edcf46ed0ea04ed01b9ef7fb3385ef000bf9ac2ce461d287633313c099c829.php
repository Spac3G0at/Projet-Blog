<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_39d11d32ba3bba329856b60c1f6641bacc62c7690f79338f2912121187579b94 extends Twig_Template
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
        $__internal_82ddc9e44318411340e558ff4d8009cadcf83f1481c23c00e588c03d6153a17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ddc9e44318411340e558ff4d8009cadcf83f1481c23c00e588c03d6153a17a->enter($__internal_82ddc9e44318411340e558ff4d8009cadcf83f1481c23c00e588c03d6153a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_aa372c5afbd97fbbcd84bc61d45c2af214aaca932758588ff0d9f74155a59887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa372c5afbd97fbbcd84bc61d45c2af214aaca932758588ff0d9f74155a59887->enter($__internal_aa372c5afbd97fbbcd84bc61d45c2af214aaca932758588ff0d9f74155a59887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_82ddc9e44318411340e558ff4d8009cadcf83f1481c23c00e588c03d6153a17a->leave($__internal_82ddc9e44318411340e558ff4d8009cadcf83f1481c23c00e588c03d6153a17a_prof);

        
        $__internal_aa372c5afbd97fbbcd84bc61d45c2af214aaca932758588ff0d9f74155a59887->leave($__internal_aa372c5afbd97fbbcd84bc61d45c2af214aaca932758588ff0d9f74155a59887_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
