<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d2933b3e1d5e8ddadec047fc191ad70163801a0f74cfd14cd0d82ce1c01a2870 extends Twig_Template
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
        $__internal_5445444e94ba193e3fa53af208d83bd518a8927672d4811ddff09f4c0712da79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5445444e94ba193e3fa53af208d83bd518a8927672d4811ddff09f4c0712da79->enter($__internal_5445444e94ba193e3fa53af208d83bd518a8927672d4811ddff09f4c0712da79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5981cce52ae87e41fb26749f43e56af59ed076d9fa39aa5626a19aaf773c1567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5981cce52ae87e41fb26749f43e56af59ed076d9fa39aa5626a19aaf773c1567->enter($__internal_5981cce52ae87e41fb26749f43e56af59ed076d9fa39aa5626a19aaf773c1567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5445444e94ba193e3fa53af208d83bd518a8927672d4811ddff09f4c0712da79->leave($__internal_5445444e94ba193e3fa53af208d83bd518a8927672d4811ddff09f4c0712da79_prof);

        
        $__internal_5981cce52ae87e41fb26749f43e56af59ed076d9fa39aa5626a19aaf773c1567->leave($__internal_5981cce52ae87e41fb26749f43e56af59ed076d9fa39aa5626a19aaf773c1567_prof);

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
