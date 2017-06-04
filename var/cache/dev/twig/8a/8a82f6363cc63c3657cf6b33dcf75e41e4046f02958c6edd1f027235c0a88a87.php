<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d3b746fbeec5f32e4c5c95bf8541c2e06ebcf79b4b5e820e5a30d4e8b9d744ee extends Twig_Template
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
        $__internal_f5750b678bee6d975b0ae486f1ea9d46f3f28e1b69d11839dabb33b3300259a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5750b678bee6d975b0ae486f1ea9d46f3f28e1b69d11839dabb33b3300259a2->enter($__internal_f5750b678bee6d975b0ae486f1ea9d46f3f28e1b69d11839dabb33b3300259a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0e27f5785be5adba18ab031e73e6876902cbae69ac8be2763a746a4c8383a4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e27f5785be5adba18ab031e73e6876902cbae69ac8be2763a746a4c8383a4cb->enter($__internal_0e27f5785be5adba18ab031e73e6876902cbae69ac8be2763a746a4c8383a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f5750b678bee6d975b0ae486f1ea9d46f3f28e1b69d11839dabb33b3300259a2->leave($__internal_f5750b678bee6d975b0ae486f1ea9d46f3f28e1b69d11839dabb33b3300259a2_prof);

        
        $__internal_0e27f5785be5adba18ab031e73e6876902cbae69ac8be2763a746a4c8383a4cb->leave($__internal_0e27f5785be5adba18ab031e73e6876902cbae69ac8be2763a746a4c8383a4cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
