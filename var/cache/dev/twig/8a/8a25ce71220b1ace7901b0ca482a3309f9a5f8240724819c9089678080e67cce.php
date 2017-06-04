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
        $__internal_caadcfe9e6415858aeb83c6c4e36b6d4094769471c05886d329ea026ca8f01b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caadcfe9e6415858aeb83c6c4e36b6d4094769471c05886d329ea026ca8f01b5->enter($__internal_caadcfe9e6415858aeb83c6c4e36b6d4094769471c05886d329ea026ca8f01b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_bae05087cfd0b2bdc6801c66fac48cf80d2912ac3fe1ef14615d4231d0633b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae05087cfd0b2bdc6801c66fac48cf80d2912ac3fe1ef14615d4231d0633b4b->enter($__internal_bae05087cfd0b2bdc6801c66fac48cf80d2912ac3fe1ef14615d4231d0633b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_caadcfe9e6415858aeb83c6c4e36b6d4094769471c05886d329ea026ca8f01b5->leave($__internal_caadcfe9e6415858aeb83c6c4e36b6d4094769471c05886d329ea026ca8f01b5_prof);

        
        $__internal_bae05087cfd0b2bdc6801c66fac48cf80d2912ac3fe1ef14615d4231d0633b4b->leave($__internal_bae05087cfd0b2bdc6801c66fac48cf80d2912ac3fe1ef14615d4231d0633b4b_prof);

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
