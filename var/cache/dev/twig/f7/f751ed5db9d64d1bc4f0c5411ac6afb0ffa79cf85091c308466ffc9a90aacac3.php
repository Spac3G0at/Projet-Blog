<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_03db45c21633e35f8e6e0d4901ee57332a17320a76bccf9fcf5f7e1ca8c0d400 extends Twig_Template
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
        $__internal_eb5977286093124061fcd32eed7420b80f522bf86280ea7307e3f5cd612f902c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5977286093124061fcd32eed7420b80f522bf86280ea7307e3f5cd612f902c->enter($__internal_eb5977286093124061fcd32eed7420b80f522bf86280ea7307e3f5cd612f902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_73844df032629a086b667a1e346dbba05e3a7cbcec57302717f0e1bae07a126c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73844df032629a086b667a1e346dbba05e3a7cbcec57302717f0e1bae07a126c->enter($__internal_73844df032629a086b667a1e346dbba05e3a7cbcec57302717f0e1bae07a126c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eb5977286093124061fcd32eed7420b80f522bf86280ea7307e3f5cd612f902c->leave($__internal_eb5977286093124061fcd32eed7420b80f522bf86280ea7307e3f5cd612f902c_prof);

        
        $__internal_73844df032629a086b667a1e346dbba05e3a7cbcec57302717f0e1bae07a126c->leave($__internal_73844df032629a086b667a1e346dbba05e3a7cbcec57302717f0e1bae07a126c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
