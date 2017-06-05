<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_19f6f113c0f2826a6c8af0a92c9deef06840f00d29cd0d8441924e7a58798bc3 extends Twig_Template
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
        $__internal_5b0dccbe1c8c3fdf2fea10b4b7c3dbf7333c138ad8454304be11604e60599aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0dccbe1c8c3fdf2fea10b4b7c3dbf7333c138ad8454304be11604e60599aba->enter($__internal_5b0dccbe1c8c3fdf2fea10b4b7c3dbf7333c138ad8454304be11604e60599aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_91850ffea560947656c06fd779f2311d75772d31db550b377d47feb3721fdba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91850ffea560947656c06fd779f2311d75772d31db550b377d47feb3721fdba2->enter($__internal_91850ffea560947656c06fd779f2311d75772d31db550b377d47feb3721fdba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_5b0dccbe1c8c3fdf2fea10b4b7c3dbf7333c138ad8454304be11604e60599aba->leave($__internal_5b0dccbe1c8c3fdf2fea10b4b7c3dbf7333c138ad8454304be11604e60599aba_prof);

        
        $__internal_91850ffea560947656c06fd779f2311d75772d31db550b377d47feb3721fdba2->leave($__internal_91850ffea560947656c06fd779f2311d75772d31db550b377d47feb3721fdba2_prof);

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
