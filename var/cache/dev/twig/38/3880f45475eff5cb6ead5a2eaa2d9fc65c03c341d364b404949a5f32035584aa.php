<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c79b91c93461c83dabda2cbcc5ebea64eb958191c72e9ef6fe2fe66aea9ef6d2 extends Twig_Template
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
        $__internal_6ff8d5390fd1251471936a6848b2a3a11f70c4910fde1c9e6b9ec419c078fee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff8d5390fd1251471936a6848b2a3a11f70c4910fde1c9e6b9ec419c078fee6->enter($__internal_6ff8d5390fd1251471936a6848b2a3a11f70c4910fde1c9e6b9ec419c078fee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_92f3d3fd8118e0756d45a021561ded1151b2efe0bbe8ea4bf216d319c5fe6c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f3d3fd8118e0756d45a021561ded1151b2efe0bbe8ea4bf216d319c5fe6c74->enter($__internal_92f3d3fd8118e0756d45a021561ded1151b2efe0bbe8ea4bf216d319c5fe6c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6ff8d5390fd1251471936a6848b2a3a11f70c4910fde1c9e6b9ec419c078fee6->leave($__internal_6ff8d5390fd1251471936a6848b2a3a11f70c4910fde1c9e6b9ec419c078fee6_prof);

        
        $__internal_92f3d3fd8118e0756d45a021561ded1151b2efe0bbe8ea4bf216d319c5fe6c74->leave($__internal_92f3d3fd8118e0756d45a021561ded1151b2efe0bbe8ea4bf216d319c5fe6c74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
