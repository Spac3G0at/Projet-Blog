<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c4010089d6efc2ab0185f0cd75c6305efbf5301a786497b73f34dc6a025da2ae extends Twig_Template
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
        $__internal_0a6a3f16a56874a45ee3b9064b5d45b769181807734c6d5dc2cc57a0b57abda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6a3f16a56874a45ee3b9064b5d45b769181807734c6d5dc2cc57a0b57abda1->enter($__internal_0a6a3f16a56874a45ee3b9064b5d45b769181807734c6d5dc2cc57a0b57abda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b77a1c0b55338d0233538bbdc54df7578e029ea8f60cbd2d843690ca90cbb178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77a1c0b55338d0233538bbdc54df7578e029ea8f60cbd2d843690ca90cbb178->enter($__internal_b77a1c0b55338d0233538bbdc54df7578e029ea8f60cbd2d843690ca90cbb178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_0a6a3f16a56874a45ee3b9064b5d45b769181807734c6d5dc2cc57a0b57abda1->leave($__internal_0a6a3f16a56874a45ee3b9064b5d45b769181807734c6d5dc2cc57a0b57abda1_prof);

        
        $__internal_b77a1c0b55338d0233538bbdc54df7578e029ea8f60cbd2d843690ca90cbb178->leave($__internal_b77a1c0b55338d0233538bbdc54df7578e029ea8f60cbd2d843690ca90cbb178_prof);

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
