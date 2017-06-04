<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bcf19e23eb80872298aaef12d0bf60d65f38c9688ebb37202c153af897acc96e extends Twig_Template
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
        $__internal_1e71d49758c3bb99e82255286727890b3c6369100215f4899ec8932dc603c506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e71d49758c3bb99e82255286727890b3c6369100215f4899ec8932dc603c506->enter($__internal_1e71d49758c3bb99e82255286727890b3c6369100215f4899ec8932dc603c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b9248af20479e3f33489bff1f1ea57e3d2d2ef25486a20fa104600ed1f4b4620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9248af20479e3f33489bff1f1ea57e3d2d2ef25486a20fa104600ed1f4b4620->enter($__internal_b9248af20479e3f33489bff1f1ea57e3d2d2ef25486a20fa104600ed1f4b4620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1e71d49758c3bb99e82255286727890b3c6369100215f4899ec8932dc603c506->leave($__internal_1e71d49758c3bb99e82255286727890b3c6369100215f4899ec8932dc603c506_prof);

        
        $__internal_b9248af20479e3f33489bff1f1ea57e3d2d2ef25486a20fa104600ed1f4b4620->leave($__internal_b9248af20479e3f33489bff1f1ea57e3d2d2ef25486a20fa104600ed1f4b4620_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
