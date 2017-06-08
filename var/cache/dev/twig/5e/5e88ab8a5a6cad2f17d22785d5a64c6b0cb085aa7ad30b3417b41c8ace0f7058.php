<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_914b50e017a935c0e39a67256908057bd10c69399428253a5bb406dda6735da7 extends Twig_Template
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
        $__internal_bb3ed2ebc741b95a1182fa9e2fcd7d3584320359863d4d93923b27398a746f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3ed2ebc741b95a1182fa9e2fcd7d3584320359863d4d93923b27398a746f7d->enter($__internal_bb3ed2ebc741b95a1182fa9e2fcd7d3584320359863d4d93923b27398a746f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_50cecdacfa7d3c9848e74c57e7449ba16f703508d47ff0884163b4009947bca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cecdacfa7d3c9848e74c57e7449ba16f703508d47ff0884163b4009947bca1->enter($__internal_50cecdacfa7d3c9848e74c57e7449ba16f703508d47ff0884163b4009947bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bb3ed2ebc741b95a1182fa9e2fcd7d3584320359863d4d93923b27398a746f7d->leave($__internal_bb3ed2ebc741b95a1182fa9e2fcd7d3584320359863d4d93923b27398a746f7d_prof);

        
        $__internal_50cecdacfa7d3c9848e74c57e7449ba16f703508d47ff0884163b4009947bca1->leave($__internal_50cecdacfa7d3c9848e74c57e7449ba16f703508d47ff0884163b4009947bca1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
