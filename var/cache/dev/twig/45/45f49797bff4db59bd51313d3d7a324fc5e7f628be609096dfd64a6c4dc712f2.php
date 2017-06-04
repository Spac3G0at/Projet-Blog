<?php

/* TwigBundle:Exception:traces.txt.twig */
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
        $__internal_87a77c2aa58d9e4b63610b0b6d06b868010940ef8b8f6ead97cc8c11a79ba986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a77c2aa58d9e4b63610b0b6d06b868010940ef8b8f6ead97cc8c11a79ba986->enter($__internal_87a77c2aa58d9e4b63610b0b6d06b868010940ef8b8f6ead97cc8c11a79ba986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_1fb8116e0cb45bf3d5397d20ed4feedcd67f030b696f0849b2e3d9fe1149dfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb8116e0cb45bf3d5397d20ed4feedcd67f030b696f0849b2e3d9fe1149dfab->enter($__internal_1fb8116e0cb45bf3d5397d20ed4feedcd67f030b696f0849b2e3d9fe1149dfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_87a77c2aa58d9e4b63610b0b6d06b868010940ef8b8f6ead97cc8c11a79ba986->leave($__internal_87a77c2aa58d9e4b63610b0b6d06b868010940ef8b8f6ead97cc8c11a79ba986_prof);

        
        $__internal_1fb8116e0cb45bf3d5397d20ed4feedcd67f030b696f0849b2e3d9fe1149dfab->leave($__internal_1fb8116e0cb45bf3d5397d20ed4feedcd67f030b696f0849b2e3d9fe1149dfab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
