<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_95157a3edc268746f563143d8eff66d566cfa7b9303163479c8d95ce0845bba2 extends Twig_Template
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
        $__internal_24fc2413b5d476b64d8174f0674ce469173bbbbcb791a66e60c841fec0ccad8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fc2413b5d476b64d8174f0674ce469173bbbbcb791a66e60c841fec0ccad8a->enter($__internal_24fc2413b5d476b64d8174f0674ce469173bbbbcb791a66e60c841fec0ccad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bd3b0645622d39e231727d4349fa933c461c7bae174f12ce98caea9178646613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3b0645622d39e231727d4349fa933c461c7bae174f12ce98caea9178646613->enter($__internal_bd3b0645622d39e231727d4349fa933c461c7bae174f12ce98caea9178646613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_24fc2413b5d476b64d8174f0674ce469173bbbbcb791a66e60c841fec0ccad8a->leave($__internal_24fc2413b5d476b64d8174f0674ce469173bbbbcb791a66e60c841fec0ccad8a_prof);

        
        $__internal_bd3b0645622d39e231727d4349fa933c461c7bae174f12ce98caea9178646613->leave($__internal_bd3b0645622d39e231727d4349fa933c461c7bae174f12ce98caea9178646613_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
