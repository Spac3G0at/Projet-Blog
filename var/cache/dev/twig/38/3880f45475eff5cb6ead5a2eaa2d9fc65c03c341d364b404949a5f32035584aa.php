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
        $__internal_729a28e48eb8404bc19a4d9094d8951ea96521534b8397a56f7b90a902b55bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729a28e48eb8404bc19a4d9094d8951ea96521534b8397a56f7b90a902b55bd0->enter($__internal_729a28e48eb8404bc19a4d9094d8951ea96521534b8397a56f7b90a902b55bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_03a271544f1417b54eb42f4f151f7c2bf372ac346e5d2a0195ba280a0f68ce78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a271544f1417b54eb42f4f151f7c2bf372ac346e5d2a0195ba280a0f68ce78->enter($__internal_03a271544f1417b54eb42f4f151f7c2bf372ac346e5d2a0195ba280a0f68ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_729a28e48eb8404bc19a4d9094d8951ea96521534b8397a56f7b90a902b55bd0->leave($__internal_729a28e48eb8404bc19a4d9094d8951ea96521534b8397a56f7b90a902b55bd0_prof);

        
        $__internal_03a271544f1417b54eb42f4f151f7c2bf372ac346e5d2a0195ba280a0f68ce78->leave($__internal_03a271544f1417b54eb42f4f151f7c2bf372ac346e5d2a0195ba280a0f68ce78_prof);

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
