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
        $__internal_03f3d7abd9435eeeae4de8b2e5865ad20d296539183af2a590cd42673cd78d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f3d7abd9435eeeae4de8b2e5865ad20d296539183af2a590cd42673cd78d47->enter($__internal_03f3d7abd9435eeeae4de8b2e5865ad20d296539183af2a590cd42673cd78d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7fffbf913bbb389aacd3444abece8d35144ed33f88c0a088dee57f7686aaebdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fffbf913bbb389aacd3444abece8d35144ed33f88c0a088dee57f7686aaebdc->enter($__internal_7fffbf913bbb389aacd3444abece8d35144ed33f88c0a088dee57f7686aaebdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_03f3d7abd9435eeeae4de8b2e5865ad20d296539183af2a590cd42673cd78d47->leave($__internal_03f3d7abd9435eeeae4de8b2e5865ad20d296539183af2a590cd42673cd78d47_prof);

        
        $__internal_7fffbf913bbb389aacd3444abece8d35144ed33f88c0a088dee57f7686aaebdc->leave($__internal_7fffbf913bbb389aacd3444abece8d35144ed33f88c0a088dee57f7686aaebdc_prof);

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
