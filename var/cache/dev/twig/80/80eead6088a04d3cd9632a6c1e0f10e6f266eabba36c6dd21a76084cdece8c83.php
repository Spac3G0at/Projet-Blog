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
        $__internal_fd87dc037b9082c12e218b00e7f101c3c996d5fbddf5b98c56c2c9f80091ce69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd87dc037b9082c12e218b00e7f101c3c996d5fbddf5b98c56c2c9f80091ce69->enter($__internal_fd87dc037b9082c12e218b00e7f101c3c996d5fbddf5b98c56c2c9f80091ce69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5115b0bd32c6849c3e961df7b573f5038cc25f896556676b6614d8bc17416ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5115b0bd32c6849c3e961df7b573f5038cc25f896556676b6614d8bc17416ed6->enter($__internal_5115b0bd32c6849c3e961df7b573f5038cc25f896556676b6614d8bc17416ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_fd87dc037b9082c12e218b00e7f101c3c996d5fbddf5b98c56c2c9f80091ce69->leave($__internal_fd87dc037b9082c12e218b00e7f101c3c996d5fbddf5b98c56c2c9f80091ce69_prof);

        
        $__internal_5115b0bd32c6849c3e961df7b573f5038cc25f896556676b6614d8bc17416ed6->leave($__internal_5115b0bd32c6849c3e961df7b573f5038cc25f896556676b6614d8bc17416ed6_prof);

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
