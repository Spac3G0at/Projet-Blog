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
        $__internal_d86ac9f5de058eeb119f7d222bef7521254651a403a7401031abd72c5e3af13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86ac9f5de058eeb119f7d222bef7521254651a403a7401031abd72c5e3af13e->enter($__internal_d86ac9f5de058eeb119f7d222bef7521254651a403a7401031abd72c5e3af13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3a2d4849ef45cf6e6492b49ba67394b107bb2437aa92659032eaef33def87944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2d4849ef45cf6e6492b49ba67394b107bb2437aa92659032eaef33def87944->enter($__internal_3a2d4849ef45cf6e6492b49ba67394b107bb2437aa92659032eaef33def87944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d86ac9f5de058eeb119f7d222bef7521254651a403a7401031abd72c5e3af13e->leave($__internal_d86ac9f5de058eeb119f7d222bef7521254651a403a7401031abd72c5e3af13e_prof);

        
        $__internal_3a2d4849ef45cf6e6492b49ba67394b107bb2437aa92659032eaef33def87944->leave($__internal_3a2d4849ef45cf6e6492b49ba67394b107bb2437aa92659032eaef33def87944_prof);

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
