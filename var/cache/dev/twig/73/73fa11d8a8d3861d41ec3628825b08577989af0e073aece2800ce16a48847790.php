<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_2c8673a89dca64cb75a5da94ddec2916ed3fd628192edde88bdaa85dee57aa80 extends Twig_Template
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
        $__internal_846c1bd103ac6b4657bdd073fcb7f65e80123b8e114fedb6e6d9e43d6e4b7540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846c1bd103ac6b4657bdd073fcb7f65e80123b8e114fedb6e6d9e43d6e4b7540->enter($__internal_846c1bd103ac6b4657bdd073fcb7f65e80123b8e114fedb6e6d9e43d6e4b7540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_08fb72e1cf8e0b943fe56776fd9d149dec05a7f1f6e3a53000bad2b2f153f74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fb72e1cf8e0b943fe56776fd9d149dec05a7f1f6e3a53000bad2b2f153f74a->enter($__internal_08fb72e1cf8e0b943fe56776fd9d149dec05a7f1f6e3a53000bad2b2f153f74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_846c1bd103ac6b4657bdd073fcb7f65e80123b8e114fedb6e6d9e43d6e4b7540->leave($__internal_846c1bd103ac6b4657bdd073fcb7f65e80123b8e114fedb6e6d9e43d6e4b7540_prof);

        
        $__internal_08fb72e1cf8e0b943fe56776fd9d149dec05a7f1f6e3a53000bad2b2f153f74a->leave($__internal_08fb72e1cf8e0b943fe56776fd9d149dec05a7f1f6e3a53000bad2b2f153f74a_prof);

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
