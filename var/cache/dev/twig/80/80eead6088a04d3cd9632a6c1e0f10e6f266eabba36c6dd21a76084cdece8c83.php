<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_04a25db39eda64ff644c61498a5a65f0b4237e24290dd5275adb4e05f66d7925 extends Twig_Template
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
        $__internal_dc9b8c73c822ec60f7b1397130d98aa685f299649d9a74e7915d64bfa334fb5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9b8c73c822ec60f7b1397130d98aa685f299649d9a74e7915d64bfa334fb5f->enter($__internal_dc9b8c73c822ec60f7b1397130d98aa685f299649d9a74e7915d64bfa334fb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e31a67d7ec624b08c2a624cae92dbff341340414ed4daaefecbab05a313fd0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31a67d7ec624b08c2a624cae92dbff341340414ed4daaefecbab05a313fd0a3->enter($__internal_e31a67d7ec624b08c2a624cae92dbff341340414ed4daaefecbab05a313fd0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_dc9b8c73c822ec60f7b1397130d98aa685f299649d9a74e7915d64bfa334fb5f->leave($__internal_dc9b8c73c822ec60f7b1397130d98aa685f299649d9a74e7915d64bfa334fb5f_prof);

        
        $__internal_e31a67d7ec624b08c2a624cae92dbff341340414ed4daaefecbab05a313fd0a3->leave($__internal_e31a67d7ec624b08c2a624cae92dbff341340414ed4daaefecbab05a313fd0a3_prof);

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
", "@Twig/Exception/traces.txt.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
