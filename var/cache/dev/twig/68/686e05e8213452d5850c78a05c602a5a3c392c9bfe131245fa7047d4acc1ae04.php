<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_eace00a1d9cb1106fa0764ce1e5f278680e9601363750fcddbfbd72f2602c3b5 extends Twig_Template
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
        $__internal_79d8cdb2ca7b6ae13b8c6c63dccbcc223c86db8bed8c232e1c9af6d6c23b46a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d8cdb2ca7b6ae13b8c6c63dccbcc223c86db8bed8c232e1c9af6d6c23b46a0->enter($__internal_79d8cdb2ca7b6ae13b8c6c63dccbcc223c86db8bed8c232e1c9af6d6c23b46a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9dce5cd2d44e91915aaf108511d1d847d7187ebf0a151c9227e710d02a753806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dce5cd2d44e91915aaf108511d1d847d7187ebf0a151c9227e710d02a753806->enter($__internal_9dce5cd2d44e91915aaf108511d1d847d7187ebf0a151c9227e710d02a753806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_79d8cdb2ca7b6ae13b8c6c63dccbcc223c86db8bed8c232e1c9af6d6c23b46a0->leave($__internal_79d8cdb2ca7b6ae13b8c6c63dccbcc223c86db8bed8c232e1c9af6d6c23b46a0_prof);

        
        $__internal_9dce5cd2d44e91915aaf108511d1d847d7187ebf0a151c9227e710d02a753806->leave($__internal_9dce5cd2d44e91915aaf108511d1d847d7187ebf0a151c9227e710d02a753806_prof);

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
