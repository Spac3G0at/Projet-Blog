<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_43c0c8930d2ad78dfc6cdb2a1267d5f06b6744c8eceb5bc58b27bc74cef19fa4 extends Twig_Template
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
        $__internal_e1b824bec599276ada0970241bccd4c285a14479642d7df32a5b6c0b7233208a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b824bec599276ada0970241bccd4c285a14479642d7df32a5b6c0b7233208a->enter($__internal_e1b824bec599276ada0970241bccd4c285a14479642d7df32a5b6c0b7233208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_50a5e2f9e8bfc73129259988666272cab0a861abf8c2867a8e5ec6783bc05cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a5e2f9e8bfc73129259988666272cab0a861abf8c2867a8e5ec6783bc05cc6->enter($__internal_50a5e2f9e8bfc73129259988666272cab0a861abf8c2867a8e5ec6783bc05cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_e1b824bec599276ada0970241bccd4c285a14479642d7df32a5b6c0b7233208a->leave($__internal_e1b824bec599276ada0970241bccd4c285a14479642d7df32a5b6c0b7233208a_prof);

        
        $__internal_50a5e2f9e8bfc73129259988666272cab0a861abf8c2867a8e5ec6783bc05cc6->leave($__internal_50a5e2f9e8bfc73129259988666272cab0a861abf8c2867a8e5ec6783bc05cc6_prof);

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
