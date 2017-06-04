<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3e6f505f839b3390367bb50888100311409afcf4278be211c5c0c56c8c4cc8dd extends Twig_Template
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
        $__internal_648b9ddee1a490dd9c62caf59e556fbd556015bd84a71e2a2ebec8260f56b179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648b9ddee1a490dd9c62caf59e556fbd556015bd84a71e2a2ebec8260f56b179->enter($__internal_648b9ddee1a490dd9c62caf59e556fbd556015bd84a71e2a2ebec8260f56b179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f8573cd90a3362a8948e55580455b4237b2cc91f9e361266874a094e36af9424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8573cd90a3362a8948e55580455b4237b2cc91f9e361266874a094e36af9424->enter($__internal_f8573cd90a3362a8948e55580455b4237b2cc91f9e361266874a094e36af9424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_648b9ddee1a490dd9c62caf59e556fbd556015bd84a71e2a2ebec8260f56b179->leave($__internal_648b9ddee1a490dd9c62caf59e556fbd556015bd84a71e2a2ebec8260f56b179_prof);

        
        $__internal_f8573cd90a3362a8948e55580455b4237b2cc91f9e361266874a094e36af9424->leave($__internal_f8573cd90a3362a8948e55580455b4237b2cc91f9e361266874a094e36af9424_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
