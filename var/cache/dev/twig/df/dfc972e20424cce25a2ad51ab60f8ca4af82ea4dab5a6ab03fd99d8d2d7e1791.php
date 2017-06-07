<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_10515bd68c674a7fead4c94fd95f930257f6d6611f589d83f2b12409f26f8128 extends Twig_Template
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
        $__internal_dfa1bfd9ccd40c5d9bef800439ff1f38059de21b4b0f1dbc1a6a95175d8e1c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa1bfd9ccd40c5d9bef800439ff1f38059de21b4b0f1dbc1a6a95175d8e1c80->enter($__internal_dfa1bfd9ccd40c5d9bef800439ff1f38059de21b4b0f1dbc1a6a95175d8e1c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ca780abba25a1239cdc3a436ccd3ba2a94a69627e6d8db6df2e7f195a8450e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca780abba25a1239cdc3a436ccd3ba2a94a69627e6d8db6df2e7f195a8450e3c->enter($__internal_ca780abba25a1239cdc3a436ccd3ba2a94a69627e6d8db6df2e7f195a8450e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dfa1bfd9ccd40c5d9bef800439ff1f38059de21b4b0f1dbc1a6a95175d8e1c80->leave($__internal_dfa1bfd9ccd40c5d9bef800439ff1f38059de21b4b0f1dbc1a6a95175d8e1c80_prof);

        
        $__internal_ca780abba25a1239cdc3a436ccd3ba2a94a69627e6d8db6df2e7f195a8450e3c->leave($__internal_ca780abba25a1239cdc3a436ccd3ba2a94a69627e6d8db6df2e7f195a8450e3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
