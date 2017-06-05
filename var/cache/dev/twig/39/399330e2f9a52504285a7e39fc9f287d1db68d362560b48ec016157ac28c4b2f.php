<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_63453a9fa8e7c38c2729abdf9043d4510a9f6af11d81c15ea9ce1eb4b0bc9f60 extends Twig_Template
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
        $__internal_894c0a3cefd51c00b03fae584399764202a361c8543728a7f1a71b215952b131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894c0a3cefd51c00b03fae584399764202a361c8543728a7f1a71b215952b131->enter($__internal_894c0a3cefd51c00b03fae584399764202a361c8543728a7f1a71b215952b131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f953b945904de63010a7048dffc599cdfe029d93677c7a3caa2f67bfc14852dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f953b945904de63010a7048dffc599cdfe029d93677c7a3caa2f67bfc14852dc->enter($__internal_f953b945904de63010a7048dffc599cdfe029d93677c7a3caa2f67bfc14852dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_894c0a3cefd51c00b03fae584399764202a361c8543728a7f1a71b215952b131->leave($__internal_894c0a3cefd51c00b03fae584399764202a361c8543728a7f1a71b215952b131_prof);

        
        $__internal_f953b945904de63010a7048dffc599cdfe029d93677c7a3caa2f67bfc14852dc->leave($__internal_f953b945904de63010a7048dffc599cdfe029d93677c7a3caa2f67bfc14852dc_prof);

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
